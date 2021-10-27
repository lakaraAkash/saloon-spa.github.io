<?php
include("config1.php");

$query="delete from tblsize where s_id=".$_GET['size_id'];
$result=mysqli_query($con,$query)or die(mysqli_error($con));;
if($result){
	header("location:size.php");
}else{
	echo "error".mysqli_error();
}
?>