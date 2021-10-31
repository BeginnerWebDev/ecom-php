<?php
session_start();
if(isset($_SESSION["fullname"])){

	$_SESSION['fullname']='';
	$_SESSION['email']='';
	header('Location:../index.php');
}