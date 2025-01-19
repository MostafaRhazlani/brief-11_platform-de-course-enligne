<?php
    class Video {
        private $id;
        private $nameVideo = [];
        private $statusVideo;
        private $idCourse;
        private $conn;

        public function __construct($conn, $id = 0, $nameVideo = [], $statusVideo = 1, $idCourse = 0){
            $this->conn = $conn;
            $this->id = $id;
            $this->nameVideo = $nameVideo;
            $this->statusVideo = $statusVideo;
            $this->idCourse = $idCourse;
        }

        public function getId() {
            return $this->id;
        }

        public function getNameVideo() {
            return $this->nameVideo;
        }

        public function getStatusVideo() {
            return $this->statusVideo;
        }

        public function getIdCourse() {
            return $this->idCourse;
        }

        public function setNameVideo($nameVideo) {
            $this->nameVideo[] = $nameVideo;
        }

        public function setStatusVideo($statusVideo) {
            $this->statusVideo = $statusVideo;
        }

        public function setIdCourse($idCourse) {
            $this->idCourse = $idCourse;
        }

        public function getVideo() {
            $sql = "SELECT * FROM videos WHERE id = $this->id";
            $stmt = $this->conn->query($sql);
            return $stmt->fetch();
        }

        public function insertVideo() {
            $sql = "INSERT INTO videos (nameVideo, statusVideo, idCourse) VALUES(?,?,?)";
            
            // Loop through each uploaded file
            if($this->idCourse !== 0) {
                $stmt = $this->conn->prepare($sql);
                foreach ($_FILES['videos']['tmp_name'] as $key => $tempName) {
                    $videoName = $_FILES['videos']['name'][$key];
                    $fileSize = $_FILES['videos']['size'][$key];
                    
                    if ($fileSize < 50000000) {
                        $file = explode(".", $videoName);
                        $end = strtolower(end($file));
                        $fileName = basename($videoName, ".$end");
                        $allowed_ext = array("mp4", "webm", "ogg");
            
                        if (in_array($end, $allowed_ext)) {
                            $uniqueName = uniqid();
                            $location = __DIR__ . "/../assets/videos/" . $fileName . "_" . $uniqueName . "." . $end;
                            
                            $newName = $fileName . "_" . $uniqueName . "." . $end;

                            if (move_uploaded_file($tempName, $location)) {
                                // Insert data into the database
                                $stmt->bindValue(1, $newName, PDO::PARAM_STR);
                                $stmt->bindValue(2, $this->statusVideo, PDO::PARAM_BOOL);
                                $stmt->bindValue(3, $this->idCourse, PDO::PARAM_INT);
                                $stmt->execute();
                            } else {
                                return "Failed to move the uploaded file.";
                            }
                        } else {
                            return "File type not allowed.";
                        }
                    } else {
                        return "File size exceeds the 50MB limit.";
                    }
                }
            } else {
                return "error";
            }
        }

        public function getVideosCourse() {
            $sql = "SELECT * FROM videos WHERE idCourse = $this->idCourse";
            $stmt = $this->conn->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
        
    }

?>