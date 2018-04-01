<?php
  $staff_list = get_posts(array(
    'post_type' => 'petel-staff',
    'orderby' => 'menu_order',
    'order' => 'ASC'
  ) );

  $l = sizeof($staff_list);
  if(!empty($callout['background_class'])) {
    $background_class = 'bg-'.$callout['background_class'];
  }
?>
<section class="staff_list<?php echo !empty($background_class) ? ' '.$background_class : ''?>">
  <?php if($callout["section_title"]) { ?>
  <header class="row">
    <h2 class="staff_list_section_title"><?php echo $callout["section_title"]; ?></h2>
  </header>
  <?php } ?>
  <div class="row">
    <?php foreach($staff_list as $i => $staff) {
      $portrait = get_field('portrait',$staff->ID);
      $title = get_field('title',$staff->ID);
    ?>
      <div class="col-4 no-padding<?php
        if( !($i % 2) && ($l == 2 || $l == 4) ) {
          echo ' push-2';
        }
      ?>">
        <a href="<?php echo get_permalink($staff->ID); ?>">
          <article class="staff_card theme_purple" id="staff_<?php echo $staff->post_name; ?>">
            <div class="staff_card_portrait">
              <img src="<?php echo $portrait['sizes']['staff-portait']; ?>" class="staff_card_portrait_image">
            </div>
            <div class="staff_card_info">
              <div class="staff_card_info_inner">
                <h3 class='staff_card_name'><?php echo $staff->post_title; ?></h3>
                <div class="staff_card_title"><?php echo $title; ?></div>
              </div>
            </div>
          </article>
        </a>
      </div>
    <?php } ?>
  </div>
</section>
