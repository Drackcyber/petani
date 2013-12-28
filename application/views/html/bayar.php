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
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/js/fancybox/jquery.fancybox.css">
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
					Welcome to ShopFine, <a href="<?php echo base_url(); ?>index.php/login">Login</a> or <a href="register.html">Create new account</a>
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
				
				<div class="span12">

					<article class="blog-article">
						<center>
							<div class="blog-img">
								<img src="<?php echo base_url() ?>assets/img/694x246.jpg" alt="Blog image">
							</div><!--end blog-img-->
						</center>

						<div class="blog-content">
							<div class="blog-content-title">
								<h2><a href="#" class="invarseColor">Info Cara Bayar</a></h2>
							</div>
							<div class="clearfix">
								<ul class="unstyled blog-content-date">
									<li class="pull-left"><i class="icon-calendar"></i> 18 Jan, 2013</li>
									<li class="pull-left"><i class="icon-pencil"></i> <a href="#">Huseyin</a></li>
								</ul>
							</div>
							<div class="blog-content-entry">
								<p>
									Berikut ini adalah nomor rekening yang digunakan untuk pembayaran di petani.com
								</p>

								<blockquote>
									<li>Bank BCA, dengan no. rekening : 037-318-8015 (<strong>A/n : drackcyber</strong>)</li>
									<li>Bank BNI, dengan no. rekening : 028-578-2253 (<strong>A/n : drackcyber</strong>)</li>
			                    	
								</blockquote>

								<p>
									<strong>Catatan : </strong> <br>
									<font color="#FF0000">Setelah biaya pemesanan telah anda transfer ke salah satu rekening diatas, silahkan login kembali dan konfirmasikan kepada kami melalui menu Konfirmasi Pembayaran </font>
								</p>
							</div>
						</div><!--end blog-content-->
					</article><!--end article-->

					<div class="about-author well">
						<div class="pull-left">
							<a href="#"><img src="<?php echo base_url() ?>assets/img/72x72.jpg" alt="author avatar"></a>
						</div>
						<div>
							<h4>About: <a href="#">John Doe</a></h4>
							<p>
								consectetur adipiscing eli. Nulla tristique posuere felis vel pretium. Sed sit amet nisi elit. Nulla nec congue elit. Nunc vitae dui ornare mi varius placerat. 
							</p>
						</div>
					</div><!--end about-author-->

				</div><!--end span12-->

			</div><!--end row-->

		</div><!--end conatiner-->

		<br><br>

		<div class="container">
			<div class="row">
				<div class="span12">
					<p>© Copyrights 2013 for petanionline.com</p>
				</div>
			</div>
		</div>
		</footer>
		<!--end footer-->

	</div><!--end mainContainer-->

	<!-- JS
	================================================== -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.1/jquery-ui.min.js"></script>
    <!-- jQuery.Cookie -->
	<script src="<?php echo base_url() ?>assets/js/jquery.cookie.js"></script>
	<!-- bootstrap -->
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <!-- flexslider -->
    <script src="<?php echo base_url() ?>assets/js/jquery.flexslider-min.js"></script>
    <!-- cycle2 -->
    <script src="<?php echo base_url() ?>assets/js/jquery.cycle2.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/jquery.cycle2.carousel.min.js"></script>
    <!-- tweets -->
    <script src="<?php echo base_url() ?>assets/js/jquery.tweet.js"></script>
    <!-- placeholder -->
    <script src="<?php echo base_url() ?>assets/js/jquery.placeholder.min.html"></script>
    <!-- fancybox -->
    <script src="<?php echo base_url() ?>assets/js/fancybox/jquery.fancybox.js"></script>
    <!-- custom function-->
    <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
    
</body>

</html>