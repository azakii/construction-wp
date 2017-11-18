<?php /* Template Name: contact */ ?>

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

	<div class="page-contact-us-area section-space-93-100">
	<div class="container">
	<div class="row">
	<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
		<div class="page-contact-us-left">
			<h3 class="section-sub-title">معلومات الشركة</h3>
			<p><?php the_field('contct_info') ?></p>
			<ul>
				<li><i class="fa fa-map-marker" aria-hidden="true"></i><?php the_field('address') ?></li>
				<li><i class="fa fa-phone" aria-hidden="true"></i><?php the_field('tel_no') ?></li>
				<li><i class="fa fa-envelope-o" aria-hidden="true"></i><?php the_field('email') ?></li>
			</ul>
		</div>
	</div>
	<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
		<div class="page-contact-us-right">	
		<h3 class="section-sub-title ">ارسل رسالة</h3>	
			<div class="row">
				<div class="contact-form"> 
					<form id="contact-form" role="form" novalidate="true">
						<fieldset>
						<?php echo do_shortcode('[contact-form-7 id="5" title="Contact form 1"]') ?>

						</fieldset>
					</form>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>

<?php get_footer(); ?>
