<?php
session_start();
    require_once __DIR__ . '/../../../classes/Database.php';
    require_once __DIR__ . '/../../../classes/Cource.php';
    require_once __DIR__ . '/../../../classes/Video.php';
    require_once __DIR__ . '/../../../classes/Tags_Courses.php';

    $db = new Database();
    $conn = $db->connect();

    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $course = new Course($conn);
        $video = new Video($conn);
        $tags_courses = new Tags_Courses($conn);
        
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
                $lastCourse = $course->lastCourseAdded();
                if($lastCourse) {
                    $video->setIdCourse($lastCourse);
                    $tags_courses->setIdCourse($lastCourse);
                    $tags_courses->setIdTag($_POST['idTag']);

                    $tags_courses->insertTagsOFCourse();
                    $video->insertVideo();
                    header('location: /views/user/courses/courses.php');
                } else {
                    header('location: /views/user/courses/createCourse.php');
                }
            } else {
                header('location: /views/user/courses/createCourse.php');
            }
        } else {
            header('location: /views/user/courses/createCourse.php');
        }
    }
?>