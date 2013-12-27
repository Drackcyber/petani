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
					<ul class="pull-right inline">
						<li><a class="invarseColor" href="#">My Account</a></li>
						<li class="divider-vertical"></li>
						<li><a class="invarseColor" href="#">My Wish List (5)</a></li>
						<li class="divider-vertical"></li>
						<li><a class="invarseColor" href="#">Shoping Cart</a></li>
						<li class="divider-vertical"></li>
						<li><a class="invarseColor" href="#">Checkout</a></li>
					</ul>
					<p class="pull-left">
					Welcome to ShopFine, <a href="login.html">Login</a> or <a href="register.html">Create new account</a>
					</p>
				</div><!--end container-->
			</div><!--end upperHeader-->

			<div class="middleHeader">
				<div class="container">

					<div class="middleContainer clearfix">

					<div class="siteLogo pull-left">
						<h1><a href="index-2.html">ShopFine</a></h1>
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
							    $ <span class="caret"></span>
							</a>
							<ul class="dropdown-menu currency" role="menu">
								<li><a href="#">$</a></li>
								<li class="divider"></li>
								<li><a href="#">¥</a></li>
								<li class="divider"></li>
								<li><a href="#">£</a></li>
								<li class="divider"></li>
								<li><a href="#">€</a></li>
							</ul>
						</div>
						<div class="btn-group">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    EN <span class="caret"></span>
							</a>
							<ul class="dropdown-menu language" role="menu">
								<li><a href="#">FR</a></li>
								<li class="divider"></li>
								<li><a href="#">CH</a></li>
								<li class="divider"></li>
								<li><a href="#">AR</a></li>
							</ul>
						</div>

						<div class="btn-group">
							<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
							    <i class="icon-shopping-cart"></i> 3 Items
							    <span class="caret"></span>
							</a>
							<div class="dropdown-menu cart-content pull-right">
								<table class="table-cart">
									<tbody>
									<tr>
										<td class="cart-product-info">
											<a href="#"><img src="<?php echo base_url() ?>assets/img//72x72.jpg" alt="product image"></a>
											<div class="cart-product-desc">
												<p><a class="invarseColor" href="#">Foliomania the designer portfolio brochure</a></p>
												<ul class="unstyled">
													<li>Available: Yes</li>
													<li>Color: Black</li>
												</ul>
											</div>
										</td>
										<td class="cart-product-setting">
											<p><strong>1x-$500.00</strong></p>
											<a href="#" class="remove-pro" rel="tooltip" data-title="Delete"><i class="icon-trash"></i></a>
										</td>
									</tr>
									<tr>
										<td class="cart-product-info">
											<a href="#"><img src="<?php echo base_url() ?>assets/img//72x72.jpg" alt="product image"></a>
											<div class="cart-product-desc">
												<p><a class="invarseColor" href="#">Foliomania the designer portfolio brochure</a></p>
												<ul class="unstyled">
													<li>Available: Yes</li>
													<li>Color: Black</li>
												</ul>
											</div>
										</td>
										<td class="cart-product-setting">
											<p><strong>2x-$450.00</strong></p>
											<a href="#" class="remove-pro" rel="tooltip" data-title="Delete"><i class="icon-trash"></i></a>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td class="cart-product-info">
											<a href="#" class="btn btn-small">Vew cart</a>
											<a href="#" class="btn btn-small btn-primary">Checkout</a>
										</td>
										<td>
											<h3>TOTAL<br>$1,598.30</h3>
										</td>
									</tr>
								</tfoot>
								</table>
							</div>
						</div>
					</div><!--end pull-right-->

					</div><!--end middleCoontainer-->

				</div><!--end container-->
			</div><!--end middleHeader-->

			<div class="mainNav">
				<div class="container">
					<div class="navbar">
					      	
				      	<ul class="nav">
				      		<li class="active"><a href="#"><i class="icon-home"></i></a></li>
				      		<li>
				      			<a href="#">Pages &nbsp;<i class="icon-caret-down"></i></a>
				      			<div>
					      			<ul>
					      				<li><a href="index-2.html"> <span>-</span> index1</a></li>
					      				<li><a href="index2.html"> <span>-</span> index2</a></li>
					      				<li><a href="account.html"> <span>-</span> account</a></li>
					      				<li><a href="login.html"> <span>-</span> login</a></li>
					      				<li><a href="register.html"> <span>-</span> register</a></li>
					      				<li><a href="cart.html"> <span>-</span> Cart</a></li>
					      				<li><a href="wishlist.html"> <span>-</span> wishlist</a></li>
					      				<li><a href="checkout.html"> <span>-</span> Checkout</a></li>
					      				<li><a href="compare.html"> <span>-</span> Compare</a></li>
					      				<li><a href="contact.html"> <span>-</span> Contact</a></li>
					      				<li><a href="search.html"> <span>-</span> Search</a></li>
					      				<li><a href="blog.html"> <span>-</span> blog</a></li>
					      				<li><a href="post.html"> <span>-</span> post</a></li>
					      				<li><a href="category_grid.html"> <span>-</span> category grid</a></li>
					      				<li><a href="category_grid.html"> <span>-</span> category list</a></li>
					      				<li><a href="product_details1.html"> <span>-</span> product details1</a></li>
					      				<li><a href="product_details2.html"> <span>-</span> product details2</a></li>
					      			</ul>
					      		</div>
				      		</li>
				      		<li>
				      			<a href="#">Women &nbsp;<i class="icon-caret-down"></i></a>
				      			<div>
					      			<ul>
					      				<li><a href="#"> <span>-</span> Dresses (2)</a></li>
					      				<li><a href="#"> <span>-</span> Jackets &amp; Coats (4)</a></li>
					      				<li><a href="#"> <span>-</span> Skirts (0)</a></li>
					      				<li><a href="#"> <span>-</span> Suits &amp; Tailoring (82)</a></li>
					      				<li><a href="#"> <span>-</span> Tops (58)</a></li>
					      				<li><a href="#"> <span>-</span> Shoes (15)</a></li>
					      				<li><a href="#"> <span>-</span> Shorts (54) </a></li>
					      			</ul>
					      		</div>
				      		</li>
				      		<li>
				      			<a href="#">Men &nbsp;<i class="icon-caret-down"></i></a>
				      			<div>
					      			<ul>
					      				<li><a href="#"> <span>-</span> Dresses (2)</a></li>
					      				<li><a href="#"> <span>-</span> Jackets &amp; Coats (4)</a></li>
					      				<li><a href="#"> <span>-</span> Skirts (0)</a></li>
					      				<li><a href="#"> <span>-</span> Suits &amp; Tailoring (82)</a></li>
					      				<li><a href="#"> <span>-</span> Tops (58)</a></li>
					      				<li><a href="#"> <span>-</span> Shoes (15)</a></li>
					      				<li><a href="#"> <span>-</span> Shorts (54) </a></li>
					      			</ul>
					      		</div>
				      		</li>
				      		<li><a href="#">Children</a></li>
				      		<li><a href="#">FootWear</a></li>
				      		<li>
				      			<a href="#">Accessories &nbsp;<i class="icon-caret-down"></i></a>
				      			<div>
					      			<ul>
					      				<li><a href="#"> <span>-</span> Dresses (2)</a></li>
					      				<li><a href="#"> <span>-</span> Jackets &amp; Coats (4)</a></li>
					      				<li><a href="#"> <span>-</span> Skirts (0)</a></li>
					      				<li><a href="#"> <span>-</span> Suits &amp; Tailoring (82)</a></li>
					      				<li><a href="#"> <span>-</span> Tops (58)</a></li>
					      				<li><a href="#"> <span>-</span> Shoes (15)</a></li>
					      				<li><a href="#"> <span>-</span> Shorts (54) </a></li>
					      			</ul>
					      		</div>
				      		</li>
				      		<li><a href="#">OutLet</a></li>
				      		<li><a href="#">Designers</a></li>
				      	</ul><!--end nav-->

					</div>
				</div><!--end container-->
			</div><!--end mainNav-->	
			
		</header>
		<!-- end header -->



		<div class="container">

			<div class="row">
				
				<aside class="span3">
				<div class="aside-inner">
					<div class="special">
						<div class="titleHeader clearfix">
							<h3>Special</h3>
						</div><!--end titleHeader-->

						<ul class="vProductItemsTiny">
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url() ?>assets/img//92x92.jpg" alt=""></a>
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
									<a href="#"><img src="<?php echo base_url() ?>assets/img//92x92.jpg" alt=""></a>
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
									<a href="#"><img src="<?php echo base_url() ?>assets/img//92x92.jpg" alt=""></a>
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
									<a href="#"><img src="<?php echo base_url() ?>assets/img//92x92.jpg" alt=""></a>
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
								</div>
							</li>
						</ul>
					</div><!--end special-->



					<div class="special">
						<div class="titleHeader clearfix">
							<h3>Featured</h3>
						</div><!--end titleHeader-->

						<ul class="vProductItemsTiny">
							<li class="span4 clearfix">
								<div class="thumbImage">
									<a href="#"><img src="<?php echo base_url() ?>assets/img//92x92.jpg" alt=""></a>
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
									<a href="#"><img src="<?php echo base_url() ?>assets/img//92x92.jpg" alt=""></a>
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
									<a href="#"><img src="<?php echo base_url() ?>assets/img//92x92.jpg" alt=""></a>
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
									<a href="#"><img src="<?php echo base_url() ?>assets/img//92x92.jpg" alt=""></a>
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
								</div>
							</li>
						</ul>
					</div><!--end special-->

				</div><!--end aside-inner-->
				</aside><!--end span3-->


				<div class="span9">
					<div class="row">

						<div class="product-details clearfix">
							<div class="span5">
								<div class="product-title">
									<h4>Foliomania the designer portfolio brochure</h4>
								</div>
								<div class="product-img">
									<a class="fancybox" href="<?php echo base_url() ?>assets/img//650x700.jpg"><img src="<?php echo base_url() ?>assets/img//372x370.jpg" alt=""></a>
								</div><!--end product-img-->
								<div class="product-img-thumb">
									<a class="fancybox" href="<?php echo base_url() ?>assets/img//650x700.jpg"><img src="<?php echo base_url() ?>assets/img//68x60.jpg" alt=""></a>
									<a class="fancybox" href="<?php echo base_url() ?>assets/img//650x700.jpg"><img src="<?php echo base_url() ?>assets/img//68x60.jpg" alt=""></a>
									<a class="fancybox" href="<?php echo base_url() ?>assets/img//650x700.jpg"><img src="<?php echo base_url() ?>assets/img//68x60.jpg" alt=""></a>
									<a class="fancybox" href="<?php echo base_url() ?>assets/img//650x700.jpg"><img src="<?php echo base_url() ?>assets/img//68x60.jpg" alt=""></a>
								</div><!--end flexslider-thumb-->
							</div><!--end span5-->

							<div class="span4">
								<div class="product-set">
									<div class="product-price">
										<span><span class="strike-through">$200.00</span> $150.00</span>
									</div><!--end product-price-->
									<div class="product-rate clearfix">
										<ul class="rating">
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
										</ul>
										<span>18 Review(s) <a href="#">Make a Review</a></span>
									</div><!--end product-inputs-->
									<div class="product-info">
										<dl class="dl-horizontal">
										  <dt>Availabilty:</dt>
										  <dd>Available In Stock</dd>

										  <dt>Product Code:</dt>
										  <dd>No. CtAw9458</dd>

										  <dt>Manfactuer:</dt>
										  <dd>Nicka Corparation</dd>

										   <dt>Review Points:</dt>
										  <dd>25 Points</dd>
										</dl>
									</div><!--end product-info-->
									<div class="product-inputs">
										<form method="#" action="#">
											<div class="controls-row">
											<select class="span2" name="#">
												<option>-- Select Color --</option>
												<option value="">Red</option>
												<option value="">Blue</option>
												<option value="">Brown</option>
											</select>
											<select class="span2" name="#">
												<option>-- Select Size --</option>
												<option value="">Size 36</option>
												<option value="">Size 12</option>
												<option value="">Size 18</option>
											</select>
											</div><!--end controls-row-->

											<div class="controls-row">
											<input type="text" class="span2" name="" value="" placeholder="input...">
											<input type="text" class="span2" name="" value="" placeholder="input...">
											</div><!--end controls-row-->

											<div class="controls-row">
											<input type="text" class="span3" name="" value="" placeholder="input...">
											<input type="text" class="span1" name="" value="" placeholder="input...">
											</div><!--end controls-row-->

											<textarea name="" class="span4" placeholder="textarea..."></textarea>

											<div class="input-append">
											<input class="span1" type="text" name="" value="" placeholder="QTY">
											<button class="btn btn-primary"><i class="icon-shopping-cart"></i> Add To Cart</button>

											<button class="btn" rel="tooltip" data-title="+To Wishlist"><i class="icon-heart"></i></button>

											<button class="btn" rel="tooltip" data-title="+To Compare"><i class="icon-refresh"></i></button>
											</div>
											
										</form><!--end form-->

									</div><!--end product-inputs-->
								</div><!--end product-set-->
							</div><!--end span4-->

						</div><!--end product-details-->

					</div><!--end row-->


					<div class="product-tab">
						<ul class="nav nav-tabs">
						  <li class="active">
						  	<a href="#descraption" data-toggle="tab">Descraption</a>
						  </li>
						  <li>
						  	<a href="#specfications" data-toggle="tab">Specfications</a>
						  </li>
						  <li>
						  	<a href="#return-info" data-toggle="tab">Return Info</a>
						  </li>
						  <li class="dropdown">
						  	<a href="#" class="dropdown-toggle" data-toggle="dropdown">Reviews <i class="icon-caret-down"></i></a>
						  	<ul class="dropdown-menu">
						  		<li><a href="#read-review" data-toggle="tab">Read Reviews</a></li>
						  		<li><a href="#make-review" data-toggle="tab">Make Review</a></li>
						  	</ul>
						  </li>
						</ul>
						<div class="tab-content">
							<div class="tab-pane active" id="descraption">
								<p>
									Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer a eros neque. In sapien est, malesuada non interdum id, cursus vel neque. Curabitur quis sem vel justo dictum ullamcorper ac vehicula lacus. Duis nisi dolor, suscipit id adipiscing ac, vestibulum in magna. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Fusce ut metus sem. Etiam in odio eu metus ornare convallis in sit amet lorem.

									Suspendisse potenti. In non nisl sem, eu rutrum augue. Donec eu dolor vel massa ornare cursus id eget erat. Mauris in ante magna. Curabitur eget risus mi, non interdum lacus. Duis magna leo, rhoncus eget malesuada quis, semper a quam. Morbi imperdiet imperdiet lectus ac pellentesque. Integer diam sem, vulputate in feugiat ut, porttitor eu libero. Integer non dolor ipsum. Cras condimentum mattis turpis quis vestibulum. Nulla a augue ipsum. Donec aliquam velit vel metus fermentum dictum sodales metus condimentum. Nullam id massa quis nulla molestie ultrices eget sed nulla. Cras feugiat odio at tellus euismod lacinia.
								</p>
								<p>
									Suspendisse potenti. In non nisl sem, eu rutrum augue. Donec eu dolor vel massa ornare cursus id eget erat. Mauris in ante magna. Curabitur eget risus mi, non interdum lacus. Duis magna leo, rhoncus eget malesuada quis, semper a quam. Morbi imperdiet imperdiet lectus ac pellentesque. Integer diam sem, vulputate in feugiat ut, porttitor eu libero. Integer non dolor ipsum. Cras condimentum mattis turpis quis vestibulum. Nulla a augue ipsum. Donec aliquam velit vel metus fermentum dictum sodales metus condimentum. Nullam id massa quis nulla molestie ultrices eget sed nulla. Cras feugiat odio at tellus euismod lacinia.
									
								</p>
							</div>
							<div class="tab-pane" id="specfications">
								<table class="table table-compare">
									<tr>
										<td class="aligned-color"><h5>Momery</h5></td>
										<td>Test One</td>
										<td>16GB</td>
									</tr>
									<tr>
										<td class="aligned-color"><h5>Processor</h5></td>
										<td>No. of Cores</td>
										<td>No.4</td>
									</tr>
									<tr>
										<td class="aligned-color"><h5>Momery</h5></td>
										<td>Test One</td>
										<td>16GB</td>
									</tr>
									<tr>
										<td class="aligned-color"><h5>Processor</h5></td>
										<td>No. of Cores</td>
										<td>No.4</td>
									</tr>
								</table>
							</div>
							<div class="tab-pane" id="return-info">
								<h4>Read our Returning info</h4><br>
								<p>
									Suspendisse potenti. In non nisl sem, eu rutrum augue. Donec eu dolor vel massa ornare cursus id eget erat. Mauris in ante magna. Curabitur eget risus mi, non interdum lacus. Duis magna leo, rhoncus eget malesuada quis, semper a quam. Morbi imperdiet imperdiet lectus ac pellentesque. Integer diam sem, vulputate in feugiat ut, porttitor eu libero. Integer non dolor ipsum. Cras condimentum mattis turpis quis vestibulum. Nulla a augue ipsum. Donec aliquam velit vel metus fermentum dictum sodales metus condimentum. Nullam id massa quis nulla molestie ultrices eget sed nulla. Cras feugiat odio at tellus euismod lacinia.
									
								</p>
							</div>

							<div class="tab-pane" id="read-review">
								<div class="single-review clearfix">
									<div class="review-header">
										<ul class="rating">
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
										</ul>
										<h4>John Doe</h4>
										<small>26/11/2012</small>
									</div><!--end review-header-->

									<div class="review-body">
										<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									</div><!--end review-body-->
								</div><!--end single-review-->

								<div class="single-review clearfix">
									<div class="review-header">
										<ul class="rating">
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
										</ul>
										<h4>John Doe</h4>
										<small>26/11/2012</small>
									</div><!--end review-header-->

									<div class="review-body">
										<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									</div><!--end review-body-->
								</div><!--end single-review-->

								<div class="single-review clearfix">
									<div class="review-header">
										<ul class="rating">
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-on"></i></li>
											<li><i class="star-off"></i></li>
											<li><i class="star-off"></i></li>
										</ul>
										<h4>John Doe</h4>
										<small>26/11/2012</small>
									</div><!--end review-header-->

									<div class="review-body">
										<p>Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									</div><!--end review-body-->
								</div><!--end single-review-->
							</div>

							<div class="tab-pane" id="make-review">
								<form method="#" action="#" class="form-horizontal">
									<div class="control-group">
									    <label class="control-label" for="inputName">Your Name <span class="text-error">*</span></label>
									    <div class="controls">
									      <input type="text" name="#" id="inputName" placeholder="John Doe...">
									    </div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputReview">Your Review <span class="text-error">*</span></label>
									    <div class="controls">
									      <textarea name="#" id="inputReview" placeholder="Put your review here..."></textarea>
									    </div>
									</div>
									<div class="control-group">
										<label class="control-label" for="inputReview">Your Review <span class="text-error">*</span></label>
									    <div class="controls">
									       <div class="btn-group" data-toggle="buttons-radio">
											  <button type="button" class="btn" rel="tooltip" data-title="1/5"><i class="icon-star"></i></button>
											  <button type="button" class="btn" rel="tooltip" data-title="2/5"><i class="icon-star"></i></button>
											  <button type="button" class="btn" rel="tooltip" data-title="3/5"><i class="icon-star"></i></button>
											  <button type="button" class="btn" rel="tooltip" data-title="4/5"><i class="icon-star"></i></button>
											  <button type="button" class="btn" rel="tooltip" data-title="5/5"><i class="icon-star"></i></button>
										   </div>
									    </div>
									</div>
									<div class="control-group">
									    <div class="controls">
									      <button type="submit" class="btn btn-primary" name="submit">Add Review</button>
									    </div>
									</div>
								</form><!--end form-->
							</div>
						</div><!--end tab-content-->
					</div><!--end product-tab-->


					<div class="related-product">
						<div class="titleHeader clearfix">
							<h3>Related Product</h3>
						</div><!--end titleHeader-->

						<div class="row">
						<ul class="hProductItems clearfix">
							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url() ?>assets/img//212x192.jpg" alt=""></a>
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
										<button class="btn btn-small" data-title="+To WishList" data-placement="top" rel="tooltip">
											<i class="icon-heart"></i>
										</button>
									
										<button class="btn btn-small" data-title="+To Compare" data-placement="top" rel="tooltip">
											<i class="icon-refresh"></i>
										</button>
									</div>

									<ul class="rating">
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-on"></i></li>
										<li><i class="star-off"></i></li>
									</ul>
								</div>
							</li>
							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url() ?>assets/img//212x192.jpg" alt=""></a>
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
										<button class="btn btn-small" data-title="+To WishList" data-placement="top" rel="tooltip">
											<i class="icon-heart"></i>
										</button>
									
										<button class="btn btn-small" data-title="+To Compare" data-placement="top" rel="tooltip">
											<i class="icon-refresh"></i>
										</button>
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
							<li class="span3 clearfix">
								<div class="thumbnail">
									<a href="#"><img src="<?php echo base_url() ?>assets/img//212x192.jpg" alt=""></a>
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
										<button class="btn btn-small" data-title="+To WishList" data-placement="top" rel="tooltip">
											<i class="icon-heart"></i>
										</button>
									
										<button class="btn btn-small" data-title="+To Compare" data-placement="top" rel="tooltip">
											<i class="icon-refresh"></i>
										</button>
									</div>
								</div>
							</li>
						</ul>
						</div><!--end row-->
					</div><!--end related-product-->

				</div><!--end span9-->

			</div><!--end row-->

		</div><!--end conatiner-->


		<!--begain footer-->
		<footer>
		<div class="footerOuter">
			<div class="container">
				<div class="row-fluid">

					<div class="span6">
						<div class="titleHeader clearfix">
							<h3>Usefull Links</h3>
						</div>

						
						<div class="usefullLinks">
							<div class="row-fluid">
								<div class="span6">
									<ul class="unstyled">
										<li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> About Us</a></li>
										<li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Delivery Information</a></li>
										<li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Privecy Police</a></li>
										<li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Tarms &amp; Condations</a></li>
									</ul>
								</div>

								<div class="span6">
									<ul class="unstyled">
										<li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Surf Brands</a></li>
										<li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Customer Support</a></li>
										<li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Special Gifs</a></li>
										<li><a class="invarseColor" href="#"><i class="icon-caret-right"></i> Browse Site Map</a></li>
									</ul>
								</div>
							</div>
						</div>

					</div><!--end span6-->

					<div class="span3">
						<div class="titleHeader clearfix">
							<h3>Contact Info</h3>
						</div>

						<div class="contactInfo">
							<ul class="unstyled">
								<li>
									<button class="btn btn-small">
										<i class="icon-volume-up"></i>
									</button>
									Call Us: <a class="invarseColor" href="#">5246-4697-891</a>
								</li>
								<li>
									<button class="btn btn-small">
										<i class="icon-envelope-alt"></i>
									</button>
									<a class="invarseColor" href="#">shopfine@shopfine.com</a>
								</li>
								<li>
									<button class="btn btn-small">
										<i class="icon-map-marker"></i>
									</button>
									22 Avenue Park, Los Angeles
								</li>
							</ul>
						</div>

					</div><!--end span3-->

					<div class="span3">
						<div class="titleHeader clearfix">
							<h3>Newslatter</h3>
						</div>

						<div class="newslatter">
							<form method="#" action="#">
								<input class="input-block-level" type="text" name="email" value="" placeholder="Your Name..." Name="">
								<input class="input-block-level" type="text" name="email" value="" placeholder="Your E-Mail..." Name="">
								<button class="btn btn-block" type="submit" name="">Join Us Now</button>
							</form>
						</div>

					</div><!--end span3-->

				</div><!--end row-fluid-->

			</div><!--end container-->
		</div><!--end footerOuter-->

		<div class="container">
			<div class="row">
				<div class="span12">
					<ul class="payments inline pull-right">
						<li class="visia"></li>
						<li class="paypal"></li>
						<li class="electron"></li>
						<li class="discover"></li>
					</ul>
					<p>© Copyrights 2012 for shopfine.com</p>
				</div>
			</div>
		</div>
		</footer>
		<!--end footer-->

	</div><!--end mainContainer-->


	<!-- Sidebar Widget
	================================================== -->
	<div class="switcher">
		<h3>Site Switcher</h3>
		<a class="Widget-toggle-link">+</a>

		<div class="switcher-content clearfix">
			<div class="layout-switch">
				<h4>Layout Style</h4>
				<div class="btn-group">
					<a id="wide-style" class="btn">Wide</a>
	  				<a id="boxed-style" class="btn">Boxed</a>
				</div>
			</div><!--end layout-switch-->

			<div class="color-switch clearfix">
				<h4>Color Style</h4>
				<a id="orange-color" class="color-switch-link">orange</a>
				<a id="blue-color" class="color-switch-link">blue</a>
				<a id="green-color" class="color-switch-link">green</a>
				<a id="brown-color" class="color-switch-link">brown</a>
				<a id="red-color" class="color-switch-link">red</a>
			</div><!--end color-switch-->

			<div class="pattern-switch">
				<h4>BG Pattern</h4>
				<a style="background:url(img/backgrounds/retina_wood.png);">retina_wood</a>
				<a style="background:url(img/backgrounds/bgnoise_lg.png);">bgnoise_lg</a>
				<a style="background:url(img/backgrounds/purty_wood.png);">purty_wood</a>
				<a style="background:url(img/backgrounds/irongrip.png);">irongrip</a>
				<a style="background:url(img/backgrounds/low_contrast_linen.png);">low_contrast_linen</a>
				<a style="background:url(img/backgrounds/tex2res5.png);">tex2res5</a>
				<a style="background:url(img/backgrounds/wood_pattern.png);">wood_pattern</a>
			</div><!--end pattern-switch-->

		</div><!--end switcher-content-->
	</div>
	<!-- End Sidebar Widget-->


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