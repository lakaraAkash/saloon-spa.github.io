<?php
include("config1.php");
if(isset($_POST['update'])){
	$brandname=$_POST['brandname'];
	$q=mysqli_query("update tblbrand set brandname='$brandname' where id=".$_GET['brand_id']);
	if($q){
		header("location:shop_brand.php");
}else{
	echo "error".mysqli_error();
}
}

$q="select * from tblbrand where id=".$_GET['brand_id'];
$result=mysqli_query($con,$q)or die(mysqli_error($con));;
?><form method="post" action="#">
<?php while($get=mysqli_fetch_array($result)){ ?>
 <input type="text" name="brandname" value="<?php echo $get['brandname'] ?>">
 <?php } ?>
<input type="submit" name="update" value="update">
</form>