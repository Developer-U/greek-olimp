<?php
/*
Template Name: Simple Page
*/

get_header();

?>

<section class="simple-page">
    <div class="container">
        <div class="simple-page__top">
            <h1 class="simple-page__title">
                <?php echo the_title(); ?>
            </h1>

            <!-- breadcrumbs -->
            <div class="breadcrumbs">
                <?php
                if (function_exists('yoast_breadcrumb')) {
                    (yoast_breadcrumb('<div class="breadcrumbs__list">', '</div>'));
                }
                ?>
            </div>
        </div>
        <!-- breadcrumbs end -->

        <div class="container simple-page__wrapper post">
            <?php the_content(); ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>