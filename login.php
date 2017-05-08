<?php
session_start();
if(isset($_SESSION['id'])) {
	header("Location: index.php");
	exit(0);
}
?>
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

<?php require('header.php'); ?>
<!---->
<div class="login_sec">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
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
				 <form id="registration_form" action="<?= $_SERVER['PHP_SELF'];?> " method="post">
                                     <div>
                                         <label>
                                         <input placeholder="Email:" type="text" name="email" value="<?=$email?>" tabindex="1">
                                         <span class="error"><?= $email_error ?></span>
                                         </label>
                                     </div>
                                     <div>
                                         <label>
					 <input placeholder="Password:" type="password" name="pass1" tabindex="2">
                                         <span class="error"><?= $pass1_error ?></span>
                                         </label>
                                     </div>
					 <input type="submit" value="Login">
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
<?php require 'footer.php'; ?>


</body>
</html>
