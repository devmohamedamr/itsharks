<?php
session_start();

// login logic


$usernamedb = "mohamed";
$passworddb = 123;




if($_POST['username'] == $usernamedb && $_POST['password'] == $passworddb){
    // echo "success";

    $_SESSION['user'] = $usernamedb;
    header("location: home.php");
}else{
    
    header("location: index.html");
    
}