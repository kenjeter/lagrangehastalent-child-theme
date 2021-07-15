<?php
/**
 * Template for LHT top card deck on front page
 *
 * @package understrap
 */

$container   = get_theme_mod( 'understrap_container_type' );

?>

 <ul class="nav justify-content-center">
  <li class="nav-item">
    <a class="nav-link active" href="<?php echo site_url('/registration') ?>">Register</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('/vote') ?>">Vote</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="<?php echo site_url('/top-10-finalists-live') ?>">Live Finals</a>
  </li>
</ul>
 
<div class="card-deck top-card-deck text-center">

    <div class="card">
        
            <?php pageFilter(1015); ?>
            <?php get_template_part( 'custom-templates/secondary-card'); ?>
        
    </div>

    <div class="card">
        
            <?php pageFilter(1017); ?>
            <?php get_template_part('custom-templates/secondary-card') ?>
        
    </div>

    <div class="card">
        
            <?php pageFilter(892); ?>
            <?php get_template_part('custom-templates/secondary-card') ?>
        
    </div>
</div>




