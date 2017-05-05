
<!DOCTYPE HTML>
<html>
<head>
<title>kamal furnitures</title>
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
  <script src="js/responsiveslides.min.js"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function () {
      // Slideshow 1
      $("#slider1").responsiveSlides({
         auto: true,
		 nav: true,
		 speed: 500,
		 namespace: "callbacks",
      });
    });
  </script>
  
</head>
<body>
<!-- header -->

<?php require('header.php'); ?>
<div class="contact">
	 <div class="container">
		 <ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Contact</li>
		 </ol>
		 <div class="contact-head">
		 	 <h2>CONTACT</h2>
 <?php
	if(isset($_POST['msg']) && isset($_POST['name'])&& isset($_POST['email']) && isset($_POST['phone'])) {
	$str = "Name : " . $_POST['name'] . "\n";
	$str .= "Email : " . $_POST['email'] . "\n";
	$str .= "Phone : " . $_POST['phone'] . "\n";
	$str .= "\nMessage\n" . $_POST['msg'] . "\n";

	require 'vendor/phpmailer/phpmailer/PHPMailerAutoload.php';

	$mail = new PHPMailer;

	$mail->isSMTP();                                      // Set mailer to use SMTP
	// $mail->SMTPDebug = 2;
	$mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'kamalfurnitures01@gmail.com';                 // SMTP username
	$mail->Password = 'mywork1133';                           // SMTP password
	$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
	$mail->Port = 587;                                    // TCP port to connect to

	$mail->setFrom('kamalfurnitures01@gmail.com', 'ContactUs');
	$mail->addAddress('kamalfurnitures01@gmail.com', 'Kama Furnitures');     // Add a recipient
	
	$mail->Subject = 'Contact Us Form';
	$mail->Body    = $str;
	
	if(!$mail->send()) {
	    echo 'Message could not be sent.';
	    echo 'Mailer Error: ' . $mail->ErrorInfo;
	} else {
	    echo 'Message has been sent';
	}

	
}
?>

			  <form action="#" method="POST">
				  <div class="col-md-6 contact-left">
						<input type="text" placeholder="Name" name='name' required/>
						<input type="text" placeholder="E-mail" name='email' required/>
						<input type="text" placeholder="Phone" name='phone' required/>
				 </div>
				 <div class="col-md-6 contact-right">
						 <textarea placeholder="Message" name='msg'></textarea>
						 <input type="submit" value="SEND"/>
				 </div>
				 <div class="clearfix"></div>
			 </form>
		 </div>

<?php require 'footer.php'; ?>
</body>
</html>


</body>
</html>