<?php
/**
 * Template for Single Post
 *
 * @package NatPatoune
 */

get_header();
?>

<section class="pt-24 pb-16 bg-brand-beige min-h-screen">
    <div class="container mx-auto px-4">
        <?php while (have_posts()) : the_post(); ?>
            <?php
            $post_id = get_the_ID();

            // Temps de lecture (200 mots/min), min 1
            $raw_content = (string) get_post_field('post_content', $post_id);
            $plain_text  = wp_strip_all_tags($raw_content);
            $word_count  = str_word_count($plain_text);
            $read_min    = max(1, (int) ceil($word_count / 200));

            $categories = get_the_category($post_id);
            $tags       = get_the_tags($post_id);
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('max-w-4xl mx-auto'); ?>>

                <!-- Article Header -->
                <header class="mb-8">

                    <?php if (!empty($categories)) : ?>
                        <div class="flex flex-wrap gap-2 mb-4 justify-center">
                            <?php foreach ($categories as $category) : ?>
                                <a
                                    href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                                    class="bg-brand-purple text-white text-xs font-bold px-4 py-2 rounded-full hover:bg-brand-purple-dark transition"
                                >
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <h1 class="font-title font-bold text-4xl md:text-5xl text-brand-text mb-6 text-center leading-tight">
                        <?php the_title(); ?>
                    </h1>

                    <div class="flex flex-wrap items-center justify-center gap-6 text-sm text-brand-text-light mb-8">
                        <span>
                            <i class="far fa-calendar mr-2"></i><?php echo esc_html(get_the_date()); ?>
                        </span>
                        <span>
                            <i class="far fa-clock mr-2"></i><?php echo esc_html($read_min); ?> <?php echo esc_html__('min de lecture', 'natpatoune'); ?>
                        </span>
                        <?php if ((int) get_comments_number($post_id) > 0) : ?>
                            <span>
                                <i class="far fa-comments mr-2"></i><?php comments_number('0 commentaire', '1 commentaire', '% commentaires'); ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <?php if (has_post_thumbnail()) : ?>
                        <div class="rounded-3xl overflow-hidden shadow-soft mb-8">
                            <?php
                            the_post_thumbnail(
                                'natpatoune-featured',
                                array(
                                    'class'    => 'w-full h-auto',
                                    'loading'  => 'eager',
                                    'decoding' => 'async',
                                )
                            );
                            ?>
                        </div>
                    <?php endif; ?>

                </header>

                <!-- Article Content -->
                <div class="bg-white rounded-3xl p-8 md:p-12 shadow-soft mb-8">
                    <div class="prose prose-lg max-w-none blog-article-content">
                        <?php
                        the_content();

                        wp_link_pages(array(
                            'before' => '<div class="page-links mt-8"><span class="page-links-title font-title font-bold">' . esc_html__('Pages:', 'natpatoune') . '</span>',
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>
                </div>

                <!-- Tags -->
                <?php if (!empty($tags) && !is_wp_error($tags)) : ?>
                    <div class="bg-white rounded-2xl p-6 shadow-soft mb-8">
                        <h3 class="font-title font-bold text-lg text-brand-text mb-4">
                            <i class="fas fa-tags text-brand-purple mr-2"></i><?php echo esc_html__('Tags', 'natpatoune'); ?>
                        </h3>

                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($tags as $tag) : ?>
                                <a
                                    href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                                    class="bg-brand-beige hover:bg-brand-purple hover:text-white text-brand-text text-sm px-4 py-2 rounded-full transition"
                                >
                                    #<?php echo esc_html($tag->name); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Post Navigation -->
                <div class="grid md:grid-cols-2 gap-6 mb-8">
                    <?php
                    $prev_post = get_previous_post();
                    if ($prev_post) :
                    ?>
                        <a
                            href="<?php echo esc_url(get_permalink($prev_post)); ?>"
                            class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-medium transition group"
                        >
                            <span class="text-xs text-brand-purple font-bold mb-2 block">
                                <i class="fas fa-chevron-left mr-2"></i><?php echo esc_html__('Article précédent', 'natpatoune'); ?>
                            </span>
                            <h4 class="font-title font-bold text-brand-text group-hover:text-brand-purple transition">
                                <?php echo esc_html(get_the_title($prev_post)); ?>
                            </h4>
                        </a>
                    <?php endif; ?>

                    <?php
                    $next_post = get_next_post();
                    if ($next_post) :
                    ?>
                        <a
                            href="<?php echo esc_url(get_permalink($next_post)); ?>"
                            class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-medium transition group text-right"
                        >
                            <span class="text-xs text-brand-purple font-bold mb-2 block">
                                <?php echo esc_html__('Article suivant', 'natpatoune'); ?><i class="fas fa-chevron-right ml-2"></i>
                            </span>
                            <h4 class="font-title font-bold text-brand-text group-hover:text-brand-purple transition">
                                <?php echo esc_html(get_the_title($next_post)); ?>
                            </h4>
                        </a>
                    <?php endif; ?>
                </div>

                <!-- CTA injecté via le filtre the_content dans functions.php -->
            </article>

        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>
