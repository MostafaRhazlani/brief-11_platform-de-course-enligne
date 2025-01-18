<?php 
    class Tags_Courses {
        private $idTag = [];
        private $idCourse;
        private $conn;

        public function __construct($conn, $idTag = [], $idCourse = 0) {
            $this->conn = $conn;
            $this->idTag = $idTag;
            $this->idCourse = $idCourse;
        }

        public function getIdTag() {
            return $this->idTag;
        }

        public function getIdCourse() {
            return $this->idCourse;
        }

        public function setIdTag($idTag) {
            if (is_array($idTag)) {
                $this->idTag = $idTag;
            } else {
                $this->idTag[] = $idTag;
            }
        }
        
        
        public function setIdCourse($idCourse) {
            $this->idCourse = $idCourse;
        }

        public function getTagsCourse() {
            $sql = "SELECT * FROM tags_courses 
                    JOIN tags ON tags.id = tags_courses.idTag 
                    WHERE idCourse = $this->idCourse";
            $stmt = $this->conn->query($sql);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function insertTagsOFCourse() {
            $sql = "INSERT INTO tags_courses (idCourse, idTag) VALUES(?,?)";
            $stmt = $this->conn->prepare($sql);
            foreach($this->idTag as $tag) {
                $stmt->bindValue(1, $this->idCourse, PDO::PARAM_INT);
                $stmt->bindValue(2, $tag, PDO::PARAM_INT);
                $stmt->execute();
            }
        }
    }

?>