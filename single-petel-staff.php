<?php
  get_header();
  $portrait = get_field('portrait');
  $title = get_field('title',$staff->ID);

  // Determine Next and Previous
  $staff_list = get_posts(array(
    'post_type' => 'petel-staff',
    'orderby' => 'menu_order',
    'order' => 'ASC'
  ) );
?>
<header class="page_header">
  <div class="row">
    <h2 class="page_title">Meet Our Team</h2>
  </div>
</header>
<article class="staff_detail" id="staff_<?php echo $post->post_name; ?>">
  <div class="row">
    <div class="col-4">
      <div class="staff_card">
        <div class="staff_card_portrait">
          <img src="<?php echo $portrait['sizes']['staff-portait']; ?>" class="staff_card_portrait_image">
        </div>
      </div>
    </div>
    <div class="col-6 push-1 staff_detail_main">
      <h2 class="staff_detail_main_name"><?php echo $post->post_title; ?></h2>
      <div class="staff_card_title"><?php echo $title; ?></div>
      <div class="staff_detail_content">
        <?php echo wpautop($post->post_content); ?>
      </div>
    </div>
  </div>
</article>
<?php
  get_footer();
