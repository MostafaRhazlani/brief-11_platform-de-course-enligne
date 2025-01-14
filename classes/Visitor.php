<?php
    require __DIR__ . '/User.php';

    class Visitor extends User {

        public function __construct($conn, $username, $firstName, $lastName, $email, $password, $role, $status)
        {
            parent::__construct($conn, $username, $firstName, $lastName, $email, $password, $role, $status);
        }

        public function register() {
            $sql = "INSERT INTO users(username, firstName, lastName, email, password, role, status) VALUES(?,?,?,?,?,?,?)";
            $stmt = $this->conn->prepare($sql);

            $password_hash = password_hash($this->password, PASSWORD_BCRYPT);
            $stmt->bindValue(1, $this->username, PDO::PARAM_STR);
            $stmt->bindValue(2, $this->firstName, PDO::PARAM_STR);
            $stmt->bindValue(3, $this->lastName, PDO::PARAM_STR);
            $stmt->bindValue(4, $this->email, PDO::PARAM_STR);
            $stmt->bindValue(5, $password_hash, PDO::PARAM_STR);
            $stmt->bindValue(6, $this->role, PDO::PARAM_STR);
            $stmt->bindValue(7, $this->status, PDO::PARAM_BOOL);

            return $stmt->execute();
        }
    }

?>