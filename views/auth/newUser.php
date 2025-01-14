<?php
    require_once __DIR__ . '/../../classes/Visitor.php';
    require_once __DIR__ . '/../../classes/Database.php';

    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm_password'];
        $role = $_POST['role'];
        $status = 1;
        $errors = [];

        $db = new Database();
        $conn = $db->connect();

        $user = new User($conn);
        $checkUsernameEmail = $user->checkUsernameEmail();

        if($username === $checkUsernameEmail['username'] || $email === $checkUsernameEmail['email']) {
            $errors[] = 1;
        }

        if(empty($username) || empty($firstName) || empty($lastName) || empty($email) || empty($password) || empty($confirm_password)) {
            $errors[] = 1;
        }


        if($password !== $confirm_password) {
            $errors[] = 1;
        }

        if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors[] = 1;
        }

        if(count($errors) === 0) {
            if($role === 'teacher') {
                $status = 0;
            }
            
            $visitor = new Visitor($conn, $username , $firstName, $lastName, $email, $password, $role, $status);
            $register = $visitor->register();

            if($register) {
                header('location: login.php');
            }
        } else {
            header('location: register.php');
        }
    }

?>