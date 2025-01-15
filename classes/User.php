<?php

    class User {
        protected $username;
        protected $firstName;
        protected $lastName;
        protected $email;
        protected $password;
        protected $role;
        protected $status;
        protected $image;
        protected $conn;

        public function __construct($conn, $username = "", $firstName = "", $lastName = "", $email = "", $password = "", $role = "", $status = "")
        {
            $this->username = $username;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
            $this->status = $status;
            $this->conn = $conn;
        }

        public function checkUsernameEmail() {
            $sql = "SELECT username, email FROM users";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        public function login() {
            $sql = "SELECT username, email, password, role, status FROM users WHERE username = '$this->username' OR email = '$this->email'";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);
        }
    }

?>