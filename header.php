<!DOCTYPE HTML>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
  <meta name="description" content="">
  <title><?php
    if (is_front_page()) {
      echo get_bloginfo('name');
      if (get_bloginfo('description')!="") { echo " | ".get_bloginfo('description'); }
    } else {
      wp_title ( ' | ', true,'right' );
      echo get_bloginfo('name');
} ?></title>

<?php wp_head(); ?>
</head>
<body>
  <figure class="petel_images">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 578.6 182.8" style="enable-background:new 0 0 612 234;version:1">
      <g id="logo">
        <path id="target" d="M578.6,157.2c0,14.2-69.3,25.6-154.7,25.6c-85.4,0-154.7-11.5-154.7-25.6c0-2.6,2.3-5,6.5-7.3
        	c-0.8,0.9-1.3,1.9-1.3,2.9c0,11.8,59.6,21.4,133.1,21.4c73.5,0,133.1-9.6,133.1-21.4c0-10.7-48.7-19.5-112.4-21.2
        	C511.6,131.9,578.6,143.2,578.6,157.2z M404.4,137.7c52.7,0,95.4,5.3,95.4,11.7c0,6.5-42.7,11.7-95.4,11.7
        	c-52.7,0-95.4-5.3-95.4-11.7C309,142.9,351.7,137.7,404.4,137.7z M404,143.4c-20.7,0-37.5,2.1-37.5,4.7c0,2.6,16.8,4.7,37.5,4.7
        	c20.7,0,37.5-2.1,37.5-4.7C441.5,145.5,424.7,143.4,404,143.4z"/>
        <path id="amp" d="M303.2,84.4c0,15.1,12.3,21.5,22.3,21.5c11.7,0,29.6-18.7,29.6-18.7c-11-10.1-21.3-17.7-34.6-27.8
        	C308.2,67.1,303.2,75,303.2,84.4z M312.7,29.3c0,7.7,5.9,14.6,15.1,20.5c7.4-5,11.4-10.9,11.4-19.2c0-7.2-4-16.3-13.9-16.3
        	C318.6,14.3,312.7,19.9,312.7,29.3z M394.9,47.3v3.7c-11.9,1-13.5,3.4-18.6,10.6c-4.8,6.7-13.1,19.5-13.1,19.5
        	c13.9,12.5,43.6,55.5,41.4,68l0,0c-6.4-10.9-11.1-18-17-25.2c-16-19.8-22.9-26.3-29.5-33.7c-12.5,17.5-25,26-36.7,26
        	c-21.3,0-31.2-15.2-31.2-27.9c0-15.4,12.7-23.5,26.3-31.6c-9.8-7.2-14.7-13.8-14.7-22c0-14.6,12.2-25.5,25.6-25.5
        	c12.8,0,23.5,9.1,23.5,21.8c0,5.8-4,11.4-6.9,13.5c-2.9,2.1-7,4.8-12.5,8c5.3,4,16.8,13.3,28.2,24.8c2.7-4,5.6-9.3,8.2-14.6
        	c4.2-8.2,4.5-10.6-3.7-11.4l-5.1-0.5v-3.7H394.9z"/>
        <symbol id="type">
          <path d="M24,52.2c6.1-3.2,12.3-6.2,18.4-9c1.4-0.6,3.7-1,5.1-1c18.1,0,27.5,15.7,27.5,29.2c0,25-18.1,40.2-41,44.2
          	c-4.2-0.3-8.2-1.9-10.1-3.2v23.7c0,9,0.8,9.8,14.4,10.7v3.7H0v-3.7c10.7-1,11.5-1.8,11.5-10.7V61c0-9.5-0.3-9.6-11.5-10.6v-2.9
          	c7.2-1.6,15.9-4.3,24-6.9V52.2z M24,101.7c3.4,3.8,8.6,6.4,16,6.4c9.3,0,21.9-8.5,21.9-27.9c0-19.2-9.3-29.2-22.7-29.2
          	C34.8,51.1,29,53.3,24,57V101.7z M138.5,100c-8.8,12.5-19.9,15.7-24.2,15.7c-20.3,0-32.5-15.2-32.5-33.8c0-21.5,15.1-39.6,34.3-39.6
          	c12.5,0,22.9,11.5,22.9,22.3c0,5-0.5,5.3-3.4,5.9c-2.2,0.5-22.1,2.1-42,2.7c-0.5,23.9,14.6,32.2,26.1,32.2c5.3,0,10.1-1.9,16.5-7.7
          	L138.5,100z M122.5,67c2.2,0,2.9-0.8,2.9-5.1c0-6.4-5.1-14.1-13.5-14.1c-7.7,0-16,7.9-17.3,19.7L122.5,67z M164.1,92.6
          	c0,12.5,5.9,14.7,10.3,14.7c2.9,0,6.4-1.3,9.4-3l1.6,3.5l-13.1,6.6c-1.6,0.8-3.7,1.3-4.8,1.3c-10.2,0-15.9-6.6-15.9-19.4v-46h-11.7
          	l-0.6-1.6l4.6-4.5h7.7V34.1L162,23.5h2.1v20.7h18.6c1.3,1.8,0.8,4.3-1.1,6.1h-17.5V92.6z M241.9,100c-8.8,12.5-19.9,15.7-24.2,15.7
          	c-20.3,0-32.5-15.2-32.5-33.8c0-21.5,15.1-39.6,34.3-39.6c12.5,0,22.9,11.5,22.9,22.3c0,5-0.5,5.3-3.4,5.9c-2.2,0.5-22.1,2.1-42,2.7
          	c-0.5,23.9,14.6,32.2,26.1,32.2c5.3,0,10.1-1.9,16.5-7.7L241.9,100z M225.9,67c2.2,0,2.9-0.8,2.9-5.1c0-6.4-5.1-14.1-13.5-14.1
          	c-7.7,0-16,7.9-17.3,19.7L225.9,67z M255.7,19.2c0-9.5-0.3-9.6-11.4-10.4V5.6c7.7-1.4,18.1-4,23.9-5.6v99.3c0,9,0.8,9.8,11.7,10.7
          	v3.7H244V110c10.9-1,11.7-1.8,11.7-10.7V19.2z M459.4,98.3c-6.6,9.9-16.7,17.3-25.8,17.3c-20.3,0-33.2-16.2-33.2-33.8
          	c0-12,5.8-22.7,14.6-29.9c9.6-7.9,20.7-9.6,26.1-9.6c3.7,0,10.6,1.4,14.1,4.3c1.1,1,1.6,1.9,1.6,3.5c0,3.5-3.2,7-5.3,7
          	c-0.6,0-1.3-0.2-2.4-1.1c-6.3-5.6-11.5-6.9-16.7-6.9c-7.8,0-19.2,7-19.2,25.5c0,24.2,17.2,30.6,25,30.6c7.1,0,10.6-1.6,19.1-9
          	L459.4,98.3z M460.1,80.9c0-26.9,20.8-38.6,35.4-38.6c20.4,0,34.9,15.5,34.9,35.6c0,25-18.6,37.8-34.8,37.8
          	C473,115.6,460.1,97.6,460.1,80.9z M515.8,81.4c0-17.8-7.7-34.3-22.3-34.3c-10.7,0-18.9,11.1-18.9,27.9c0,20.3,8.8,35.9,22.7,35.9
          	C507.3,110.8,515.8,103,515.8,81.4z M529.6,105.9c0-5.6,4.2-9.6,9.4-9.6c5.5,0,9.6,4,9.6,9.6c0,5.9-4.2,9.8-9.6,9.8
          	C533.8,115.6,529.6,111.8,529.6,105.9z"/>
        </symbol>
      </g>
    </svg>
  </figure>
  <header class="header">
    <h1 class="header_pagetitle"><a href="<?php echo get_home_url(); ?>">
      <span class="header_pagetitle_text"><?php echo get_bloginfo('name'); ?></span>
      <svg viewBox="0 0 578.6 182.8" class="header_pagetitle_logo">
        <use href="#target" class="target"></use>
        <use href="#amp" class="amp"></use>
        <use href="#type" class="type"></use>
      </svg></a>
    </h1>
    <nav class="main_nav">
      <?php wp_nav_menu( array('theme_location' => 'primary-menu') ); ?>
    </nav>
  </header>

  <main class="main">
