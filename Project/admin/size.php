<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/table_manage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:58:22 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Admin | Size Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	
	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<?php require_once("cssfiles.php"); ?>
</head>
<?php
$error="";
require_once("config1.php");
$size=$_POST['size'];
if(isset($_POST['submit'])){
	if($size==""){ $error="value cant be blank"; }
	else{
		$q=mysql_queryi("select * from tblsize where size='$size'");
$count=mysqli_num_rows($q);
if($count==1)
{
	$error="data is already inserted";
}else{
$query="insert into tblsize(size) values ('$size')";
$result=mysqli_query($query);
if($result==1)
{
	echo"value inserted succesfully";
}
else
{
	echo"error".mysqli_error();
}
}
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
			<h1 class="page-header">Size page <small>You Can Add Size from here...</small></h1>
			<!-- end page-header -->
			<div class="panel panel-inverse">
			    <div class="panel-heading">
			        <h4 class="panel-title">Add Size</h4>
			    </div>
			    <div class="panel-body">
                <!-- begin category form -->
			       <form name = "form1" method="post" action="">
					<p>size
  						<input type="text" name="size">
						</p>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  					<input type="submit" name="submit" value="Add size">
				</p>
                  <span class="error"><?php echo $error; ?> </span>
							</form>
                     <!-- end of category form -->        
			    </div>
                </div>
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">List of Size</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Size</th>
                                             <th>Edit</th>
                                             <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
				   $query="select * from tblsize";
				   $result=mysqli_query($query);
				   while($row=mysqli_fetch_array($result)){
				   ?>
                                        <tr class="odd gradeX">
                                        
                                            <td><?php echo $row['size'];?></td>
                                  <td><a href="edit_size.php?size_id=<?php echo $row['s_id'];?>">edit</a></td>
                             <td><a href="delete_size.php?size_id=<?php echo $row['s_id'];?>">delete</a></td>
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

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/table_manage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:58:26 GMT -->
</html>
