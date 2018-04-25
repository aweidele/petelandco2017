<?php
  $terms = get_terms( array(
    'taxonomy' => 'filter',
    'hide_empty' => false,
  ) );
?>
<header class="projects_header">
  <div class="row">
    <h3 class="projects_filter_heading"><?php echo icon('filter'); ?>Filter By:</h3>
    <menu class="projects_filters">
      <ul class="projects_filters_list">
        <?php foreach($terms as $term) {
          ?>
          <li class="projects_filters_item<?php if(isset($term_id) && $term_id && $term_id == $term->term_id) { echo " current"; } ?>"><a href="<?php echo get_term_link($term); ?>" class="projects_filters_link"><?php echo $term->name; ?></a></li>
        <?php } ?>
      </ul>

    </menu>
  </div>
</header>
