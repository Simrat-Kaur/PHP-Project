	<!DOCTYPE html>
	<html lang="zxx" class="no-js">
	<head>
		<script data-require="jquery@3.1.1" data-semver="3.1.1" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
		<link rel="stylesheet" href="style.css" />
		<script src="script.js"></script>
		<!-- Mobile Specific Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<!-- Favicon-->
		<link rel="shortcut icon" href="img/fav.png">
		<!-- Author Meta -->
		<meta name="author" content="colorlib">
		<!-- Meta Description -->
		<meta name="description" content="">
		<!-- Meta Keyword -->
		<meta name="keywords" content="">
		<!-- meta character set -->
		<meta charset="UTF-8">
		<!-- Site Title -->
		<title>Bakery</title>

		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
			<!--
			CSS
			============================================= -->
			<link rel="stylesheet" href="css/linearicons.css">
			<link rel="stylesheet" href="css/font-awesome.min.css">
			<link rel="stylesheet" href="css/bootstrap.css">
			<link rel="stylesheet" href="css/magnific-popup.css">
			<link rel="stylesheet" href="css/nice-select.css">							
			<link rel="stylesheet" href="css/animate.min.css">
			<link rel="stylesheet" href="css/jquery-ui.css">			
			<link rel="stylesheet" href="css/owl.carousel.css">
			<link rel="stylesheet" href="css/main.css">
		</head>
		<body>	
		<?php


		
		
   
  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
	 
		
	 echo '<script>alert("Please Login First")</script>';
            header("location:login.php");
	
	
  
	
		
  
   
	
  }
		
		
		?>
			  <header id="header" id="home">
		  		<div class="header-top">
		  			<div class="container">
				  		<div class="row align-items-center">
				  			<div class="col-lg-6 col-sm-6 col-4 header-top-left no-padding">
					      	<div class="menu-social-icons">
								<a href="#"><i class="fa fa-facebook"></i></a>
								<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-dribbble"></i></a>
								<a href="#"><i class="fa fa-behance"></i></a>
							</div>	    				  					
				  			</div>
				  			<div class="col-lg-6 col-sm-6 col-8 header-top-right no-padding">
								<a class="btns" href="tel:+953 012 3654 896">+953 012 3654 896</a>
				  				<a class="btns" href="mailto:support@colorlib.com">support@colorlib.com</a>		
				  				<a class="icons" href="tel:+953 012 3654 896">
				  					<span class="lnr lnr-phone-handset"></span>
				  				</a>
				  				<a class="icons" href="mailto:support@colorlib.com">
				  					<span class="lnr lnr-envelope"></span>
				  				</a>		
				  			</div>
				  		</div>			  					
		  			</div>
				</div>
			    <div class="container main-menu">
			    	<div class="row align-items-center justify-content-between d-flex">
			    		<a href="index.html"><img src="img/logo.png" alt="" title="" /></a>		
						<nav id="nav-menu-container">
							<ul class="nav-menu">
							  <li class="menu-active"><a href="index.php">Home</a></li>
							
							  <li><a href="homemenu.php">Menu</a></li>
							  <li><a href="login.php">Login</a></li>
							 <li><a href="registration.php">Signup</a></li>          
							  <li><a href="contact.php">Contact Us</a></li>							  			          	          

							</ul>
						</nav><!-- #nav-menu-container -->		
			    	</div>
			    </div>
			  </header><!-- #header -->
			  
			<!-- start banner Area -->
			<section class="banner-area relative about-banner" id="home">	
				<div class="overlay overlay-bg"></div>
				<div class="container">				
					<div class="row d-flex align-items-center justify-content-center">
						<div class="about-content col-lg-12">
							<h1 class="text-white">
								Menu List				
							</h1>	
							<p class="text-white link-nav"><a href="index.html">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="menu.html"> Menu</a></p>
						</div>	
					</div>
				</div>
			</section>
			<!-- End banner Area -->	

			<!-- Start menu-list Area -->
			<section class="menu-list-area section-gap">
				<div class="container">
					<div class="row">
						<div class="menu-cat mx-auto">
							<ul class="nav nav-pills" id="pills-tab" role="tablist">
							  <li class="nav-item">
							    <a class="nav-link active" id="pizza-tab" data-toggle="pill" href="#pizza" role="tab" aria-controls="pizza" aria-selected="true">Pizza</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="pills-bread-tab" data-toggle="pill" href="#pills-bread" role="tab" aria-controls="pills-bread" aria-selected="false">Breads</a>
							  </li>
							  <li class="nav-item">
							    <a class="nav-link" id="pills-burger-tab" data-toggle="pill" href="#pills-burger" role="tab" aria-controls="pills-burger" aria-selected="false">Burgers</a>
							  </li>
										  
							</ul>							
						</div>

					</div>
						
					<div id="pills-tabContent" class="tab-content absolute">
			
						<div class="tab-pane fade show active" id="pizza" role="tabpanel" aria-labelledby="pizza-tab">
							
							
							



