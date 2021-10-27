<?php
include("config1.php");

$query="delete from category where category_id=".$_GET['category_id'];
$result=mysqli_query($con,$query)or die(mysqli_error($con));;
if($result){
	header("location:shop_category.php");
}else{
	echo "error".mysqli_error();
}
?>