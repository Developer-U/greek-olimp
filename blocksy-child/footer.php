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
                    echo 'Разработка сайта:&nbsp<a href=" ' . $research['link'] . ' ">' . $research['text'] . '</a>';
                } ?>
            </p>
        </div>
    </div>
</footer>

<?php
do_action('blocksy:footer:after');
?>
</div>

<?php wp_footer(); ?>

</body>

</html>