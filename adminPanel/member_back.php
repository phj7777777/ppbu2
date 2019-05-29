<?php 

include "../php/db.php"; //include database
session_start();


$name =  mysqli_real_escape_string($con, $_POST['name']);
$icNo = mysqli_real_escape_string($con, $_POST['icNo']);
$houseNo = mysqli_real_escape_string($con, $_POST['houseNo']);
$road = mysqli_real_escape_string($con, $_POST['road']);
$sex = mysqli_real_escape_string($con, $_POST['sex']);
$typeofresidences = mysqli_real_escape_string($con, $_POST['typeofresidences']);
$phoneNo = mysqli_real_escape_string($con, $_POST['phoneNo']);
$email = mysqli_real_escape_string($con, $_POST['email']);

$sql = "INSERT INTO member (name,icNo,houseNo,road,sex,typeofresidences,phoneNo,email) VALUES
('$name','$icNo','$houseNo','$road','$sex','$typeofresidences','$phoneNo','$email')";


if(mysqli_query($con,$sql)){
    echo"Success";
}
else {
    echo"fail";
}




?>