<?php
require_once("config1.php");
$id=$_POST['id'];
$query=mysqli_query($con,$query) or die(mysqli_error($con));
if($query){
	
	echo "value deleted";
}else{
	echo "error".mysqli_error();
}
?>