<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post">
							<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-9">
									<h4>Sicilian Pizza</h4>
									<p>
										Sicilian pizza, also known as "sfincione," provides a thick cut of pizza with pillowy dough, a crunchy crust, and robust tomato sauce. This square-cut pizza is served with or without cheese, and often with the cheese underneath the sauce to prevent the pie from becoming soggy. Sicilian pizza was brought to America in the 19th century by Sicilian immigrants and became popular in the United States after the Second World War.

									</p>
								</div>
								<div class="col-lg-3 flex-row d-flex price-size">
									<div class="s-price col">
										<h4>Price</h4>
										<span>₹ 115</span>
									</div>
									<div class="s-price col">
										<h4>Quantity</h4>
										<span>
											
										    <div class="quantity buttons_added">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
											
											</div>
											<button class="primary-btn" name="cart" >Cart</button>
										
										
										
										</span>
									</div>

									
							</div>
										


											
											
								</div>

</form>



<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post">
							<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-9">
									<h4>Greek Pizza</h4>
									<p>
										Greek pizza was created by Greek immigrants who came to America and were introduced to Italian pizza. Greek-style pizza, especially popular in the New England states, features a thick and chewy crust cooked in shallow, oiled pans, resulting in a nearly deep-fried bottom. While this style has a crust that is puffier and chewier than thin crust pizzas, it’s not quite as thick as a deep-dish or Sicilian crust.

									</p>
								</div>
								<div class="col-lg-3 flex-row d-flex price-size">
									<div class="s-price col">
										<h4>Price</h4>
										<span>₹ 195</span>
									</div>
									<div class="s-price col">
										<h4>Quantity</h4>
										<span>
											
										    <div class="quantity buttons_added">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
											
											</div>
											<button class="primary-btn" name="cartt" >Cart</button>
										
										
										
										</span>
									</div>

									
							</div>
										


											
											
								</div>

</form>



<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post">
							<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-9">
								<h4> Detroit Pizza</h4>
									<p>
										Reflecting the city’s deep ties to the auto industry, Detroit-style pizza was originally baked in a square automotive parts pan in the 1940’s. Detroit pizza is first topped with pepperoni, followed by brick cheese which is spread to the very edges of the pan, yielding a caramelized cheese perimeter. Sauce is then spooned over the pizza, an order similar to Chicago-style pizza. This pizza features a thick, extra crispy crust that is tender and airy on the inside

									</p>
								</div>
								<div class="col-lg-3 flex-row d-flex price-size">
									<div class="s-price col">
										<h4>Price</h4>
										<span>₹ 95</span>
									</div>
									<div class="s-price col">
										<h4>Quantity</h4>
										<span>
											
										    <div class="quantity buttons_added">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
											
											</div>
											<button class="primary-btn" name="carttt" >Cart</button>
										
										
										
										</span>
									</div>

									
							</div>
										


											
											
								</div>

