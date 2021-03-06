
<!--Author: weebly
Author URL: http://weebly.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
require_once("config1.php");
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Salon and spa Category Bootstrap Responsive website Template | Shop Catalogue :: weebly</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Optical Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
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
	<!-- checkout css -->
	<link href="css/checkout.css" type="text/css" rel="stylesheet" media="all">
	<!-- Range-slider-css -->
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<!-- common-css -->
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

if(isset($_GET['search'],$_GET['radio_cat'])){
	$q = "select * from shop_brand where infinity_id='".$_GET['radio_cat']."'";
	$result_product=mysqli_query($q) or die(mysqli_error());
	
}
else if(isset($_GET['shop_brand'])){
	$result_product=mysqli_query("select * from salon_db where brandname='$_GET[brandname]'") ;
}
else{
	$result_product=mysqli_query("select * from salon_db");
	
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
							<span class="sr-only">Salon and spa</span>
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
						<?php include 'includes/nav.php';?>
						</ul>
						<!-- search-bar -->
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
								<form action="cart_master.php" method="post">
									<input name="Search" type="search" placeholder="Type and Hit Enter...">
								</form>
							</div>
						</div>
						<!-- //search-bar ends here -->
						<!-- shopping cart -->
						<div class="cart-mainf">
							<div class="chrcart chrcart2 cart cart box_1">
								<form action="#" method="post" class="last">
									<input type="hidden" name="cmd" value="_cart">
									<input type="hidden" name="display" value="1">
									<button class="top_chr_cart" type="submit" name="submit" value="">
										<i class="fa fa-cart-arrow-down" aria-hidden="true"></i>
									</button>
								</form>
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
						Services of Salon and spa
					</h2>

				</div>
			</div>
			<!-- //banner-text -->
		</div>
		<!-- //banner -->
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
							<a href="shop.php">product catalogue</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!--//breadcrumbs ends here-->
		<!-- Shop -->
		<div class="innerf-pages section">
			<div class="container-cart">
				<!-- product left -->
				<div class="side-bar col-md-3">
					<!--preference -->
					<div class="left-side">
						<form action="" method="get">
							

						<h3 class="shopf-sear-headits-sear-head">
							shop_category</h3>
						<ul>

							<?php 
								   $query="select * from shop_category";
								   $result=mysqli_query($con,$query) or die(mysqli_error($con));;
								   while($row=mysqli_fetch_assoc($result))
								   {
							?>

						<li>
								<input type="radio" name="radio_cat" value="<?php echo $r['id']?>">
								<span class="span"><?php echo $r['haircare'];?></span>
							</li>
							<?php }?>	

						</ul>

						
							<input type="submit" value="Search" name="search">
						</form>

					</div>
					
					
				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class="left-ads-display col-md-9">
					<div class="wrapper_top_shop">
						<!-- product-sec1 -->
						<div class="product-sec1">
							<!-- row1-->
							<?php 
								   $query="select * from shop_category";
								   $result=mysqli_query($con,$query) or die(mysqli_error($con));;
								   while($row=mysqli_fetch_assoc($result))
								   {
								   
							?>
						
							<div class="col-md-3 product-men">
								<div class="product-chr-info chr">
									<div class="thumbnail">
										<a href="single_product.php?prod=<?php echo $r['id']?>">
											<img style="height:200px;width:200px" src="admin/<?php echo $r['photo']?>" alt="" />
										</a>
									</div>
									<div class="caption">
										<h4><?php echo $r['size']?></h4>
										<p><?php echo $r['styling']?></p>
										<div class="matrlf-mid">
											
											<ul class="price-list">
											
												<li>Rs. <?php echo $r['price']?>.60</li>
												<li>
													
												</li>
											</ul>

											<div class="clearfix"> </div>
										</div>
										<form action="#" method="post">
											<input type="hidden" name="cmd" value="_cart">
											<input type="hidden" name="add" value="1">
											<input type="hidden" name="chr_item" value="Book1">
											<input type="hidden" name="amount" value="100.00">
											<!--<button type="submit" class="chr-cart pchr-cart">
											view product
												<i class="fa fa-cart-plus" aria-hidden="true"></i></a>
											</button>
											<!--<a href="single_product.php" data-toggle="modal" data-target="#myModal1"></a>-->
										</form>
									</div>
								</div>
							</div>

							<?php } ?>

						</div>

						<!-- //product-sec1 -->
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="clearfix"></div>

			</div>
		</div>
		<!--// Shop -->
 <!-- footer -->
 <div class="footer-bottom section">
	<div class="container">
			<!-- footer grids-->
		<div class="footer-cpy">
			<!-- footer-grid1 -->
			<div class="col-md-3 col-sm-6 footer-logo">
				<h3>
					<a href="index.php">Salon and spa</a>
				</h3>
				<h4>about us</h4>
				<p>visit for Salon and spa in Amreli</p>
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
                                <a href="shop.php">shop_category</a>
                            </li>
							<li>
                                <a href="shop.php">Shop_brand</a>
                            </li>
                            <li>
                                <a href="contact.php">contact us</a>
                            </li>
   



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
	<p>?? 2020 Salon and spa. All rights reserved | Design by
		<a href="http://weebly.com"> Weebly.</a>
	</p>
</div>
</div>
<!-- //home -->
	<!-- js -->
	<!-- Common js -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!--// Common js -->
	<!-- cart-js -->
	<!--<script src="js/minicart.js"></script>-->
	<script>
		chr.render();

		chr.cart.on('new_checkout', function (evt) {
			var items, len, i;

			if (this.subtotal() > 0) {
				items = this.items();

				for (i = 0, len = items.length; i < len; i++) {}
			}
		});
	</script>
	<!-- //cart-js -->
	<!-- price range (top products) -->
	<script src="js/jquery-ui.js"></script>
	<script>
		//<![CDATA[ 
		$(window).load(function () {
			$("#slider-range").slider({
				range: true,
				min: 0,
				max: 9000,
				values: [50, 6000],
				slide: function (event, ui) {
					$("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
				}
			});
			$("#amount").val("$" + $("#slider-range").slider("values", 0) + " - $" + $("#slider-range").slider("values", 1));

		}); //]]>
	</script>
	<!-- //price range (top products) -->

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
	<script src="js/main.js"></script>
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