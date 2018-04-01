<?php
  get_header();
  $fields = get_fields($post->ID);
  include('partials/partial-homepage-feature.php');
  if(!empty($fields["callouts"])) { ?>
<div class="callouts">
<?php foreach($fields["callouts"] as $callout) {
  include('modules/petel_'.$callout["acf_fc_layout"].'.php');
} ?>
</div>
<?php } 
  include('modules/petel_cta.php');
  get_footer();
?>
