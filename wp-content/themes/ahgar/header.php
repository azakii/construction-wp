<!doctype html>
<html class="no-js" lang="" dir="rtl">
<head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php bloginfo('name'); ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
		<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_option('siteurl'); ?>/cdn/img/animated_favicon1.gif">

		<?php wp_head(); ?>

        <!-- Modernizr Js -->
        <script src=""></script>
    </head>
    <body <?php body_class(); ?>>
    	<div class="wrapper-area">
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->
	    	<!-- Header Area Start Here -->
	    	<header>
				<div class="header-style4-area">
					<div class="header-top-area">
						<div class="container">
							<div class="row">
								<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 pull-right">
									<div class="header-top-left">
										<ul>
											<li><i class="fa fa-phone" aria-hidden="true"></i><a href="tel:+1234567890"> 00201003116192</a></li>
											<li><i class="fa fa-envelope" aria-hidden="true"></i><a href="mailto:info@ahgar-group.com">info@ahgar-group.com</a></li>
										</ul>
									</div>
								</div>
								<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 pull-left">
									<div class="header-top-right">
										<ul>
											<li><a href="https://www.facebook.com/ahgarforconstruction" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
											<!--<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-rss" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
											<li><a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a></li>-->
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- Slider Area Start Here -->
			     	<div class="slider-area" id="slider-area">
			     		<div class="overlay"></div>
						<div class="bend-4 niceties preview-4">
						
							<div id="ensign-nivoslider" class="slides">
								<?php
						while ( have_rows('home_slider' ) ) : the_row();   ?>
								<img src="<?php the_sub_field('image_slider') ?>" alt="" title="#slider-direction-1"/>
								<?php  endwhile;  ?>
							</div>
							<!-- direction 1 -->
							<div id="slider-direction-1" class="t-cn slider-direction">
								<div class="slider-content t-cn s-tb slider-4">
									<div class="title-container s-tb-c title-compress">
										<div class="logo-area">
											<a href="index.html"><img class="img-responsive" src="<?php bloginfo('url'); ?>/cdn/img/logo-4.png" alt="logo"></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
			    	<!-- Slider Area End Here -->
					<div class="main-header-area" id="sticker">
						<div class="container">
							<div class="row">
								<div class="col-lg-12 col-md-12 col-sm-10">
									<div class="logo-area">
										<a href="index.html"><img class="img-responsive" src="<?php bloginfo('url'); ?>/cdn/img/logo-5.png" alt="logo"></a>
									</div>
									<div class="main-menu-area">
										<nav>
										<?php
											wp_nav_menu( array(
											'menu'              => 'primary',
											'theme_location'    => 'primary',
											'depth'             => 3,
											'container'         => '',
											'menu_class'        => '',
											'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
											'dropdown_class'    => '',
											'ul'				=> '',
											'li'				=> '',
											'walker'            => new wp_bootstrap_navwalker())
											);
										?>
										</nav>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<!-- Mobile Menu Area Start -->
				<div class="mobile-menu-area">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="mobile-menu">
									<nav id="dropdown">
										<ul>
											<li><a href="#">Home</a>
												<ul>
													<li><a href="index.html">Home 1</a></li>
													<li><a href="index1.html">Home 2</a></li>
													<li><a href="index2.html">Home 3</a></li>
													<li><a href="index3.html">Home 4</a></li>
												</ul>
											</li>
											<li><a href="about-us.html">About Us</a></li>
											<li><a href="#">Services</a>
												<ul>
													<li><a href="services1.html">Services 1</a></li>
													<li><a href="services2.html">Services 2</a></li>
													<li><a href="services3.html">Services 3</a></li>
													<li><a href="services-details.html">Services Details</a></li>
												</ul>
											</li>
											<li><a href="#">Projects</a>
												<ul>
													<li><a href="projects1.html">Projects 1</a></li>
													<li><a href="projects2.html">Projects 2</a></li>
													<li><a href="projects-details.html">Projects Details</a></li>
												</ul>
											</li>
											<li><a href="#">Pages</a>
												<ul>
													<li><a href="index.html">Home 1</a></li>
													<li><a href="index1.html">Home 2</a></li>
													<li><a href="index2.html">Home 3</a></li>
													<li><a href="index3.html">Home 4</a></li>
													<li><a href="about-us.html">About Us</a></li>
													<li><a href="services1.html">Services 1</a></li>
													<li><a href="services2.html">Services 2</a></li>
													<li><a href="services3.html">Services 3</a></li>
													<li><a href="services-details.html">Services Details</a></li>
													<li><a href="projects1.html">Projects 1</a></li>
													<li><a href="projects2.html">Projects 2</a></li>
													<li><a href="projects-details.html">Projects Details</a></li>
													<li><a href="shop1.html">Shop 1</a></li>
													<li><a href="shop2.html">Shop 2</a></li>
													<li><a href="shop-details.html">Shop Details</a></li>
													<li><a href="news1.html">News 1</a></li>
													<li><a href="news1.html">News 2</a></li>
													<li><a href="news-details.html">News Details</a></li>
													<li><a href="team1.html">Team 1</a></li>
													<li><a href="team2.html">Team 2</a></li>
													<li><a href="team3.html">Team 3</a></li>
													<li><a href="team-details.html">Team Details</a></li>
													<li><a href="404.html">404</a></li>
													<li><a href="contact.html">Contact</a></li>
												</ul>
											</li>
											<li><a href="#">Shop</a>
												<ul>
													<li><a href="shop1.html">Shop 1</a></li>
													<li><a href="shop2.html">Shop 2</a></li>
													<li><a href="shop-details.html">Shop Details</a></li>
												</ul>
											</li>
											<li><a href="#">News</a>
												<ul>
													<li><a href="news1.html">News 1</a></li>
													<li><a href="news1.html">News 2</a></li>
													<li><a href="news-details.html">News Details</a></li>
												</ul>
											</li>
											<li><a href="contact.html">Contact</a></li>
										</ul>
									</nav>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Mobile Menu Area End -->
			</header>
			
			
			
			
			