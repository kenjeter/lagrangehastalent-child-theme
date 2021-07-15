<?php
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

function understrap_remove_scripts() {
    wp_dequeue_style( 'understrap-styles' );
    wp_deregister_style( 'understrap-styles' );

    wp_dequeue_script( 'understrap-scripts' );
    wp_deregister_script( 'understrap-scripts' );

    // Removes the parent themes stylesheet and scripts from inc/enqueue.php
}
add_action( 'wp_enqueue_scripts', 'understrap_remove_scripts', 20 );

add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {

	// Get the theme data
	$the_theme = wp_get_theme();
    wp_enqueue_style( 'child-understrap-styles', get_stylesheet_directory_uri() . '/css/child-theme.min.css', array(), $the_theme->get( 'Version' ) );
    wp_enqueue_script( 'jquery');
    wp_enqueue_script( 'child-understrap-scripts', get_stylesheet_directory_uri() . '/js/child-theme.min.js', array(), $the_theme->get( 'Version' ), true );
    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}

function add_child_theme_textdomain() {
    load_child_theme_textdomain( 'understrap-child', get_stylesheet_directory() . '/languages' );
}
add_action( 'after_setup_theme', 'add_child_theme_textdomain' );


/**
 * Custom function by Ken Jeter
 */

 /**
  * function for WP_Query() for LaGrange Has Talent front page content
  */
  function pageFilter($pageId) {
	$args = array(
		'type' => 'page',
		'page_id' => $pageId,
	);

    $filter = new WP_Query($args); 
        if ( $filter->have_posts() ) : 
			while ( $filter->have_posts() ) : $filter->the_post(); 
				endwhile;
			else : 
		endif; 
 }


 /**
	 *  function for WP_Query() for Logos 
	 */
	function logosFilter($pageId) {
		$args = array(
			'post_type' => 'lht_logos',
			'p' => $pageId,
		);

		$logos = new WP_Query($args); 
			if ( $logos->have_posts() ) : 
				while ( $logos->have_posts() ) : $logos->the_post(); ?>  
				 <?php endwhile;
				else : 
			endif; 
		}

// register secondary menu section
function register_my_menu() {
    register_nav_menu('secondary-menu',__( 'Secondary Menu' ));
    }
	add_action( 'init', 'register_my_menu' );
	

/**
 *  filter hooks for customizing woocommerce section
 */

/**
 *  Registration section
 */

 // remove the breadcrumbs
 remove_action('woocommerce_before_main_content', 'woocommerce_breadcrumb', 20);

 // remove product images
 remove_filter('woocommerce_before_single_product_summary', 'woocommerce_show_product_images', 20);

 // remove the category
 remove_filter('woocommerce_single_product_summary', 'woocommerce_template_single_meta', 40);

 // add registration description to product image section
 add_filter('woocommerce_before_single_product_summary', 'description', 20);

 function description(){
	 echo the_content();
 }

 // remove the summary
 remove_filter('woocommerce_after_single_product_summary', 'woocommerce_output_product_data_tabs', 10);

 // remove the title from the original loacation
 remove_filter('woocommerce_single_product_summary', 'woocommerce_template_single_title', 5);

 // add the title to the summary section
 add_filter('woocommerce_before_single_product_summary', 'woocommerce_template_single_title', 30);

 // remove the price from original location
 remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);

 // add the price to the summary section
 add_filter('woocommerce_before_single_product_summary', 'woocommerce_template_single_price', 40);

 // remove add to cart from original location
 remove_filter('woocommerce_simple_add_to_cart', 'woocommerce_simple_add_to_cart', 30);

// add the add to cart feature to the summary section
add_filter('woocommerce_single_product_summary', 'woocommerce_simple_add_to_cart', 40);

// add the link for registraton video upload
add_filter('lht_video_upload_link', 'video_upload_link');

function video_upload_link(){
	$args = array(
		'page_id' => 1596,
		);
  
	   $uploadLink = new WP_Query($args);        
		  if ( $uploadLink->have_posts() ) : 
			  while ( $uploadLink->have_posts() ) : $uploadLink->the_post();
			  the_content();
				  endwhile;
			  else : 
		  endif; 
}

wp_reset_query(); 

// remove related items
remove_action('woocommerce_after_single_product_summary', 'woocommerce_output_related_products', 20);





/**
 *  Ticket sales section
 */

 // remove the result count from Voting section and ticket sales section
 remove_filter('woocommerce_before_shop_loop', 'woocommerce_result_count', 20);

 // remove the default sorting field from the voting section and the ticket sales section
remove_filter( 'woocommerce_before_shop_loop', 'woocommerce_catalog_ordering', 30 );

 // remove the tumbnail from the ticket items
 remove_filter('woocommerce_before_shop_loop_item_title', 'woocommerce_template_loop_product_thumbnail');


 /**
  *  Contestant page
  */

 // add the contestant video to the thumbnail area
add_filter( 'woocommerce_before_shop_loop_item_title', 'lht_add_video' );

function lht_add_video(){
    echo the_content();
}

// remove the price from the vote page
remove_filter('woocommerce_after_shop_loop_item_title', 'woocommerce_template_loop_price');


// change "Add To Cart" text to "Vote" on Vote page only

add_filter( 'woocommerce_product_add_to_cart_text', 'product_cat_add_to_cart_button_text', 20, 1 );
function product_cat_add_to_cart_button_text( $text ) {
    // Only for a specific product category
    if( has_term( array('contestants'), 'product_cat' ) )
        $text = __( 'Vote Now', 'woocommerce' );

    return $text;
}


/**
 * Change number or contestants per row to 3
 */
 
 /*
add_filter('loop_shop_columns', 'loop_columns', 999);
if (!function_exists('loop_columns')) {
	function loop_columns() {
		return 3; // 3 products per row
	}
}

*/


/**
 * 	https://github.com/understrap/understrap/issues/950  - monkishtypist commented on Apr 11 • 
 */

if ( ! function_exists( 'understrap_wc_form_field_args' ) ) {
	// This function replaces the Understrap function of the same name
	function understrap_wc_form_field_args( $args, $key, $value = null ) {
		return $args;
	}
}

// Removes all states except Georgia
/*add_filter( 'woocommerce_states', 'custom_woocommerce_states' );
 
function custom_woocommerce_states( $states ) {
  $states['US'] = array(
    'GA' => 'Georgia',
  );
 
  return $states;
}
*/


// add mobile phone icons to application page
add_action('mobile_phone_icons', 'lht_show_mobile_phone_icons', 10);

Function lht_show_mobile_phone_icons(){
	if(is_page(array('Registration Form', 'How To Make A Great Video'))){
		get_template_part('font-awesome/mobile-phone-icons');
	}
}



  

 


    
