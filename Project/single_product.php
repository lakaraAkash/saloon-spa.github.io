<?php 
session_start();
require_once("config1.php");

if(!empty($_POST))
{
	$product_id = $_POST['prod'];
	$user_id = $_SESSION['user_detail']['cid'];
	$q = "select cart_id from cart where box_id='".$product_id."' and cid=".$user_id." and order_id=0";
	$result_c=mysqli_query($q) or die(mysqli_error());
	if(mysqli_num_rows($result_c)>0)
	$query = "update cart set quantity=quantity+1 where box_id='".$product_id."' and cid=".$user_id." and order_id=0";
	else
	$query="insert into cart (cid,box_id,quantity) values($user_id,$product_id,1)";
	$result=mysqli_query($query) or die(mysqli_error());
}

?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Salon and spa Education Category Bootstrap Responsive website Template | Single Product :: w3layouts</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="optical metro Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
	SmartPhone Compatible web template, free WebDesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- Custom Theme files -->
	<link href="css/bootstrap.css" type="text/css" rel="stylesheet" media="all">
	<!-- shop css -->
	<link href="css/shop.css" type="text/css" rel="stylesheet" media="all">
	<!-- flexslider-css -->
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />
	<link href="css/style.css" type="text/css" rel="stylesheet" media="all">
	<!-- font-awesome icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //Custom Theme files -->
	<!-- online-fonts -->
	<!-- logo -->
	<link href="//fonts.googleapis.com/css?family=Fredericka+the+Great" rel="stylesheet">
	<!-- titles -->
	<link href="//fonts.googleapis.com/css?family=Merriweather+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
	<!-- body -->
	<link href="//fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<!-- //online-fonts -->

<?php 

if(isset($_GET['prod'])){
	$q = "select * from product where p_id='".$_GET['prod']."'";
	$result_product=mysqli_query($q) or die(mysqli_error());
	$r = mysqli_fetch_array($result_product);
	//print_r($r);
	 
	 
	 
	
	
	
}else{
	header('location:index.php');
}
?>
</head>


