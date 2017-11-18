<?php
/*
 * Page Template File.
 */
get_header();
?>

<section class="slider-container inner">
  <div class="slider">
    <div id="carousel-example-generic" class="carousel slide carousel-fade" data-ride="carousel">
      <div class="carousel-inner">
        <?php 
if( have_rows('images_gallery') ):
    while( have_rows('images_gallery') ) : the_row(); 
        ?>
        <div class="item "> <img src="<?php the_sub_field('upload_slider_images'); ?>" alt=""> </div>
        <?php
			
	endwhile;
	endif;
?>
      </div>
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev"> <span class="glyphicon glyphicon-chevron-left"></span> </a> <a class="right carousel-control" href="#carousel-example-generic" data-slide="next"> <span class="glyphicon glyphicon-chevron-right"></span> </a> </div>
  </div>
  
</section>
<section class="media">
  <div class="text-center padding-btm"> <a href="#ScrollDown" id="ScrollDown"><span class="arrowDown"></span></a> </div>
  <div class="clearfix"></div>
  <div id="ScrollDown"></div>
  <div class="breadcrumb">
    <?php the_breadcrumb(); ?>
  </div>
  <div class="text-center container actu">
    <h1 class="text-center title">
      <?php the_title(); ?>
    </h1>
    <div class="date text-center"> Le
      <?php the_time('j/m/Y') ?>
    </div>
    <div class="actu-content">
      <?php while (have_posts()) : the_post(); ?>
      <?php
				    the_content();
				    wp_link_pages(array(
					'before' => '<div class="page-links">' . __('Pages:', 'jobile'),
					'after' => '</div>',
				    ));
				    ?>
      <?php if (comments_open($post->ID)) { ?>
      <?php } endwhile; ?>
    </div>
  </div>
  <div class="clearfix padding-btm"></div>
</section>
<?php get_footer(); ?>
