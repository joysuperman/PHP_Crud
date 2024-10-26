<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', 'admin');
    define('DATABASE', 'php_crud');
    date_default_timezone_set("Asia/Dhaka");

    class Database{
        public $host = HOST;
        public $user = USER;
        public $password = PASSWORD;
        public $database = DATABASE;


        public  $link;
        public $error;

        public function __construct(){
            $this-> dbconnect();
        }
        public  function dbconnect(){
            $this->link = mysqli_connect($this->host, $this->user, $this->password, $this->database);
            if (!$this->link){
                $this->error = "Database Connection Failed!";
                return false;
            }return true;
        }

        public function insert($query){
            $result = mysqli_query($this->link, $query) or dir($this->link->error.__LINE__);
            if ($result){
                return $result;
            }else{
                return false;
            }
        }

    }
?>