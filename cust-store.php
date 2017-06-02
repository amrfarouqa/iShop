<?php
include('session.php');
include('db.php');
include('redall.php');
include('redallcu.php');
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         <title>iShop - The Store</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">
		
       <link rel="icon" href="apple1.png">

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

        <div id="wrapper">
            <header>
               <section id="top-area">
                   <p>Phone orders: +961-800-0000 | Email us: <a href="mailto:amr@ishop.com">amr@ishop.com</a></p>
                </section><!-- end top-area -->
                <section id="action-bar">
                    <div id="logo">
                        <a href="cust.php"><span id="logo-accent">i</span>Shop</a>
                    </div><!-- end logo -->

                    <div id="search-form">
                        <h3>Welcome <?php echo $usernameview; ?></h3>
                    </div><!-- end search-form -->
					
					
					
                    <div id="user-menu">
                        
                        
                        <nav class="dropdown">
                            <ul>
                                <li>
                                    <a href="cust.php"><img src="img/user-icon.gif" alt="" /> <?php echo $usernametype;?> <img src="img/down-arrow.gif" alt="" /></a>
                                    <ul>
                                    <li><a href="cust-store.php">Shop</a></li>
                                        <li><a href="cust-shopping-cart.php">Shopping Cart</a></li>
                                        <li><a href="cust-checkout.php">Checkout</a></li>
                       					
                        				<li><a href="cust-wishlist.php">Wishlist</a></li>
                        				<li><a href="cust-personal-details.php">My Account</a></li>
                        				<li><a href="cust-order-history.php">Order History</a></li>
                                        <li><a href="logout.php">Sign Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- end user-menu -->
					
					 
                    <div id="view-cart">
                        <a href="cust-shopping-cart.php"><img src="img/blue-cart.gif" alt="View Cart"> View Cart</a>
                    </div><!-- end view-cart -->
                    
                    
                    
                </section><!-- end action-bar -->
            </header>

            <section id="promo-alt">
                <div id="promo1">
                    <h1>The brand new MacBook Pro 17"</h1>
                    <p>With a special price, <span class="bold">today only!</span></p>
                    <a href="prod-disp.php?id=12" class="secondary-btn">READ MORE</a>
                    <img src="img/macbook.png" alt="MacBook Pro">
                </div><!-- end promo1 -->
                <div id="promo2">
                    <h2>The iPhone 6S is now<br>available in our store!</h2>
                    <a href="prod-disp.php?id=11">Read more <img src="img/right-arrow.gif" alt="Read more"></a>
                    <img src="img/iphone.png" alt="iPhone">
                </div><!-- end promo2 -->
                <div id="promo3">
                    <img src="img/thunderbolt.png" alt="Thunderbolt">
                    <h2>The 27"<br>iMac.<br>Simply Stunning.</h2>
                    <a href="prod-disp.php?id=10">Read more <img src="img/right-arrow.gif" alt="Read more" /></a>
                </div><!-- end promo3 -->
            </section><!-- promo-alt -->

            <section id="main-content" class="clearfix">
                <h2>Buy iShop Products</h2>
                <hr>

                <aside id="categories-menu">
                    <h3>Account</h3>
                    <ul>
                       <li><a href="cust-shopping-cart.php">Shopping Cart</a></li>
                                        <li><a href="http://www.paypal.com" target="_blank">Checkout</a></li>
                        				<li><a href="cust-wishlist.php">Wishlist</a></li>
                        				<li><a href="cust-personal-details.php">Account Details</a></li>
                        				<li><a href="cust-order-history.php">Order History</a></li>
                                        <li><a href="logout.php">Sign Out</a></li>
                    </ul>
                </aside><!-- end categories-menu -->

                <div id="listings">
                	<?php
                	$sql="SELECT  `prodid`, `prodname`, `proddescripd`, `price`, `weblink`, `imglink` FROM `products` WHERE 1";
                	$result=mysql_query($sql);
     					while ($row = mysql_fetch_array($result)) { 
                	print '<div class="product">';
                	print '<a href="prod-disp.php?id='.$row['prodid'].'"><img src='.$row['imglink'].' alt="Product" class="feature"></a>';
                	print '<h3><a href="prod-disp.php?id='.$row['prodid'].'">'.$row['prodname'].'</a></h3>';
                	print '<p></p>';
					print '<h5>Availability: <span class="instock">In Stock</span></h5>';
					print '<p>
                           <a href="prod-disp.php?id='.$row['prodid'].'" class="cart-btn">
                                <span class="price">$'.$row['price'].'</span>
                                <img src="img/white-cart.gif" alt="Add to Cart">
                                 ADD TO CART
                            </a>
                       </p>';
                        print '<p class="wish">
                            <a href="prod-disp.php?id='.$row['prodid'].'"	>
                                <img src="img/wish.gif" alt="Add to Wishlist">
                                 Add to Wishlist
                            </a>
                        </p>';
                        print '</div>';
                        }            
                	?>
                    </div>
            <hr />
			</section>
			
           

            <hr />

            <footer>
                <section id="contact">
<h3>For phone orders please call +961-800-000. You<br>can also email us at <a href="mailto:amr@ishop.com">amr@ishop.com</a></h3>                </section><!-- end contact -->

                <hr />

                <section id="links">
                    
                    <div id="info">
                        <h4>INFORMATION</h4>
                        <ul>
                            <li><a href="terms-of-use.php">Terms of Use</a></li>
                            <li><a href="privacy-policy.php">Privacy Policy</a></li>
                        </ul>
                    </div><!-- end info -->
                    
                    <div id="my-account">
                        <h4>MY ACCOUNT</h4>
                        <ul>
                        <li><a href="cust-store.php">Shop</a></li>
                            <li><a href="cust-shopping-cart.php">Shopping Cart</a></li>
                                        <li><a href="cust-checkout.php">Checkout</a></li>
                       					
                        				<li><a href="cust-wishlist.php">Wishlist</a></li>
                        				<li><a href="cust-personal-details.php">My Account</a></li>
                        				<li><a href="cust-order-history.php">Order History</a></li>
                                        <li><a href="logout.php">Sign Out</a></li>
                        </ul>
                    </div><!-- end my-account -->
                    
                    
                    <div id="extras">
                        <h4>EXTRAS</h4>
                        <ul>
                            <li><a href="about.php">About Us</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                        </ul>
                    </div><!-- end extras -->
                </section><!-- end links -->

                <hr />

                 <section class="clearfix">
                    <div id="copyright">
                        <div id="logo">
                            <a href="#"><span id="logo-accent">i</span>Shop</a>
                        </div><!-- end logo -->
                        <p id="store-desc">Number One Apple Retail Store</p>
                        <p id="store-copy">&copy; 2016 iShop. All rights reserved to Amr Farouq.</p>
                    </div><!-- end copyright -->
                    <div id="connect">
                        <h4>CONNECT WITH US</h4>
                        <ul>
                            <li class="twitter"><a href="#">Twitter</a></li>
                            <li class="fb"><a href="#">Facebook</a></li>
                        </ul>
                    </div><!-- end connect -->
                    <div id="payments">
                        <h4>SUPPORTED PAYMENT METHODS</h4>
                        <img src="img/payment-methods.gif" alt="Supported Payment Methods">
                    </div><!-- end payments -->
                </section>
            </footer>
        </div><!-- end wrapper -->

        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>
