<?php
    require_once __DIR__ . '/User.php';
    class Teacher extends User {
        private $experience;
        private $teacherDescription;

        public function __construct($conn, $id = 0, $username = "", $firstName = "", $lastName = "", $email = "", $password = "", $role = "", $status = "", $image = "", $experience = "", $teacherDescription = "") 
        {
            parent::__construct($conn, $id, $username, $firstName, $lastName, $email, $password, $role, $status, $image);
            $this->experience = $experience;
            $this->teacherDescription = $teacherDescription;
        }

        public function getExperience() {
            return $this->experience;
        }

        public function getTeacherDescription() {
            return $this->teacherDescription;
        }

        public function setExperience($experience) {
            $this->experience = $experience;
        }

        public function setTeacherDescription($teacherDescription) {
            $this->teacherDescription = $teacherDescription;
        }

        public function getStudentsTeacher() {
            $sql = "SELECT distinct students_courses.idStudent, students_courses.idTeacher, users.firstName, users.lastName, users.username, users.imageProfile from students_courses
                    join users on users.id = students_courses.idStudent
                    where idTeacher = $this->id";
            $stmt = $this->conn->query($sql);
            return $stmt->fetchAll();
        }
    }


?>