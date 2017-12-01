<?php
/* Template Name: Projects */
  get_header();
  $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );
  $term_id = $term->term_id;
  ?>
  <header class="page_header">
    <div class="row">
      <h2 class="page_title"><?php the_title(); ?></h2>
    </div>
  </header>
  <main class="projects">
    <?php include( 'partials/partial-filter-list.php' ); ?>
    <div class="projects_listing">
<?php
  while(have_posts()) : the_post();
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
