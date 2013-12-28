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

				<div class="span8">
					<div class="flexslider">
						<ul class="slides">
							<li><img src="<?php echo base_url() ?>assets/img/614x300.jpg" slt="slide1"></li>
							<li><img src="<?php echo base_url() ?>assets/img/614x300.jpg" slt="slide2"></li>
							<li><img src="<?php echo base_url() ?>assets/img/614x300.jpg" slt="slide3"></li>
						</ul>
					</div><!--end flexslider-->
				</div><!--end span8-->


				<div class="span4">

					<div id="homeSpecial">
						<div class="titleHeader clearfix">
							<h3>Special</h3>
							<div class="pagers">
								<div class="btn-toolbar">
									<div class="btn-group">
										<button class="btn btn-mini vNext"><i class="icon-caret-down"></i></button>
										<button class="btn btn-mini vPrev"><i class="icon-caret-up"></i></button>
									</div>
									
								</div>
							</div>
						</div><!--end titleHeader-->


						<ul class="vProductItems cycle-slideshow vertical clearfix"
					    data-cycle-fx="carousel"
					    data-cycle-timeout=0
					    data-cycle-slides="> li"
					    data-cycle-next=".vPrev"
					    data-cycle-prev=".vNext"
					    data-cycle-carousel-visible="2"
					    data-cycle-carousel-vertical="true"
					    >
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url() ?>assets/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the title here
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>
									<ul class="rating">
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url() ?>assets/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>
									<ul class="rating">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url() ?>assets/img/92x92.jpg" alt=""></a>
								</div>
								<div class="thumbSetting">
									<div class="thumbTitle">
										<a href="#" class="invarseColor">
											Foliomania the designer portfolio
										</a>
									</div>
									<div class="thumbPrice">
										<span>$150.00</span>
									</div>
									<ul class="rating">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-off"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
						</ul>
					</div><!--end special-->
				</div><!--end span4-->

			</div><!--end row-->



			<div class="row">
				<div class="span12">

					<div id="featuredItems">
						
						<div class="titleHeader clearfix">
							<h3>Featured Items</h3>
							<div class="pagers">
								<div class="btn-toolbar">
									
								</div>
							</div>
						</div><!--end titleHeader-->

						<div class="row">
							<ul class="hProductItems clearfix">
								<li class="span3 clearfix">
									<div class="thumbnail">
										<a href="#"><img src="<?php echo base_url() ?>assets/img/212x192.jpg" alt=""></a>
									</div>
									<div class="thumbSetting">
										<div class="thumbTitle">
											<a href="#" class="invarseColor">
												Foliomania the designer portfolio brochure
											</a>
										</div>
										<div class="thumbPrice">
											<span><span class="strike-through">$200.00</span> $150.00</span>
										</div>

										<div class="thumbButtons">
											<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
												<i class="icon-shopping-cart"></i>
											</button>
										</div>
									</div>
								</li>
								<li class="span3 clearfix">
									<div class="thumbnail">
										<a href="#"><img src="<?php echo base_url() ?>assets/img/212x192.jpg" alt=""></a>
									</div>
									<div class="thumbSetting">
										<div class="thumbTitle">
											<a href="#" class="invarseColor">
												Foliomania the designer portfolio brochure
											</a>
										</div>
										<div class="thumbPrice">
											<span>$150.00</span>
										</div>

										<div class="thumbButtons">
											<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
												<i class="icon-shopping-cart"></i>
											</button>
										</div>
									</div>
								</li>
								<li class="span3 clearfix">
									<div class="thumbnail">
										<a href="#"><img src="<?php echo base_url() ?>assets/img/212x192.jpg" alt=""></a>
									</div>
									<div class="thumbSetting">
										<div class="thumbTitle">
											<a href="#" class="invarseColor">
												Foliomania the designer portfolio brochure
											</a>
										</div>
										<div class="thumbPrice">
											<span>$150.00</span>
										</div>

										<div class="thumbButtons">
											<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
												<i class="icon-shopping-cart"></i>
											</button>
										</div>
									</div>
								</li>
								<li class="span3 clearfix">
									<div class="thumbnail">
										<a href="#"><img src="<?php echo base_url() ?>assets/img/212x192.jpg" alt=""></a>
									</div>
									<div class="thumbSetting">
										<div class="thumbTitle">
											<a href="#" class="invarseColor">
												Foliomania the designer portfolio brochure
											</a>
										</div>
										<div class="thumbPrice">
											<span>$150.00</span>
										</div>

										<div class="thumbButtons">
											<button class="btn btn-primary btn-small" data-title="+To Cart" data-placement="top" rel="tooltip">
												<i class="icon-shopping-cart"></i>
											</button>
										</div>
									</div>
								</li>
							</ul>
						</div><!--end row-->
					</div><!--end featuredItems-->
				</div><!--end span12-->
			</div><!--end row-->

			


			<div class="row">
				<div class="span12">
					<div id="brands">
						<div class="titleHeader clearfix">
							<h3>Brands</h3>
							<div class="pagers">
								<div class="btn-toolbar">
									
								</div>
							</div>
						</div><!--end titleHeader-->
						<ul class="brandList clearfix">
							<li>
								<a href="#"><img src="<?php echo base_url() ?>assets/img/Layer-4.png" alt="logo"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo base_url() ?>assets/img/Layer-1.png" alt="logo"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo base_url() ?>assets/img/Layer-3.png" alt="logo"></a>
							</li>
							<li>
								<a href="#"><img src="<?php echo base_url() ?>assets/img/Layer-2.png" alt="logo"></a>
							</li>
						</ul>
					</div><!--end brands-->
				</div><!--end span12-->
			</div><!--end row-->

		</div><!--end conatiner-->

		<br><br>			

		<div class="container">
			<div class="row">
				<div class="span12">
					<p>@ Copyrights 2013 for petanionline.com</p>
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