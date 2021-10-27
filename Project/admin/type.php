<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/table_manage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:58:22 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Admin | Type Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<?php require_once("cssfiles.php"); ?>
</head>

<?php
require_once("config1.php");
$error="";
print_r($_FILES);
	 print_r($_POST);
if(isset($_POST['submit']))
{
	
	
	 $id=$_POST['id'];
	 $name=$_POST['haircare'];
	 $tools=$_POST['styling_tools'];
	 $size=$_POST['size'];
	 
	 
	 if($id=="0")
	 {
			$error="Please select Category";
	 }
	 else 
	 {
	 	if($_POST['submit']=='add')
		{
			$photo ="assets/img/box/".$_FILES['photo']['name'];
			$query="insert into box(`box_name`,`price`,`size`,`category_id`,`photo`) values('$name','$price','$size',$id,'$photo')";
			//echo $query;
			$result=mysqli_query($query);
			move_uploaded_file($_FILES['photo']['tmp_name'],"assets/img/box/".$_FILES['photo']['name']);
			if($result==1){
				$error="Box inserted succesfully";
			}
			else
			{
				$error= "error".mysqli_error();
			}
		}
		else if($_POST['submit']=='edit')
		{
			$box_id= $_POST['id'];
			$query="updated product set `p_name`='$p_name',`price`='$price',`size`='$size',`category_id`=$id where product_id=$product_id";
			//echo $query;
			$result=mysqli_query($query);
			if($result==1){
				$error="product updated succesfully";
			}
			else
			{
				$error= "error".mysqli_error();
			}
		}	
		
	}
}
elseif(isset($_GET['d_id']))
{
	$query="delete from product where id=".$_GET['id'];
	//echo $query;
	$result=mysqli_query($query);
	if($result==1){
		$error="product Deleted succesfully";
		header("Location:type.php");
	}
	else
	{
		$error= "error".mysqli_error();
	}
}
?>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	
	<!-- begin #page-container -->
	<div id="page-container" class="fade page-sidebar-fixed page-header-fixed">
		<!-- begin #header -->
		<?php include("header.php")?>
		<!-- end #header -->
		
		<!-- begin #sidebar -->
		<?php include("sidebar.php"); ?>
		<!-- end #sidebar -->
		
		<!-- begin #content -->
		<div id="content" class="content">
			
			<!-- begin page-header -->
			<h1 class="page-header">Type Page <small>You Can Add Type from here...</small></h1>
			<!-- end page-header -->
			<!--Add data-->
			<?php if(!isset($_GET['type_id'])) {?>
			<div class="panel panel-inverse">
			    <div class="panel-heading">
				
			        <h4 class="panel-title">Add Type</h4>
			    </div>
				
			    <div class="panel-body">
                <!-- begin category form -->
			        <form name = "form1" method="post" action="" enctype="multipart/form-data">
					<div class="row">
						<div class="col-sm-12 col-md-4 col-lg-2">
                    		<p>Select Category:   </p>  
								<?php
                                $query="select * from shop_category";
                                $result=mysqli_query($query);
                                ?>
                                <select name="category_id">
                                  <option value = "0" selected="selected">-- Select -- </option>
								  
                                  <?php
                                	while($row = mysqli_fetch_array($result))
                                	{
										echo '<option value = "'.$row['category_id'].'"> '.$row['category_name'].' </option>';
									}
                                    ?>
									</select>
                                 
                        </div>
						<div class="col-sm-12 col-md-4 col-lg-2">
							<p>Box Name:</p><input type="text" name="box_name" required/>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-2">
							<p>Box Size:</p><input type="text" name="size" required/>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-2">
							<p>Box Price:</p><input type="text" name="price" required/>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-2">
						<div class="col-sm-12 col-md-4 col-lg-2">
					        <p>Photo:</p><input type="file" name="photo" id="photo"/>
						</div>
					
									
					     <?php
						//$query="select * from box";
						 //$result=mysql_query($query);
						 ?>
						 <p>&nbsp;</p> <br> <br>  
						 
						 <div class="col-sm-8 col-md-2 col-lg-4"></div>
			<button type="submit" class="btn btn-default btn-xs" name="submit" value="add">Add Box</button>
				</div>   
				</div>
                <span class="error"><?php echo $error; ?> </span>
							</form>
                     <!-- end of category form -->        
			    </div>
                </div>
				<?php }?>
			<!--end add data-->	
			<!--edit data-->
			<?php if(isset($_GET['type_id'])) {
				
				 $query="select * from product where id=".$_GET['id'];
				   $result_edit=mysqli_query($query);
				   $row_edit = mysqli_fetch_array($result_edit)		 
			
			
			?>
			<div class="panel panel-inverse">
			    <div class="panel-heading">
			        <h4 class="panel-title">Edit Type</h4>
			    </div>
			    <div class="panel-body">
                <!-- begin category form -->
			        <form name = "form1" method="post" action="type.php">
					<div class="row">
						<div class="col-sm-12 col-md-4 col-lg-2">
                    		<p>Select Category:   </p>  
								<?php
                                $query="select * from shop_category";
                                $result=mysqli_query($query);
                                ?>
                                <select name="category_id">
                                  <option value = "0" >-- Select -- </option>
								  
                                  <?php
                                	while($row = mysqli_fetch_array($result))
                                	{
										echo '<option value = "'.$row['id'].'" '.($row['category_id']==$row_edit['id']?' selected="selected"':'').'> '.$row['styling'].' </option>';
									}   
                                    ?>
									</select>
                                 
                        </div>
						<div class="col-sm-12 col-md-4 col-lg-2">
							<p>p_name:</p><input type="text" name="box_name" required value="<?php echo $row_edit['p_name'];?>" />
						</div>
						<div class="col-sm-12 col-md-4 col-lg-2">
							<p>size:</p><input type="text" name="size" required value="<?php echo $row_edit['size'];?>"/>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-2">
							<p>price:</p><input type="text" name="price" required value="<?php echo $row_edit['price'];?>"/>
						</div>
						<div class="col-sm-12 col-md-4 col-lg-2">
						 <p>&nbsp;</p>  
						 <input type="hidden" name="box_id" value="<?php echo $row_edit['id'];?>"/>
  						<button type="submit" class="btn btn-default btn-xs" name="submit" value="edit">Edit Product</button>
				
						</div>   
				</div>
                <span class="error"><?php echo $error; ?> </span>
							</form>
                     <!-- end of category form -->        
			    </div>
                </div>
				<?php } ?>
			<!--ende of edit data-->	
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">List of Type</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
											<th>#</th>
                                            <th>Category</th>
											 <th>Box Name</th>
											  
											    <th>Price</th>
												<th>Size</th>
												  <!-- <th>box_image</th>-->
                                             <th>Edit</th>
                                             <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
				   $query="select b.*,c.shop_category from haircare b left join shop_category c on c.id=b.id";
				   $result=mysqli_query($query);
				   while($row=mysqli_fetch_array($result)){
				   ?>
                                        <tr class="odd gradeX">
										  <td><img src="<?php echo $row['haircare'];?>" width="50px"></td>	
                                          <td><?php  echo $row['styling'];?></td>
										  <td><?php  echo $row['styling_tools'];?></td>
                                          <td><?php  echo $row['handcare'];?></td>
										  <td><?php  echo $row['spatools'];?></td>
										  <td><?php  echo $row['id'];?></td>
										  <td><?php  echo $row['size'];?></td>
										 <!-- <td><?php  echo $row['img1'];?></td>-->
                               <td><a class="btn btn-success btn-xs" href="type.php?type_id=<?php echo $row['box_id'];?>">Edit</a></td> 
                             <td><a class="btn btn-danger btn-xs" href="type.php?d_id=<?php echo $row['box_id'];?>">Delete</a></td> 
                                        </tr>
                                       <?php }?> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- end panel -->
                </div>
                <!-- end col-12 -->
            </div>
            <!-- end row -->
		</div>
		<!-- end #content -->
		
		
		<!-- begin scroll to top btn -->
		<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top"><i class="fa fa-angle-up"></i></a>
		<!-- end scroll to top btn -->
	</div>
	<!-- end page container -->
	
	<!-- ================== BEGIN BASE JS ================== -->
	<?php include("jsfiles.php"); ?>
</body>



</html>
  	 