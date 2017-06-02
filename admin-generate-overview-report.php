<?php
include('session.php');
include('db.php');
include('redall.php');
include('redallad.php');
include('o-report-script.php');
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
         <title>iShop - Overview Report</title>
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
                        <a href="admin.php"><span id="logo-accent">i</span>Shop</a>
                    </div><!-- end logo -->

                   

                    <div id="search-form">
                        <h3>iShop - <?php echo $error; ?> Overview Report</h3>
                    </div><!-- end search-form -->

                    <div id="user-menu">
                        <!--
                        <nav id="signin" class="dropdown">
                            <ul>
                                <li>
                                    <a href="#"><img src="img/user-icon.gif" alt="Sign In" /><?php echo $usernametype;?> <img src="img/down-arrow.gif" alt="Sign In" /></a>
                                    <ul>
                                        <li><a href="admin-add-employee.php">Add DEO Employee</a></li>
                                        <li><a href="admin-edit-employee.php">Edit Employee</a></li>
                                        <li><a href="admin-generate-report.php">Generate Reports</a></li>
                                        <li><a href="admin-shopping-cart.php">Shopping Cart</a></li>
                                        <li><a href="admin-checkout.php">Checkout</a></li>
                                        <li><a href="logout.php">Sign Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>!-->

                        
                        <nav class="dropdown">
                            <ul>
                                <li>
                                    <a href="admin.php"><img src="img/user-icon.gif" /><?php echo $usernametype;?> <img src="img/down-arrow.gif"  /></a>
                                    <ul>
                                        <li><a href="admin-add-employee.php">Add DEO Employee</a></li>
                                        <li><a href="admin-edit-employee.php">Manage Employee</a></li>
                                        <li><a href="admin-generate-overview-report.php">Overview Report</a></li>
                                        <li><a href="admin-generate-sales-report.php">Sales Report</a></li>
                                        <li><a href="admin-personal-details.php">My Account</a></li>
                                        <li><a href="logout.php">Sign Out</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </nav>
                    </div><!-- end user-menu -->

                   
                    
                    <div id="view-cart">
                        <a href="">Welcome <?php echo $usernameview; ?></a>
                    </div><!-- end view-cart -->
                    
                </section><!-- end action-bar -->
            </header>

            <hr />

            <section id="main-content" class="clearfix">
            		<div id="shopping-cart">
                    <h1>Items On Stock Now</h1>
                     
                        <form action="#" method="get" align="center">
                            <input type="search" style="width:300px;" name="searchst" placeholder="Search by name" class="search">
                            <input type="submit" name="stocksearch" value="Search" class="search submit">
                        </form>
                    
                    
                    <!--
                    <table border="1" align="center">
					<tr>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Email</th>
					<th>Password</th>
					<th>Telephone</th>
					</tr>
					<tr>
					<td width="200"> 1</td>						
					<td width="200"> 2</td>
					<td width="200"> 2</td>
					<td width="200"> 2</td>
					<td width="200"> 2</td>
					</tr>
					</table>
					!-->
			<p><?php
			
			if(isset($_GET['stocksearch'])){
				$search_data = $_GET['searchst'];
				$sql = "SELECT `prodname`, `imglink` as Image, `proddescripd`, `price`, `qty` as Quantity, `taxes`, `profit` FROM `products` WHERE `prodname`='$search_data'";
				$result=mysql_query($sql);
				            $num_fields=mysql_num_fields($result);
			
            # get column metadata
            $i = 0;
			 
            //Set table width 15% for each column
            $width=15 * $num_fields;
            
            print ('<br>'."\n".'<table width='.$width.'% align="center" border="1">'."\n");
            
                	
                	 while ($i < $num_fields) {

                //Get fields (columns) names
                $meta = mysql_fetch_field($result);

                    $fields_array[]=$meta->name;

                //Display column headers in upper case
                print('      <th><b>'.strtoupper($fields_array[$i]).'</b></th>'."\n");

                $i=$i+1;
            }
            print('   </tr>');	
     		while ($row = mysql_fetch_array($result)) { 
     			
           		print('      <td>'.$row['prodname'].'</td>'."\n");
           		print ('<td><img src='.$row['Image'].'></td>'."\n");
           		
           		print('      <td>'.$row['proddescripd'].'</td>'."\n");
           		print('      <td>'.$row['price'].'$</td>'."\n");
           		print('      <td>'.$row['Quantity'].'/item(s)</td>'."\n");
            	print('      <td>'.$row['taxes'].'%</td>'."\n");
            	print('      <td>'.$row['profit'].'$</td>'."\n");
            print('   </tr>');	
            }
            print '</table>';
			}else{
			$sql="SELECT `prodname`, `imglink` as Image, `proddescripd`, `price`, `qty` as Quantity, `taxes`, `profit` FROM `products` WHERE 1";
				$result=mysql_query($sql);
            $num_fields=mysql_num_fields($result);
			
            # get column metadata
            $i = 0;
			 
            //Set table width 15% for each column
            $width=15 * $num_fields;
            
            print ('<br>'."\n".'<table width='.$width.'% align="center" border="1">'."\n");
            
                	
                	 while ($i < $num_fields) {

                //Get fields (columns) names
                $meta = mysql_fetch_field($result);

                    $fields_array[]=$meta->name;

                //Display column headers in upper case
                print('      <th><b>'.strtoupper($fields_array[$i]).'</b></th>'."\n");

                $i=$i+1;
            }
            print('   </tr>');	
     		while ($row = mysql_fetch_array($result)) { 
     			
           		print('      <td>'.$row['prodname'].'</td>'."\n");
           		print ('<td><img src='.$row['Image'].'></td>'."\n");
           		
           		print('      <td>'.$row['proddescripd'].'</td>'."\n");
           		print('      <td>'.$row['price'].'$</td>'."\n");
           		print('      <td>'.$row['Quantity'].'/item(s)</td>'."\n");
            	print('      <td>'.$row['taxes'].'%</td>'."\n");
            	print('      <td>'.$row['profit'].'$</td>'."\n");
            print('   </tr>');	
            }
            print '</table>';
            }
			?></p>
					
                    <hr/>
                    
                    
                    
                    <h1>iShop Sold Items</h1>
                    <form action="#" method="get" align="center">
                            <input type="search" style="width:300px;" name="searchsl" placeholder="Search by memberid" class="search">
                            <input type="submit" name="soldsearch" value="Search" class="search submit">
                        </form>
                    <p><?php 
                    if(isset($_GET['soldsearch'])){
						$search_dataa = $_GET['searchsl'];
						$sql1 = "SELECT `memberid` ,`prodname`, `imglink` as IMAGE, `unitprice`, `quantity`, `subtotal` FROM `cart` WHERE `memberid`='$search_dataa'";
						$result1=mysql_query($sql1);
            $num_fields=mysql_num_fields($result1);
			
            # get column metadata
            $i = 0;
			 
            //Set table width 15% for each column
            $width=15 * $num_fields;
            
            print ('<br>'."\n".'<table width='.$width.'% align="center" border="1">'."\n");
            
                	
                	 while ($i < $num_fields) {

                //Get fields (columns) names
                $meta = mysql_fetch_field($result1);

                    $fields_array1[]=$meta->name;

                //Display column headers in upper case
                print('      <th><b>'.strtoupper($fields_array1[$i]).'</b></th>'."\n");

                $i=$i+1;
            }
            print('   </tr>');	
     		while ($row1 = mysql_fetch_array($result1)) { 
     			print('      <td>'.$row1['memberid'].'</td>'."\n");
           		print('      <td>'.$row1['prodname'].'</td>'."\n");
           		print ('<td><img src='.$row1['IMAGE'].'></td>'."\n");
           		
           		print('      <td>'.$row1['unitprice'].'$</td>'."\n");
           		print('      <td>'.$row1['quantity'].'/item(s)</td>'."\n");
           		print('      <td>'.$row1['subtotal'].'$</td>'."\n");
            	
            print('   </tr>');	
            }
            print '</table>';
			}else{
			$sql1 = "SELECT `memberid` ,`prodname`, `imglink` as IMAGE, `unitprice`, `quantity`, `subtotal` FROM `cart` WHERE `sold`='S'";
						$result1=mysql_query($sql1);
            $num_fields=mysql_num_fields($result1);
			
            # get column metadata
            $i = 0;
			 
            //Set table width 15% for each column
            $width=15 * $num_fields;
            
            print ('<br>'."\n".'<table width='.$width.'% align="center" border="1">'."\n");
            
                	
                	 while ($i < $num_fields) {

                //Get fields (columns) names
                $meta = mysql_fetch_field($result1);

                    $fields_array1[]=$meta->name;

                //Display column headers in upper case
                print('      <th><b>'.strtoupper($fields_array1[$i]).'</b></th>'."\n");

                $i=$i+1;
            }
            print('   </tr>');	
     		while ($row1 = mysql_fetch_array($result1)) { 
     			print('      <td>'.$row1['memberid'].'</td>'."\n");
           		print('      <td>'.$row1['prodname'].'</td>'."\n");
           		print ('<td><img src='.$row1['IMAGE'].'></td>'."\n");
           		
           		print('      <td>'.$row1['unitprice'].'$</td>'."\n");
           		print('      <td>'.$row1['quantity'].'/item(s)</td>'."\n");
           		print('      <td>'.$row1['subtotal'].'$</td>'."\n");
            	
            print('   </tr>');	
            }
            print '</table>';
			
			}
			?>	
			</p>
				
				<!--<form action="" method="POST" align="right">
						<p>
                            <input type="submit" name="delete" value="Clear Report Info" class="secondary-cart-btn">
                        </p>
               </form> !-->
						
				</div>
						
						
            </section><!-- end main-content -->

            <hr />

            <footer>
                <section id="contact">
                    <h3>For phone orders please call +961-800-000. You<br>can also email us at <a href="mailto:amr@ishop.com">amr@ishop.com</a></h3>
                </section><!-- end contact -->

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
                            			<li><a href="admin-add-employee.php">Add DEO Employee</a></li>
                                        <li><a href="admin-edit-employee.php">Manage Employee</a></li>
                                        <li><a href="admin-generate-overview-report.php">Overview Report</a></li>
                                        <li><a href="admin-generate-sales-report.php">Sales Report</a></li>
                                        <li><a href="admin-personal-details.php">My Account</a></li>
                                        <li><a href="logout.php">Sign Out</a></li>
                                    </ul>
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
