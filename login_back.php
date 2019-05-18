<?php
session_start();
require "php/db.php";



/*
admin login process
check if user is exists and password verification in the database
*/



//escape username to rpotext against SQL injections
$email = mysqli_real_escape_string($con, $_POST['email']);
$password = mysqli_real_escape_string($con, $_POST['password']);




//check if the account is valid
$admin_result = mysqli_query($con,"SELECT * FROM  admin WHERE email='$email' AND password='$password'");
$row = mysqli_fetch_array($admin_result, MYSQLI_ASSOC);
$queryResult = mysqli_num_rows($admin_result);

if($queryResult > 0){
    $_SESSION['admin_name'] = $row['username'];
    $_SESSION['admin_email'] = $row['admin_email'];
    header("Location:index.php" );
    exit();
    
}

    
       


?>