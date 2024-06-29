<?php
    //     $servername = "localhost";
    //     $username = "mr_beik";
    //     $password = "0927193329";
    //     $conn = new PDO("mysql:host=$servername;dbname=store", $username, $password);

    //     try {
    //     // set the PDO error mode to exception
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     echo "Connected successfully"."<hr>";
    //     } catch(PDOException $e) {
    //     echo "Connection failed: " . $e->getMessage();
    // }
    class Db_connect{

        public $servername ;
        public $dbname ;
        public $username ;
        public $password ;
        public $conn ;
        public function __construct($servername,$dbname, $username, $password){
            $this->servername = $servername;
            $this->dbname = $dbname;
            $this->username = $username;
            $this->password = $password;
            $this->conn = new PDO("mysql:host=$servername;dbname=$dbname", $username,$password);
        }
        public function getCoon(){
            return $this->conn;
        }

        
    }
    
?>
