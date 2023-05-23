<?php

session_start();

function checkLogin(){
    $Username = $_POST["username"];
    $Password = $_POST["password"];
    if (isset($Username) && isset($Password)) {
        if ($Username == "user" && $Password == "admin") {
            $_SESSION['user'] = true;
            header("Location: /updatepage.php");
            exit();
        } else {
            $msg = "Username or password is incorrect";
            return $msg;
        }
    }
}