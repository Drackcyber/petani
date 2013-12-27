<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]-->
<head>

	<!-- Basic Page Needs
  ================================================== -->
	<meta charset="utf-8">
	<title>Ecommerce Pentani Online</title>
	<meta name="description" content="">
	<meta name="author" content="Ahmed Saeed">
	<!-- Mobile Specific Metas
  ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- CSS
  ================================================== -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.min.css" media="screen">
	<!-- jquery ui css -->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/jquery-ui-1.10.1.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/customize.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
	<!-- flexslider css-->
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/flexslider.css">
	<!-- fancybox -->
	<link rel="stylesheet"href="<?php echo base_url() ?>assets/js/fancybox/jquery.fancybox.css">
	<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
		<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome-ie7.css">
	<![endif]-->
	<!-- Favicons
	================================================== -->
	<link rel="shortcut icon" href="images/favicon.html">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.html">
	<link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
	<link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
</head>

<body>

	<div id="mainContainer" class="clearfix">

		<!--begain header-->
		<header>
			<div class="upperHeader">
				<div class="container">
					<p class="pull-right inline">
					Welcome to ShopFine, <a href="login.html">Login</a> or <a href="register.html">Create new account</a>
					</p>
				</div><!--end container-->
			</div><!--end upperHeader-->

			<div class="middleHeader">
				<div class="container">

					<div class="middleContainer clearfix">

					<div class="siteLogo pull-left">
						<h1><a href="<?php echo base_url(); ?>">ShopFine</a></h1>
					</div>

					<div class="pull-right">
						<form method="#" action="#" class="siteSearch">
							<div class="input-append">
								<input type="text" class="span2" id="appendedInputButton" placeholder="Search...">
								<button class="btn btn-primary" type="submit" name=""><i class="icon-search"></i></button>
							</div>
						</form>
					</div>

					<div class="pull-right">
						<div class="btn-group">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    <i class="icon-shopping-cart"></i> 0 Items
							    <span class="caret"></span>
							</a>
						</div><!--end pull-right-->
					</div><!--end middleCoontainer-->

					</div><!--end container-->
				</div><!--end middleHeader-->
			</div>

			<div class="mainNav">
				<div class="container">
					<div class="navbar">
					      	
				      	<ul class="nav">
				      		<li class="active"><a href="#"><i class="icon-home"></i></a></li>
				      		<li>
				      			<a href="#">Kategori &nbsp;<i class="icon-caret-down"></i></a>
				      			<div>
					      			<ul>
					      				<li><a href="#"><span>-</span>Pupuk</a></li>
					      				<li><a href="#"><span>-</span>Bibit</a></li>
					      				<li><a href="#"><span>-</span>Mesin</a></li>
					      			</ul>
					      		</div>
				      		</li>
				      		<li><a href="<?php echo base_url(); ?>index.php/katalog">Katalog Produk</a></li>
				      		<li><a href="<?php echo base_url(); ?>index.php/carapesan">Cara Pemesanan</a></li>
				      		<li><a href="<?php echo base_url(); ?>index.php/carabayar">Cara Pembayaran</a></li>
				      		<li><a href="<?php echo base_url(); ?>index.php/contact">Kontak Kami</a></li>
				      	</ul><!--end nav-->

					</div>
				</div><!--end container-->
			</div><!--end mainNav-->
			
		</header>
		<!-- end header -->



		<div class="container">

			<div class="row">

				<div class="span4">
					<div class="contact-info">
						<div class="titleHeader clearfix">
							<h3>Contact Information</h3>
						</div><!--end titleHeader-->

						<address>
						   <h3><i class="icon-pushpin"></i> Address Info:</h3>
						   <h4>PetaniOnline.com</h4>
						    Jln. Raya Janti, no 143, Jogjakarta<br>
						    Indonesia<br>
						    <abbr title="Phone">P:</abbr> (123) 456-7890
						</address> 

						<address>
						   <h3><i class="icon-volume-up"></i> Costumer Services on:</h3>
						    (123) 456-7890 OR (526) 666-7892
						</address>

						<address>
						   <h3><i class="icon-envelope-alt"></i> E-Mail Us on:</h3>
						    <abbr title="Phone">for Support:</abbr> <a href="mailto:example@example.com">admin@petanionline.com</a><br>
						    <abbr title="Phone">for Sales:</abbr> <a href="mailto:example22@example.com">admin@petanionline.com</a>
						</address>
						
					</div><!--end contact-info-->
				</div><!--end span4-->

				<div class="span8">
					<div class="contact-us-form">
						<div class="titleHeader clearfix">
							<h3>Send Us Message</h3>
						</div><!--end titleHeader-->
						<form method="#" action="#">
							<div class="controls controls-row">
							   <input class="span4" type="text" placeholder="Your Name - Required">
							   <input class="span4" type="text" placeholder="Your E-Mail - Required">
							</div>
							<div class="controls">
							   <textarea class="span8" placeholder="You Message..."></textarea>
							</div>
							<div class="controls">
							   <button type="submit" class="btn btn-primary pull-right">Send It</button>
							</div>
						</form><!--end form-->
					</div><!--end contact-us-form-->

				</div><!--end span8-->
				
			</div><!--end row-->

		</div><!--end conatiner-->

		<div class="container">
			<div class="row">
				<div class="span12">
					<p>© Copyrights 2013 for petanionline.com</p>
				</div>
			</div>
		</div>
	</div><!--end mainContainer-->


	<!-- JS
	================================================== -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
    <!-- jQuery.Cookie -->
	<script src="js/jquery.cookie.js"></script>
	<!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- flexslider -->
    <script src="js/jquery.flexslider-min.js"></script>
    <!-- cycle2 -->
    <script src="js/jquery.cycle2.min.js"></script>
    <script src="js/jquery.cycle2.carousel.min.js"></script>
    <!-- tweets -->
    <script src="js/jquery.tweet.js"></script>
    <!-- placeholder -->
    <script src="js/jquery.placeholder.min.html"></script>
    <!-- fancybox -->
    <script src="js/fancybox/jquery.fancybox.js"></script>
    <!-- custom function-->
    <script src="js/custom.js"></script>
    
</body>

</html>