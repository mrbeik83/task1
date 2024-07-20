<?php 
   include "../models/test.php" ;
   $info = new test();
    // print_r($info->fetchAll());
    // print_r($info->fetchById(1));
    // print_r($info->Load(1));
    print_r($info->loadOrCreat(2));

?>