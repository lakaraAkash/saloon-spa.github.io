<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->

<!-- Mirrored from seantheme.com/color-admin-v1.7/admin/html/table_manage.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Apr 2015 10:58:22 GMT -->
<head>
	<meta charset="utf-8" />
	<title>Admin | Order Page</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />
	<?php include("cssfiles.php"); ?>
</head>
<?php
require_once("config1.php");?>
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
			<h1 class="page-header">Order Page <small>You Can See the Orders from here...</small></h1>
			<!-- end page-header -->
			
			<!-- begin row -->
			<div class="row">
			    <!-- begin col-12 -->
			    <div class="col-md-12">
			        <!-- begin panel -->
                    <div class="panel panel-inverse">
                        <div class="panel-heading">
                            <h4 class="panel-title">List of Orders</h4>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table id="data-table" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                        <th>order_id</th>
										<th>date</th>
                                        <th>total_price</th>
                                            <th>quantity</th>
                                             <th>c_id</th>
                                             <th>order_status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                   <?php $q="SELECT o.*,concat(c.fname,' ',c.lname) as c_name FROM `order` as o left join client_registration as c on c.cid=o.cid";
								   		 $r=mysqli_query($con,$q)or die(mysqli_error($con));;
											
											while($get=mysqli_fetch_assoc($r)){
												
												
								   ?>
                                        <tr class="odd gradeX">
                                        	<td><?php echo $get['order_id']; ?></td>
                                            <td><?php echo $get['date']; ?></td> 
                                            <td><?php echo $get['total_price'];  ?></td> 
                                             <td><?php echo $get['quantity'];  ?></td> 
											 <td><?php echo $get['c_id'];  ?></td>
											<td><?php echo $get['order_status']; ?></td>											 
                                              											  
                                               
                                                <td><a href="order_new.php?id=<?php echo $get['order_id'] ?>">view product details</a></td>  
                                        </tr>
                                      <?php } 
									  ?>
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
