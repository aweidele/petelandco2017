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
  get_footer();
?>
