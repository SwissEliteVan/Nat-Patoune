<?php
/**
 * @package Theme_NatPatoune
 */

get_header(); ?>

<main id="primary" class="site-main" role="main">
    <div class="container">

        <?php while (have_posts()) : the_post(); ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <header class="entry-header">
                    <?php the_title('<h1 class="entry-title">', '</h1>'); ?>

                    <div class="entry-meta">
                        <time class="post-date" datetime="<?php echo esc_attr(get_the_date('c')); ?>">
                            <?php echo esc_html(get_the_date()); ?>
                        </time>

                        <span class="post-author">
                            <?php
                            printf(
                                esc_html__('par %s', 'theme-natpatoune'),
                                '<a href="' . esc_url(get_author_posts_url(get_the_author_meta('ID'))) . '">' . esc_html(get_the_author()) . '</a>'
                            );
                            ?>
                        </span>

                        <?php
                        $categories = get_the_category_list(esc_html__(', ', 'theme-natpatoune'));
                        if ($categories) : ?>
                            <span class="post-categories">
                                <?php echo $categories; ?>
                            </span>
                        <?php endif; ?>
                    </div>
                </header>

                <?php if (has_post_thumbnail()) : ?>
                    <div class="entry-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <div class="entry-content">
                    <?php the_content(); ?>

                    <?php
                    wp_link_pages(array(
                        'before' => '<nav class="page-links">' . __('Pages :', 'theme-natpatoune'),
                        'after'  => '</nav>',
                    ));
                    ?>
                </div>

                <footer class="entry-footer">
                    <?php
                    $tags = get_the_tag_list('', esc_html__(', ', 'theme-natpatoune'));
                    if ($tags) : ?>
                        <span class="post-tags">
                            <?php printf(esc_html__('Tags : %s', 'theme-natpatoune'), $tags); ?>
                        </span>
                    <?php endif; ?>
                </footer>
            </article>

            <?php
            the_post_navigation(array(
                'prev_text' => '&larr; %title',
                'next_text' => '%title &rarr;',
            ));
            ?>

            <?php if (comments_open() || get_comments_number()) : ?>
                <?php comments_template(); ?>
            <?php endif; ?>

        <?php endwhile; ?>

    </div>
</main>

<?php get_sidebar(); ?>
<?php get_footer(); ?>
