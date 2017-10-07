<?php
  $content = get_field('services',$section->ID);
  $services = preg_split ('/$\R?^/m', $content['services_list']);
?>
<section class="services<?php echo $background_class ? ' '.$background_class : ''?>" id="<?php echo $section->post_name; ?>">
  <div class="row">
    <div class="col-11 push-1">
      <h3 class="services_title"><?php echo $section->post_title; ?></h3>
    </div>
  </div>
  <div class="row">
    <div class="col-4 push-1">
      <div class="services_intro">
        <?php echo wpautop($content['intro_copy']); ?>
      </div>
    </div>
    <div class="col-6 push-1">
      <h4 class="services_heading"><span class="services_heading_inner"><?php echo $content['section_heading']; ?></span></h4>
      <ul class="services_list">
<?php foreach($services as $service) { ?>
        <li class="services_item"><?=$service?></li>
<?php } ?>
      </ul>
    </div>
  </div>
<section>
