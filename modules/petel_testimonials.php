<?php
  $content = get_field('testimonials',$section->ID);
  $offsets = [1,4,0,3,5];
?>
<section class="testimonials<?php echo $background_class ? ' '.$background_class : ''?>" id="<?php echo $section->post_name; ?>">
  <div class="row">
    <h2 class="testimonials_title"><?php echo $section->post_title; ?></h2>
  </div>
  <?php foreach($content['testimonials'] as $i => $testimonial) {
    $o = $i % sizeof($offsets);
  ?>
  <div class="row">
    <div class="col-7 push-<?php echo $offsets[$o]; ?>">
      <blockquote class="testimonial_blockquote">
        <p class="testimonial_quote">“<?php echo nl2br($testimonial['quote']); ?>”</p>
        <?php if($testimonial['attribution']) { ?>
        <cite class="testimonial_cite">— <?php echo $testimonial['attribution']; ?></cite>
        <?php } ?>
      </blockquote>
    </div>
  </div>
  <?php } ?>
</section>
