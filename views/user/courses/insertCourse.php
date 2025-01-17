<?php
session_start();
    require_once __DIR__ . '/../../../classes/Database.php';
    require_once __DIR__ . '/../../../classes/Cource.php';

    $db = new Database();
    $conn = $db->connect();

    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $course = new Course($conn);

        $course->setTitle($_POST['title']);
        $course->setTitleDescription($_POST['titleDescription']);
        $course->setDescription($_POST['description']);
        $course->setPrice($_POST['price']);
        $course->setStatusCourse(0);
        $course->setIdTeacher($_SESSION['user']['id']);
        $course->setIdCategory($_POST['idCategory']);
        $course->setPayStatus($_POST['payStatus']);
        $course->setImage($_FILES['imageCourse']['name']);
        $temp_name = $_FILES['imageCourse']['tmp_name'];
        $folder = "../../../assets/images/grid/". $course->getImage();

        if(move_uploaded_file($temp_name, $folder)) {
            if($course->createCourse()) {
                header('location: /views/user/courses/courses.php');
            }
        }
    }
?>