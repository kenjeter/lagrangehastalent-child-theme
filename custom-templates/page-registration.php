<?php
/**
 * Template Name: Page Registration
 *
 * This template if for the Registration page.
 *
 * @package understrap
 */

get_header();


$container   = get_theme_mod( 'understrap_container_type' );

?>

<!-- Page buffer for fixed navbar --> 
<div id="page-buffer"></div>
<!-- End Page buffer --> 

<div class="wrapper" id="page-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check -->
			<?php get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<main class="site-main" id="main">

				
				<!-- Secondary Card Deck --> 
				<?php get_template_part( 'custom-templates/secondary-card-deck'); ?>
				<!-- End Secondary Card Deck -->

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'page' ); ?>

					
				<?php endwhile; // end of the loop. ?>

				

			</main><!-- #main -->

		</div><!-- #primary -->

		
		<!-- Do the right sidebar check -->
		<?php get_template_part( 'global-templates/right-sidebar-check' ); ?>

	</div><!-- .row -->

</div><!-- Container end -->

</div><!-- Wrapper end -->

<?php get_footer(); ?>
