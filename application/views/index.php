<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
	<head>
		<title>Brnd-logo Website Template | Home :: w3layouts</title>
		<link href="<?php echo base_url()?>assets/css/bootstrap.css" rel='stylesheet' type='text/css' />
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="<?php echo base_url()?>assets/js/jquery.min.js"></script>
		 <!-- Custom Theme files -->
		<link href="<?php echo base_url()?>assets/css/style.css" rel='stylesheet' type='text/css' />
   		 <!-- Custom Theme files -->
   		 <!---- start-smoth-scrolling---->
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/move-top.js"></script>
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/easing.js"></script>
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>

		 <!---- start-smoth-scrolling---->
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
		</script>
		<!----webfonts--->
		<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>
		<!---//webfonts--->
		<!----start-top-nav-script---->
		<script>
			$(function() {
				var pull 		= $('#pull');
					menu 		= $('nav ul');
					menuHeight	= menu.height();
				$(pull).on('click', function(e) {
					e.preventDefault();
					menu.slideToggle();
				});
				$(window).resize(function(){
	        		var w = $(window).width();
	        		if(w > 320 && menu.is(':hidden')) {
	        			menu.removeAttr('style');
	        		}
	    		});
			});
		</script>
		<!----//End-top-nav-script---->
	</head>
	<body>
		<!----container---->
		<div class="container">
			<!----top-header---->
			<div class="top-header">
				<div class="logo">
					<a href="index.html"><img src="<?php echo base_url()?>assets/images/logo.png" title="barndlogo" /></a>
				</div>
				<div class="top-header-info">
					<div class="top-contact-info">
						<ul class="unstyled-list list-inline">
							<li><span class="phone"> </span>090 - 223 44 66</li>
							<li><span class="mail"> </span><a href="#">help@trendd.com</a></li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="cart-details">
						<div class="add-to-cart">
							<ul class="unstyled-list list-inline">
								<li><span class="cart"> </span>
									<ul class="cart-sub">
										<li><p>0 Products</p></li>
									</ul>
								</li>
							</ul>
						</div>
						<div class="login-rigister">

						<?php if ( isset($this->session->userdata['logged_in'])){ 
							$username = ($this->session->userdata['logged_in']['username']);
							?>

							<ul class="unstyled-list list-inline">
								<li><a class="login" ><?php echo $username ?> </a></li>
								<li><a class="rigister" href="<?php echo base_url().'index.php/user_authentication/logout/'?>">LOGOUT <span> </span></a></li>
								<div class="clearfix"> </div>
							</ul>

						<?php }else { ?>

							<ul class="unstyled-list list-inline">
								<li><a class="login" href="<?php echo base_url().'index.php/user_authentication/index/'?>">LOGIN</a></li>
								<li><a class="rigister" href="<?php echo base_url().'index.php/user_authentication/logout/'?>">REGISTER <span> </span></a></li>
								<div class="clearfix"> </div>
							</ul>

						<?php } ?>

						</div>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<!----//top-header---->
			<!---top-header-nav---->
			<div class="top-header-nav"> 
			<!----start-top-nav---->
			 <nav class="top-nav main-menu">
					<ul class="top-nav">
						<li><a href="products.html">TITITS </a><span> </span></li>
						<li><a href="products.html">CAMPAINGS</a><span> </span></li>
						<li><a href="products.html">SERVICES</a><span> </span></li>
						<li><a href="products.html">BRANDS</a><span> </span></li>
						<li><a href="products.html">ABOUT US</a></li>
						<div class="clearfix"> </div>
					</ul>
					<a href="#" id="pull"><img src="<?php echo base_url()?>assets/images/nav-icon.png" title="menu" /></a>
			  </nav>
			  <!----End-top-nav---->
			  <!---top-header-search-box--->
			  <div class="top-header-search-box">
			  	<form>
			  		<input type="text" placeholder="Search" required / maxlength="22">
			  		<input type="submit" value=" " >
			  	</form>
			  </div>
			  <!---top-header-search-box--->
						<div class="clearfix"> </div>
			</div>
		</div>
			<!--//top-header-nav---->
			<!----start-slider-script---->
			<script src="<?php echo base_url()?>assets/js/responsiveslides.min.js"></script>
			 <script>
			    // You can also use "$(window).load(function() {"
			    $(function () {
			      // Slideshow 4
			      $("#slider4").responsiveSlides({
			        auto: true,
			        pager: true,
			        nav: true,
			        speed: 500,
			        namespace: "callbacks",
			        before: function () {
			          $('.events').append("<li>before event fired.</li>");
			        },
			        after: function () {
			          $('.events').append("<li>after event fired.</li>");
			        }
			      });
			
			    });
			  </script>
			<!----//End-slider-script---->
			<!-- Slideshow 4 -->
			    <div  id="top" class="callbacks_container">
			      <ul class="rslides" id="slider4">
			        <li>
			          <img src="<?php echo base_url()?>assets/images/slide1.png" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<h1>WILL HELM</h1>
			          		<label>WINTER</label>
			          		<a class="slide-btn" href="#"><span>99.90$</span> <small>GET NOW</small><label> </label></a>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="<?php echo base_url()?>assets/images/slide2.png" alt="">
			          <div class="caption">
			          	<div class="slide-text-info">
			          		<h1>FAST NER2</h1>
			          		<label>Dress Shoe</label>
			          		<a class="slide-btn" href="#"><span>99.90$</span> <small>GET NOW</small><label> </label></a>
			          	</div>
			          </div>
			        </li>
			        <li>
			          <img src="<?php echo base_url()?>assets/images/slide1.png" alt="">
			           <div class="caption">
			           	<div class="slide-text-info">
			          		<h1>WILL HELM</h1>
			          		<label>WINTER</label>
			          		<a class="slide-btn" href="#"><span>99.90$</span> <small>GET NOW</small><label> </label></a>
			          	</div>
			          </div>
			        </li>
			      </ul>
			    </div>
			    <div class="clearfix"> </div>
			<!----- //End-slider---->
			<!----content---->
				<div class="content">
					<div class="container">

				<div class="top-row">
					<div class="col-xs-4">
						<div class="top-row-col1 text-center">
							<h2>WOMAN</h2>
							<img class="r-img text-center" src="<?php echo base_url()?>assets/images/img-w.jpg" title="name" />
							<span><img src="<?php echo base_url()?>assets/images/obj1.png" title="name" /></span>
							<h4>TOTAL</h4>
							<label>357 PRODUCTS</label>
							<a class="r-list-w" href="<?php echo base_url().'index.php/home/product/'.$category[0]['categoryID']?>"><img src="<?php echo base_url()?>assets/images/list-icon.png" title="list" /></a>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="top-row-col1 text-center">
							<h2>MAN</h2>
							<img class="r-img text-center" src="<?php echo base_url()?>assets/images/man-r-img.jpg" title="name" />
							<span><img src="<?php echo base_url()?>assets/images/obj2.png" title="name" /></span>
							<h4>TOTAL</h4>
							<label>357 PRODUCTS</label>
							<a class="r-list-w" href="<?php echo base_url().'index.php/home/product/'.$category[1]['categoryID']?>"><img src="<?php echo base_url()?>assets/images/list-icon.png" title="list" /></a>
						</div>
					</div>
					<div class="col-xs-4">
						<div class="top-row-col1 text-center">
							<h2>KIDS</h2>
							<img class="r-img text-center" src="<?php echo base_url()?>assets/images/kid-r-img.jpg" title="name" />
							<span><img src="<?php echo base_url()?>assets/images/obj3.png" title="name" /></span>
							<h4>TOTAL</h4>
							<label>357 PRODUCTS</label>
							<a class="r-list-w" href="<?php echo base_url().'index.php/home/product/'.$category[2]['categoryID']?>"><img src="<?php echo base_url()?>assets/images/list-icon.png" title="list" /></a>
						</div>
					</div>
					<vdi class="clearfix"> </div>
				</div>
				<!---top-row--->
				<div class="container"> 
				<!----speical-products---->
				<div class="special-products">
					<div class="s-products-head">
						<div class="s-products-head-left">
							<h3>SPECIAL <span>PRODUCTS</span></h3>
						</div>
						<div class="s-products-head-right">
							<a href="products.html"><span> </span>view all products</a>
						</div>
						<div class="clearfix"> </div>
					</div>


					<!----special-products-grids---->
					<div class="special-products-grids">
					 	<?php foreach($product as $d){ ?>
						<div class="col-md-3 special-products-grid text-center">
							<a class="brand-name" href="single-page.html"><img src="<?php echo base_url()?><?php echo $d['productPic1']; ?>" title="name" /></a>
							<a class="product-here" href="single-page.html"><img src="<?php echo base_url()?><?php echo $d['productPic1']; ?>" title="product-name" /></a>
							<h4><a href="<?php echo base_url().'index.php/home/singleProduct/'.$d['productID']?>"><?php echo $d['productName']; ?></a></h4>
							<a class="product-btn" href="<?php echo base_url().'index.php/home/singleProduct/'.$d['productID']?>"><span><?php echo $d['productFixCost']; ?></span><small>GET NOW</small><label> </label></a>
						</div>
						<?php } ?>
						<div class="clearfix"> </div>
					</div>
					<!---//special-products-grids---->


				</div>
				<!---//speical-products---->
				</div>
			<!----content---->
			<!----footer--->
			<div class="footer">
				<div class="container">
					<div class="col-md-3 footer-logo">
						<a href="index.html"><img src="<?php echo base_url()?>assets/images/flogo.png" title="brand-logo" /></a>
					</div>
					<div class="col-md-7 footer-links">
						<ul class="unstyled-list list-inline">
							<li><a href="#"> Faq</a> <span> </span></li>
							<li><a href="#"> Terms and Conditions</a> <span> </span></li>
							<li><a href="#"> Secure Payments</a> <span> </span></li>
							<li><a href="#"> Shipping</a> <span> </span></li>
							<li><a href="contact.html"> Contact</a> </li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="col-md-2 footer-social">
						<ul class="unstyled-list list-inline">
							<li><a class="pin" href="#"><span> </span></a></li>
							<li><a class="twitter" href="#"><span> </span></a></li>
							<li><a class="facebook" href="#"><span> </span></a></li>
							<div class="clearfix"> </div>
						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
			 </div>
			 <div class="clearfix"> </div>
			<!---//footer--->
			<!---copy-right--->
					<div class="copy-right">
						<div class="container">
							<p>Template by <a href="http://w3layouts.com/">W3layouts</a></p>
							<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
							<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
						</div>
					</div>
			<!--//copy-right--->
		</div>
		<!----container---->
	</body>
</html>

