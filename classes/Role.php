<?php
session_start();
    class Role {
        public static function admin() {
            if($_SESSION['user']['role'] !== 'admin') {
                header('location: /');
            }
        }
    }

?>