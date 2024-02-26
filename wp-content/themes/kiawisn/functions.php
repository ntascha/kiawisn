<?php

function enqueue_files(){
    wp_enqueue_style( "styles", get_template_directory_uri() . "/style.css", array(), '1');
    wp_enqueue_style( "fonts", get_template_directory_uri() . "/_fonts.scss", array(), '1');
    wp_enqueue_style( "fonts", get_template_directory_uri() . "/_fonts.scss", array(), '1');

    wp_enqueue_script('swiper', 'https://unpkg.com/swiper/swiper-bundle.min.js', array(), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_files');
?>
