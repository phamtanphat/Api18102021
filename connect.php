<?php

    $hostName = "localhost";
    $userName = "root";
    $passWord = "";
    $databaseName = "databasemeal";

    $con = new mysqli($hostName,$userName,$passWord,$databaseName);
    $con->set_charset("utf8");

    
?>