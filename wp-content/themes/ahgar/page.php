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
			<!-- Page Services 2 Area Start Here -->
			<div class="page-services-2-area section-space-88-44">
				<div class="container">
					<div class="page-services-2-top">
						<div class="row">
							<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
								<h2 class="section-sub-title-big"><?php the_title(); ?></h2>
								<?php if(have_posts()) : ?>
   <?php while(have_posts()) : the_post(); ?>
<?php the_content(); ?>
   <?php endwhile; ?>
<?php else : ?>
<p>المعذرة, ما تبحث عته غير متوفر هنا</p>
<?php endif; ?>
							</div>
							<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
								<a href="#" ><img class="img-responsive" src="<?php echo get_option('siteurl'); ?>/cdn/img/services/page-services-2-banner.jpg" alt="services-2 banner"></a>
							</div>
						</div>
					</div>
				</div>
			</div>
	        <!-- Page Services 2 Area End Here -->

<?php get_footer(); ?>
