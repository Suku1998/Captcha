<?php
session_start();
$con=mysqli_connect('localhost','root','','captcha');
$name = $_POST['name'];
$email = $_POST['email'];
$dob = $_POST['dob'];
$details = $_POST['details'];
$captcha = $_POST['captcha'];
if($_SESSION['CODE']==$captcha){
	mysqli_query($con,"insert into enquiry(name,email,dob,details) values('$name','$email','$dob','$details')");
	echo " Successfully Submitted Thank you";
}else{
	echo "Please enter valid captcha code";
}
?>