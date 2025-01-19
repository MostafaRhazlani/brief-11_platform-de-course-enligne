<?php
    class Student_Course {
        private $idStudent;
        private $idCourse;
        private $conn;

        public function __construct($conn, $idStudent = 0, $idCourse = 0) {
            $this->idStudent = $idStudent;
            $this->idCourse = $idCourse;
            $this->conn = $conn;
        }

        public function getIdStudent() {
            return $this->idStudent;
        }

        public function getIdCourse() {
            return $this->idCourse;
        }

        public function setIdStudent($idStudent) {
            $this->idStudent = $idStudent;
        }

        public function setIdCourse($idCourse) {
            $this->idCourse = $idCourse;
        }

        public function insertPaidCourse() {
            $sql = "INSERT INTO students_courses (idStudent, idCourse) VALUES (?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $this->idStudent, PDO::PARAM_INT);
            $stmt->bindValue(2, $this->idCourse, PDO::PARAM_INT);

            return $stmt->execute();
        }

        public function getPaidCourse() {
            $sql = "SELECT * FROM students_courses WHERE idStudent = $this->idStudent";
            $stmt = $this->conn->query($sql);

            return $stmt->fetch();
        }
    }

?>