<?php
  get_header();
  if( have_posts() ) : while( have_posts() ) : the_post();
?>
<?php if($post->post_content) {
  $fields = get_fields();
  $background_class = 'bg-'.$fields['theme'];
?>
  <article class="project">
  <div class="project_info<?php echo $background_class ? ' '.$background_class : ''?>">
    <div class="row">
      <header class="project_header col-3 push-1">
        <h1 class="project_title"><?php echo $post->post_title; ?></h1>
        <?php if($fields['subtitle']) { ?>
        <div class="project_subtitle"><?php echo $fields['subtitle']; ?></div>
        <?php } ?>
      </header>
      <div class="col-8">
        <div class="project_info_content">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
<?php } else { ?>
  <header class="page_header">
    <div class="row">
      <h1 class="page_title"><?php echo $post->post_title; ?></h1>
    </div>
  </header>
<?php } ?>
  <main class="project_images">
    <div class="row">
<?php foreach($fields['gallery'] as $image) { ?>
      <figure class="project_figure">
        <img class="project_image" src="<?php echo $image['sizes']['full']; ?>">
      </figure>
<?php } ?>
    </div>
  </main>
  </article>
  <?php
    endwhile;
    endif;

    // Determine Next and Previous
    $projects_posts = get_posts(array(
      'post_type' => 'projects',
      'orderby' => 'menu_order',
      'order' => 'ASC'
    ) );

    $projects_list = [];
    foreach ($projects_posts as $staff) {
      $projects_list[] = $staff->ID;
    }

    $current_index = array_search($post->ID,$projects_list);
    $next_project = $current_index < sizeof($projects_posts) - 1 ? $projects_posts[$current_index + 1] : $projects_posts[0];
    $prev_project = $current_index > 0 ? $projects_posts[$current_index - 1] : $projects_posts[sizeof($projects_posts) - 1];
  ?>
  <div class="row">
    <nav class="project_nav">
      <a href="<?php echo get_permalink($prev_project->ID); ?>" class="project_prev"><?=icon('chevron_left')?> Previous<span class="project_nav_title">: <?php echo $prev_project->post_title; ?></span></a>
      <a href="<?php echo get_permalink($next_project->ID); ?>" class="project_next">Next<span class="project_nav_title">: <?php echo $next_project->post_title; ?></span> <?=icon('chevron_right')?></a>
      <a href="<?=get_post_type_archive_link('projects')?>" class="project_index"><span class="project_index_label">View All</span><?=icon('grid')?></a>
    </nav>
  </div>
<?php
  get_footer();
