<?php
  $content = $callout["content"];
  $column_width = $callout['grid_column_width'];
  $column_offset = floor( (12 - $column_width) / 2 );
  if(!empty($callout['background_class'])) {
    $background_class = 'bg-'.$callout['background_class'];
  }
?>
<section class="mc_text<?php echo !empty($background_class) ? ' '.$background_class : ''?>">
  <div class="row">
    <div class="col-<?=$column_width?> push-<?=$column_offset?>">
      <?php if($callout["section_title"]) { ?>
      <header class="mc_text_header">
        <h3><?=$callout["section_title"]?></h3>
      </header>
      <?php } ?>
      <div class="mc_text_content mc_text_col-<?=$callout['number_of_columns']?>">
        <?php echo wpautop($content); ?>
      </div>
    </div>
  </div>
</section>
