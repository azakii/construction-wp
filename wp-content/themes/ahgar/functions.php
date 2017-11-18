<?php
define("CDN_URL", "http://localhost/ahgar/cdn");


add_action( 'wp_enqueue_scripts', 'csp_enqueue_scripts' );
function csp_theme_setup() {
	automatic_feed_links(false);
	remove_action( 'wp_head', 'wp_generator' ); // <meta name="generator" content="WordPress x.x.x" />
	remove_action( 'wp_head', 'wlwmanifest_link' ); // <link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://domaine.com/wp-includes/wlwmanifest.xml" />
	remove_action( 'wp_head', 'rsd_link' ); // <link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://domaine.com/xmlrpc.php?rsd" />
	remove_action( 'wp_head', 'wp_shortlink_wp_head', 10, 0 ); // <link rel='shortlink' href='http://domaine.com/?p=xxx' />
	remove_action( 'wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0 ); // <link rel='prev' title='Titre de votre article précédent' href='http://domaine.com/?p=xxx' />  &  <link rel='next' title='Titre de votre article suivant' href='http://domaine.com/?p=xxx' />
	remove_action( 'wp_head', 'start_post_rel_link', 10, 0 ); // <link rel='start' title='Titre de votre premier article' href='http://domaine.com/premier-article/' />
	remove_action( 'wp_head', 'wp_dlmp_l10n_style' ); // Retire le code en ligne du head (pour certains plugins).
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 ); // Retire le script pour les emoticons.
	remove_action( 'wp_print_styles', 'wp_dlmp_styles' ); // Retire les injections de balises link dans le head.
	remove_action( 'wp_print_styles', 'print_emoji_styles' ); // Retire le style pour les emoticons.
	add_theme_support( 'menus' ); // Active la gestion des menus
	add_theme_support( 'post-thumbnails' ); // Active les miniatures
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	function custom_excerpt_length( $length ) { return 20; } // Nombre de mots pour un extrait
}
function csp_enqueue_scripts() {
	wp_register_style( 'CSS', CDN_URL.'/style.css', array(), null, 'all' ); 		wp_enqueue_style( 'CSS' );
}

add_filter( 'wp_default_scripts', 'dequeue_jquery_migrate' );
function dequeue_jquery_migrate( &$scripts) {
	if(!is_admin()){
		$scripts->remove( 'jquery');
		$scripts->add( 'jquery', false, array( 'jquery-core' ), '1.10.2' );
	}
}

function my_cdn_upload_url() {
    return 'http://localhost/ahgar/cdn/uploads/';
}
add_filter( 'pre_option_upload_url_path', 'my_cdn_upload_url' );


//hide admin bar
 
show_admin_bar( false );

 
//////////// options
if( function_exists('acf_add_options_page') ) {
	acf_add_options_page();
	acf_add_options_page('Header');
	acf_add_options_page('Footer');
}

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'cagnard Theme' ),
    'secondary' => __( 'Footer Menu', 'cagnard Theme' ),
) );

	


// post thumbnails
if ( function_exists('add_theme_support') )
add_theme_support('post-thumbnails');

// expert content
function new_excerpt_length($length) {
	return 19 ;
}
add_filter('excerpt_length', 'new_excerpt_length');


function new_excerpt_more($more) {
	global $post;
	return '';
}
add_filter('excerpt_more', 'new_excerpt_more');



