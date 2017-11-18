<?php /* Template Name: page-projects */ ?>

<?php get_header(); ?>

	<!-- Inner page Header Banner Area Start Here -->
	<div class="header-bennar-area">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 pull-right">
					<div class="header-bennar-left">
						<h2><?php the_title(); ?></h2>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
					<div class="header-bennar-right text-left">
						<?php the_breadcrumb(); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Inner page Header Banner Area End Here -->
			
			
	<div class="projects-2-featured-area section-space">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class="section-title-area">
		<h2 class="section-title"><?php the_field('page_sub_title') ?></h2>
		<div class="title-bottom-icon">
			<span class="title-bottom-icon-left"></span>
			<i class="fa fa-cubes" aria-hidden="true"></i>
			<span class="title-bottom-icon-right"></span>
		</div>
		<p><?php the_field('page_text') ?></p>
	</div>
		</div>
	</div>
	</div> 
	
	
	
	</div>
	<div class="clearfix"></div>
	
	<div class="container-fluid inner-section-space-top">
	<div class="row featuredContainer" style="position: relative; height: 450.666px;">
	<?php
	while ( have_rows('project_gallery' ) ) : the_row();   ?>
	
		<div class="col-lg-3 col-md-3 col-sm-6 col-xs-6 Buildings Tiling Digging">
			<div class="featured-box">
				<div class="overlay">
					<div class="overlay-top">
						<h3><a href="<?php the_sub_field('project_image') ?>" class="zoom cboxElement" rel="gal"><?php the_sub_field('project_img_title') ?></a></h3>
						<p><?php the_sub_field('project_img_txt') ?></p>
					</div>
					<a href="<?php the_sub_field('project_image') ?>" class="zoom cboxElement" rel="gal"><i class="fa fa-chevron-right" aria-hidden="true"></i></a>
				</div>
				<a href="#"><img src="<?php the_sub_field('project_image') ?>" alt="featured1"></a>
			</div>
		</div>
<?php  endwhile;  ?>
		</div>
	</div>
	</div>

<div class="contact-banner-area section-space">
	        	<div class="overlay"></div>
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 text-left in-responsive-center">
							<a href="<?php echo get_option('siteurl'); ?>/اتصل-بنا/" class="btn-read-more">اتصل بنا<i class="fa fa-chevron-left" aria-hidden="true"></i></a>
						</div>
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 in-responsive-center">
							<h3>تواصل معنا عبر موقعنا الالكتروني</h3>
						</div>	
						
					</div>
				</div> 
			</div>
	


<div class="clients-2-area section-space-88">
				<div class="container">
					<div class="row">
						<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
							<div class="section-title-area">
								<h2 class="section-title">ماذا قال عملائنا عن احجار للتشييد والبناء</h2>
								<div class="title-bottom-icon">
									<span class="title-bottom-icon-left"></span>
									<i class="fa fa-cubes" aria-hidden="true"></i>
									<span class="title-bottom-icon-right"></span>
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="clients-2">
	<?php
	while ( have_rows('clients' ) ) : the_row();   ?>

						<div class="clients-2-box">
								<div class="clients-area-2-top">
									<a href="#"><img class="img-responsive" src="<?php the_sub_field('client_img') ?>" alt="clients1"></a>
									<div class="clients-area-2-top-content">
										<h4><a href="#/"><?php the_sub_field('client_title') ?></a></h4>
										<p><?php the_sub_field('client_position') ?></p>
									</div>
								</div>
								<p><?php the_sub_field('client_comment') ?></p>
							</div>
<?php  endwhile;  ?>
					</div>
					</div> 
				</div>
			</div>
	        <!-- Clients Area End Here -->

			
<?php get_footer(); ?>
