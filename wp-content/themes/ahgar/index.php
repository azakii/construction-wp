<?php /* Template name: Home page */ ?>
<?php get_header(); ?>

<div class="services-4-area section-space-88-100">
				<div class="container">
					<div class="row">
						<div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
							<div class="services-4-area-left">
								<div class="services-4-area-left-top">
									<h2><?php the_field('about_title') ?></h2>
									<p><?php the_field('about_txt') ?></p>
								</div>
								<div class="services-4-area-left-bottom">
									<div class="row">
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="services-4-area-left-bottom-box">
												<i class="flaticon-cone"></i>
												<h3><a href="#/"><?php the_field('block1_title') ?></a></h3>
												<p><?php the_field('block1_txt') ?></p>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="services-4-area-left-bottom-box">
												<i class="flaticon-compass"></i>
												<h3><a href="#/"><?php the_field('block2_title') ?></a></h3>
												<p><?php the_field('block2_txt') ?></p>
											</div>
										</div>
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
											<div class="services-4-area-left-bottom-box">
												<i class="flaticon-truck"></i>
												<h3><a href="#/"><?php the_field('block3_title') ?></a></h3>
												<p><?php the_field('block3_txt') ?></p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
							<div class="services-4-area-right">
								<a href="#"><img src="<?php bloginfo('url'); ?>/cdn/img/services/services-4-services-main-banner.png"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
	        <!-- Services 4 Area End Here -->
	        <!-- Featured Area Start Here -->
	        <div class="featured-4-area section-space-88-100">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="section-title-area">
								<h2 class="section-title"><?php the_field('art_title') ?></h2>
								<div class="title-bottom-icon">
									<span class="title-bottom-icon-left"></span>
									<i class="fa fa-cubes" aria-hidden="true"></i>
									<span class="title-bottom-icon-right"></span>
								</div>
								<p><?php the_field('art_describtion') ?></p>
							</div>
						</div>
					</div>
				</div>
				<div class="container-fluid inner-section-space-top">
					<div class="row featuredContainer">
					<?php
						while ( have_rows('art_gallery' ) ) : the_row();   ?>
	                    <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 Buildings Tiling Digging">
	                        <div class="featured-box">
	                            <div class="overlay">
	                            	<div class="overlay-top">
	                               		<p><a href="#/"><?php the_sub_field('imgs_title') ?></a></p>
	                               		<p><?php the_sub_field('imgs_subtitle') ?></p>
	                               	</div>
	                            </div>
	                            <a href="<?php the_sub_field('img_gallery') ?>" class="zoom" rel="gal"><img src="<?php the_sub_field('img_gallery') ?>" alt="featured1"></a>
	                        </div>
	                    </div>
						<?php  endwhile;  ?>

						</div>
				</div>
			</div>
	        <!-- Featured Area End Here -->
	        <!-- Video 4 Area Start Here -->
	        <div class="video-4-area section-space-88-100">
	        	<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<h2>نحن نبني <span>مستقبلك</span></h2>
							<p><?php the_field('build_your_future') ?></p>
						</div>
					</div>
				</div>
			</div>
	        <!-- Video 4 Area End Here -->
	        <!-- Brand Area Start Here -->
			<div class="brand-area">
				<div class="container">
					<div class="row">
						<div class="brand">
						<?php
						while ( have_rows('logos' ) ) : the_row();   ?>
							<div class="brand-box">
								<a href="#"><img class="img-responsive" src="<?php the_sub_field('imgs_logos') ?>" alt="brand1"></a>
							</div>
							<?php  endwhile;  ?>

						</div>
					</div>
				</div>
			</div>
	        <!-- Brand Area End Here -->
			<!-- Footer Area Start Here -->
			
			
<?php get_footer(); ?>
