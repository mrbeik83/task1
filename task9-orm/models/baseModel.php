<?php 
include "redbean/rb.php";
    class BaseModel{
        function connectDb(){
            R::setup('mysql:host=localhost;dbname=product', 'root', '');
        }
        function dcConnectDbDB()
        {
            R::close();
        }
    }
?>