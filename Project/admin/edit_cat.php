<?php
include("config1.php");
if(isset($_POST['update'])){
	$category_name=$_POST['category_name'];
	$q=mysqli_query("update category set category_name='$category_name' where category_id=".$_GET['category_id']);
	if($q){
		header("location:shop_category.php");
}else{
	echo "error".mysqli_error();
}
}

$q="select * from category where category_id=".$_GET['category_id'];
$result=mysqli_query($con,$q)or die(mysqli_error($con));;
?><form method="post" action="#">
<?php while($get=mysqli_fetch_array($result)) { ?>
 <input type="text" name="category_name" value="<?php echo $get['category_name'] ?>">
 <?php  }?>
<input type="submit" name="update" value="update">
</form>