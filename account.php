<?php require 'account_process.php';
 //require 'account_login.php';
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Kamal furnitures</title>
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
					<li class="top_link">Email:<a href="mailto@example.com">info(at)Mobilya.com</a></li>|
					<li class="top_link"><a href="login.html">My Account</a></li>					
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
								<h4>Wardrobe</h4>
									
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
			<li><a class="color4" href="contact.html">contact us</a>
				
				</li>				
				<li><a class="color5" href="#">about</a>
				
				</li>
						
			   </ul> 
			   
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>
<!---->
<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.html">Home</a></li>
		  <li class="active">Account</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>new user? <span> create an account </span></h2>
			 <!-- [if IE] 
				< link rel='stylesheet' type='text/css' href='ie.css'/>  
			 [endif] -->  
			  
			 <!-- [if lt IE 7]>  
				< link rel='stylesheet' type='text/css' href='ie6.css'/>  
			 <! [endif] -->  
			 <script>
				(function() {
			
				// Create input element for testing
				var inputs = document.createElement('input');
				
				// Create the supports object
				var supports = {};
				
				supports.autofocus   = 'autofocus' in inputs;
				supports.required    = 'required' in inputs;
				supports.placeholder = 'placeholder' in inputs;
			
				// Fallback for autofocus attribute
				if(!supports.autofocus) {
					
				}
				
				// Fallback for required attribute
				if(!supports.required) {
					
				}
			
				// Fallback for placeholder attribute
				if(!supports.placeholder) {
					
				}
				
				// Change text inside send button on submit
				var send = document.getElementById('register-submit');
				if(send) {
					send.onclick = function () {
						this.innerHTML = '...Sending';
					}
				}
			
			 })();
			 </script>
                         <?php
                         if(isset($_SESSION['message']))
                         {
                          echo"<div id='error_msg'>".$_SESSION['message']."</div>";
                          unset($_SESSION['message']);
                         }
                         ?>
			 <div class="registration_form">
			 <!-- Form -->
                         <form id="registration_form" action="<?= $_SERVER['PHP_SELF'];?> " method="post">
					<div>
						<label>
                                                    <input placeholder="First name:" type="text" name="fname" value="<?= $fname?>" tabindex="1"  >
                                                    <span class="error"><?= $fname_error ?></span>
                                                       
						</label>
					</div>
					<div>
						<label>
							<input placeholder="Last name:" type="text" name="lname" value="<?= $lname?>" tabindex="2" >
                                                        <span class="error"><?= $lname_error ?></span>
						</label>
					</div>
					<div>
						<label>
							<input placeholder="Email address:" type="text" name="email" value="<?= $email?>" tabindex="3" >
                                                        <span class="error"><?= $email_error ?></span>
						</label>
					</div>
					<div>
						<label>
                                                    <input placeholder="Mobile:" type="text" name="mobile" value="<?= $mobile?>" tabindex="4"  >
                                                    <span class="error"><?= $mobile_error ?></span>
						</label>
					</div>					
						<div>
                                                    <input placeholder="Gender:" type="text" name="gender" value="<?= $gender?>" tabindex="5" >
                                                    <span class="error"><?= $gender_error ?></span>
						</div>					
					<div>
						<label>
                                                    <input placeholder="Password" type="password" name="pass1" tabindex="6" >
                                                    <span class="error"><?= $pass1_error ?></span>
						</label>
					</div>						
					<div>
						<label>
                                                    <input placeholder="Retype password" type="password" name="pass2" tabindex="7" >
                                                    <span class="error"><?= $pass2_error ?></span>
						</label>
					</div>	
					<div>
						<input type="submit" value="create an account" id="register-submit">
                                 	</div>
					<!--<div class="sky-form">
						<label class="checkbox"><input type="checkbox" name="checkbox" ><i></i>i agree to mobilya.com &nbsp;<a class="terms" href="#"> terms of service</a> </label>
					</div>-->
				</form>
				<!-- /Form -->
			 </div>
		 </div>
             <!--
		 <div class="registration_left">
			 <h2>existing user</h2>
			 <div class="registration_form">

				<form id="registration_form" action="<?= $_SERVER['PHP_SELF'];?>" method="post">
					<div>
						<label>
                                                    <input placeholder="email:" type="text" name="email" value="<?=$email?>" tabindex="8">
                                                    <?php
                                                    if(isset($_POST['sign in']))
                                                    {
                                                    echo"<span class='error'>".$email_error."</span>";}?>
                                                </label>
					</div>
					<div>
						<label>
							<input placeholder="password" type="password" name="pass1" tabindex="9">
                                                        <span class="error"><?= $pass1_error ?></span>
						</label>
					</div>
					<div>
						<input type="submit" value="sign in" id="register-submit">
					</div>
					<div class="forget">
						<a href="#">forgot your password</a>
					</div>
				</form>

			 </div>
		 </div>
             --> 
		 <div class="clearfix"></div>
	 </div>
</div>
<!-- end registration -->
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
			 <p>Copyright © 2017 Kamal Furnitures All rights reserved | Design by sss</p>
		 </div>			 
		 </div>
	 </div>
</div>
<!---->
</body>
</html>


</body>
</html>