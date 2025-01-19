<?php
    class Student_Course {
        private $idStudent;
        private $idCourse;
        private $idTeacher;
        private $conn;

        public function __construct($conn, $idStudent = 0, $idCourse = 0, $idTeacher = 0) {
            $this->idStudent = $idStudent;
            $this->idCourse = $idCourse;
            $this->idTeacher = $idTeacher;
            $this->conn = $conn;
        }

        public function getIdStudent() {
            return $this->idStudent;
        }

        public function getIdCourse() {
            return $this->idCourse;
        }

        public function getIdTeacher() {
            return $this->idTeacher;
        }

        public function setIdStudent($idStudent) {
            $this->idStudent = $idStudent;
        }

        public function setIdCourse($idCourse) {
            $this->idCourse = $idCourse;
        }

        public function setIdTeacher($idTeacher) {
            $this->idTeacher = $idTeacher;
        }

        public function insertPaidCourse() {
            $sql = "INSERT INTO students_courses (idStudent, idCourse, idTeacher) VALUES (?,?,?)";
            $stmt = $this->conn->prepare($sql);
            $stmt->bindValue(1, $this->idStudent, PDO::PARAM_INT);
            $stmt->bindValue(2, $this->idCourse, PDO::PARAM_INT);
            $stmt->bindValue(3, $this->idTeacher, PDO::PARAM_INT);

            return $stmt->execute();
        }

        public function getPaidCourse() {
            $sql = "SELECT * FROM students_courses WHERE idStudent = $this->idStudent AND idCourse = $this->idCourse";
            $stmt = $this->conn->query($sql);

            return $stmt->fetch();
        }

        public function totalEnrolledStudents() {
            $sql = "SELECT count(*) FROM students_courses WHERE idCourse = $this->idCourse";
            $stmt = $this->conn->query($sql);
            return $stmt->fetchColumn();
        }
    }

?>