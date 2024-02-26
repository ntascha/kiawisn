<?php

/**
 * Template Name: Gallery
 */

get_header();

?>

<body>
<div class="container">
    <div class="gallery">
        <img class="gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/Galerie-Img.png" alt="">
        <div class="gallery__overlay"></div>
        <h1 class="gallery__h1">
            Galerie
        </h1>
    </div>
    <div class="who-we-are-box">
        <h2 class="gallery__h2">
            29.07.2023 Super-10-Kampf Preßguts
        </h2>
        <?php echo do_shortcode('[foogallery id="13"]');?>
    </div>
</div>
    <?php get_footer(); ?>

