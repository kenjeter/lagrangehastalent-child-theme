<?php


/**
 *  Front page card deck for contest segments
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
 
 ?>

<div class="row row-cols-1 row-cols-md-3 g-4">
<div class="col">
  <div class="card h-100">
  <a href="target_pages/<?php register_card_target_page(); ?>/" class="stretched-link"></a>
  <i class="fab fa-youtube fa-3x d-flex justify-content-center"></i>
    <h5 class="card-title text-center">Register</h5> 
    <div class="card-body">
        <?php register_card_body(); ?>
    </div>
    <div class="card-footer text-center">
      <small class="text-white"><?php registration_dates(); ?></small>
    </div>
  </div>
</div>
<div class="col">
  <div class="card h-100">
  <?php $slug = 'vote'; ?>
  <a href="target_pages/<?php vote_card_target_page(); ?>/" class="stretched-link"></a>
  <i class="far fa-thumbs-up fa-3x d-flex justify-content-center"></i>
  <h5 class="card-title text-center">Vote</h5> 
    <div class="card-body">
    <?php vote_card_body(); ?>
   </div>
    <div class="card-footer text-center">
      <small class="text-white"><?php voting_dates(); ?></small>
    </div>
  </div>
</div>
<div class="col">
  <div class="card h-100">
  <a href="target_pages/<?php live_event_card_target_page(); ?>/" class="stretched-link"></a>
  <i class="fas fa-microphone fa-3x d-flex justify-content-center"></i>
    <h5 class="card-title text-center">Live Finanls</h5> 
    <div class="card-body">
    <?php live_event_card_body(); ?>
   </div>
    <div class="card-footer text-center">
      <small class="text-white"><?php live_event_date(); ?></small>
    </div>
  </div>
</div>
</div>
<i><p class="text-center text-muted">Click on the cards for more details.</p></i>