<?php
/**
 * Reviews block / Блок Отзывы
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/*ACF fields*/
$reviews_heading = get_field('reviews_heading', 'options');
?>

<section class="reviews grey" id="reviews">
    <div class="container">
        <?php if ($reviews_heading) {
            echo '<h2 class="reviews__heading">' . $reviews_heading . '</h2>';
        } ?>

        <script src="https://res.smartwidgets.ru/app.js" defer></script>
        <div class="sw-app" data-app="bff51acefdc04600968a16f797b50b00"></div>
    </div>
</section>