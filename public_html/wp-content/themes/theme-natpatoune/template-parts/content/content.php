<?php
/**
 * @package Theme_NatPatoune
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>

    <?php if (has_post_thumbnail()) : ?>
        <a href="<?php echo esc_url(get_the_permalink()); ?>" class="post-thumbnail">
            <?php the_post_thumbnail('medium_large', array(
                'alt' => esc_attr(get_the_title()),
            )); ?>
        </a>
    <?php endif; ?>

    <div class="post-card-content">
        <time class="post-date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
            <?php echo esc_html(get_the_date()); ?>
        </time>

        <h2 class="post-title">
            <a href="<?php echo esc_url(get_the_permalink()); ?>">
                <?php echo esc_html(get_the_title()); ?>
            </a>
        </h2>

        <div class="post-excerpt">
            <?php the_excerpt(); ?>
        </div>

        <a href="<?php echo esc_url(get_the_permalink()); ?>" class="read-more">
            <?php esc_html_e('Lire la suite', 'theme-natpatoune'); ?>
        </a>
    </div>

</article>
