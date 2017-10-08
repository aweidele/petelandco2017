<?php
  $content = get_field('our_record',$section->ID);
?>
<section class="our_record<?php echo $background_class ? ' '.$background_class : ''?>" id="<?php echo $section->post_name; ?>">
  <header class="our_record_header row">
    <h2 class="our_record_title col-10 push-1"><?php echo $section->post_title; ?></h2>
  </header>
  <div class="our_record_intro row">
    <div class="col-9 push-1">
      <?php echo wpautop($content['intro_copy']); ?>
    </div>
  </div>
  <div class="our_record_stats row">
    <div class="col-10 push-1">

      <div class="our_record_stats_inner">
<?php foreach($content['stats'] as $stat) { ?>
        <div class="our_record_stat">
          <span class="our_record_stat_number<?php if( strlen($stat['number']) > 3 ) { echo ' our_record_stat_number_long'; } ?>"><?php echo $stat['number']; ?></span>
          <span class="our_record_stat_text"><?php echo $stat['description']; ?></span>
        </div>
<?php } ?>
      </div>

    </div>
  </div>
  <pre><?php print_r($content); ?></pre>
</section>
