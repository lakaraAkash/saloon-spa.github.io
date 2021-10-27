
<?php require_once("config1.php");?>
<?php 
//echo $_SESSION['user'];
    /*if(!isset($_SESSION['user']))
    {
        
        header("location:admin/login.php");
    }*/
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <title>Sign up</title>
    <?php include "includes/css_files.php";?>
</head>
<style>


    .banner-bg-agileits
    {
         background-image: url("para/aston.jpg");
          height:20%;S
          width: 100%;
           position: relative;
          
          background-attachment: fixed;
          background-position: center;
          background-repeat: no-repeat;
          
    }
    </style>


<body>
    <div id="home">
        <!-- header -->
        
        <?php include "includes/navbar.php";?>
    

        <!-- //navbar ends here -->
        <!-- banner -->
        <div class="banner-bg-agileits">
            <!-- banner-text -->
            <div class="">
                <div class="container">
                    <div id="signupbox" style=" margin-top:50px" class="mainbox loginbox">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title"><h6>Sign Up</h6></div>
							
                            <div style="float:right; font-size: 85%; position: relative; top:-10px">
                                <a id="signinlink" href="admin/login.php" onClick="$('#signupbox').hide(); $('#loginbox').show()">Sign In</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <form id="signupform" class="form-horizontal" action="signup-process.php" method="post">
                                <div id="signupalert" style="display:none" class="alert alert-danger">
                                    <p>Error:</p>
                                    <span></span>
                                </div>
                                <div class="form-group">
                                    
                                    <div class="">
                                        <input type="text" class="form-control" name="full_name" placeholder="Full Name" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                    <div class="">
                                        <input type="email" class="form-control" name="email" placeholder="Email Address" required="">
                                    </div>
                                </div>
                                
                                <div class="form-group">
                                    
                                    <div class="">
                                        <input type="text" class="form-control" name="mobile" placeholder="Mobile No" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                    <div class="">
                                        <input type="password" class="form-control" name="pwd" placeholder="Password" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    
                                    <div class="">
                                        <input class="form-control" name="add" placeholder="Address" required="">
                                    </div>
                                </div>

                                <div class="form-group">
                                    
                                    <div class="">
                                        <input class="form-control" name="city" placeholder="City" required="">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <!-- Button -->
                                    <div class="signup-btn">
                                         <input id="btn-signup" name="signup" type="submit" value="Sign Up" class="btn btn-info"/>
                                    </div>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
                </div>
            </div>
            <!-- //banner-text -->
        </div>

        
		             
        <?php include "includes/footer.php";?>
       
    <!-- //home -->
    <!-- js -->
    <script src="js/jquery-2.2.3.min.js"></script>
    <!-- //js -->
    <!--search jQuery-->
    <script src="js/main.js"></script>
    <!--search jQuery-->
    <!-- cart-js -->
    <script src="js/minicart.js"></script>
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
    <!-- Scrolling Nav JavaScript -->
    <script src="js/scrolling-nav.js"></script>
    <!-- //fixed-scroll-nav-js -->
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
    <!-- start-smooth-scrolling -->
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
    <!-- //end-smooth-scrolling -->
    <!-- smooth-scrolling-of-move-up -->
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
    <script src="js/SmoothScroll.min.js"></script>
    <!-- //smooth-scrolling-of-move-up -->
    <!-- about bottom grid Numscroller -->
    <script src="js/numscroller-1.0.js"></script>
    <!-- //about bottom grid Numscroller -->
    <!-- Bootstrap core JavaScript
 ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/bootstrap.js"></script>
</body>

</html>