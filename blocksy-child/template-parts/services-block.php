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
$currentMonth = (int) date('n'); // Получаем номер месяца (1-12)

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
                        $service_payment = get_sub_field('service_payment', 'options');
                        $service_price = get_sub_field('service_price', 'options');
                        $service_price_mode = get_sub_field('service_price_mode', 'options');
                        $service_price_summer = get_sub_field('service_price_summer', 'options');
                        $service_price_winter = get_sub_field('service_price_winter', 'options');
                        ?>

                        <li class="services-box__item col-auto">
                            <!-- Плашка с оплатой услуги -->
                            <?php if ($service_payment == 'включено') { ?>
                                <span class="services-box__price service-price include position-absolute">
                                    <p class="service-price__text">Включено</p>
                                </span>
                            <?php } else {
                                if ($service_price_mode == 'зима_лето') { // Если включён режим зима - лето
                                    // Период: ноябрь (11), декабрь (12), январь (1), февраль (2), март (3)
                                    ($currentMonth == 11 || $currentMonth == 12 || $currentMonth <= 3) ? $service_price = $service_price_winter : $service_price = $service_price_summer;
                                } ?>
                                <span class="services-box__price service-price exclude position-absolute">
                                    <p class="service-price__text"><?php echo number_format($service_price, 0, '', ' '); ?>&nbsp;₽</p>
                                </span>
                            <?php } ?>

                            <figure class="services-box__image">
                                <?php if ($service_image) { ?>
                                    <img class="services-box__img" src="<?php echo $service_image['url']; ?>"
                                        alt="<?php echo $service_image['alt']; ?>" />
                                <?php } ?>
                            </figure>

                            <p class="services-box__text">
                                <?php echo $service_title; ?>
                                <?php echo $service_price_mode; ?>
                                <?php echo $price; ?>
                            </p>
                        </li>
                    <?php }
                } ?>
            </ul>
        </div>
    </section>

<?php }