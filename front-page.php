<?php
  get_header();
  $fields = get_fields($post->ID);
?>
  <div class="row">
    <div class="home_intro">
      <?php echo wpautop($post->post_content); ?>
    </div>
  </div>
  <div class="home_feature">
<?php
  foreach($fields["homepage_feature"] as $tile) {
    $fields = get_fields($tile->ID);
    //$image = get_field("homepage_image",$tile->ID);
?>
    <a class="home_feature_slide" href="<?php echo get_permalink($tile->ID); ?>">
      <div class="home_feature_image">
        <img src="<?php echo $fields["homepage_image"]["sizes"]["homepage-feature"]; ?>">
      </div>
      <div class="home_feature_info">
        <h2 class="home_feature_title"><?php echo $tile->post_title; ?></h2>
        <div class="home_feature_subtitle"><?php echo $fields["subtitle"]; ?></div>
      </div>
      <div class="home_feature_button_container">
        <span class="home_feature_button">View Case Study</span>
      </div>
    </a>
<?php } ?>
  </div>
<?php
  get_footer();
?>
