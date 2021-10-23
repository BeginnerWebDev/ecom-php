<?php
include_once('../config/config.php');

$fname = mysqli_real_escape_string($con,$_POST['fname']);
$lname = mysqli_real_escape_string($con,$_POST['lname']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$password = md5($_POST['password']);
$address = mysqli_real_escape_string($con,$_POST['address']);
$status = 'active';

$insertuser = "INSERT INTO user(fname,lname,email,password,address,status) 
VALUES('{$fname}','{$lname}','{$email}','{$password}','{$address}','{$status}')";

if(mysqli_query($con,$insertuser)){
 echo 1;
}else{
 echo 0;
}

mysqli_close($con);
?>