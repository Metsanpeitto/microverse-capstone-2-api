<?php 
    class Database {
        private $host = "127.0.0.1";
        private $database_name = "waldwuai_Menu";
        private $username = "waldwuai_root";
        private $password = "123456mysql";

        public $conn;

        public function getConnection(){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->database_name, $this->username, $this->password);
                $this->conn->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Database could not be connected: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }  
?>