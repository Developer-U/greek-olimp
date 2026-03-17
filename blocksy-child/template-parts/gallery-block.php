<?php
/**
 * Gallery block / Блок Галерея со слайдером
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$logo_white = get_field('logo_white', 'options');
$gallery_heading = get_field('gallery_heading');
?>

<section class="gallery" id="galery">
    <div class="container-fluid">
        <?php if ($gallery_heading) {
            echo '<h2 class="gallery__heading">' . $gallery_heading . '</h2>';
        } ?>

        <div class="gallery__sliderbox position-relative">
            <div class="swiper gallery__slider gallery-slider">
                <div class="swiper-wrapper">
                    <?php if (have_rows('new_gallery_slide')) { ?>
                        <?php while (have_rows('new_gallery_slide')) {
                            the_row();
                            $gallery_slide_image = get_sub_field('gallery_slide_image');
                            ?>

                            <a href="<?php echo $gallery_slide_image['url']; ?>"
                                class="swiper-slide gallery-slider__slide gallery-slide position-relative"
                                data-fancybox="gallery">

                                <img src="<?php echo $gallery_slide_image['url']; ?>"
                                    alt="<?php echo $gallery_slide_image['alt']; ?>" class="gallery-slide__image">

                                <div class="gallery-slide__plashka position-absolute">
                                    <?php if ($logo_white) { ?>
                                        <img src="<?php echo $logo_white['url']; ?>" alt="<?php echo $logo_white['alt']; ?>">
                                    <?php } ?>
                                </div>
                            </a>
                        <?php } ?>
                    <?php } ?>
                </div>
            </div>
            <!-- кнопки для навигации -->
            <div class="swiper-button-prev slider-arrow-prev"></div>
            <div class="swiper-button-next slider-arrow-next"></div>
        </div>
    </div>
</section>