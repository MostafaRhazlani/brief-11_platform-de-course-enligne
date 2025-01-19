<?php
    session_start();
    require_once __DIR__ . '/../../classes/Database.php';
    require_once __DIR__ . '/../../classes/Student_Course.php';

    $db = new Database();
    $conn = $db->connect();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idStudent = $_SESSION['user']['id'];
        $idCourse = $_POST['idCourse'];

        $buyCourse = new Student_Course($conn);
        $buyCourse->setIdStudent($idStudent);
        $buyCourse->setIdCourse($idCourse);

        if($buyCourse->insertPaidCourse()) {
            header('location: /views/courses/index.php');
        }
    }


?>