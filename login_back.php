<?php
session_start();
require "php/db.php";
/*
user login process
check if user is exists and password verification in the database
*/

//escape username to rpotext against SQL injections
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);

$admin_result = mysqli_query($con,"SELECT * FROM  admin WHERE email='$email' AND password='$password'");
$row = mysqli_fetch_array($admin_result, MYSQLI_ASSOC);
$queryResult = mysqli_num_rows($admin_result);
if($queryResult > 0){
    $_SESSION['username'] = $row['username'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['admin_logged_in'] = "login";//this is how we'll know the user is logged in
    $ID = $_SESSION['id'];
    header("Location:adminPanel/" );
    exit();
}


?>