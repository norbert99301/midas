<?php
include '../config.php';


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="../css/bootstrap.min.css" rel="stylesheet">
<link href="/https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="../css/style.css" rel="stylesheet">
<link href="/https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="/https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
</head>
<body>


<!-- HEADER =============================-->
<header class="item header margin-top-0">
<div class="wrapper">
	<nav role="navigation" class="navbar navbar-white navbar-embossed navbar-lg navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button data-target="#navbar-collapse-02" data-toggle="collapse" class="navbar-toggle" type="button">
			<i class="fa fa-bars"></i>
			<span class="sr-only">Toggle navigation</span>
			</button>
			
				<a href="index.html" class="navbar-brand brand"><img src="../images/midaslogo.svg"></a>
			<a href="index.html" class="navbar-brand brand"> MIDAS </a>
			<!-- <img src="images/midaslogo.svg" alt="image"> -->
			
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone"><a href="index.html">Home</a></li>
				<li class="propClone"><a style="color: red;" href="shop.html">Buy/Hire</a></li>
				<li class="propClone"><a style="color: red;" href="<?php echo base_url ?>/sell">Sell</a></li>
				<li class="propClone"><a href="checkout.html">About</a></li>
				<li class="propClone"><a href="contact.html">Contact</a></li>
			</ul>
		</div>
	</div>
	</nav>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-homeimage">
					<div class="maintext-image" data-scrollreveal="enter top over 1.5s after 0.1s">
						 Invest
					</div>
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.3s">
						 It's the real gold
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>


<!-- STEPS =============================-->
<div class="item content">
	<div class="container toparea">
		<div class="row text-center">
			<div class="col-md-4">
				<div class="col editContent">
					<span class="numberstep"><i class="fa fa-shopping-cart"></i></span>
					<h3 class="numbertext">Real Estate</h3>
					<p>
						 Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
					</p>
				</div>
				<!-- /.col-md-4 -->
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4 editContent">
				<div class="col">
					<span class="numberstep"><i class="fa fa-gift"></i></span>
					<h3 class="numbertext">RAW MATERIALS</h3>
					<p>
						 Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
					</p>
				</div>
				<!-- /.col -->
			</div>
			<!-- /.col-md-4 col -->
			<div class="col-md-4 editContent">
				<div class="col">
					<span class="numberstep"><i class="fa fa-download"></i></span>
					<h3 class="numbertext">OIL AND GAS</h3>
					<p>
						 Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Nullam quis risus eget urna mollis ornare vel eu leo. Cras justo odio, dapibus ac facilisis in, egestas eget quam.
					</p>
				</div>
			</div>
		</div>
	</div>
</div>
	
	
	<!-- LATEST ITEMS =============================-->
<section class="item content">
	<div class="container">
		<div class="underlined-title">
			<div class="editContent">
				<h1 class="text-center latestitems">LATEST ITEMS</h1>
			</div>
			<div class="wow-hr type_short">
				<span class="wow-hr-h">
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				<i class="fa fa-star"></i>
				</span>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="productbox">
					<div class="fadeshop">
						<div class="captionshop text-center" style="display: none;">
							<h3>Item Name</h3>
							<p>
								 This is a short excerpt to generally describe what the item is about.
							</p>
							<p>
								<a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a>
								<a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a>
							</p>
						</div>
						<span class="maxproduct"><img src="images/product1-1.jpg" alt=""></span>
					</div>
					<div class="product-details">
						<a href="#">
						<h1>Calypso Theme</h1>
						</a>
						<span class="price">
						<span class="edd_price">$49.00</span>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>


<!-- BUTTON =============================-->
<div class="item content">
	<div class="container text-center">
		<a href="shop.html" class="homebrowseitems">Browse All items
		<div class="homebrowseitemsicon">
			<i class="fa fa-star fa-spin"></i>
		</div>
		</a>
	</div>
</div>
<br/>


<!-- AREA =============================-->
<div class="item content">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<i class="fa fa-notification infoareaicon"></i>
				<div class="infoareawrap">
					<h1 class="text-center subtitle">General Questions</h1>
					<p>
						 Want to buy a theme but not sure if it's got all the features you need? Trouble completing the payment? Or just want to say hi? Send us your message and we will answer as soon as possible!
					</p>
					<p class="text-center">
						<a href="#">- Get in Touch -</a>
					</p>
				</div>
			</div>
			
		</div>
	</div>
</div>
<hr>

<!-- TESTIMONIAL =============================-->
<div class="item content">
	<div class="container">
		<div class="col-md-10 col-md-offset-1">
			<div class="slide-text">
				<div>
					<h2><span class="uppercase">Our Team</span></h2>
					<img src="http://wowthemes.net/demo/salique/salique-boxed/images/temp/avatar2.png" alt="Awesome Support" style="margin-right: 40px;">
					<img src="http://wowthemes.net/demo/salique/salique-boxed/images/temp/avatar2.png" alt="Awesome Support" style="margin-right: 32px;">
					<img src="http://wowthemes.net/demo/salique/salique-boxed/images/temp/avatar2.png" alt="Awesome Support">
					<p>
						 The support... I can only say it's awesome. You make a product and you help people out any way you can even if it means that you have to log in on their dashboard to sort out any problems that customer might have. Simply Outstanding!
					</p>
					<a href="" style="font-size: 18px; text-decoration: underline;">View</a>
				</div>
			</div>
		</div>
	</div>
</div>





<!-- FOOTER =============================-->
<div class="footer text-center">
	<div class="container">
		<div class="row">
			<p class="footernote">
				 Connect with Midas
			</p>
			<ul class="social-iconsfooter">
				<li><a href="#"><i class="fa fa-phone"></i></a></li>
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
				<li><a href="#"><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<p>
				 &copy; 2021 Midas Industries synergy resources<br/>
				Developed by Norbert Madojemu.
			</p>
		</div>
	</div>
</div>

<!-- SCRIPTS =============================-->
<script src="../js/jquery-.js"></script>
<script src="../js/bootstrap.min.js"></script>
<script src="../js/anim.js"></script>
<script>
//----HOVER CAPTION---//	  
jQuery(document).ready(function ($) {
	$('.fadeshop').hover(
		function(){
			$(this).find('.captionshop').fadeIn(150);
		},
		function(){
			$(this).find('.captionshop').fadeOut(150);
		}
	);
});
</script>
	
</body>
</html>