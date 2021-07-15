<?php
/**
 * Template for LHT top cards on front page
 *
 * @package understrap
 */

$container   = get_theme_mod( 'understrap_container_type' );

?>


<div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <p class="card-text"><?php the_content(); ?></p>
</div>
<div class="card-footer">
      <small class="text-muted"><?php echo get_post_meta($post->ID, 'Dates', true); ?></small>
</div>
<?php wp_reset_query(); ?>