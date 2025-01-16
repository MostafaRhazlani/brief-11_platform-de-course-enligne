<?php
    require_once __DIR__ . '/../../../../classes/Category.php';
    require_once __DIR__ . '/../../../../classes/Database.php';
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $db = new Database();
        $conn = $db->connect();

        $category = new Category($conn);
        
        $category->setNameCategory($_POST['nameCategory']);

        if($category->createCategory()) {
            header('location: /views/user/admin/categories.php');
        }
    }

?>