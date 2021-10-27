<ul class="nav navbar-nav navbar-left cl-effect-15">
    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
    <li class="hidden">
        <a class="page-scroll" href="#page-top"></a>
    </li>


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
   



                <li> 

                            <?php 

                            if(isset($_SESSION['user_detail'])): ?>
                                
                        <li class="dropdown navbar-user">
                        
                            
                           
                        
                        
                            <li><a href="logout.php" ><span class="fa fa-user nav-icon" aria-hidden="true"></span>Log Out</a></li>
                        </ul>
                    </li>

                     
                            <?php  else: ?>
                                <a class="link" href="login.php" style="text-decoration:none"> <span class="fa fa-user nav-icon" aria-hidden="true"></span> LOGIN</a>
                                <?php endif; ?>
                        </li>
</ul>