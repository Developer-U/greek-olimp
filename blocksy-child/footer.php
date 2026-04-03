<?php
/**
 * The template for displaying the footer
 *
 */

blocksy_after_current_template();
do_action('blocksy:content:bottom');

$logo_full_white = get_field('logo_full_white', 'options');
$copyright = get_field('copyright', 'options');
$socials = get_field('social_icons', 'options');
$tel = get_field('tel-link', 'options');
$phone_num = get_field('tel', 'options');
$address = get_field('address', 'options');
$research = get_field('research', 'options');
?>
</main>

<?php
do_action('blocksy:content:after');
do_action('blocksy:footer:before');
?>

<footer class="footer">
    <div class="container">
        <div class="d-flex footer__box footer-box align-items-start justify-content-between">
            <div class="footer-box__left footer-left col-auto">
                <a href="/" class="footer-left__logo">
                    <?php
                    if ($logo_full_white) { ?>
                        <img src="<?php echo $logo_full_white['url']; ?>" alt="<?php echo $logo_full_white['alt']; ?>">
                    <?php } else { ?>
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo_white_full.svg" />
                    <?php } ?>
                </a>

                <?php
                if (($tel && $phone_num) || $address) { ?>
                    <ul class="footer__contacts header-list">
                        <?php
                        if ($address) { ?>
                            <li class="header-list__item address">
                                <p>
                                    <?php echo $address; ?>
                                </p>
                            </li>
                        <?php }
                        if ($tel && $phone_num) { ?>
                            <li class="header-list__item tel">

                                <a href="tel:+7<?php echo $tel; ?>">
                                    <?php echo $phone_num; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
                <?php }
                ; ?>
            </div>

            <div class="menu-list footer__list">
                <?php estore_primary_menu(); ?>
            </div>

            <div class="footer__social white">
                <?php
                get_template_part('template-parts/social');
                ?>
            </div>
        </div>

        <div class="footer__copyright copyright d-flex align-items-center justify-content-between">
            <div class="copyright__box copyright-box d-flex align-items-center gap-3">
                <?php if ($copyright) {
                    echo '<p class="copyright-text">©&nbsp;' . date("Y") . '&nbsp;' . $copyright . '</p>';
                } ?>
                <a class="copyright-text" href="/privacy/">Политика конфиденциальности</a>
                <a class="copyright-text" href="/cookies/">Политика файлов cookie</a>
            </div>

            <p class="copyright-text">
                <?php if ($research) {
                    echo 'Разработка сайта:&nbsp<a class="copyright-text" href=" ' . $research['link'] . ' ">' . $research['text'] . '</a>';
                } ?>
            </p>
        </div>
    </div>
</footer>

<?php
do_action('blocksy:footer:after');
?>
</div>

<!-- Попап Забронировать -->
<section data-popup="booking-popup" class="popup">
    <div class="popup__wrapper">
        <div class="popup__cont booking-cont d-flex align-items-center">
            <button data-popup-close="booking-popup" class="popup__del">
                <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M12 0.286621C5.373 0.286621 0 5.65887 0 12.2866C0 18.9144 5.37225 24.2866 12 24.2866C18.6278 24.2866 24 18.9144 24 12.2866C24 5.65887 18.6278 0.286621 12 0.286621ZM12 22.8106C6.21 22.8106 1.5 18.0766 1.5 12.2866C1.5 6.49662 6.21 1.78662 12 1.78662C17.79 1.78662 22.5 6.49662 22.5 12.2866C22.5 18.0766 17.79 22.8106 12 22.8106ZM16.2428 8.04462C15.9502 7.75212 15.4755 7.75212 15.1823 8.04462L12.0007 11.2261L8.81925 8.04462C8.52675 7.75212 8.05125 7.75212 7.758 8.04462C7.46475 8.33712 7.4655 8.81262 7.758 9.10512L10.9395 12.2866L7.758 15.4681C7.4655 15.7606 7.4655 16.2361 7.758 16.5286C8.0505 16.8211 8.526 16.8211 8.81925 16.5286L12.0007 13.3471L15.1823 16.5286C15.4747 16.8211 15.9495 16.8211 16.2428 16.5286C16.536 16.2361 16.5352 15.7606 16.2428 15.4681L13.0613 12.2866L16.2428 9.10512C16.536 8.81187 16.536 8.33712 16.2428 8.04462Z"
                        fill="white" />
                </svg>
            </button>

            <div class="popup__box">
                <div class="container-fluid" style="max-width:1600px; margin: 160px auto 40px auto;">
                    <div id="tl-search-form" class="tl-container">
                        <div style="line-height: 0; width: 100%;"><iframe allowtransparency="yes" border="0"
                                frameborder="0" height="93" id="tlFrame0.4161045239461243"
                                name="tlFrame0.4161045239461243" scrolling="no"
                                style="max-width: none; min-width: 100%; width: 1px; height: 93px;" width="1"></iframe>
                        </div>
                    </div>
                </div>

                <div class="container-fluid" style="max-width:1600px; margin: 0 auto">
                    <h2 style="color:#1C5ED9; font-size:45px; text-transform:uppercase">Номера</h2>

                    <div id="tl-booking-form-rooms" style="position: relative; font-size: 0px;">
                        <div style="display: block;"><iframe allowtransparency="yes" border="0" frameborder="0"
                                height="201" id="tlFrame0.6986773507775365" name="tlFrame0.6986773507775365"
                                scrolling="no" style="max-width: none; display: none; height: 201px;"
                                width="100%"></iframe><iframe allowtransparency="yes" border="0" frameborder="0"
                                height="1" id="tlFrame0.9831957088215537" name="tlFrame0.9831957088215537"
                                scrolling="no" style="position: relative; width: 1px; min-width: 100%; height: 592px;"
                                width="100%"
                                src="https://ru-ibe.tlintegration.ru/booking2/hotel/index.gc.html?int=true&amp;fullScreenOnMobile=false&amp;providerId=21068&amp;reactApp=true&amp;state=rooms&amp;theme=21068_2025-02-20&amp;language=ru&amp;width=100%25&amp;tlTrackerUser=34265111253938076&amp;tlTrackerSession=40385088041339040&amp;globalUserId=34265110260320129&amp;profileUserId=34265110263629042&amp;intervalSessionId=34265110260320129&amp;intervalStartTimestamp=1770189711026&amp;browserSessionId=40395317769690021&amp;conId=929634542138554&amp;contWidth=1150&amp;origin=https%3A%2F%2Fapartolimp.ru"></iframe>
                        </div>
                        <div
                            style="display: block; position: fixed; height: 100%; width: 100%; top: 0px; left: 0px; background-color: transparent; z-index: 2147483647; pointer-events: none; visibility: hidden;">
                        </div>
                        <div id="tl-booking-cart"
                            style="line-height: 0; bottom: 0px; left: 0px; display: block; z-index: 1010; backface-visibility: hidden; width: 1600px; opacity: 1; position: absolute;">
                            <iframe allowtransparency="yes" border="0" frameborder="0" height="1"
                                id="tlFrame0.41736487331415706" name="tlFrame0.41736487331415706" scrolling="no"
                                style="display: block; position: relative; width: 1px; min-width: 100%; height: 1px;"
                                width="100%"
                                src="https://ru-ibe.tlintegration.ru/booking2/hotel/index.gc.html?int=true&amp;fullScreenOnMobile=false&amp;providerId=21068&amp;reactApp=true&amp;state=rooms&amp;theme=21068_2025-02-20&amp;language=ru&amp;width=100%25&amp;tlTrackerUser=34265111253938076&amp;tlTrackerSession=40385088041339040&amp;globalUserId=34265110260320129&amp;profileUserId=34265110263629042&amp;intervalSessionId=34265110260320129&amp;intervalStartTimestamp=1770189711026&amp;browserSessionId=40395317769690021&amp;autoScroll=none&amp;conId=6593418399836223&amp;contWidth=1150&amp;origin=https%3A%2F%2Fapartolimp.ru&amp;path=%23%2Fs%2Fcart"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php wp_footer(); ?>

</body>

</html>