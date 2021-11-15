
<?php 

include '../../config.php';


?>




<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="generator" content="">
<link href="../../css/bootstrap.min.css" rel="stylesheet">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
<link href="../../css/style.css" rel="stylesheet">
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
			<a href="index.html" class="navbar-brand brand"> Midas </a>
		</div>
		<div id="navbar-collapse-02" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="propClone"><a style="color: red;" href="<?php echo base_url ?>/buy">Buy/Hire</a></li>
				<li class="propClone"><a style="color: red;" href="<?php echo base_url ?>/sell">Sell</a></li>
				<li class="propClone"><a href="checkout.html">About</a></li>
				<li class="propClone"><a href="<?php echo base_url ?>/contact">Contact</a></li>
				<li class="propClone"><a href="<?php echo base_url ?>">Home</a></li>
			</ul>
		</div>
	</div>
	</nav>
	<?php
                       if (isset($_GET["buy"])) {
                       	  $current_item = $_GET["buy"];  
                       	  $select_current_item = mysqli_query($con, "SELECT * FROM all_items WHERE id = '$current_item'");
                       	  $data_current_item = mysqli_fetch_assoc($select_current_item);
                       	}
?>

	 <?php 
                            // $select = mysqli_query($con, "SELECT * FROM all_items ORDER BY id desc");
                            // while ($data = mysqli_fetch_assoc($select)) {
                           
                           
                            ?>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="text-pageheader">
					<div class="subtext-image" data-scrollreveal="enter bottom over 1.7s after 0.0s">
						<?php  echo $data_current_item["category"]        ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</header>

<!-- CONTENT =============================-->
<section class="item content">
<div class="container toparea">
	<div class="underlined-title">
		<div class="editContent">
			<h1 class="text-center latestitems"><?php  echo $data_current_item["name"]        ?></h1>
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
		<div class="col-md-8">
			<div class="productbox">
				
				<div class="clearfix">
				</div>
				<br/>
				<div class="product-details text-left">
					<span class="maxproduct"><img src="../../admin/createpost/uploadd/<?php echo $data_current_item['image']; ?>" alt="" style="width: 400px; height:250px;"></span>
					
				</div>
			</div>
		</div>
		<div class="col-md-4">
			
			<div class="properties-box">
				<ul class="unstyle">
					<li><b class="propertyname">Description:</b> <?php  echo $data_current_item["description"]        ?></li>
					<li><b class="propertyname">Location:</b> <?php  echo $data_current_item["location"]        ?></li>
					<li><b class="propertyname">Price:</b> <?php  echo $data_current_item["price"]        ?></li>
					
				</ul>
			</div>
			<br>
			<a href="#" class="btn btn-buynow">Contact Agent</a>
		</div>

	</div>
</div>
</section>
<?php 
// }
?>

<!-- CALL TO ACTION =============================-->


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

<!-- Load JS here for greater good =============================-->
<script src="../../js/jquery-.js"></script>
<script src="../../js/bootstrap.min.js"></script>
<script src="../../js/anim.js"></script>

</body>
</html>