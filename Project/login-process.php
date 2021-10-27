<?php
require_once("config1.php");
$con=mysqli_connect("localhost","root","","salon_db");
if(!$con)
{
	die("error");
}

if(isset($_POST['login']))

{
	$email=$_POST['email'];
	$password=$_POST['password'];
	$query="SELECT email, password FROM `client_registration` WHERE email='$email' and password='$password'";
	$result=mysqli_query($con,$query)or die(mysqli_error($con));;
	while($row=mysqli_fetch_assoc($result))
	//$count=mysqli_num_rows($result);
	if(mysqli_num_rows($result)==1){
		echo "if";
		$_SESSION['email']=$email;?>
		<script> alert('Login Sucessfully...'); </script>  <?php//header("location:index.php"); 
	}
	else?>
	{ 
		<script> alert('Email Or Password Are Incorrect...'); </script> <?php
		echo "error".mysqli_error();
	}
}
?>