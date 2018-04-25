<?php
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
    include( 'partials/partial-project-list.php' );
  endwhile;
?>
    </div>
  </main>
  <?php
  include('modules/petel_cta.php');
  get_footer();
