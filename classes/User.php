<?php
if(!isset($_SESSION)) {
    session_start();
}
    class User {
        protected $id;
        protected $username;
        protected $firstName;
        protected $lastName;
        protected $email;
        protected $password;
        protected $role;
        protected $status;
        protected $image;
        protected $conn;
        private $errors;

        public function __construct($conn, $id = 0, $username = "", $firstName = "", $lastName = "", $email = "", $password = "", $role = "", $status = "", $errors = [])
        {
            $this->id = $id;
            $this->username = $username;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
            $this->email = $email;
            $this->password = $password;
            $this->role = $role;
            $this->status = $status;
            $this->conn = $conn;
            $this->errors = $errors;
        }

        public function getId() {
            return $this->id;
        }

        public function getUsername() {
            return $this->username;
        }

        public function gatFirstName() {
            return $this->firstName;
        }

        public function getLastName() {
            return $this->lastName;
        }

        public function getEmail() {
            return $this->email;
        }

        public function getPassword() {
            return $this->password;
        }

        public function getRole() {
            return $this->role;
        }

        public function getStatus() {
            return $this->status;
        }

        public function setUsername($username) {
            if(preg_match("/^@[a-zA-Z]{4,}$/", $username) == 0) {
                $this->errors['username'] = 1;
                $_SESSION['validationUsername'] = 'username is short';
            } else {
                unset($_SESSION['validationUsername']);
            }
            $this->username = $username;
        }

        public function setFirstName($firstName) {
            if(preg_match("/^[a-zA-z]{4,}$/", $firstName) == 0) {
                $this->errors['firstName'] = 1;
                $_SESSION['validationFirstName'] = 'first name is short';
            } else {
                unset($_SESSION['validationFirstName']);
                // session_unset();
            }
            $this->firstName = $firstName;
        }

        public function setLastName($lastName) {
            if(preg_match("/^[a-zA-z]{4,}$/", $lastName) == 0) {
                $this->errors['lastName'] = 1;
                $_SESSION['validationLastName'] = 'last name is short';
            } else {
                unset($_SESSION['validationLastName']);

            }
            $this->lastName = $lastName;
        }

        public function setEmail($email) {
            if(preg_match("/^[a-zA-Z]+@([a-z]{2,}\.)+[a-z]{2,4}$/", $email) == 0) {
                $this->errors['email'] = 1;
                $_SESSION['validationEmail'] = 'Email has invalid form';
            } else {
                unset($_SESSION['validationEmail']);
            }
            $this->email = $email;
        }

        public function setPassword($password) {
            if(preg_match("/^(?=.*[A-Za-z]).{9,}$/", $password) == 0) {
                $this->errors['password'] = 1;
                $_SESSION['validationPassword'] = 'password must be more than 8 character';
            } else {
                unset($_SESSION['validationPassword']);
            }
            $this->password = $password;
        }

        public function setRole($role) {
            $this->role = $role;
        }

        public function setStatus($status) {
            $this->status = $status;
        }

        public function register() {
            $existUsernameOrEmail = $this->checkInfoUser($this->email, $this->username);

            if($existUsernameOrEmail) {
                if($existUsernameOrEmail['username'] === $this->username) {
                    $this->errors['existUsername'] = 1;
                    $_SESSION['existUsername'] = 'username is already exist';
                } else {
                    unset($_SESSION['existUsername']);
                }

                if($existUsernameOrEmail['email'] === $this->email) {
                    $this->errors['existEmail'] = 1;
                    $_SESSION['existEmail'] = 'email is already exist';
                } else {
                    unset($_SESSION['existEmail']);
                }

            }

            if($this->getPassword() !== $_POST['confirm_password']) {
                $this->errors['invalidPassword'] = 1;
                $_SESSION['invalidPassword'] = 'password and confirm password must be have same value';
            } else {
                unset($_SESSION['invalidPassword']);
            }

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

            if(count($this->errors) == 0) {
                return $stmt->execute();
            } else {
                header('location: ../auth/register.php');
            }
        }

        public function checkInfoUser($email, $username) {
            $sql = "SELECT * FROM users WHERE email = '$email' OR username = '$username'";
            $result = $this->conn->query($sql);
            return $result->fetch(PDO::FETCH_ASSOC);
        }

        public function login() {
            $check = $this->checkInfoUser($this->email, "");
            if(!$check) {
                $this->errors['invalidEmailPassword'] = 1;
                $_SESSION['invalidEmailPassword'] = 'email or password is not correct';
            }

            if(!password_verify($this->password, $check['password'])) {
                $this->errors['invalidEmailPassword'] = 1;
                $_SESSION['invalidEmailPassword'] = 'email or password is not correct';
            }

            if(count($this->errors) === 0) {
                if($check['status'] === 1) {
                    $_SESSION['user'] = $check;
                    if($check['role'] === "admin") {
                        header('location: /views/user/admin/dashboard.php');
                    } else if($check['role'] === "teacher") {
                        header('location: /views/user/teacher/dashboard.php');
                    } else {
                        header('location: /viwes/home/index.php');
                    }
                    unset($_SESSION['notAccept']);
                    return true;
                } else {
                    $_SESSION['notAccept'] = "The admin has not accepted you yet";
                    header('location: ../auth/login.php');
                }
            } else {
                header('location: ../auth/login.php');
            }
        }

        public function getUsers() {
            $sql = "SELECT * FROM users WHERE role = '$this->role'";
            $stmt = $this->conn->query($sql);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        }
    }

?>