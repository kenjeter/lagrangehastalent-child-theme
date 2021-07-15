<?php
/**
 * The template for displaying current winner images on the front page
 *
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;



?>
<div class="row d-flex justify-content-center">
  <div class="col-sm-6">
    <div class="card card-image">
<?php
    $args = array(
        'post_type' => 'winner_images',
        'tax_query' => array(
            array(
                'taxonomy' => 'winner_level',
                'field'    => 'slug',
                'terms'    => 'winner',
            ),
        ),
    );
    $current_winner = new WP_Query( $args );
    
    
    if ($current_winner->have_posts()) : 
        while ( $current_winner->have_posts() ) : $current_winner->the_post(); 
        //get_template_part( 'loop-templates/content', 'page' );
        the_content();
        endwhile; 
    endif;
        
    ?>
        <div class="card-footer">
        <?php the_title(); ?>
        </div>
    </div>
  </div>
</div>

<div class="row d-flex justify-content-center">
  <div class="col-sm-6">
    <div class="card card-image">
    <?php
    $args = array(
        'post_type' => 'winner_images',
        'tax_query' => array(
            array(
                'taxonomy' => 'winner_level',
                'field'    => 'slug',
                'terms'    => 'peoples-choice',
            ),
        ),
    );
    $current_winner = new WP_Query( $args );
    
    
    if ($current_winner->have_posts()) : 
        while ( $current_winner->have_posts() ) : $current_winner->the_post();
        the_content();
        endwhile; 
    endif;
                
    ?>
        <div class="card-footer">
            <?php the_title(); ?>
        </div>
    </div>
  </div>
</div>




