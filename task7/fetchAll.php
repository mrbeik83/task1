<?php  
    include("db_connect.php");
    class FetchAll extends Db_connect{
        public function fetchAsoc(){
            $qu = $this->conn->query("SELECT * FROM kala");
            while ($row = $qu->fetch(PDO::FETCH_ASSOC)) {
                echo "<pre>" .print_r($row) . "</pre>";
            }
        }
    }
    
    
?>