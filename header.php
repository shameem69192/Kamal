<!-- header -->
<div class="top_bg">
	<div class="container">
		<div class="header_top-sec">
			<div class="top_right">
				<ul>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
			<div class="top_left">
				<ul>
					<li class="top_link">Email-Us: <a href="mailto:kamalfurnitures@gmail.com">kamalfurnitures@gmail.com</a></li>
					<?php
						if(isset($_SESSION['username'])) {
					?>
					<li class="top_link"><a href="login.php">My Account</a></li>	
					<?php
						}
					?>			
				</ul>
				</div>


				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<div class="header_top">
	 <div class="container">
		 <div class="logo">
		 	<a href="index.php"><img src="images/logo.png" alt=""/></a>			 
		 </div>
		 <div class="header_right">	
		 <?php
		 	if(isset($_SESSION['username'])) {
		 ?> <div class="login">
				 <a href="logout.php">LOGOUT</a>
			 </div>
			 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			
		<?php
				echo $_SESSION['username'];
		 
			} else {	
	
		?>
			<div class="login">
				 <a href="login.php">LOGIN</a>
			 </div>
			  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

		<?php
			};
		?>
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
			 <li class="active grid"><a class="color1" href="index.php">Home</a></li>
			 <li class="grid"><a class="color2" href="#">furniture</a>
				<div class="megapanel" style="width: 25%;">
					<div class="row">
						<div class="col1">
							<div class="h_nav">
								<a href="category.php?type=sofa"><h4>Sofas</h4></a>
							</div>							
						
							<div class="h_nav">
								<a href="category.php?type=table"><h4>Tables</h4></a>
							</div>							
							<div class="h_nav">
								<a href="category.php?type=bed"><h4>Beds</h4></a>
							</div>												
							<div class="h_nav">
								<a href="category.php?type=wardrobe"><h4>Wardrobe</h4></a>
							</div>						
						</div>
				</div>
					
    				</div>
				</li>
                                <li><a class="color4" href="contact.php">contact us</a></li>
			                   <li><a class="color5" href="#">About us</a></li>
			     </ul>
			 <div class="clearfix"></div>
		 </div>
	  </div>
</div>