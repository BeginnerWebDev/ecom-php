<?php
include_once('../db/config.php');



// $adminname = mysqli_real_escape_string($con, $_POST['adminname']);
// $adminemail = mysqli_real_escape_string($con, $_POST['adminemail']);
// $adminpassword = mysqli_real_escape_string($con, md5($_POST['adminpassword']));
$adminpassword = md5($_POST['adminpassword']);
$status = 'active';

// $sql = "INSERT INTO admin(fullname,email,password,status) VALUES('{$adminname}','{$adminemail}','{$adminpassword}','{$status}')";


// if (mysqli_query($con, $sql)) {
// 	echo 1;
// } else {
// 	echo 0;
// }

// mysqli_close($con);

$sql = $con->prepare("INSERT INTO admin(fullname,email,password,status) VALUES(?,?,?,?)");

$sql->bindParam(1, $_POST['adminname']);
$sql->bindParam(2, $_POST['adminemail']);
$sql->bindParam(3, $adminpassword);
$sql->bindParam(4, $status);

$result = $sql->execute();

echo $result;

if ($result == 1) {
	echo 1;
} else {
	echo 0;
}

$con = '';
