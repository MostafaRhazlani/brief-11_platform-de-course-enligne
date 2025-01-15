<?php
    require_once __DIR__ . '/../../classes/User.php';
    require_once __DIR__ . '/../../classes/Database.php';

    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {

        $db = new Database();
        $conn = $db->connect();

        $user = new User($conn);

        $user->setUsername($_POST['username']);
        $user->setFirstName($_POST['firstName']);
        $user->setLastName($_POST['lastName']);
        $user->setPassword($_POST['password']);
        $user->setEmail($_POST['email']);
        $user->setRole($_POST['role']);
        if($user->getRole() === "teacher") {
            $user->setStatus(0);
        } else {
            $user->setStatus(1);
        }
        $register = $user->register();

        if($register) {
            header('location: login.php');
        }
    }

?>