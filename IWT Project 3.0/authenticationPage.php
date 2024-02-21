<?php

    include('connectionPage.php');

    $username = $_POST['email'];
    $password = $_POST['password'];

    //prevent from MYSQLI injection
        $username = stripcslashes($username);
        $password = stripcslashes($password);
        $username = mysqli_real_escape_string($con,$username);
        $password = mysqli_real_escape_string($con,$password);


        $sql = "select * from user_list where email = '$username' and password = '$password'";
        $result = mysqli_query ($con, $sql);
        $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
        $count  = mysqli_num_rows($result);

        if($count == 1){
            if($row['user_type'] == "examiner"){
                header("location:examinerpage.html"); 

            }
            elseif($row['user_type'] == "employee"){
                header("location:employeePage.html");
            }
            elseif($row['user_type'] == "manager"){
                header("location:managerPage.html");
                
            }

        }
        else{
            echo "<h1> Login failed. Invalid username or password.</h1>";

        }

?>