<?php
include 'config.php';


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,600,700" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:200,300,400,500,600,700" rel="stylesheet">
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
			
				<a href="index.html" class="navbar-brand brand"><img src="images/midaslogo1.png" style="width:70px; height: 125px; padding-bottom: 66px;"></a>
			<a href="index.html" class="navbar-brand brand" style="padding-top: 36px;"> MIDAS </a>
			<!-- <img src="images/midaslogo1.png" alt="image"> -->
			
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone"><a href="">Home</a></li>
				<li class="propClone"><a style="color: red;" href="buy">Buy/Hire</a></li>
				<li class="propClone"><a style="color: red;" href="/sell">Sell</a></li>
				<li class="propClone"><a href="checkout.html">About</a></li>
				<li class="propClone"><a href="contact/index.php">Contact</a></li>
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
<!-- LATEST ITEMS =============================-->
<div class="item content">
	<div class="container toparea">
		<div class="row text-center">
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
		
	 <?php 
                            $select = mysqli_query($con, "SELECT * FROM all_items ORDER BY id desc LIMIT 6");
                            while ($data = mysqli_fetch_assoc($select)) {
                           
                           
                            ?>
	<div class="row">
		<div class="col-md-4">
			<div class="productbox">
				<div class="fadeshop">
					<div class="captionshop text-center" style="display: none;">
						<h3><?php  echo $data["category"]        ?></h3>
						<p>
							 <?php  echo $data["name"]        ?></
						</p>
						<p>
							<!-- <a href="#" class="learn-more detailslearn"><i class="fa fa-shopping-cart"></i> Purchase</a> -->
							<!-- <a href="#" class="learn-more detailslearn"><i class="fa fa-link"></i> Details</a> -->
							<a href="buy/purchase/?buy=<?php  echo $data["id"] ?>" class="learn-more detailslearn"><i class="fa fa-link"></i>
														Details
													</a>
						</p>
					</div>
					<span class="maxproduct"><img src="admin/createpost/uploadd/<?php echo $data['image']; ?>" alt=""></span>
				</div>
				<div class="product-details">
					<a href="#">
					<h1><?php  echo $data["name"]        ?></h1>
					</a>
					<span class="price">
					<span class="edd_price"><?php  echo $data["price"]        ?></span>
					</span>
				</div>
			</div>
		</div>
		<?php 

	}?>
	
		
	</div>
</div>
</div>
</section>


<!-- BUTTON =============================-->
<div class="item content">
	<div class="container text-center">
		<a href="<?php echo base_url ?>/buy" class="homebrowseitems">Browse All items
		<div class="homebrowseitemsicon">
			<i class="fa fa-star fa-spin"></i>
		</div>
		</a>
	</div>
</div>
</div>
</div>
</div>
<hr>
<br>
<br>
<br>
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
	
	
	
<br/>


<!-- AREA =============================-->

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
<script src="js/jquery-.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/anim.js"></script>
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