</form>


							</div>	
                         
																											
				
					
						 <div class="tab-pane fade" id="pills-bread" role="tabpanel" aria-labelledby="pills-bread-tab">
							<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
							<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-9">
									<h4>Pita Bread</h4>
									<p>
										Originating in the Middle East, pita is a leavened flatbread made of wheat flour. They are cooked at high temperatures, causing the liquid in the dough to escape. This forms a large air bubble in the center, which becomes a pocket when cut in half — great for a hand-held falafel sandwich. They're also perfect for dipping when cut into wedges and toasted.</p>
								</div>
								<div class="col-lg-3 flex-row d-flex price-size">
									<div class="s-price col">
										<h4>Price</h4>
										<span>₹ 135</span>
									</div>
									<div class="s-price col">
										<h4>Quantity</h4>
										<span>
											
										    <div class="quantity buttons_added">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
											
											</div>
											<button class="primary-btn" name="login">Cart</button>
										
										
										
										</span>
									</div>

									
							</div>
							</div>	
							
							
							</form>
							
							<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
							<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-9">
									<h4>Rye bread</h4>
									<p>
Rye bread is made with a combination of bread flour and rye flour, giving it an assertive rye flavor and a tight crumb. Caraway or dill seeds are often added for an earthy flavor. Rye bread is what gives pastrami and corned beef sandwiches their signature flavor.	</p>
								</div>
								<div class="col-lg-3 flex-row d-flex price-size">
									<div class="s-price col">
										<h4>Price</h4>
										<span>₹115</span>
									</div>
									<div class="s-price col">
										<h4>Quantity</h4>
										<span>
											
										    <div class="quantity buttons_added">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
											
											</div>
											<button class="primary-btn" name="loginn">Cart</button>
										
										
										
										</span>
									</div>

									
							</div>
							</div>	
							
							
							</form>
							
							
							<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
							<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-9">
									<h4>Sourdough bread</h4>
									<p>
										Sourdough is a yeasted bread made from a starter — a fermented mixture of flour and water that makes many batches of bread. In fact, it can be kept for a VERY long time! The resulting loaf has a substantial crust with a soft, chewy center and large air bubbles. It makes a BOMB grilled cheese!	</p>
								</div>
								<div class="col-lg-3 flex-row d-flex price-size">
									<div class="s-price col">
										<h4>Price</h4>
										<span>₹ 95</span>
									</div>
									<div class="s-price col">
										<h4>Quantity</h4>
										<span>
											
										    <div class="quantity buttons_added">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
											
											</div>
											<button class="primary-btn" name="loginnn">Cart</button>
										
										
										
										</span>
									</div>

									
							</div>
							</div>	
							
							
							</form>
							
							
							
							
						 </div>












						  <div class="tab-pane fade" id="pills-burger" role="tabpanel" aria-labelledby="pills-burger-tab">
							
							
						
							<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
							<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-9">
									<h4>Patty Burger</h4>
									<p>
										This homage to the classic American burger joint serves great food. The patties are made with Double Gold American beef from Wisconsin, served in a potato milk bun. The double cheeseburger is the signature option.
										Chosen by Shane Osborn of Arcane, Hong Kong	</p>
								</div>
								<div class="col-lg-3 flex-row d-flex price-size">
									<div class="s-price col">
										<h4>Price</h4>
										<span>₹ 145</span>
									</div>
									<div class="s-price col">
										<h4>Quantity</h4>
										<span>
											
										    <div class="quantity buttons_added">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
											
											</div>
											<button class="primary-btn" name="lgn">Cart</button>
										
										
										
										</span>
									</div>

									
							</div>
							</div>		
</form>							






				<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
							<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-9">
									<h4>Cheddar-and-Onion Smashed Burgers</h4>
									<p>
										Inspired by the sliders at White Manna in Hackensack, New Jersey, Adam Fleischman creates beef patties by flattening balls of ground meat on the griddle. Tip: Burger purists handle ground meat as little as possible; over-working the beef can create a tight, meatloaf texture.	</p>
								</div>
								<div class="col-lg-3 flex-row d-flex price-size">
									<div class="s-price col">
										<h4>Price</h4>
										<span>₹ 115</span>
									</div>
									<div class="s-price col">
										<h4>Quantity</h4>
										<span>
											
										    <div class="quantity buttons_added">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
											
											</div>
											<button class="primary-btn" name="lgnn">Cart</button>
										
										
										
										</span>
									</div>

									
							</div>
							</div>		
