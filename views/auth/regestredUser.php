<?php
require __DIR__ . '/../../classes/Database.php';
require __DIR__ . '/../../classes/User.php';


if($_SERVER['REQUEST_METHOD'] === 'POST') {

    $db = new Database();
    $conn = $db->connect();

    $user = new User($conn);
    $user->setEmail($_POST['email']);
    $user->setPassword($_POST['password']);
    $user->login();
}

?>