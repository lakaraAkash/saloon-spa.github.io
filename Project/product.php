<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/table_manage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:58:22 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Admin | Product Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<?php include("cssfiles.php"); ?>
</head>
<?php
include("config1.php");?>
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
			<h1 class="page-header">custemer detail  Page <small>You Can See the custemer from here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">List of product</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th> id </th>
                                        <th>p_name</th>
                                            <th>category</th>
                                             <th>type</th>
                                             <th>brandname</th>
											 <th>size</th>
											 <th>description</th>
											 <th>price</th>
											 <th>quantity</th>
											 <th>img1</th>
											 <th>img2</th>
                                             <th>img3</th>
											 <th>feedback</th>
											 <th>color</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php $q="select * from product";
								   			$r=mysqli_query($con,$q)or die(mysqli_error($con));;
											while($get=mysqli_fetch_assoc($r)){
												
												
								   ?>
                                        <tr class="odd gradeX">
                                        	<td><?php echo $get['id']; ?></td>
                                            <td><?php echo $get['p_name']; ?></td> 
                                            <td><?php echo $get['category']; ?></td> 
                                            <td><?php echo $get['type'];  ?></td> 
                                             <td><?php echo $get['brandname'];  ?></td> 
											 <td><?php echo $get['size'];  ?></td>
											 <td><?php echo $get['description'];  ?></td>
											 <td><?php echo $get['price'];  ?></td>
											 <td><?php echo $get['quantity'];  ?></td>
											 <td><?php echo $get['img1'];  ?></td>
											 <td><?php echo $get['img2'];  ?></td>
											 <td><?php echo $get['img3'];  ?></td>
											 <td><?php echo $get['feedback'];  ?></td>
											 <td><?php echo $get['color'];  ?></td>
											 
                                        </tr>
                                      <?php } ?>
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
