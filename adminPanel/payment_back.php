<?php

include "../php/db.php"; // incldue database
session_start();

$houseNo =  mysqli_real_escape_string($con, $_POST['houseNo']);
$road =  mysqli_real_escape_string($con, $_POST['road']);
$car_sticker =  mysqli_real_escape_string($con, $_POST['car_sticker']);
$gate_key =  mysqli_real_escape_string($con, $_POST['gate_key']);
$donation = mysqli_real_escape_string($con, $_POST['donation']);
$payment_method =  mysqli_real_escape_string($con, $_POST['payment_method']);
$bank =  mysqli_real_escape_string($con, $_POST['bank']);
$cheque_no =  mysqli_real_escape_string($con, $_POST['cheque_no']);
$amount =  mysqli_real_escape_string($con, $_POST['amount']);
$transaction_date =  mysqli_real_escape_string($con, $_POST['transaction_date']);



$sql = "INSERT INTO payment VALUES  ('$houseNo','$road','$car_sticker','$gate_key','$donation','$payment_method','$bank','$cheque_no','$amount','$transaction_date')";
    
	//successfully added
	if(mysqli_query($con,$sql)){
        echo"Success";
        
         
    }else{
        

    }

?>