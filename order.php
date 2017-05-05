<?php require 'account_process.php';
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
<meta name="keywords" content="Kamal Furnitures online store,Furniture store,Customized furniture online,furniture web design" />
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


<?php require('header.php'); ?>
<!---->
<div class="container">
	  <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Account</li>
		 </ol>
	 <div class="registration">
		 <div class="registration_left">
			 <h2>Order<span> place it </span></h2> 
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
					<!--<div>
						<label>
                                                    <input placeholder="Order_id" type="text" name="orderid" value="<?= $fname?>" tabindex="1"  >
                                                    <span class="error"><?= $fname_error ?></span>
                                                       
						</label>
					</div>-->
					<div>
						<label>
                                                        Quantity:
							<input placeholder="Quantity" type="text" name="quantity" value="<?= $qnty?>" tabindex="2" >
                                                        <span class="error"><?= $qnty_error ?></span>
						</label>
					</div>
					<div>
						<label>
                                                        Address:
							<input placeholder="Address:" type="text" name="address" value="<?= $adr?>" tabindex="3" >
                                                        <span class="error"><?= $adr_error ?></span>
						</label>
					</div>
					<div>
						<label>
                                                    Phone:
                                                    <input placeholder="Phone/Mobile:" type="text" name="phone" value="<?= $phone?>" tabindex="4"  >
                                                    <span class="error"><?= $phone_error ?></span>
						</label>
					</div>					
						<div>
                                                    Payment type:
                                                    <input placeholder="Payment type" type="text" name="payment" value="<?= $payment?>" tabindex="5" >
                                                    <span class="error"><?= $payment_error ?></span>
						</div>					
										
						
					<div>
						<input type="submit" value="order" id="register-submit">
                                 	</div>
					
				</form>
				
			 </div>
		 </div>
          
		 <div class="clearfix"></div>
	 </div>
</div>
<?php require 'footer.php'; ?>		 
</body>
</html>

