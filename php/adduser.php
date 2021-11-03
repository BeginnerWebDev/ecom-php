<?php
include_once('../config/config.php');

// $fname = mysqli_real_escape_string($con,$_POST['fname']);
// $lname = mysqli_real_escape_string($con,$_POST['lname']);
// $email = mysqli_real_escape_string($con,$_POST['email']);
// $password = md5($_POST['password']);
// $address = mysqli_real_escape_string($con,$_POST['address']);
// $status = 'active';

// $insertuser = "INSERT INTO user(fname,lname,email,password,address,status) 
// VALUES('{$fname}','{$lname}','{$email}','{$password}','{$address}','{$status}')";


$password = md5($_POST['password']);
$status = "active";

$sql = $con->prepare("INSERT INTO user(fname,lname,email,password,address,status) VALUES(?,?,?,?,?,?)");
$sql->bindParam(1, $_POST['fname']);
$sql->bindParam(2, $_POST['lname']);
$sql->bindParam(3, $_POST['email']);
$sql->bindParam(4, $password);
$sql->bindParam(5, $_POST['address']);
$sql->bindParam(6, $status);


$result = $sql->execute();

if ($result == 1) {
    echo 1;
} else {
    echo 0;
}
