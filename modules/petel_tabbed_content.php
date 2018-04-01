<?php
  if(!empty($callout['background_class'])) {
    $background_class = 'bg-'.$callout['background_class'];
  }
?>
<section class="tabbed_content<?php echo !empty($background_class) ? ' '.$background_class : ''?>">
  <div class="row">
    <?php if($callout["section_title"]) { ?>
    <header class="tabbed_content_header">
      <h2 class="tabbed_content_title"><?=$callout["section_title"]?></h2>
    </header>
    <?php } ?>
    <nav class="tabbed_content_tabs" role="tablist">
      <?php foreach($callout["tabs"] as $i => $tab) { ?>
      <a class="tabbed_content_tab<?php if($i==0) { echo " active"; } ?>" id="tab<?=$i?>" href="#tab-<?=sanitize_title($tab["tab_name"])?>" role="tab" aria-controls="tab-<?=sanitize_title($tab["tab_name"])?>"><?=$tab["tab_name"]?></a>
      <?php } ?>
    </nav>
    <div class="tabbed_content_items">
      <?php foreach($callout["tabs"] as $i => $tab) { ?>
      <div class="tabbed_content_item<?php if($i==0) { echo " active"; } ?>" id="tab-<?=sanitize_title($tab["tab_name"])?>" role="tabpanel" aria-labelledby="tab<?=$i?>">
        <?php echo wpautop($tab["tab_content"]); ?>
      </div>
      <?php } ?>
    </div>
  </div>
</section>
