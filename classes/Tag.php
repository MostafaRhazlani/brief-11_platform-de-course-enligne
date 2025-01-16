<?php

    class Tag {
        private $id;
        private $nameTag;
        private $conn;

        public function __construct($conn, $id = 0, $nameTag = '')
        {
            $this->id = $id;
            $this->nameTag = $nameTag;
            $this->conn = $conn;
        }

        public function getId() {
            return $this->id;
        }

        public function getNameTag() {
            return $this->nameTag;
        }

        public function setNameTag($nameTag) {
            $this->nameTag = $nameTag;
        }

        public function getAllTags() {
            $sql = "SELECT * FROM tags";
            $stmt = $this->conn->query($sql);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>