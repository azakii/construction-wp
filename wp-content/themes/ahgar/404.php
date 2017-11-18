<div class="page">
<?php 
/*
 * 404 Template File.
 */
get_header(); ?>

    <section>
    	<!--website-breadcrumbs-->
        <div class="col-md-12 bread-row">
        	<p align="center"style="width: 100%;text-align: center;"><img style="-webkit-user-select: none;width: 20%;margin-top: 40px;" src="<?php echo CDN_URL?>/assets/images/404error.png"></p>
            <div class="container jobile-container">
            	<div class="col-md-12 no-padding-lr bread-center">
                    <h2 align="center"><?php _e('404 Page not found','jobile') ?></h2>
                </div>
                <div class="col-md-12 no-padding-lr font-14 breadcrumb site-breadcumb text-center" align="center">
               		<a href="<?php echo esc_url( home_url( '/' ) ); ?>" style="
                        margin-top: 10px;
                        color: #fff;
                        padding: 5px 20px;
                        font-size: 14px;
                        font-weight: 500;
                        background: #9eca45;
                        border: 1px solid #7ea821;
                        border-radius: 3px;
                        font-family: 'Raleway', sans-serif;
                        cursor: pointer;
                        transition: all 0.3s ease;
                        display: inline-block;
                        width: auto;
                        margin:0 auto;
                        display:inline-block;
                    ">Go Home</a>
                </div>    
            </div>
        </div>
        <div class="clearfix" style="margin-top: 10em;"></div>

        <!--breadcrumbs end-->
        <div class="container jobile-container"> 
        <div class="clearfix"></div>
         </article>
		</div>
    </section>
<?php get_footer(); ?>
</div>