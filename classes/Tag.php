<?php

    class Tag {
        private $id;
        private $nameTag;
        private $conn;
        private $errors;

        public function __construct($conn, $id = 0, $nameTag = '', $errors = [])
        {
            $this->id = $id;
            $this->nameTag = $nameTag;
            $this->conn = $conn;
            $this->errors = $errors;
        }

        public function getId() {
            return $this->id;
        }

        public function getNameTag() {
            return $this->nameTag;
        }

        public function setNameTag($nameTag) {
            if(empty($nameTag)) {
                $this->errors[] = 1;
            } else {
                $this->nameTag = $nameTag;
            }
        }

        public function getAllTags() {
            $sql = "SELECT * FROM tags ORDER BY ID DESC";
            $stmt = $this->conn->query($sql);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function createTag() {
            $sql = "INSERT INTO tags (nameTag) VALUES(?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $this->nameTag, PDO::PARAM_STR);

            if(count($this->errors) == 0) {
                return $stmt->execute();
            } else {
                header('location: /views/user/admin/tags.php');
            }
        }
    }
?>