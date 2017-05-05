<?php session_start(); ?>
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
<!---->
<!--header//-->
<div class="product-model">	 
	 <div class="container">
			<ol class="breadcrumb">
		  <li><a href="index.php">Home</a></li>
		  <li class="active">Products</li>
		 </ol>
			<h2>OUR PRODUCTS</h2>			
		 <div class="col-md-9 product-model-sec">

		 <?php

    		require('dbConnection.php');
    		$qry="SELECT Item_type,Item_id,Price,Number,Title from items";
    		$result=mysqli_query($connect,$qry)or die(mysqli_error($connect));

    		while($row = mysqli_fetch_assoc($result)) 
    		if(!isset($_GET['type']) || strcmp(strtolower($row['Item_type']),strtolower($_GET['type']))==0)
    		{

		        ?>

		         <div class="product-grid love-grid">
						<div class="more-product"><span> </span></div>						
						<div class="product-img b-link-stripe b-animate-go  thickbox">
							<img src="images/products/<?= $row['Item_id'] ?>.jpg" class="img-responsive" alt=""/>
						</div>					
						<div class="product-info simpleCart_shelfItem">
							<div class="product-info-cust prt_name">
								<h4><?= $row['Title']; ?></h4>
								<p>ID: <?= $row['Item_id']; ?></p>
								<span class="item_price">Rs. <?= $row['Price']; ?></span>		<br>	
								<?php
									if($row['Number']==0) {
										?>
										<h4>Out Of Stock</h4>
										<?php	
									} else if(isset($_SESSION['username']) ) {
								?>		
								<input type="button" class="item_add items" value="Buy Now">
								<?php
									} else {
								?>
								<a href="login.php" class="item_add items" >Login to Buy</a>
								
								<?php
									}
								?>
							</div>													
							<div class="clearfix"> </div>
						</div>
					</div>	
					

		        <?php
				    }
				 ?>
					

			</div>
			<div class="rsidebar span_1_of_left">
				 <section  class="sky-form">
					 <div class="product_right">
						 <h4 class="m_2"><span class="glyphicon glyphicon-minus" aria-hidden="true"></span>Categories</h4>
						 <div class="tab1">
							 <ul class="place">								
								 <li class="sort">Furniture</li>
								 <li class="by"><img src="images/do.png" alt=""></li>
									<div class="clearfix"> </div>
							  </ul>
							 <div class="single-bottom">						
									<a href="products.php"><p>All</p></a>
									<a href="products.php?type=sofa"><p>Sofas</p></a>
									<a href="products.php?type=table"><p>Tables</p></a>
									<a href="products.php?type=bed"><p>Beds</p></a>
									<a href="products.php?type=wardrobe"><p>Wardrobes</p></a>
						     </div>
					      </div>						  
						  
						  
						
							
			 </div>				 
	      </div>
		</div>
</div>	
<?php require 'footer.php'; ?>
</body>
</html>