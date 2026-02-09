<?php
/**
 * Template for Single Post
 *
 * @package NatPatoune
 */

get_header();
?>

<section class="py-20 bg-white">
    <div class="container mx-auto px-4 max-w-4xl">
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
            
            // Fallback image (si pas de thumbnail)
            $fallback_image = function_exists('natpatoune_get_fallback_image')
                ? natpatoune_get_fallback_image()
                : get_theme_file_uri('assets/img/fallback-featured-image.webp');
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

                <!-- Article Header -->
                <header class="text-center mb-12">

                    <?php if (!empty($categories)) : ?>
                        <div class="flex justify-center gap-2 mb-6">
                            <?php foreach ($categories as $category) : ?>
                                <a
                                    href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                                    class="bg-brand-purple text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide hover:bg-brand-purple-dark transition-colors"
                                    rel="category"
                                >
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <h1 class="font-title font-bold text-3xl md:text-5xl text-brand-text mb-6 leading-tight">
                        <?php the_title(); ?>
                    </h1>

                    <div class="flex flex-wrap justify-center gap-6 text-brand-text-light text-sm">
                        <span class="flex items-center gap-2">
                            <i class="far fa-calendar" aria-hidden="true"></i><?php echo esc_html(get_the_date()); ?>
                        </span>
                        <span class="flex items-center gap-2">
                            <i class="far fa-clock" aria-hidden="true"></i><?php echo esc_html($read_min); ?> <?php echo esc_html__('min de lecture', 'natpatoune'); ?>
                        </span>
                        <span class="flex items-center gap-2">
                            <i class="far fa-user" aria-hidden="true"></i><?php the_author(); ?>
                        </span>
                        <?php if ((int) get_comments_number($post_id) > 0) : ?>
                            <span class="flex items-center gap-2">
                                <i class="far fa-comments" aria-hidden="true"></i><?php comments_number('0 commentaire', '1 commentaire', '% commentaires'); ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="mt-10 rounded-2xl overflow-hidden shadow-lg">
                        <?php if (has_post_thumbnail()) : ?>
                            <?php
                            the_post_thumbnail(
                                'natpatoune-featured',
                                array(
                                    'class'    => 'w-full h-auto object-cover',
                                    'loading'  => 'eager',
                                    'decoding' => 'async',
                                )
                            );
                            ?>
                        <?php else : ?>
                            <img 
                                src="<?php echo esc_url($fallback_image); ?>" 
                                alt="<?php echo esc_attr(get_the_title()); ?>" 
                                class="w-full h-auto object-cover"
                                loading="eager"
                                decoding="async"
                            >
                        <?php endif; ?>
                    </div>

                </header>

                <!-- Article Content -->
                <div class="prose prose-lg prose-purple max-w-none text-brand-text-light">
                    <?php
                    the_content();

                    wp_link_pages(array(
                        'before' => '<div class="mt-8 flex gap-2 items-center"><span class="font-bold">' . esc_html__('Pages:', 'natpatoune') . '</span>',
                        'after'  => '</div>',
                        'link_before' => '<span class="px-3 py-1 bg-brand-grey rounded hover:bg-brand-purple hover:text-white transition-colors">',
                        'link_after'  => '</span>',
                    ));
                    ?>
                </div>

                <!-- Tags -->
                <?php if (!empty($tags) && !is_wp_error($tags)) : ?>
                    <div class="mt-12 pt-8 border-t border-brand-grey/30">
                        <h3 class="font-bold text-brand-text mb-4 flex items-center gap-2">
                            <i class="fas fa-tags text-brand-purple" aria-hidden="true"></i><?php echo esc_html__('Tags', 'natpatoune'); ?>
                        </h3>

                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($tags as $tag) : ?>
                                <a
                                    href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                                    class="bg-brand-beige text-brand-text-light px-3 py-1 rounded-full text-sm hover:bg-brand-purple hover:text-white transition-colors"
                                    rel="tag"
                                >
                                    #<?php echo esc_html($tag->name); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Post Navigation -->
                <nav class="mt-12 grid grid-cols-1 md:grid-cols-2 gap-6" aria-label="<?php esc_attr_e('Navigation des articles', 'natpatoune'); ?>">
                    <?php
                    $prev_post = get_previous_post();
                    if ($prev_post) :
                    ?>
                        <a
                            href="<?php echo esc_url(get_permalink($prev_post)); ?>"
                            class="flex flex-col p-6 bg-brand-beige rounded-xl hover:bg-brand-purple/10 transition-colors group text-left"
                            rel="prev"
                        >
                            <span class="text-sm text-brand-text-light mb-2 flex items-center gap-2 group-hover:text-brand-purple">
                                <i class="fas fa-chevron-left" aria-hidden="true"></i><?php echo esc_html__('Article précédent', 'natpatoune'); ?>
                            </span>
                            <h4 class="font-bold text-brand-text group-hover:text-brand-purple transition-colors line-clamp-2">
                                <?php echo esc_html(get_the_title($prev_post)); ?>
                            </h4>
                        </a>
                    <?php else: ?>
                        <div></div>
                    <?php endif; ?>

                    <?php
                    $next_post = get_next_post();
                    if ($next_post) :
                    ?>
                        <a
                            href="<?php echo esc_url(get_permalink($next_post)); ?>"
                            class="flex flex-col p-6 bg-brand-beige rounded-xl hover:bg-brand-purple/10 transition-colors group text-right"
                            rel="next"
                        >
                            <span class="text-sm text-brand-text-light mb-2 flex items-center justify-end gap-2 group-hover:text-brand-purple">
                                <?php echo esc_html__('Article suivant', 'natpatoune'); ?><i class="fas fa-chevron-right" aria-hidden="true"></i>
                            </span>
                            <h4 class="font-bold text-brand-text group-hover:text-brand-purple transition-colors line-clamp-2">
                                <?php echo esc_html(get_the_title($next_post)); ?>
                            </h4>
                        </a>
                    <?php endif; ?>
                </nav>

                <!-- Articles similaires -->
                <?php
                $current_categories = wp_get_post_categories($post_id);
                if (!empty($current_categories)) {
                    $related_args = array(
                        'category__in'   => $current_categories,
                        'post__not_in'   => array($post_id),
                        'posts_per_page' => 3,
                        'orderby'        => 'rand',
                    );
                    $related_query = new WP_Query($related_args);

                    if ($related_query->have_posts()) :
                    ?>
                        <div class="mt-20 pt-12 border-t border-brand-grey/30">
                            <h3 class="font-title font-bold text-2xl text-brand-text mb-8 text-center">
                                <?php echo esc_html__('Articles similaires', 'natpatoune'); ?>
                            </h3>
                            
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                                <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                                    <article class="bg-white rounded-xl overflow-hidden shadow-soft hover:shadow-medium transition-all transform hover:-translate-y-1 flex flex-col h-full border border-brand-grey/20">
                                        <a href="<?php the_permalink(); ?>" class="block h-48 overflow-hidden">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('natpatoune-blog-thumb', array('class' => 'w-full h-full object-cover transition-transform duration-500 hover:scale-110')); ?>
                                            <?php else : ?>
                                                <img src="<?php echo esc_url($fallback_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="w-full h-full object-cover">
                                            <?php endif; ?>
                                        </a>
                                        
                                        <div class="p-6 flex flex-col flex-grow">
                                            <h4 class="font-bold text-lg text-brand-text mb-3 line-clamp-2 hover:text-brand-purple transition-colors">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h4>
                                            
                                            <div class="text-sm text-brand-text-light mb-4 line-clamp-3 flex-grow">
                                                <?php
                                                $excerpt = get_the_excerpt();
                                                if (!empty($excerpt)) {
                                                    echo esc_html(wp_trim_words($excerpt, 15));
                                                } else {
                                                    $content = wp_strip_all_tags(get_the_content());
                                                    echo esc_html(wp_trim_words($content, 15));
                                                }
                                                ?>
                                            </div>
                                            
                                            <a href="<?php the_permalink(); ?>" class="text-brand-purple font-bold text-sm hover:underline inline-flex items-center gap-1">
                                                <?php echo esc_html__('Lire', 'natpatoune'); ?> <i class="fas fa-arrow-right" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </article>
                                <?php endwhile; ?>
                            </div>
                        </div>
                    <?php
                    endif;
                    wp_reset_postdata();
                }
                ?>

            </article>

        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>
