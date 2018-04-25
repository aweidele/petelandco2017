<?php
  $terms = get_terms( array(
    'taxonomy' => 'filter',
    'hide_empty' => false,
  ) );
  $is_term = isset($term_id) && $term_id;
?>
<header class="projects_header">
  <div class="row">
    <div class="projects_header_inner">
      <h3 class="projects_filter_heading"><?php echo icon('filter'); ?><span class="projects_filter_heading_label">Filter By:</span></h3>
      <menu class="projects_filters">
        <ul class="projects_filters_list">
          <?php foreach($terms as $term) { ?>
            <li class="projects_filters_item<?php if($is_term && $term_id == $term->term_id) { echo " current"; } ?>"><a href="<?php echo get_term_link($term); ?>" class="projects_filters_link"><?php echo $term->name; ?></a></li>
          <?php } ?>
        </ul>
        <div class="project_filters_dropdown" aria-hidden="true">
          <select class="project_filters_select dropdown">
            <option value="<?php echo get_post_type_archive_link( 'projects' ); ?>"<?php if(!$is_term) { echo " selected"; } ?>><?php if(!$is_term) { echo "Select Category"; } else { echo "All "; } ?></option>
            <?php foreach($terms as $term) { ?>
            <option value="<?php echo get_term_link($term); ?>"<?php if($is_term && $term_id == $term->term_id) { echo " selected"; } ?>><?php echo $term->name; ?></option>
            <?php } ?>
          </select>
        </div>
      </menu>
    </div>
  </div>
</header>