</form>			







				<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
							<div class="single-menu-list row justify-content-between align-items-center">
								<div class="col-lg-9">
									<h4>Chile-Stuffed Cheeseburger</h4>
									<p>
										The gooey filling for these juicy burgers was inspired by the Mexican dip chile con queso, made with melted cheese and roasted chiles.	</p>
								</div>
								<div class="col-lg-3 flex-row d-flex price-size">
									<div class="s-price col">
										<h4>Price</h4>
										<span>₹ 135</span>
									</div>
									<div class="s-price col">
										<h4>Quantity</h4>
										<span>
											
										    <div class="quantity buttons_added">
												<input type="button" value="-" class="minus"><input type="number" step="1" min="1" max="5" name="quantity" value="1" title="Qty" class="input-text qty text" size="4" pattern="" inputmode=""><input type="button" value="+" class="plus">
											
											</div>
											<button class="primary-btn" name="lgnnn">Cart</button>
										
										
										
										</span>
									</div>

									
							</div>
							</div>		
</form>			



						  </div>

						</div>





	
					</div>
				</div>	
			</section>
		    <!-- End menu-list Area -->						

			<!-- Start about-video Area -->
			<section class="about-video-area section-gap">
				<div class="container">			
					<div class="row align-items-center">
						<div class="col-lg-6 about-video-left">
							<h6 class="text-uppercase">Brand new app to blow your mind</h6>
							<h1>
								We’ve made a life <br>
								that will change you 
							</h1>
							<p>
								<span>We are here to listen from you deliver exellence</span>
							</p>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed doeiusmo d tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<a class="primary-btn" href="#">Get Started Now</a>
						</div>
						<div class="col-lg-6 about-video-right justify-content-center align-items-center d-flex">
							<a class="play-btn" href="https://www.youtube.com/watch?v=ARA0AxrnHdM"><img class="img-fluid mx-auto" src="img/play.png" alt=""></a>
						</div>
					</div>
				</div>	
			</section>
			<!-- End about-video Area -->							
				    																			
			<!-- start footer Area -->		
			<footer class="footer-area section-gap">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>About Us</h6>
								<p>
									If you own an Iphone, you’ve probably already worked out how much fun it is to use it to watch movies-it has that.
								</p>							
							</div>
						</div>
						<div class="col-lg-5  col-md-6 col-sm-6">
							<div class="single-footer-widget">
								<h6>Newsletter</h6>
								<p>Stay update with our latest</p>
								<div class="" id="mc_embed_signup">
									<form target="_blank" novalidate="true" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get" class="form-inline">
										<input class="form-control" name="EMAIL" placeholder="Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email Address'" required="" type="email">
			                            	<button class="click-btn"><i class="lnr lnr-arrow-right" aria-hidden="true"></i></button>
			                            	<div style="position: absolute; left: -5000px;">
												<input name="b_36c4fd991d266f23781ded980_aefe40901a" tabindex="-1" value="" type="text">
											</div>
										<div class="info"></div>
									</form>
								</div>
							</div>
						</div>						
						<div class="col-lg-2 col-md-6 col-sm-6 social-widget">
							<div class="single-footer-widget">
								<h6>Follow Us</h6>
								<p>Let us be social</p>
								<div class="footer-social d-flex align-items-center">
									<a href="#"><i class="fa fa-facebook"></i></a>
									<a href="#"><i class="fa fa-twitter"></i></a>
									<a href="#"><i class="fa fa-dribbble"></i></a>
									<a href="#"><i class="fa fa-behance"></i></a>
								</div>
							</div>
						</div>	
						<div class="col-lg-12">
							<p class="footer-text"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>								
						</div>													
					</div>
				</div>
			</footer>	
			<!-- End footer Area -->	

			<script src="js/vendor/jquery-2.2.4.min.js"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
			<script src="js/vendor/bootstrap.min.js"></script>			
			<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
  			<script src="js/easing.min.js"></script>			
			<script src="js/hoverIntent.js"></script>
			<script src="js/superfish.min.js"></script>	
			<script src="js/jquery.ajaxchimp.min.js"></script>
			<script src="js/jquery.magnific-popup.min.js"></script>	
 			<script src="js/jquery-ui.js"></script>			
			<script src="js/owl.carousel.min.js"></script>						
			<script src="js/jquery.nice-select.min.js"></script>							
			<script src="js/mail-script.js"></script>	
			<script src="js/main.js"></script>	
		</body>
	</html>