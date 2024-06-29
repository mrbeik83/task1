<?php
    include("insertDb.php");
    $insert = new InsertDb("localhost","store","mr_beik","0927193329");
    $insert->insert($_POST["productName"],$_POST["material"],$_POST["width"],$_POST["number"],$_POST["price"]);
?>