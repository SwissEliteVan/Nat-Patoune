<?php
/**
 * @package Theme_NatPatoune
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>

    <div class="post-card-content">
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
