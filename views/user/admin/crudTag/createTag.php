<?php
    require_once __DIR__ . '/../../../../classes/Tag.php';
    require_once __DIR__ . '/../../../../classes/Database.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $db = new Database();
        $conn = $db->connect();

        $category = new Tag($conn);
        $category->setNameTag($_POST['nameTag']);

        if($category->createTag()) {
            header('location: /views/user/admin/tags.php');
        }
    }

?>