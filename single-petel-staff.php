<?php
  get_header();
  $portrait = get_field('portrait');
  $title = get_field('title');
  $social = get_field('social_media');

  // Determine Next and Previous
  $staff_posts = get_posts(array(
    'post_type' => 'petel-staff',
    'orderby' => 'menu_order',
    'order' => 'ASC'
  ) );

  $staff_list = [];
  foreach ($staff_posts as $staff) {
    $staff_list[] = $staff->ID;
  }

  $current_index = array_search($post->ID,$staff_list);
  $next_staff = $current_index < sizeof($staff_posts) - 1 ? $staff_posts[$current_index + 1] : $staff_posts[0];
  $prev_staff = $current_index > 0 ? $staff_posts[$current_index - 1] : $staff_posts[sizeof($staff_posts) - 1];
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
        <div class="staff_card_connect">
        <?php
          $scount = 0;
          $social_output = "";
          foreach($social as $key => $link) {
            if($key == "first_name") {
              $social_output .= '
          <span class="staff_card_connect_label">Follow '.($link != "" ? $link : firstname($post->post_title)).':</span>';
            } else {
              if($link) {
                $scount++;
                $social_output .= '
          <a href="'.$link.'" class="staff_card_connect_link">'.icon('social_'.$key).'</a>';
              }
            }
          }
          if($scount > 0) {
            echo $social_output;
          }
        ?>
        </div>
      </div>
    </div>
    <div class="col-6 push-1 staff_detail_main">
      <h2 class="staff_detail_main_name"><?php echo $post->post_title; ?></h2>
      <div class="staff_card_title"><?php echo $title; ?></div>
      <div class="staff_detail_content">
        <?php echo wpautop($post->post_content); ?>
      </div>
      <div class="staff_detail_next_prev">
        <a href="<?php echo get_permalink($prev_staff->ID); ?>" class="staff_detail_prev">Previous: <?php echo $prev_staff->post_title; ?></a>
        <a href="<?php echo get_permalink($next_staff->ID); ?>" class="staff_detail_next">Next: <?php echo $next_staff->post_title; ?></a>
      </div>
    </div>
  </div>
</article>
<?php
  get_footer();

  function firstname($name) {
    $n = explode(" ",$name);
    return $n[0];
  }
