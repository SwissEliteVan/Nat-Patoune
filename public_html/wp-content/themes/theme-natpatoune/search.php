<?php
/**
 * @package Theme_NatPatoune
 */

get_header(); ?>

<main id="primary" class="site-main" role="main">
    <div class="container">

        <header class="search-header">
            <h1 class="search-title">
                <?php printf(esc_html__('Résultats pour : %s', 'theme-natpatoune'), '<span>' . esc_html(get_search_query()) . '</span>'); ?>
            </h1>
        </header>

        <?php if (have_posts()) : ?>

            <div class="posts-grid">
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content/content', 'search'); ?>
                <?php endwhile; ?>
            </div>

            <?php the_posts_navigation(array(
                'prev_text' => __('&larr; Résultats précédents', 'theme-natpatoune'),
                'next_text' => __('Résultats suivants &rarr;', 'theme-natpatoune'),
            )); ?>

        <?php else : ?>
            <?php get_template_part('template-parts/content/content', 'none'); ?>
        <?php endif; ?>

    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
