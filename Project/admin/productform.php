<!doctype html>
<?php include("config1.php");
?>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<form name="form1" method="post" action="productdb.php" enctype="multipart/form-data">
<p>Categories:
<select name = "Categories">
  <option value = "Select"> Select </option>
<?php
$query="select * from shop_category";
$result=mysql_query($query);
?>

  <?php
while($row = mysql_fetch_array($result))
{
	?>
  
    <option value =<?php echo $row['category'] ?>> <?php echo $row['category'] ?> </option>
    <?php } ?>
  </select>
  
</p>
<p>Type:    
<?php
$query="select * from type";
$result=mysql_query($query);
?>
<select name = "Type">
  <option value = "Select"> Select </option>
  <?php
while($row = mysqli_fetch_array($result))
{
	?>
  
    <option value =<?php echo $row['id'] ?>> <?php echo $row['type'] ?> </option>
    <?php } ?>
  </select>
</p>
<p>Brand Name:
    <?php
$query="select * from brandname";
$result=mysqli_query($query);
?>
<select name = "brandname">
  <option value = "Select"> Select </option>
  <?php
while($row = mysqli_fetch_array($result))
{
	?>
  
    <option value =<?php echo $row['brandname'] ?>> <?php echo $row['brandname'] ?> </option>
    <?php } ?>
  </select>
<p>Size:
 
    <?php
$query="select * from size";
$result=mysqli_query($query);
?>
<select name = "size">
  <option value = "Select"> Select </option>
  <?php
while($row = mysqli_fetch_array($result))
{
	?>
  
    <option value =<?php echo $row['size'] ?>> <?php echo $row['size'] ?> </option>
    <?php } ?>
  </select>
<p>
  <label for="textarea">Description:</label>
  <textarea name="textarea" rows="10" id="textarea"></textarea>
   <p>Price:
  <input type = "Price" name = "Price">
  <p>Quantity:
  <input type = "text" name = "Quantity">
  <p>
  <input type = "file" name="img1">
  
  
  <input type = "file" name = "img2">
  
  
  <input type = "file" name = "img3">
  
  <input type = "file" name = "img4">
  
  <input type = "file" name = "img5">
  <input type = "file" name = "img6">
  <input type = "file" name = "img7">
  <input type = "file" name = "img8">
  <input type = "file" name = "img9">
  <input type = "file" name = "img10">
  
  </p>
  <p>
  <input type="submit" name="submit" value="Submit">
  </form>
  
</body>
</html>