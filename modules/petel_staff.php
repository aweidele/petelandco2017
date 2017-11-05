<?php
  $staff_list = get_posts(array(
    'post_type' => 'petel-staff',
    'orderby' => 'menu_order',
    'order' => 'ASC'
  ) );

  if(sizeof($staff_list) == 2 || sizeof($staff) == 4) {

  }
?>
<section class="staff_list<?php echo $background_class ? ' '.$background_class : ''?>" id="<?php echo $section->post_name; ?>">
  <div class="row">
    <?php foreach($staff_list as $staff) {
      $portrait = get_field('portrait',$staff->ID);
      $title = get_field('title',$staff->ID);
    ?>
      <div class="col-4 no-padding">
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
