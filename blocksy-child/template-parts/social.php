<?php
/**
 * Template part for displaying social icons
 *
 */
$socials =  get_field('social_icons', 'options');
$tel = get_field('tel-link', 'options');
$email = get_field('email', 'options');

if( $tel || $socials['telegram'] || $email) { 
?>
    <!-- Social icons block -->
    <ul class="header-bottom__social social col-auto">
        <?php
        if( $tel ) { ?>
            <li class="social__item">
                <a href="tel:+7<?php echo $tel; ?>" class="social__link phone">									
                </a>
            </li>
        <?php };						

        if( $socials['telegram'] ) { ?>
            <li class="social__item">
                <a href="https://t.me/<?php echo $socials['telegram']; ?>" target="_blank" class="social__link telegram">								
                </a>
            </li>
        <?php };

        if( $email) { ?>
            <li class="social__item">
                <a href="mailto:<?php echo $email; ?>" class="social__link mail" target="_blank">							
                </a>
            </li>
        <?php } ?>
    </ul>
    <!-- Social icons block end-->
<?php } ?>