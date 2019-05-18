<?php
    error_reporting(E_ERROR | E_WARNING | E_PARSE);
    session_start();
    
    if($_SESSION['logged_in'] == ""){
        $_SESSION['logged_in'] = "";
        
    }
    //this is how we'll know the user is logged in
    $conn_error = 'Could not connect ';
    $mysql_host = 'localhost';
    $mysql_user = 'root';
    $mysql_pass = '';
    $mysql_db = 'ppbu2';


    $con = mysqli_connect($mysql_host,$mysql_user,$mysql_pass,$mysql_db); //all connection will use $con

    if(!$con){
        die($conn_error);
        echo "fail to connect into database";
    }
    else{
        
        echo "success";
    }
 
?>