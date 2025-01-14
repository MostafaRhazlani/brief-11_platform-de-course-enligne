<?php 
    require_once __DIR__ . '/../infodb.php';
    class Database {
        private $servername = DB_HOST;
        private $username = DB_USER;
        private $password = DB_PASSWORD;
        private $dbname = DB_NAME;
        private $conn;

        public function connect() {
            try {
                $this->conn  = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password);

                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
            } catch (PDOException $error) {
                echo "Connection failed:" . $error->getMessage();
            }

            return $this->conn;
        }
    }

?>