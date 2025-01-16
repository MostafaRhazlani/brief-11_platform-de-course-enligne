<?php 
    require_once __DIR__ . '/../../../../classes/Database.php';
    require_once __DIR__ . '/../../../../classes/Tag.php';

    $db = new Database();
    $conn = $db->connect();

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idTag = $_POST['idTag'];

        $tag = new Tag($conn, $idTag);
        
        if($tag->getId() === $idTag) {
            $tag->deleteTag();
            header('location: /views/user/admin/tags.php');
        } else {
            header('location: /views/user/admin/tags.php');
        }
    }

?>