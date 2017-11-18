<?php
/*
Single Post Template: [single offers]
Description: This part is optional, but helpful for describing the Post Template
*/
get_header(); ?>

<section class="slider-container inner">
  <div class="slider" style="background-image : url(<?php echo CDN_URL.get_field('top_cover'); ?>);"></div>
</section>

<section class="media">
  <div class="text-center padding-btm">
    <a href="#ScrollDown" id="ScrollDown"><span class="arrowDown"></span></a>
  </div>
  <div class="clearfix"></div>
  <div id="ScrollDown"></div>
  <div class="breadcrumb">
   <a href="<?php echo esc_url( $category_link ); ?>"><span><i class="fa fa-angle-left"></i>  Retour aux actualités</span></a>
  </div>
  <div class="text-center container actu">
      <h1 class="text-center title"><?php the_title(); ?></h1>
      <div class="date text-center">Le 25/01/2015</div>
      <div class="actu-content">
        <?php while (have_posts()) : the_post(); ?>
        <?php the_content(); ?>
        <?php endwhile; ?>
      </div>
  </div>
  <div class="clearfix padding-btm"></div>
</section>

<?php get_footer(); ?>