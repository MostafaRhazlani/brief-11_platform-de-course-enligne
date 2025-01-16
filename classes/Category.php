<?php

    class Category {
        private $id;
        private $nameCategory;
        private $conn;

        public function __construct($conn, $id = 0, $nameCategory = '')
        {
            $this->id = $id;
            $this->nameCategory = $nameCategory;
            $this->conn = $conn;
        }

        public function getId() {
            return $this->id;
        }

        public function getNameCategory() {
            return $this->nameCategory;
        }

        public function setNameCategory($nameCategory) {
            $this->nameCategory = $nameCategory;
        }

        public function getAllCategories() {
            $sql = "SELECT * FROM categories";
            $stmt = $this->conn->query($sql);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }
?>