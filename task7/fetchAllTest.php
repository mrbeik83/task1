<?php
    include("fetchAll.php");
    
    $query = new FetchAll("localhost","store","mr_beik","0927193329");
    $query->fetchAsoc();

?>