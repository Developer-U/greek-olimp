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

// Servies
get_template_part('template-parts/services', 'block');

get_footer();