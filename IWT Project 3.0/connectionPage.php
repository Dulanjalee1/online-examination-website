<?php

    $host = "localhost";
    $user = "root" ;
    $pass = '';
    $db_name = "login_db" ;

    $con = mysqli_connect($host,$user,$pass,$db_name);
    if(mysqli_connect_errno()) {
        die("Failed to connect with MYSQL".mysqli_connect_error());
    }

?>