<?php
/* Template Name: Projects */
  get_header();
  $args = [
    "post_type" => "projects"
  ];
  $projects = new WP_Query($args);

  $terms = get_terms( array(
    'taxonomy' => 'filter',
    'hide_empty' => false,
) );
  ?>
  <header class="page_header">
    <div class="row">
      <h2 class="page_title"><?php echo $post->post_title; ?></h2>
    </div>
  </header>
  <main class="projects">
    <?php get_template_part( 'partials/partial', 'filter-list' ); ?>
    <div class="projects_listing">
<?php
  while($projects->have_posts()) : $projects->the_post();
    $fields = get_fields();
?>
      <article class="projects_project<?php if($fields["theme"]) { echo " projects_theme_".$fields["theme"]; } ?>">
        <a href="<?php echo get_permalink(); ?>" class="projects_link">
          <figure class="projects_figure">
            <img src="<?php echo $fields["preview_image"]["sizes"]["project-listing"]; ?>" class="projects_image">
          </figure>
          <div class="projects_info">
            <h3 class="projects_title"><?php echo $post->post_title; ?></h3>
            <?php if($fields['subtitle']) { ?>
            <div class="projects_subtitle"><?php echo $fields['subtitle']; ?></div>
            <?php } ?>
          </div>
        </a>
      </article>
<?php
  endwhile;
?>
    </div>
  </main>
  <?php
  get_footer();
