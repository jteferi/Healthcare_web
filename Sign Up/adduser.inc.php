<?php

include_once './dbh.inc.php';

        $name  = $_POST['name'];
        $email  = $_POST['email'];
        $password  = $_POST['password'];
        $key  = $_POST['key'];

        if(empty($name) || empty($email) || empty($password) || empty($key) || $key!=1234){
                
        }
        else{
                $sql = "INSERT INTO Staff (Name, Email, Password) VALUES ('$name', '$email', '$password');";
            
                mysqli_query($conn, $sql);

        }      

header("Location: signup.html");
?>