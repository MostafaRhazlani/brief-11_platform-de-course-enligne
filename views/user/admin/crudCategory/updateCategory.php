<?php
    require_once __DIR__ . '/../../../../classes/Category.php';
    require_once __DIR__ . '/../../../../classes/Database.php';

    $db = new Database();
    $conn = $db->connect();

    
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $idCategory = $_POST['idCategory'];

        $category = new Category($conn, $idCategory);

        if($category->getId() === $idCategory) {
            $category->setNameCategory($_POST['nameCategory']);
            $category->updateCategoty();
            header('location: /views/user/admin/categories.php');
        } else {
            header('location: /views/user/admin/categories.php');
        }
    }


?>