//scripts call to Footer
function add_theme_scripts() {
    if (!is_admin()) {
 
        // scripts
		
		
	    wp_enqueue_script('modernizr',  CDN_URL.'/js/vendor/modernizr-2.8.3.min.js',array('jquery'));

	    wp_enqueue_script('jqueryWeb',  CDN_URL.'/js/vendor/jquery-1.12.0.min.js',array('jquery'));

		wp_enqueue_script('bootstrap',  CDN_URL.'/js/bootstrap.min.js',array('jquery'));
        
		wp_enqueue_script('owl_carousel',  CDN_URL.'/js/owl.carousel.min.js',array('jquery'));

		wp_enqueue_script('nivo_slider',  CDN_URL.'/lib/custom-slider/js/jquery.nivo.slider.js',array('jquery'));        
        
		wp_enqueue_script('home_js',  CDN_URL.'/lib/custom-slider/home.js',array('jquery'));        
        
		wp_enqueue_script('meanmenu',  CDN_URL.'/js/jquery.meanmenu.min.js',array('jquery'));        
        
		wp_enqueue_script('wow_js',  CDN_URL.'/js/wow.min.js',array('jquery'));        
        
		wp_enqueue_script('plugins',  CDN_URL.'/js/plugins.js',array('jquery'));        
        
		wp_enqueue_script('scrollUp',  CDN_URL.'/js/jquery.scrollUp.min.js',array('jquery'));        
        
		wp_enqueue_script('isotope',  CDN_URL.'/js/isotope.pkgd.js',array('jquery'));        
        
		wp_enqueue_script('colorbox',CDN_URL.'/js/jquery.colorbox-min.js',array('jquery'));

		wp_enqueue_script('main',CDN_URL.'/js/main.js',array('jquery'));

		}
}

add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

function remove_head_scripts() {
    remove_action('wp_head', 'wp_print_scripts');
    remove_action('wp_head', 'wp_print_head_scripts', 9);
    remove_action('wp_head', 'wp_enqueue_scripts', 1);
    add_action('wp_footer', 'wp_print_scripts', 5);
    add_action('wp_footer', 'wp_enqueue_scripts', 5);
    add_action('wp_footer', 'wp_print_head_scripts', 5);
}
add_action( 'wp_enqueue_scripts', 'remove_head_scripts' );


//Remove automatic_loading_js------------//

add_filter( 'wpcf7_load_js', '__return_false' );
add_filter( 'wpcf7_load_css', '__return_false' );

add_action( 'init', function() {

    // Remove the REST API endpoint.
    remove_action('rest_api_init', 'wp_oembed_register_route');

    // Turn off oEmbed auto discovery.
    // Don't filter oEmbed results.
    remove_filter('oembed_dataparse', 'wp_filter_oembed_result', 10);

    // Remove oEmbed discovery links.
    remove_action('wp_head', 'wp_oembed_add_discovery_links');

    // Remove oEmbed-specific JavaScript from the front-end and back-end.
    remove_action('wp_head', 'wp_oembed_add_host_js');
}, PHP_INT_MAX - 1 );


add_filter( 'wp_default_scripts', 'remove_jquery_migrate' );

function remove_jquery_migrate( &$scripts)
{
    if(!is_admin())
    {
        $scripts->remove( 'jquery');
        $scripts->add( 'jquery', false, array( 'jquery-core' ), '1.11.1' );
    }
}
function jquery_cdn() {
   if (!is_admin()) {
      wp_deregister_script('jquery');
      wp_register_script('jquery', '', false, '1.8.3');
      wp_enqueue_script('jquery');
   }
}
add_action('init', 'jquery_cdn');


if ( !is_admin() ) {
    add_action( 'init', 'my_init' ); 

    function my_init() {
        wp_deregister_script( 'bootstrap.min' );
    }
}


// breadcrumb	
function the_breadcrumb() {
		echo '<ul>';
	if (!is_home()) {
		echo '<li><a href="';
		echo get_option('الرئيسية');
		echo '">';
		echo 'الرئيسية';
		echo "</a> / </li>";
		if (is_category() || is_single()) {
			echo '<li>';
			the_category(' </li><li> ');
			if (is_single()) {
				echo "</li><li>";
				the_title();
				echo '</li>';
			}
		} elseif (is_page()) {
			echo '<li>';
			echo the_title();
			echo '</li>';
		}
	}
	elseif (is_tag()) {single_tag_title();}
	elseif (is_day()) {echo"<li>Archive for "; the_time('F jS, Y'); echo'</li>';}
	elseif (is_month()) {echo"<li>Archive for "; the_time('F, Y'); echo'</li>';}
	elseif (is_year()) {echo"<li>Archive for "; the_time('Y'); echo'</li>';}
	elseif (is_author()) {echo"<li>Author Archive"; echo'</li>';}
	elseif (isset($_GET['paged']) && !empty($_GET['paged'])) {echo "<li>Blog Archives"; echo'</li>';}
	elseif (is_search()) {echo"<li>Search Results"; echo'</li>';}
	echo '</ul>';
}