<?php
 require 'account_login.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Kamal Futnitures</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary JavaScript plugins) -->
<script type='text/javascript' src="js/jquery-1.11.1.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Furnyish Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href='http://fonts.googleapis.com/css?family=Montserrat|Raleway:400,200,300,500,600,700,800,900,100' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Playfair+Display:400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Aladin' rel='stylesheet' type='text/css'>
<!-- start menu -->
<link href="css/megamenu.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="js/megamenu.js"></script>
<script>$(document).ready(function(){$(".megamenu").megamenu();});</script>
<script src="js/menu_jquery.js"></script>
<script src="js/simpleCart.min.js"> </script>
  
</head>
<body>
<!-- header -->
<!-- header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email:<a href="mailto@example.com"> info(at)Mobilya.com</a></li>
                                        <li class="top_link"><a href="login.php">My Account</a></li>					
				</ul>
			</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header_top">
	 <div class="container">
		 <div class="logo">
		 	<a href="index.html"><img src="images/logo.png" alt=""/></a>			 
		 </div>
		 <div class="header_right">	
			 <div class="login">
				 <a href="login.php">LOGIN</a>
			 </div>
			   
				<div class="clearfix"> </div>
			 	
		 </div>
		  <div class="clearfix"></div>	
	 </div>
</div>
<!--cart-->
	 
<!------>
<div class="mega_nav">
	 <div class="container">
		 <div class="menu_sec">
		 <!-- start header menu -->
		 <ul class="megamenu skyblue">
			 <li class="active grid"><a class="color1" href="index.html">Home</a></li>
			 <li class="grid"><a class="color2" href="products.html">furniture</a>
				<div class="megapanel">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<h4>Sofas</h4>
									
						   </div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Tables</h4>
									
							</div>							
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>Beds</h4>
									
							</div>												
						</div>
						<div class="col1">
							<div class="h_nav">
								<h4>wardrobe</h4>
									
							</div>						
						</div>
						<div class="col1">
							<div class="h_nav">
								</div>
						</div>
					</div>
								
					<div class="row">
						<div class="col2"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
						<div class="col1"></div>
					</div>
    				</div>
				</li>
							
				<li><a class="color5" href="contact.html">contact us</a>
				</li>
				<li><a class="color6" href="#">about</a>
				</li>				
				
			   </ul> 
			   
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>
<!---->
<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Login</li>
		 </ol>
		 <h2>Login</h2>
                     <?php
                         if(isset($_SESSION['message']))
                         {
                          echo"<div id='error_msg'>".$_SESSION['message']."</div>";
                          unset($_SESSION['message']);
                         }
                         ?>
		 <div class="col-md-6 log">			 
				 <p>Welcome, please enter the filling to continue.</p>
				 <!--<p>If you have previously Login with us, <span>click here</span></p>-->
                                 <form id="registration_form" action="<?= $_SERVER['PHP_SELF'];?> " method="post">
                                     <div>
                                         <label>
                                         <!--<h5>Email:</h5>-->
                                         <input placeholder="Email:" type="text" name="email" value="<?=$email?>" tabindex="1">
                                         <span class="error"><?= $email_error ?></span>
                                         </label>
                                     </div>    
                                     <div>
                                         <label>
					 <!--<h5>Password:</h5>-->
                                         <input placeholder="Password:" type="password" name="pass1" tabindex="2">	
                                         <span class="error"><?= $pass1_error ?></span>
                                         </label>
                                     </div>
					 <input type="submit" value="Login">
					  <a href="#">Forgot Password ?</a>
				 </form>				 
		 </div>
		  <div class="col-md-6 login-right">
			  	<h3>NEW REGISTRATION</h3>
				<p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>
				<a class="acount-btn" href="account.php">Create an Account</a>
		 </div>
		 <div class="clearfix"></div>
	 </div>
</div>
<!---->
<div class="footer-content">
	 <div class="container">
		 <div class="ftr-grids">
			 <div class="col-md-3 ftr-grid">
				 <h4>About Us</h4>
				 <ul>
					 <li><a href="#">Who We Are</a></li>
					 <li><a href="contact.html">Contact Us</a></li>
					 
					 <li><a href="#">Team</a></li>
					 					 
				 </ul>
			 </div>
			 
			 <div class="col-md-3 ftr-grid">
				 <h4>Your account</h4>
				 <ul>
					 <li><a href="account.html">Your Account</a></li>
					 <li><a href="#">Personal Information</a></li>
					 <li><a href="#">Addresses</a></li>
					 				 					 
				 </ul>
			 </div>
			 <div class="col-md-3 ftr-grid">
				 <h4>Categories</h4>
				 <ul>
					 <li><a href="#">> Furinture</a></li>
					 <li><a href="#">> Sofas</a></li>
					 <li><a href="#">> Tables</a></li>
					 <li><a href="#">> Beds</a></li>
					 <li><a href="#">> Wardrobe</a></li>
					 					 
				 </ul>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
	 
		 <div class="copywrite">
			 <p>Copyright © 2017 kamal Furnitures All rights reserved| Design by sss</p>
		 </div>			 
		 
	 

<!---->
</body>
</html>


</body>
</html>