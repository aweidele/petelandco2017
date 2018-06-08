<?php
/* Template Name: Contact */
$address = get_field('address','option');
$address_line_2 = get_field('address_line_2','option');
$city = get_field('city','option');
$state = get_field('state','option');
$zip = get_field('zip','option');
$phone = get_field('phone','option');
$email = get_field('email','option');

get_header();
?>
<header class="page_header">
  <div class="row">
    <h2 class="page_title"><?php echo $post->post_title; ?></h2>
  </div>
</header>
<main class="contact_main">
  <div class="row">
    <div class="col-8 push-right">
      <div class="contact_content">
<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
        <?php the_content(); ?>
<?php endwhile; endif; ?>
      </div>
    </div>
    <div class="col-4">
      <div class="contact_wrapper">
        <a href="https://www.google.com/maps/place/<?=urlencode($address.' '.$address_line_2.' '.$city.' '.' '.$state.' '.$zip)?>/" target="_blank">
          <?php echo icon('map'); ?>
          <address class="contact_address"><?=$address?><br>
          <?php if($address_line_2) { ?>
          <?=$address_line_2?><br>
          <?php } ?>
          <?=$city?>, <?=$state?> <?=$zip?></address>
        </a>
        <a href="tel:<?=preg_replace("/[^0-9]/", "", $phone )?>">
        <?php echo icon('phone'); ?>
        <?=$phone?></a>
      </div>
    </div>
  </div>
</main>
<?php
get_footer();
