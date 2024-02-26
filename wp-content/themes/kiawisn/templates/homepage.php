<?php

get_header();

?>

<div class="gallery">
    <a href="http://localhost/kiawisn/gallery/">
        <img class="gallery__img" src="<?php echo get_template_directory_uri(); ?>/images/Galerie-Img.png" alt="">
        <div class="gallery__overlay"></div>
        <h1 class="gallery__h1">Galerie</h1>
    </a>
</div>
<div class="who-we-are-box">
    <h1 class="who-we-are-box__h1">Wer wir sind ...</h1>
    <p class="who-we-are-box__text">
        Wir, Kiawisn sind ein kleiner aber feiner Kultur- und Brauchtumsverein, dem es wichtig ist, österreichische Bräuche und Traditionen nicht untergehen zu lassen.
    </p>
    <p>
        Vor allem wollen wir als Gemeinschaft an gesellschaftlichen Veranstaltungen teilhaben, um diese aufrechtzuerhalten und zu unterstützen.
    </p>
    <p>
        Zurzeit sind auch schon unsere ersten eigenen Veranstaltungen in Planung.
    </p>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        var mySwiper = new Swiper('.swiper-container', {
            // Swiper options here
            slidesPerView: '1',
            spaceBetween: 24,
            // Add more options as needed
            breakpoints: {
                // When window width is >= 768px
                768: {
                    slidesPerView: 3,
                },
            },
        });
    });
</script>
<div class="members swiper-container">
    <div class="swiper-wrapper">
        <div class="members__member swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Mitglied-DavidKahlbacher.png" alt="Mitglied 1">
            <h1 class="members__h1">David Kahlbacher</h1>
        </div>
        <div class="members__member swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Mitglied-PeterWiener.png" alt="Mitglied 1">
            <h1 class="members__h1">Peter Wiener</h1>
        </div>
        <div class="members__member swiper-slide">
            <img src="<?php echo get_template_directory_uri(); ?>/images/Mitglied-DimitriWachmann.png" alt="Mitglied 1">
            <h1 class="members__h1">Dimitri Wachmann</h1>
        </div>
    </div>
</div>
<div class="events">
    <a href="http://localhost/kiawisn/events/">
        <img class="events__img" src="<?php echo get_template_directory_uri(); ?>/images/Veranstaltungen-Img.jpg" alt="">
        <div class="events__overlay"></div>
        <h1 class="events__h1">Veranstaltungen</h1>
    </a>
</div>

<?php
get_footer();
?>



<?php
get_footer();
?>
