<?php
/**
 * Template for LHT Benefiting section on front page
 *
 * @package understrap
 */

$container   = get_theme_mod( 'understrap_container_type' );

?>

<div class="container proceeds d-flex justify-content-center">
<?php
$args = array(
  'post_type' => 'benefitting',
  'tax_query' => array(
      array(
          'taxonomy' => 'active',
          'field'    => 'slug',
          'terms'    => 'active',
      ),
  ),
);
$benefitting = new WP_Query( $args );
	while ( $benefitting->have_posts() ) : $benefitting->the_post();
		get_template_part( 'loop-templates/content', 'page'); 
	endwhile; // end of the loop. 
		?>
</div>