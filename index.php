<?php
  get_header();
  $child_pages = get_pages(array(
    'parent' => $post->ID,
    'sort_column' => 'menu_order',
  ));
?>
  <header class="page_header">
    <div class="row">
      <h2 class="page_title"><?php echo $post->post_title; ?></h2>
    </div>
  </header>
<?php
  foreach($child_pages as $section) {
    $layout = get_field('layout',$section->ID);
    $theme = get_field('theme',$section->ID);
    $background_class = get_field('background_class',$theme->ID);
    include('modules/petel_'.$layout.'.php');
  }
  get_footer();
