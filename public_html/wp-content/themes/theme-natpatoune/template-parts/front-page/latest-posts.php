<?php
/**
 * Template part : Les 3 derniers articles du blog sur la page d'accueil.
 * Utilise une WP_Query dédiée pour ne pas interférer avec la boucle principale.
 *
 * @package Theme_NatPatoune
 */

$section_title = get_theme_mod('natpatoune_blog_title', __('Dernières Actualités', 'theme-natpatoune'));

$latest_posts = new WP_Query(array(
    'post_type'      => 'post',
    'posts_per_page' => 3,
    'post_status'    => 'publish',
    'orderby'        => 'date',
    'order'          => 'DESC',
));

if ($latest_posts->have_posts()) : ?>

<section class="latest-posts-section">
    <div class="container">
        <?php if ($section_title) : ?>
            <h2 class="section-title"><?php echo esc_html($section_title); ?></h2>
        <?php endif; ?>

        <div class="posts-grid">
            <?php while ($latest_posts->have_posts()) : $latest_posts->the_post(); ?>
                <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>

                    <?php if (has_post_thumbnail()) : ?>
                        <a href="<?php the_permalink(); ?>" class="post-thumbnail">
                            <?php the_post_thumbnail('medium_large', array(
                                'alt' => esc_attr(get_the_title()),
                            )); ?>
                        </a>
                    <?php endif; ?>

                    <div class="post-card-content">
                        <time class="post-date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                            <?php echo esc_html(get_the_date()); ?>
                        </time>

                        <h3 class="post-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>

                        <div class="post-excerpt">
                            <?php the_excerpt(); ?>
                        </div>

                        <a href="<?php the_permalink(); ?>" class="read-more">
                            <?php esc_html_e('Lire la suite', 'theme-natpatoune'); ?>
                        </a>
                    </div>

                </article>
            <?php endwhile; ?>
        </div>
    </div>
</section>

<?php
endif;
wp_reset_postdata();
?>
