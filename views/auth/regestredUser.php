<?php 
session_start();
require __DIR__ . '/../../classes/Database.php';
require __DIR__ . '/../../classes/User.php';


if($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $errors = [];

    $db = new Database();
    $conn = $db->connect();

    $user = new User($conn, "", "", "", $email, $password);
    $existUser = $user->login();

    if($email !== $existUser['email']) {
        $errors[] = 1;
    }

    if(empty($email) || empty($password)) {
        $errors[] = 1;
    }
    
    if(!password_verify($password, $existUser['password'])) {
        $errors[] = 1;
    }

    if(count($errors) === 0) {
        if($existUser['status'] === 1) {
            $_SESSION['user'] = $existUser['id'];
            if($existUser['role'] === 'admin') {
                header('location: /views/admin/dashboard.php');
            } else if($existUser['role'] === 'teacher') {
                header('location: /views/teacher/dashboard.php');
            } else {
                header('location: /viwes/home/index.php');
            }
        } else {
            header('location: login.php');
        }
    } else {
        header('location: login.php');
    }
}

?>