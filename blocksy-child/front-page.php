<?php
if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
/**
 *  Main Page
 */

get_header();

// Hero
get_template_part('template-parts/hero');

// About
get_template_part('template-parts/about', 'block');

// Rooms
get_template_part('template-parts/rooms', 'block');

// Servies
get_template_part('template-parts/services', 'block');

// Gallery
get_template_part('template-parts/gallery', 'block');

// Reviews
// get_template_part('template-parts/reviews', 'block');

// Map
get_template_part('template-parts/map', 'block');

// Mini booking block
get_template_part('template-parts/mini', 'booking-block');

get_footer();