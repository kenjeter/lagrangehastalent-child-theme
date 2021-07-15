<?php
/**
 * Template Name: Front Page Main
 *
 * LaGrange Has Talent Front Page
 *
 * @package understrap
 */

get_header();

// LHT Jumbotron Fluid 
get_template_part( 'custom-templates/lht-jumbotron');

$container = get_theme_mod( 'understrap_container_type' );
?>

<div class="wrapper" id="full-width-page-wrapper">


	<div class="<?php echo esc_attr( $container ); ?>" id="content">

	
		<div class="row">

			<div class="col-md-12 content-area" id="primary">

				<main class="site-main" id="main" role="main">
					


					<!-- Top Card Deck --> 
					<?php get_template_part( 'custom-templates/contest-segment-cards'); ?>

					<!-- Get Your Act Ready --> 
					<?php get_template_part( 'custom-templates/banner' ); ?>

					<!-- Current Winner image --> 
					<?php get_template_part( 'custom-templates/current-winner-images'); ?>
					
					<!-- Benefiting --> 
					<?php get_template_part( 'custom-templates/benefitting' ); ?>
					
					<!-- Bottom Card Deck --> 
					<?php get_template_part( 'custom-templates/bottom-card-deck'); ?>
					
					<!-- Contact Information --> 
					<?php //get_template_part( 'custom-templates/contact-information'); ?>
					
				</main><!-- #main -->

			</div><!-- #primary -->

		</div><!-- .row end -->


	</div><!-- Container end -->

	

</div><!-- Wrapper end -->



<?php get_footer(); ?>
