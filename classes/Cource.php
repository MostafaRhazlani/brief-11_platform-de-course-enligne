<?php 
    class Course {
        private $id;
        private $title;
        private $titleDescription;
        private $description;
        private $price;
        private $statusCourse;
        private $idTeacher;
        private $idCategory;
        private $image;
        private $payStatus;
        private $conn;
        private $errors;

        public function __construct($conn, $id = 0, $title = "", $titleDescription = "", $description = "", $price = "", $statusCourse = "", $idTeacher = "", $idCategory = "", $image = "", $payStatus = "") {
            $this->conn = $conn;
            $this->id = $id;
            $this->title = $title;
            $this->titleDescription = $titleDescription;
            $this->description = $description;
            $this->price = $price;
            $this->statusCourse = $statusCourse;
            $this->idTeacher = $idTeacher;
            $this->idCategory = $idCategory;
            $this->image = $image;
            $this->payStatus = $payStatus;
        }

        public function getId() {
            return $this->id;
        }

        public function getTitle() {
            return $this->title;
        }

        public function getTitleDescription() {
            return $this->titleDescription;
        }

        public function getDescription() {
            return $this->description;
        }

        public function getPrice() {
            return $this->price;
        }

        public function getStatusCourse() {
            return $this->statusCourse;
        }

        public function getIdTeacher() {
            return $this->idTeacher;
        }

        public function getIdCategory() {
            return $this->idCategory;
        }

        public function getImage() {
            return $this->image;
        }

        public function getPayStatus() {
            return $this->payStatus;
        }

        public function setTitle($title) {
            $this->title = $title;
        }

        public function setTitleDescription($titleDescription) {
            $this->titleDescription = $titleDescription;
        }

        public function setDescription($description) {
            $this->description = $description;
        }

        public function setPrice($price) {
            $this->price = $price;
        }

        public function setStatusCourse($statusCourse) {
            $this->statusCourse = $statusCourse;
        }

        public function setIdTeacher($idTeacher) {
            $this->idTeacher = $idTeacher;
        }

        public function setIdCategory($idCategory) {
            $this->idCategory = $idCategory;
        }

        public function setImage($image) {
            $this->image = $image;
        }
        
        public function setPayStatus($payStatus) {
            $this->payStatus = $payStatus;
        }

        public function getCourses() {

            $sql = "SELECT courses.*, nameCategory, firstName, lastName, imageProfile
                    FROM courses 
                    JOIN categories 
                    ON categories.id = courses.idCategory
                    JOIN users ON users.id = courses.idTeacher";
            $stmt = $this->conn->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function getCoursesByStatus() {

            $sql = "SELECT courses.*, nameCategory, firstName, lastName, imageProfile
                    FROM courses 
                    JOIN categories 
                    ON categories.id = courses.idCategory
                    JOIN users 
                    ON users.id = courses.idTeacher 
                    WHERE statusCourse = '$this->statusCourse'";
            $stmt = $this->conn->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }

        public function createCourse() {
            $sql = "INSERT INTO courses(title, titleDescription, description, price, statusCourse, idTeacher, idCategory, image, payStatus) VALUES(?,?,?,?,?,?,?,?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $this->title, PDO::PARAM_STR);
            $stmt->bindValue(2, $this->titleDescription, PDO::PARAM_STR);
            $stmt->bindValue(3, $this->description, PDO::PARAM_STR);
            $stmt->bindValue(4, $this->price, PDO::PARAM_INT);
            $stmt->bindValue(5, $this->statusCourse, PDO::PARAM_BOOL);
            $stmt->bindValue(6, $this->idTeacher, PDO::PARAM_INT);
            $stmt->bindValue(7, $this->idCategory, PDO::PARAM_INT);
            $stmt->bindValue(8, $this->image, PDO::PARAM_STR);
            $stmt->bindValue(9, $this->payStatus, PDO::PARAM_BOOL);

            return $stmt->execute();
        }

        public function acceptCourse() {
            $sql = "UPDATE courses SET statusCourse = ? WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $this->statusCourse, PDO::PARAM_BOOL);
            $stmt->bindValue(2, $this->id, PDO::PARAM_INT);
            return $stmt->execute();
        }

        public function deleteCourse() {
            $sql = "DELETE FROM courses WHERE id = ?";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $this->id, PDO::PARAM_INT);
            return $stmt->execute();
        } 
    }

?>