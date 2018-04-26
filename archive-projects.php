<?php
/* Template Name: Projects */
  get_header();
  $args = [
    "post_type" => "projects",
    "orderby" => "menu_order",
    "order" => "ASC"
  ];
  $projects = new WP_Query($args);

  $terms = get_terms( array(
    'taxonomy' => 'filter',
    'hide_empty' => false,
) );
  ?>
  <header class="page_header">
    <div class="row">
      <h2 class="page_title">Our Work</h2>
    </div>
  </header>
  <main class="projects">
    <?php include( 'partials/partial-filter-list.php' ); ?>
    <div class="projects_listing">
<?php
  while($projects->have_posts()) : $projects->the_post();
    include( 'partials/partial-project-list.php' );
  endwhile;
?>
    </div>
  </main>
  <?php
  include('modules/petel_cta.php');
  get_footer();
