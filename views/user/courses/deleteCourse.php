<?php
    require_once __DIR__ . '/../../../classes/Database.php';
    require_once __DIR__ . '/../../../classes/Cource.php';


    $db = new Database();
    $conn = $db->connect();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idCourse = $_POST['idCourse'];
        $course = new Course($conn, $idCourse);

        if($course->getId() === $idCourse) {
            $course->deleteCourse();
            header('location: /views/user/courses/courses.php');
        }
    }
?>