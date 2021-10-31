<?php
include_once('../db/config.php');



$adminname = mysqli_real_escape_string($con, $_POST['adminname']);
$adminemail = mysqli_real_escape_string($con, $_POST['adminemail']);
$adminpassword = mysqli_real_escape_string($con, md5($_POST['adminpassword']));
$status = 'active';

$sql = "INSERT INTO admin(fullname,email,password,status) VALUES('{$adminname}','{$adminemail}','{$adminpassword}','{$status}')";


if (mysqli_query($con, $sql)) {
	echo 1;
} else {
	echo 0;
}

mysqli_close($con);
