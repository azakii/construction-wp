<?php /* Template Name: Text Pages */ ?>
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

	<div class="page-services-3-top-area section-space-b-less-30">
	<div class="container">
	<div class="row">
	
	<?php
	while ( have_rows('projects_groups' ) ) : the_row();   ?>
	<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
	
	<div class="page-services-3-box">
								<div class="media">
									<div class="featured-box pull-left">
										<div class="overlay">
											<a href="#"><i aria-hidden="true" class="fa fa-chevron-right"></i></a>
										</div>
										<a href="#/"><img class="media-object" alt="featured2" src="<?php the_sub_field('projects_groups_img') ?>"></a>
									</div>
									<div class="media-body">
									<h3 class="section-sub-title"><a href="#/"><?php the_sub_field('projects_groups_title') ?></a></h3>
									<p><?php the_sub_field('projects_groups_txt') ?></p>
									</div>
								</div>
							</div>
	</div>
<?php  endwhile;  ?>
	</div>
	</div>
	</div>
	</div>
			
			
			
<?php get_footer(); ?>