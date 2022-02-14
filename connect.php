<?php

    $hostName = "localhost";
    $userName = "root";
    $passWord = "";
    $databaseName = "databasemeal";

    $con = new mysqli($hostName,$userName,$passWord,$databaseName);

    if($con->connect_errno){
        echo $con -> connect_error;
    }else{
        echo "Thành công";
    }

    
?>