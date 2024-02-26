<?php

/**
 * Template Name: Events
 */

get_header();
?>

<body>
   <div class="container">
      <div class="events">
         <img class="events__img" src="<?php echo get_template_directory_uri(); ?>/images/Veranstaltungen-Img.jpg" alt="">
         <div class="events__overlay"></div>
         <h1 class="events__h1">Veranstaltungen</h1>
      </div>
      <div class="who-we-are-box">
          <?php echo do_shortcode('[Total_Soft_Cal id="1"]');?>
      </div>
   </div>

<?php get_footer(); ?>