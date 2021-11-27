<?php
include_once('../db/config.php');
session_start();

// $email = mysqli_real_escape_string($con,$_POST['email']);
// $password = mysqli_real_escape_string($con,md5($_POST['password']));

// $checksql = "SELECT email,fullname FROM admin WHERE email = '{$email}' AND password = '{$password}' AND status = 'active'";

// $result = mysqli_query($con,$checksql) or die('Query Failed');
// $row_res=mysqli_fetch_assoc($result);
// if(mysqli_num_rows($result)){
// 	$_SESSION['email']=$row_res['email'];
//     $_SESSION['fullname']=$row_res['fullname'];
// 	echo 1;

// }else{
// 	echo 0;
// }

// mysqli_close($con);

$status = 'active';

$checksql =  $con->prepare("SELECT email,fullname FROM admin WHERE email = ? AND password = ? AND status = ?");
$checksql1 =  $con->prepare("SELECT email,fullname FROM admin");
$checksql->bindParam(1, $_POST['email']);
$checksql->bindParam(2, $_POST['password']);
$checksql->bindParam(3, $status);
$result = $checksql->execute();
$checksql1->execute();
$users = $checksql1->fetchAll();
	
if ($result == 1) {
	
	foreach($users as $user) 
 {  

	 $fullname=$user['fullname'];
     $email=$user['email'];

 }
	 
	 $_SESSION['email'] = $email;
	 $_SESSION['fullname'] = $fullname;
	echo 1;
} else {
	echo 0;
}

$con = '';
