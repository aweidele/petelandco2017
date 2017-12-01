<?php
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