<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
	<div id="home">
		<!-- header -->
		<!-- navbar -->
		<nav class="navbar navbar-default navbar-fixed-top">
			<div class="main-nav">
				<div class="container">

					<div class="navbar-header page-scroll">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
							<span class="sr-only">box</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1>
							<a class="navbar-brand" href="index.php">Salon and spa</a>
						</h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-ex1-collapse nav-right">
						<?php include 'includes/nav.php';?>						<!-- search-bar -->
						<div class="search-bar-agileits">
							<div class="cd-main-header">
								<ul class="cd-header-buttons">
									<li>
										<a class="cd-search-trigger" href="#cd-search">
											<span></span>
										</a>
									</li>
								</ul>
								<!-- cd-header-buttons -->
							</div>
							<div id="cd-search" class="cd-search">
								<form action="#" method="post">
									<input name="Search" type="search" placeholder="Type and Hit Enter...">
								</form>
							</div>
						</div>
						<!-- //search-bar ends here -->
						<!-- shopping cart -->
						<div class="cart-mainf">
							<div class="chrcart chrcart2 cart cart box_1">
								<!--<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="top_chr_cart" type="submit" name="submit" value="">
										<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
									</button>
								</form>-->
								<a href="checkout.php"><i class="fa fa-cart-arrow-down" aria-hidden="true"></i></a>
							</div>
						</div>
						<!-- //shopping cart ends here -->
					</div>
					<!-- /.navbar-collapse -->
					<div class="clearfix"></div>
				</div>
				<!-- /.container -->
			</div>
		</nav>
		<!-- //navbar ends here -->
		<!-- banner -->
		<div class="banner-bg-inner">
			<!-- banner-text -->
			<div class="banner-text-inner">
				<div class="container">
					<h2 class="title-inner">
					Salon and spa
					</h2>

				</div>
			</div>
			<!-- //banner-text -->
		</div>
		<!-- //banner -->
		<?php 
		$q = "select * from product where p_id='".$_GET['prod']."'";
	$res=mysql_query($q);
	$ra = mysql_fetch_array($res);
		;?>
		<!-- breadcrumbs -->
		<div class="crumbs text-center">
			<div class="container">
				<div class="row">
					<ul class="btn-group btn-breadcrumb bc-list">
						<li class="btn btn1">
							<a href="index.php">
								<i class="glyphicon glyphicon-home"></i>
							</a>
						</li>
						<li class="btn btn2">
							<a href="shop.php">Product Catalogue</a>
						</li>
						<li class="btn btn3">
							<a href="single_product.php"><?php echo $ra['box_name'];?></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--//breadcrumbs ends here-->
		<!-- Si'Hngle -->
		
		
		
		<div class="innerf-pages section">
			<div class="container id">
				<div class="col-md-4 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider1">
							<ul class="slides">
								<li data-thumb="admin/<?php echo $ra['photo'];?>">
									<div class="thumb-image">
										<img class="img-responsive" src="admin/<?php echo $ra['photo'];?>" data-imagezoom="true" alt=<?php echo $ra['photo'];?>>
									 </div>
								</li>
								<li data-thumb="admin/<?php echo $ra['photo'];?>">
									<div class="thumb-image">
										<img class="img-responsive" src="admin/<?php echo $ra['photo'];?>" data-imagezoom="true" alt=<?php echo $ra['photo'];?>> </div>
								</li>
								<li data-thumb="admin/<?php echo $ra['photo'];?>">
									<div class="thumb-image">
										<img class="img-responsive" src="admin/<?php echo $ra['photo'];?>" data-imagezoom="true" alt=<?php echo $ra['photo'];?>> </div>
								</li>
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>

				</div>
				<div class="col-md-8 single-right-left simpleCart_shelfItem">
					<h3><?php echo $ra['brandname'];?>
						<span><?php echo $ra['type'];?></span>
					</h3>
					<!--<p>by
						<a href="#">Clayton Barton</a>
					</p>-->
					<div class="caption">

						<ul class="rating-single">
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
							<li>
								<a href="#">
									<span class="fa fa-star yellow-star" aria-hidden="true"></span>
								</a>
							</li>
						</ul>
						<div class="clearfix"> </div>
						<h6>
							Rs.<?php echo $ra['price'];?></h6>
					</div>
					<div class="desc_single">
						<h5>Description</h5>
						<p><?php echo $ra['description'];?></p>
					</div>
					<div class="occasional">
					<h5>Specifications</h5>
						<p><?php echo $ra['Specifications'];?></p>
						<ul class="single_specific">
							
							<!--<li>
								<span>Color:</span> </li>-->
					    </ul>

					</div>
					<div class="color-quality">
						<div class="color-quality-right">
							
							
								<option value="null"></option>
								<option value="null"></option>
							</select>
						</div>
					</div>
					<div class="clearfix"></div>
					<div class="description">
						<h5></h5>
						<form action="#" method="post">
							
							   
							
						</form>
					</div>
					<div class="occasion-cart1">
						<div class="chr single-item single_page_b">
							<form action="#" method="post">
								<input type="hidden" name="cmd" value="_cart">
								<input type="hidden" name="add" value="1">
								<input type="hidden" name="chr_item" value="Single prodact">
								<input type="hidden" name="amount" value="100.00">
								<input type="hidden" name="prod" value="<?php echo $ra['box_id'];?>">
								<button type="submit" class="chr-cart pchr-cart">
									<i class="fa fa-cart-plus" aria-hidden="false"></i>Add to cart</button>
								<!-- <a href="#" data-toggle="modal" data-target="#myModal1"></a>-->
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<!-- /new_arrivals -->
		
				<!--//new_arrivals-->
				<div class="clearfix"></div>

			</div>
		</div>
		<!--// Single -->
		<!-- footer -->
		<div class="footer-bottom section">
			<div class="container">
				<!-- newsletter -->
								<!-- //newsletter ends here -->
				<!-- footer grids-->
				<div class="footer-cpy">
					<!-- footer-grid1 -->
					<div class="col-md-3 col-sm-6 footer-logo">
						<h3>
							<a href="index.php">service me</a>
						</h3>
						<h4>about us</h4>
						<p>Vallis Molestie Arcu Morbi Dapibus Suscipit Ante Sit Efficitur Eu estie Arcu Mor Anestie Ate Vesti.</p>
					</div>
					<!-- //footer-grid1 -->
					<!-- footer-grid2 -->
					<div class="col-md-3 col-sm-6 footer-nav text-center">
						<h4>navigation</h4>
						<ul>
							<li>
								<a href="index.php">Home</a>
							</li>
							<li>
								<a href="about.php">About us</a>
							</li>
							<li>
								<a href="shop.php">shop</a>
							</li>
							<li>
								<a href="contact.php">contact us</a>
							</li>
						</ul>
					</div>
					<!-- //footer-grid2 -->
					<!-- footer-grid3 -->
					
					<!-- //footer-grid3 -->
					<!-- footer-grid4 -->
					
					<!-- //footer-grid4 -->
					<div class="clearfix"></div>
				</div>
				<!-- //footer-grids -->
				<!-- footer social -->
				
				<!-- //footer social -->
			</div>
			<!-- //footer container -->
		</div>
		<!-- //footer -->
		<div class="cpy-right">
			<p>© 2020 Salon and spa service. All rights reserved | Design by
				<a href="http://w3layouts.com"> W3layouts.</a>
			</p>
		</div>
	</div>
	<!-- //home -->
	<!-- Common js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!--// Common js -->
	<!-- cart-js -->
	<!--<script src="js/minicart.js"></script>-->
	<script>
		chr.render();

		chr.cart.on('chr_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- zoom -->
	<script src="js/imagezoom.js"></script>
	<!-- zoom-->
	<!-- single -->
	<!-- FlexSlider -->
	<script src="js/jquery.flexslider.js"></script>
	<script>
		// Can also be used with $(document).ready()
		$(window).load(function () {
			$('.flexslider1').flexslider({
				animation: "slide",
				controlNav: "thumbnails"
			});
		});
	</script>
	<!-- //FlexSlider-->

	<!-- dropdown nav -->
	<script>
		$(document).ready(function () {
			$(".dropdown").hover(
				function () {
					$('.dropdown-menu', this).stop(true, true).slideDown("fast");
					$(this).toggleClass('open');
				},
				function () {
					$('.dropdown-menu', this).stop(true, true).slideUp("fast");
					$(this).toggleClass('open');
				}
			);
		});
	</script>
	<!-- //dropdown nav -->
	<!--search jQuery-->
	<!--<script src="js/main.js"></script>
	
	<!--search jQuery-->

	<!-- Scrolling Nav JavaScript -->
	<script src="js/scrolling-nav.js"></script>
	<!-- //fixed-scroll-nav-js -->
	<!--//scripts-->
	<script src="js/bootstrap.js"></script>
	<!-- start-smoth-scrolling -->
	<script src="js/move-top.js"></script>
	<script src="js/easing.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script>
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
	<!-- smoothscroll -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- //smoothscroll -->

</body>

</html>