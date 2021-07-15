<?php
/**
 * The template for the banner on the front page under the top card deck.
 *
 *
 * @package UnderStrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;


// today's date
$today = strtotime(date( 'F j, Y' ));
// registration dates
$lht_options = get_option('lht_settings');
$reg_beg_date = strtotime($lht_options['lht_registration_beginning_date']); 
$reg_end_date = strtotime($lht_options['lht_registration_end_date']);
// voting dates
$vot_beg_date = strtotime($lht_options['lht_voting_beginning_date']);
$vot_end_date = strtotime($lht_options['lht_voting_end_date']);
// top 10 voting dates
$top_10_beg_date = strtotime($lht_options['lht_top_10_voting_beginning_date']);
$top_10_end_date = strtotime($lht_options['lht_top_10_voting_end_date']);
// ticket sales dates
$ticket_beg_date = strtotime($lht_options['lht_ticket_sales_beginning_date']);
$ticket_end_date = strtotime($lht_options['lht_ticket_sales_end_date']);
// live event
$live_event_date = strtotime($lht_options['lht_live_event_date']);



// loop for front page banner

global $today;
global $reg_beg_date;
global $reg_end_date;
global $vot_beg_date;
global $vot_end_date;
global $top_10_beg_date;
global $top_10_end_date;
global $live_event_date;


if( $today < $reg_beg_date ):
  $page_name = 'before-registration';
elseif( $today >= $reg_beg_date && $today <= $reg_end_date) :
  $page_name = 'during-registration';
elseif( $today >= $vot_beg_date && $today <= $top_10_beg_date) :
  $page_name = 'during-voting';
elseif( $today >= $top_10_beg_date && $today <= $top_10_end_date):
  $page_name = 'during-top-10-voting';
elseif($today > $live_event_date):
  $page_name = 'after-contest';
endif;


    $args = array(
      'post_type' => 'banner',
      'name' => $page_name, // the page slug  
  ); 
  $query = new WP_Query( $args );
  
  if ($query->have_posts()) : 
    while ( $query->have_posts() ) : $query->the_post(); 
      ?>
      <div class='text-center banner'>
      <?php the_content(); ?>
      </div>
      <?php
      endwhile; 
    endif;

   wp_reset_query();
