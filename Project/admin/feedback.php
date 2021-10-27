<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/table_manage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:58:22 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Admin | Feedback Page</title>
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
			<h1 class="page-header">Feedback Page <small>You Can See the Feedback from here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">List of Feedback</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>feedback id</th>
										<th>Message</th>
										<th>Car_id</th>
										<th>User_id</th>
                                        <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php $q="select * from feedback";
								   			$r=mysqli_query($con,$q)or die(mysqli_error($con));;
											while($get=mysqli_fetch_assoc($r)){
												
												
								   ?>
                                        <tr class="odd gradeX">
                                        	<td><?php echo $get['f_id']; ?></td>
											<td><?php echo $get['message'];?></td>
											<td> <?php $car_name = $get['car_id'];
													$sel_room = "select company_name from car_detail where car_id = $car_id"; 
													$res_room = mysqli_query($sel_room); 
													$row_room = mysqli_fetch_array($res_room); 
													echo $row_room['car_id']; ?></td>
											<td><?php $u_id = $get['u_id'];
													  $sel_user = "SELECT username FROM `users` WHERE u_id = $u_id"; 
													  $res_user = mysqli_query($sel_user); 
													  $row_user = mysqli_fetch_array($res_user); 
													  echo $row_user['username']; ?></td>
                                                <td><a href="file:///G|/ /Database/project/admin/delete_feedback.php?u_id=<?php echo $u_id;?>">delete</a></td>
                             
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
