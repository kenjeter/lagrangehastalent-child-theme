<?php
/**
 * The template for displaying the cards on the bottom of the front page
 *
 
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

?>

<!-- Bottom Card Deck --> 
<div class="card-deck bottom-card-deck text-center">
<?php $united_way = new WP_Query( array( 'post_type' => 'bottom_card_deck', 'name' => 'united-way-of-west-georgia' ) ); ?>
        <?php 
        if ( $united_way->have_posts() ) : 
            while ( $united_way->have_posts() ) : $united_way->the_post(); 
            endwhile; 
        endif; ?> 
    <div class="card"><!-- United Way Card --> 
                 
        <?php the_content(); ?>
    </div>
    <?php wp_reset_query(); ?>

    <?php $magnolia_society = new WP_Query( array( 'post_type' => 'bottom_card_deck', 'name' => 'magnolia-society' ) ); ?>
        <?php 
        if ( $magnolia_society->have_posts() ) : 
            while ( $magnolia_society->have_posts() ) : $magnolia_society->the_post(); 
            endwhile; 
        endif; ?> 

    <div class="card"><!-- Magnolia Society Card -->
                 
        <?php the_content(); ?>
    </div>
    <?php wp_reset_query(); ?>


    <div class="card"><!-- Blocks Card -->
        <?php $blocks = new WP_Query( array( 'post_type' => 'bottom_card_deck', 'name' => 'blocks' ) ); ?>
        <?php 
        if ( $blocks->have_posts() ) : 
            while ( $blocks->have_posts() ) : $blocks->the_post(); 
            endwhile; 
        endif; ?>          
        <?php the_content(); ?>
        <?php wp_reset_query(); ?>
    </div>
</div>	
<!-- End Bottom Card Deck -->