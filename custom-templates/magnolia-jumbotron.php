

<div class="jumbotron jumbotron-fluid magnolia-jumbotron-fluid">
    <div class="container">
        <?php pageFilter(664); ?>
        <h3><?php the_title(); ?></h3>
        <?php the_content(); ?>
        <p><span class="proceeds"><?php echo get_post_meta($post->ID, 'Proceeds', true); ?></span></p>
        <h4><?php echo get_post_meta($post->ID, 'Phone', true); ?></h4>   
    </div>
</div>
 
