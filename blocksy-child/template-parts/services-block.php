<?php
/**
 * Services block / Блок Услуги
 * Сквозной
 */

if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/*ACF fields*/
$services_heading = get_field('services_heading', 'options');

// Показывать блок, только если есть услуги
if (have_rows('new_service', 'options')) {
    ?>

    <section id="services" class="services grey">
        <div class="container-fluid">
            <?php if ($services_heading) {
                echo '<h2 class="services__heading">' . $services_heading . '</h2>';
            } ?>

            <ul class="services-box services__list d-grid">
                <?php if (have_rows('new_service', 'options')) {
                    while (have_rows('new_service', 'options')) {
                        the_row();
                        $service_title = get_sub_field('service_title', 'options');
                        $service_image = get_sub_field('service_image', 'options');
                        ?>

                        <li class="services-box__item col-auto">
                            <figure class="services-box__image">
                                <?php if ($service_image) { ?>
                                    <img class="services-box__img" src="<?php echo $service_image['url']; ?>"
                                        alt="<?php echo $service_image['alt']; ?>" />
                                <?php } ?>
                            </figure>

                            <p class="services-box__text">
                                <?php echo $service_title; ?>
                            </p>
                        </li>
                    <?php }
                } ?>
            </ul>
        </div>
    </section>

<?php }