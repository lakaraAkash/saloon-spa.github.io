<?php
include("config1.php");

$query="delete from shop_brand where id=".$_GET['brand_id'];
$result=mysqli_query($con,$query)or die(mysqli_error($con));;
if($result){
	header("location:shop_brand.php");
}else{
	echo "error".mysqli_error();
}
?>