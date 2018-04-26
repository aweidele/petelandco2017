<?php
  get_header();
  $fields = get_fields($post->ID);
?>
  <header class="page_header">
    <div class="row">
      <h2 class="page_title"><?php echo $post->post_title; ?></h2>
    </div>
  </header>
  <div class="callouts">
  <?php foreach($fields["callouts"] as $callout) {
    include('modules/petel_'.$callout["acf_fc_layout"].'.php');
  } ?>
  </div>
<?php
  include('modules/petel_cta.php');
  get_footer();
