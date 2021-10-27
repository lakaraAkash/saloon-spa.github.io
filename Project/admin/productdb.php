<?php
require_once("config1.php");

$brandname=$_POST['brandname'];

$filename1=$_FILES['img1']['name'];
  list($txt, $ext) = explode(".", $filename1);
  $product_image1 = "Product/".$brandname.rand(10,10000).".".$ext;
  $tmp = $_FILES['img1']['tmp_name'];
	move_uploaded_file($tmp, $product_image1);
	
$filename1 = $_FILES['img2']['name'];
  list($txt, $ext) = explode(".", $filename1);
  $product_image2 = "Product/".$brandname.rand(10,10000).".".$ext;
  $tmp = $_FILES['img2']['tmp_name'];
	move_uploaded_file($tmp, $product_image2);
	
$filename1 = $_FILES['img3']['name'];
  list($txt, $ext) = explode(".", $filename1);
  $product_image3 = "Product/".$brandname.rand(10,10000).".".$ext;
  $tmp = $_FILES['img3']['tmp_name'];
	move_uploaded_file($tmp, $product_image3);
	
$color=$_POST['color'];
$size=$_POST['size'];
$description=$_POST['textarea'];
$Price=$_POST['Price'];
$Quantity=$_POST['Quantity'];
$Type=$_POST['Type'];
$Categories=$_POST['Categories'];
$product_name=$_POST['p_name'];
$error="";
if(isset($_POST['submit'])){
	
$q=("select * from product where p_name='$p_name'");
$result=mysqli_query($con,$q)or die(mysqli_error($con));;
$count=mysqli_num_rows($result);
if($count>=1){
	$error="product already inserted";
	header("location:product.php");
}else{
$query="insert into tblproduct(p_name,category,type,brandname,size,p_description,price,quantity,img1,img2,img3,color)
values ('$product_name','$Categories','$Type','$brandname','$size','$description','$Price','$Quantity','$product_image1','$product_image2','$product_image3','$color')";
echo $query;
$result=mysqli_query($con,$query)or die(mysqli_error($con));;

if($result==1)
{
	$error="product inserted succesfully";
	header("location:product.php");
}
else{
	$error="error".mysqli_error();
}
}
}
?>

