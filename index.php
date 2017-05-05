<?php session_start(); ?>
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
<?php require('header.php'); ?>
<div class="content">
	 <div class="container">
		 <div class="slider">
				<ul class="rslides" id="slider1">
				  <li><img src="images/banner2.jpg" alt=""></li>
				  <li><img src="images/banner1.jpg" alt=""></li>
				  <li><img src="images/banner3.jpg" alt=""></li>
				</ul>
		 </div>
	 </div>
</div>
<!---->
<div class="bottom_content">
	 <div class="container">
		 <div class="sofas">
			 <div class="col-md-6 sofa-grid">
				 <img src="images/t1.jpg" alt=""/>
				 <h3>IMPORTED DINING SETS</h3>
				 <h4>SPECIAL ACCENTS OFFER</h4>
			 </div>
			 <div class="col-md-6 sofa-grid sofs">
				 <img src="images/t2.jpg" alt=""/>
				 <h3>SPECIAL DESIGN SOFAS</h3>
				 <h4>FABFURNITURE MELA</h4>
			 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->
<div class="new">
	 <div class="container">
		 <h3>specially designed for Furniture</h3>
		 <div class="new-products">
		 <div class="new-items">
			 <div class="item1">
				 <img src="images/s1.jpg" alt=""/>
			 </div>
			 <div class="item4">
				 <img src="images/s4.jpg" alt=""/>
				  <div class="item-info4">
				</div>			 
			 </div>
		 </div>
		 <div class="new-items new_middle">
			 <div class="item2">			 
				 <div class="item-info2">
					 <h4><a href="products.html"></a></h4>
				 </div>
				 <img src="images/s2.jpg" alt=""/>
			 </div>
			 <div class="item5">	
				 <img src="images/s5.jpg" alt=""/>
				 <div class="item-info5">
					 <h4><a href="products.html"></a></h4>
				 </div>	
			 </div>
		 </div>		  
		 <div class="new-items new_last">
			 <div class="item3">	
				 <img src="images/s3.jpg" alt=""/>
				 <div class="item-info3">
					 <h4><a href="products.html"></a></h4>
					 </div>			 
			 </div>
			 <div class="item6">	
				 <img src="images/s6.jpg" alt=""/>
				 <div class="item-info6">
					 <h4><a href="products.html"></a></h4>
					 </div>
				 				 
			 </div>
		 </div>
		 <div class="clearfix"></div>	
		 </div>
	 </div>		 
</div>
<!---->
<div class="top-sellers">
	 <div class="container">
		 <h3>TOP - SELLERS</h3>
		 <div class="seller-grids">
			 <div class="col-md-3 seller-grid">
				<img src="images/ts2.jpg" alt=""/>
				 <h4> Doublecot Bed</h4>
				 </div>
			 <div class="col-md-3 seller-grid">
				 <img src="images/ts11.jpg" alt=""/>
				 <h4>Home Bar Furniture</h4>
				 </div>
			 <div class="col-md-3 seller-grid">
				 <img src="images/ts3.jpg" alt=""/>
				 <h4>L-shaped Fabric Sofa set</h4>
				 </div>
			 <div class="col-md-3 seller-grid">
				 <img src="images/ts4.jpg" alt=""/>
				 <h4> Dinning Table </h4>
				 </div>
			 <div class="clearfix"></div>
		 </div>
	 </div>
</div>
<!---->

<?php require 'footer.php'; ?>		 
</body>
</html>