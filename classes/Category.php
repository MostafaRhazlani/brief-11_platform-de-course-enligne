<?php

    class Category {
        private $id;
        private $nameCategory;
        private $conn;
        private $errors;

        public function __construct($conn, $id = 0, $nameCategory = '', $errors = [])
        {
            $this->id = $id;
            $this->nameCategory = $nameCategory;
            $this->conn = $conn;
            $this->errors = $errors;
        }

        public function getId() {
            return $this->id;
        }

        public function getNameCategory() {
            return $this->nameCategory;
        }

        public function setNameCategory($nameCategory) {
            if(empty($nameCategory)) {
                $this->errors[] = 1;
            } else {
                $this->nameCategory = $nameCategory;
            }
        }

        public function getAllCategories() {
            $sql = "SELECT * FROM categories";
            $stmt = $this->conn->query($sql);

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function createCategory() {
            $sql = "INSERT INTO categories (nameCategory) VALUES(?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $this->nameCategory, PDO::PARAM_STR);

            if(count($this->errors) == 0) {
                return $stmt->execute();
            } else {
                header('location: /views/user/admin/categories.php');
            }
        }

        public function updateCategoty() {
            $sql = "UPDATE categories SET nameCategory = ? WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $this->nameCategory, PDO::PARAM_STR);
            $stmt->bindValue(2, $this->id, PDO::PARAM_INT);
            
            if(count($this->errors) == 0) {
                return $stmt->execute();
            } else {
                header('location: /views/user/admin/categories.php');
            }
        }
    }
?>