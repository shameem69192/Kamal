<?php
session_start();
require('dbConnection.php');
if(!isset($_SESSION['id'])) {
	header("Location: index.php");
	exit(0);
}
?>
<!DOCTYPE HTML>
<html>
<head>
<title>Kamal Furnitures</title>
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
<link href="css/form.css" rel="stylesheet" type="text/css" media="all" />

  
</head>
<body>
<?php require('header.php'); ?>
<div class="container">
	<div class="final">
	<h2>Your details:</h2><br>
</div>
First name: <?=$_SESSION['username']?><br>
Last name: <?=$_SESSION['lname']?><br>
Email: <?=$_SESSION['email']?><br>
Mobile: <?=$_SESSION['phone']?><br>
<br>
<div class="final">
	<h2>Your Orders:</h2><br>
</div>




<?php
	$qry="SELECT Order_id,Quantity,Phone,Address,Payment_type,Cust_id from order_details where Cust_id='".$_SESSION['id']."'";
	$result=mysqli_query($connect,$qry)or die(mysqli_error($connect));
 
	while($row = mysqli_fetch_assoc($result))  {
		echo "Order id: ".$row['Order_id']."<br>Quantity: ".$row['Quantity']."<br>Phone: ".$row['Phone']."<br>Address: ".$row['Address'].
		"<br>Payment type: ".$row['Payment_type']."<br>";
		echo"-----------------------------------------------------------------------------------------------------------------------------
		-------------------------------------<br>";
	}
	?>
</div>

<?php require 'footer.php'; ?>
</body>
</html>