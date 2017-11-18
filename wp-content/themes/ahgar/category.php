<?php
/*
 * Category Template File.
 */
get_header();
?>

<section class="slider-container inner">
  <div class="slider"> <img src="<?php bloginfo('template_url'); ?>/upload/inner-bg.jpg" width="100%" /> </div>
</section>
<section class="media">
  <div class="text-center padding-btm"> <span class="arrowDown scrollDown"></span> </div>
  <div class="clearfix"></div>
  <div id="ScrollDown"></div>
  <div class="text-center container actu">
    <h1 class="text-center title"><?php echo get_cat_name(1);?> </h1>
    <div class="actu-content-list">
      <h2> <?php echo category_description( $cat ); ?> </h2>
    </div>
  </div>
  <div class="list-blocks horizontal">
    <div class="col-md-12 col-lg-12 no-padding">
      <ul class="media-list main-list">
        <?php if(have_posts()) : ?>
        <?php while(have_posts()) : the_post(); ?>
        <li class="media <?php echo (++$j % 2 == 0) ? 'even' : 'odd'; ?>">
          <div class="container">
            <div class="col-md-5"> <a href="<?php the_permalink(); ?>" class="pull-left" title="<?php the_title(); ?>">
              <?php the_post_thumbnail(array(370,230, true)); ?>
              </a>
              <div class="offercontent"><em>14/05/2015  &gt;  30/09/2016</em></div>
            </div>
            <div class="col-md-7">
              <div class="media-body">
                <h4 class="media-heading">OFFRE SPÉCIALE PETITS DÉJEUNERS OFFERTS</h4>
                <div class="short-describtion">Profitez de l'la douceur de l'hiver au Château le Cagnard, au coeur du bourg Médiéval pittoresque des Hauts-de-Cagnes (Cagnes-sur-Mer).</div>
                <div class="long-describtion">
                  <p>Petits déjeuners buffet continentaux offerts dans notre magnifique restaurant au toit coulissant s'ouvrant sur le ciel d’azur. Conditions particulières (offre non remboursable non modifiable). En supplément : La taxe de séjour : 1 € par personne et par jour. Les extras non mentionnés. Restaurant gastronomique : pré réservations auprès de l'hôtel conseillée.</p>
                </div>
              </div>
            </div>
            <div class="row text-right reservation"><a href="#/">Lire la suite</a></div>
          </div>
        </li>
        <?php endwhile; ?>
        <?php else : ?>
        <p>No Posts</p>
        <?php endif; ?>
      </ul>
    </div>
  </div>
  </div>
  <div class="clearfix padding-btm"></div>
</section>
<?php get_footer(); ?>
