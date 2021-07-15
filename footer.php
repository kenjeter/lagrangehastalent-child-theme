<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

$the_theme = wp_get_theme();
$container = get_theme_mod( 'understrap_container_type' );
?>
	
<?php get_sidebar( 'footerfull' ); ?>



<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="site-info">

						<?php get_template_part( 'custom_templates/social-media', 'page' ); ?>

							<p>Copyright &copy<?php printf(// WPCS: XSS ok.
							/* translators:*/
								esc_html__('2017 - ')); echo date ('Y'); ?>

							<a href="<?php echo esc_url( __( 'https://unitedwaywga.org/' ) ); ?>"><?php printf( 
							/* translators:*/
							esc_html__( 'United Way of West Georgia, Inc ')); ?></a>
								<span class="sep"> | </span>
					
							<?php printf( // WPCS: XSS ok.
							/* translators:*/
								esc_html__( 'A community-based nonprofit agency   ·   Federal Tax ID: 58-0686480' )); ?>
							<span class="sep"> | </span>

							<?php wp_loginout(); ?>
</p>

							</div><!-- .site-info -->

							

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->


<?php wp_footer(); ?>


</body>

</html>

