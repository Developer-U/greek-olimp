<?php
/**
 * About block / Блок Об отеле
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/*ACF fields*/
$about_image = get_field('about_image');
$about_heading = get_field('about_heading');
$about_text = get_field('about_text');
?>

<section id="about" class="section about">
    <div class="container-fluid fluid2">
        <div class="about__box row justify-content-between">
            <div class="col-lg-5 col-12 section__left section__left_about"></div>

            <div class="section__right">
                <figure class="about__image">
                    <img src="<?php echo $about_image['url']; ?>" alt="<?php echo $about_image['alt']; ?>">
                </figure>
            </div>
        </div>
    </div>

    <div class="container section-block about__block">
        <div class="row cols-auto">
            <div class="section-block__text">
                <h2 class="section-block__heading">
                    <?php echo $about_heading; ?>
                </h2>

                <div class="section-block__descr post">
                    <?php echo $about_text; ?>
                </div>
            </div>
        </div>
    </div>
</section>