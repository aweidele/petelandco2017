<?php
  get_header();
  $fields = get_fields($post->ID);
?>
  <div class="row">
    <div class="home_intro">
      <?php echo wpautop($post->post_content); ?>
    </div>
  </div>
  <pre><?php print_r($fields); ?></pre>
<?php
  get_footer();
?>
