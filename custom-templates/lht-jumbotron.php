<?php
/**
 * 
 * This template displayes the jumbotron under the header on the front page
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

//$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="jumbotron jumbotron-fluid bg-white d-flex flex-column justify-content-center">

<div class="d-flex flex-row justify-content-center">
<?php
    $args = array(
		'post_type' => 'jumbotron',
		'name' => "Annual Event",
	);

     $annual = new WP_Query($args); 
        if ( $annual->have_posts() ) : 
            while ( $annual->have_posts() ) : $annual->the_post(); 
            the_content();
				endwhile;
        //wp_reset_quary();
			else : 
		endif;  ?>
</div>
<div class="d-flex flex-row justify-content-center">
<?php
    $args = array(
		'post_type' => 'jumbotron',
		'name' => "LaGrange Has Talent Logo",
	);

     $logo = new WP_Query($args); 
        if ( $logo->have_posts() ) : 
            while ( $logo->have_posts() ) : $logo->the_post(); 
            the_content();
				endwhile;
        //wp_reset_quary();
			else : 
		endif; ?>
</div>   
</div>


  
  
  