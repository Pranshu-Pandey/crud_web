<?php
    error_reporting(0);
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "crud_web";

    $mysql = @mysqli_connect($servername,$username,$password,$dbname);

    if(mysql){
        echo "Connection ok";
    }
    else{
        echo "Failed";
    }
?>