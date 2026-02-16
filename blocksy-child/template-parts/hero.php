<?php
/**
 * Display Block Hero
 * Первый экран со слайдером
 * При этом контент один - не меняется при прокрутке слайдера
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
$hero_heading = get_field('hero_heading');
$hero_bg_image = get_field('hero_bg_image');
?>

<!-- Section делаем relative -->
<section class="position-relative hero">

    <!-- Внутринего бокс для слайдера абсолютом, т.к. сам слайдер нельзя делать абсолютом -->
    <div class="hero__box position-absolute">
        <div class="swiper hero__slider hero-slider">
            <div class="swiper-wrapper">
                <?php if (have_rows('new_hero_slide')): ?>
                    <?php while (have_rows('new_hero_slide')):
                        the_row();
                        $hero_slide_image = get_sub_field('hero_slide_image');
                        ?>

                        <article class="swiper-slide hero-slider__slide"
                            style="<?php if ($hero_slide_image): ?>background-image: url(<?php echo $hero_slide_image['url']; ?> ) <?php else: ?>background: #1C2540;<?php endif; ?>">
                        </article>

                    <?php endwhile; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <div class="hero__bg"
        style="<?php if ($hero_bg_image): ?> background: url(<?php echo $hero_bg_image['url']; ?> ) no-repeat center/cover <?php else: ?>background: #1C2540;<?php endif; ?>">
    </div>

    <!-- Сам контент в блоке Hero -->
    <div class="hero-inner container-fluid wide position-relative d-flex align-items-center justify-content-between">
        <div class="hero-side"></div>

        <div class="hero__wrapper hero-wrapper">
            <?php if ($hero_heading) {
                echo '<h1 class="hero__title">' . $hero_heading . '</h1>';
            } ?>

            <div class="hero-wrapper__social blue centered">
                <?php
                get_template_part('template-parts/social');
                ?>
            </div>

            <?php
            //    Код вставки модуля бронирования Traveline
            get_template_part('template-parts/booking', 'stripe');
            ?>
        </div>

        <div class="hero-side white">
            <?php
            get_template_part('template-parts/social');
            ?>
        </div>
    </div>
</section>