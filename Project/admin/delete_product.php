<?php
include("config1.php");

$query="delete from tblproduct where p_id=".$_GET['p_id'];
$result=mysqli_query($con,$query)or die(mysqli_error($con));;
if($result){
	header("location:product.php");
}else{
	echo "error".mysqli_error();
}
?>