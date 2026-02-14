<?php
/**
 * Template de la page d'accueil (front-page.php)
 *
 * @package Theme_NatPatoune
 */

get_header(); ?>

<main id="primary" class="site-main" role="main">

    <?php get_template_part('template-parts/front-page/hero'); ?>

    <?php get_template_part('template-parts/front-page/services'); ?>

    <?php
    // Contenu de la page d'accueil (The Loop principal)
    while (have_posts()) :
        the_post();
        ?>
        <section class="front-page-content">
            <div class="container">
                <?php
                the_content();
                ?>
            </div>
        </section>
    <?php endwhile; ?>

    <?php get_template_part('template-parts/front-page/latest-posts'); ?>

</main>

<?php get_footer(); ?>
