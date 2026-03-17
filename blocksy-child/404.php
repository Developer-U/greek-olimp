<?php
/**
 * The template for displaying 404 pages (not found)
 *
 */

get_header();
$not_found_text = get_field('not_found_text', 'options');
$not_found_text_dop = get_field('not_found_text_dop', 'options');
?>

<section class="grey not-found">
    <div class="container not-found-wrap">
        <div class="not-found-wrap__box d-flex align-items-center">
            <h1 class="not-found-wrap__title col-auto">
                #404
            </h1>

            <div class="not-found-wrap__text border-title little col">
                <?php
                if ($not_found_text) {
                    echo $not_found_text;
                } else {
                    echo '<p>Похоже, такой страницы не&nbsp;существует... :)</p>';
                } ?>
            </div>
        </div>

        <?php
        if ($not_found_text_dop) {
            echo '<div class="not-found-wrap__textdop">' . $not_found_text_dop . '</div>';
        } ?>
    </div>
</section>

<?php
// Servies
get_template_part('template-parts/services', 'block');

// Mini booking block
get_template_part('template-parts/mini', 'booking-block');

get_footer();