<?php
/**
 * @package Theme_NatPatoune
 */

get_header(); ?>

<main id="primary" class="site-main" role="main">
    <div class="container">

        <?php if (have_posts()) : ?>

            <?php while (have_posts()) : the_post(); ?>
                <?php get_template_part('template-parts/content/content'); ?>
            <?php endwhile; ?>

            <?php the_posts_navigation(array(
                'prev_text' => __('&larr; Articles plus anciens', 'theme-natpatoune'),
                'next_text' => __('Articles plus récents &rarr;', 'theme-natpatoune'),
            )); ?>

        <?php else : ?>
            <?php get_template_part('template-parts/content/content', 'none'); ?>
        <?php endif; ?>

    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
