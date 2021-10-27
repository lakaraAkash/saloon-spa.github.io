<?php
include("config1.php");
if(isset($_POST['update'])){
	$size=$_POST['size'];
	$q=mysqli_query("update tblsize set size='$size' where s_id=".$_GET['size_id']);
	if($q){
		header("location:size.php");
}else{
	echo "error".mysqli_error();
}
}

$q="select * from tblsize where s_id=".$_GET['size_id'];
$result=mysqli_query($con,$q)or die(mysqli_error($con));;
?><form method="post" action="#">
<?php while($get=mysqli_fetch_array($result)){ ?>
 <input type="text" name="size" value="<?php echo $get['size'] ?>">
 <?php } ?>
<input type="submit" name="update" value="update">
</form>