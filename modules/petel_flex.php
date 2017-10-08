<?php
  $content = get_field('flex',$section->ID);
?>
<section class="mc_text<?php echo $background_class ? ' '.$background_class : ''?>" id="<?php echo $section->post_name; ?>">
  <pre><?php print_r($content); ?></pre>
</section>
