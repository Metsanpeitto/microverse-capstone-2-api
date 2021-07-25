<!--                      REMEMBER !!!!
        This file must be place outside of the public folder.
    Create a separated folder called config and place it in there.
-->
<?php 
    class Database {
        private $host = "127.0.0.1";
        private $database_name = "waldwuai_Menu";
        private $username = "waldwuai_root";
        private $password = "type your password here";

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