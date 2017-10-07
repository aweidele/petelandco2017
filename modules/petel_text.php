<?php
  $content = get_field('text',$section->ID);
  $column_width = $content['grid_column_width'];
  $column_offset = floor( (12 - $column_width) / 2 );
?>
<section class="mc_text">
  <div class="row">
    <div class="col-<?=$column_width?> push-<?=$column_offset?>">
      <div class="mc_text_content mc_text_col-<?=$content['number_of_columns']?>">
        <?php echo wpautop($content['content']); ?>
      </div>
    </div>
  </div>
</section>
  <pre><?php print_r($content); ?></pre>
