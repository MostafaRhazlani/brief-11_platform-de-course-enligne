<?php
    require_once __DIR__ . '/../../../../classes/Tag.php';
    require_once __DIR__ . '/../../../../classes/Database.php';

    $db = new Database();
    $conn = $db->connect();

    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idTag = $_POST['idTag'];

        $tag = new Tag($conn, $idTag);

        if($tag->getId() === $idTag) {
            $tag->setNameTag($_POST['nameTag']);
            $tag->updateTag();
            header('location: /views/user/admin/tags.php');
        } else {
            header('location: /views/user/admin/tags.php');
        }
    }


?>