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
            
            // Fallback image (si pas de thumbnail)
            $fallback_image = function_exists('natpatoune_get_fallback_image') 
                ? natpatoune_get_fallback_image() 
                : get_theme_file_uri('assets/img/cat-sitting-domicile-vacances-suisse.webp');
            ?>

            <article id="post-<?php the_ID(); ?>" <?php post_class('max-w-5xl mx-auto'); ?>>

                <!-- Article Header -->
                <header class="single-post-header">

                    <?php if (!empty($categories)) : ?>
                        <div class="flex flex-wrap gap-2 mb-4 justify-center">
                            <?php foreach ($categories as $category) : ?>
                                <a
                                    href="<?php echo esc_url(get_category_link($category->term_id)); ?>"
                                    class="bg-brand-purple text-white text-xs font-bold px-4 py-2 rounded-full hover:bg-brand-purple-dark transition"
                                    rel="category"
                                >
                                    <?php echo esc_html($category->name); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    <?php endif; ?>

                    <h1 class="single-post-title text-center font-title font-bold text-3xl md:text-4xl lg:text-5xl mb-6 leading-tight">
                        <?php the_title(); ?>
                    </h1>

                    <div class="single-post-meta flex flex-wrap justify-center gap-4 md:gap-6 mb-8 text-brand-text-light">
                        <span class="flex items-center bg-brand-beige px-4 py-2 rounded-full">
                            <i class="far fa-calendar mr-2 text-brand-purple" aria-hidden="true"></i><?php echo esc_html(get_the_date()); ?>
                        </span>
                        <span class="flex items-center bg-brand-beige px-4 py-2 rounded-full">
                            <i class="far fa-clock mr-2 text-brand-purple" aria-hidden="true"></i><?php echo esc_html($read_min); ?> <?php echo esc_html__('min de lecture', 'natpatoune'); ?>
                        </span>
                        <span class="flex items-center bg-brand-beige px-4 py-2 rounded-full">
                            <i class="far fa-user mr-2 text-brand-purple" aria-hidden="true"></i><?php the_author(); ?>
                        </span>
                        <?php if ((int) get_comments_number($post_id) > 0) : ?>
                            <span class="flex items-center bg-brand-beige px-4 py-2 rounded-full">
                                <i class="far fa-comments mr-2 text-brand-purple" aria-hidden="true"></i><?php comments_number('0 commentaire', '1 commentaire', '% commentaires'); ?>
                            </span>
                        <?php endif; ?>
                    </div>

                    <div class="single-post-featured-image">
                        <?php if (has_post_thumbnail()) : ?>
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
                        <?php else : ?>
                            <img 
                                src="<?php echo esc_url($fallback_image); ?>" 
                                alt="<?php echo esc_attr(get_the_title()); ?>" 
                                class="w-full h-auto"
                                loading="eager"
                                decoding="async"
                            >
                        <?php endif; ?>
                    </div>

                </header>

                <!-- Article Content -->
                <div class="bg-white rounded-3xl p-8 md:p-12 shadow-medium mb-12">
                    <div class="single-post-content prose prose-lg max-w-none prose-headings:font-title prose-headings:font-bold prose-headings:text-brand-text prose-a:text-brand-purple prose-a:font-medium prose-img:rounded-xl prose-img:shadow-soft">
                        <?php
                        the_content();

                        wp_link_pages(array(
                            'before' => '<div class="page-links mt-8"><span class="page-links-title font-title font-bold">' . esc_html__('Pages:', 'natpatoune') . '</span>',
                            'after'  => '</div>',
                            'link_before' => '<span class="page-number">',
                            'link_after'  => '</span>',
                        ));
                        ?>
                    </div>
                </div>

                <!-- Tags -->
                <?php if (!empty($tags) && !is_wp_error($tags)) : ?>
                    <div class="bg-white rounded-2xl p-6 shadow-soft mb-8">
                        <h3 class="font-title font-bold text-lg text-brand-text mb-4">
                            <i class="fas fa-tags text-brand-purple mr-2" aria-hidden="true"></i><?php echo esc_html__('Tags', 'natpatoune'); ?>
                        </h3>

                        <div class="flex flex-wrap gap-2">
                            <?php foreach ($tags as $tag) : ?>
                                <a
                                    href="<?php echo esc_url(get_tag_link($tag->term_id)); ?>"
                                    class="bg-brand-beige hover:bg-brand-purple hover:text-white text-brand-text text-sm px-4 py-2 rounded-full transition"
                                    rel="tag"
                                >
                                    #<?php echo esc_html($tag->name); ?>
                                </a>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>

                <!-- Post Navigation -->
                <nav class="post-navigation grid md:grid-cols-2 gap-6 mb-8" aria-label="<?php esc_attr_e('Navigation des articles', 'natpatoune'); ?>">
                    <?php
                    $prev_post = get_previous_post();
                    if ($prev_post) :
                    ?>
                        <a
                            href="<?php echo esc_url(get_permalink($prev_post)); ?>"
                            class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-medium transition group"
                            rel="prev"
                        >
                            <span class="text-xs text-brand-purple font-bold mb-2 block">
                                <i class="fas fa-chevron-left mr-2" aria-hidden="true"></i><?php echo esc_html__('Article précédent', 'natpatoune'); ?>
                            </span>
                            <h4 class="font-title font-bold text-brand-text group-hover:text-brand-purple transition">
                                <?php echo esc_html(get_the_title($prev_post)); ?>
                            </h4>
                        </a>
                    <?php else: ?>
                        <div></div> <!-- Espace vide pour maintenir l'alignement -->
                    <?php endif; ?>

                    <?php
                    $next_post = get_next_post();
                    if ($next_post) :
                    ?>
                        <a
                            href="<?php echo esc_url(get_permalink($next_post)); ?>"
                            class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-medium transition group text-right"
                            rel="next"
                        >
                            <span class="text-xs text-brand-purple font-bold mb-2 block">
                                <?php echo esc_html__('Article suivant', 'natpatoune'); ?><i class="fas fa-chevron-right ml-2" aria-hidden="true"></i>
                            </span>
                            <h4 class="font-title font-bold text-brand-text group-hover:text-brand-purple transition">
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
                        <div class="mb-12">
                            <h3 class="font-title font-bold text-2xl text-brand-text mb-6 text-center">
                                <?php echo esc_html__('Articles similaires', 'natpatoune'); ?>
                            </h3>
                            
                            <div class="blog-grid max-w-6xl mx-auto">
                                <?php while ($related_query->have_posts()) : $related_query->the_post(); ?>
                                    <article class="blog-card bg-white">
                                        <a href="<?php the_permalink(); ?>" class="block">
                                            <?php if (has_post_thumbnail()) : ?>
                                                <?php the_post_thumbnail('natpatoune-blog-thumb', array('class' => 'blog-card__image')); ?>
                                            <?php else : ?>
                                                <img src="<?php echo esc_url($fallback_image); ?>" alt="<?php echo esc_attr(get_the_title()); ?>" class="blog-card__image">
                                            <?php endif; ?>
                                        </a>
                                        
                                        <div class="blog-card__content">
                                            <h4 class="blog-card__title">
                                                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                            </h4>
                                            
                                            <div class="blog-card__excerpt">
                                                <?php echo esc_html(wp_trim_words(get_the_excerpt(), 15)); ?>
                                            </div>
                                            
                                            <a href="<?php the_permalink(); ?>" class="inline-block bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-2 px-6 rounded-full transition text-sm">
                                                <i class="fas fa-arrow-right mr-2" aria-hidden="true"></i><?php echo esc_html__('Lire', 'natpatoune'); ?>
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

                <!-- CTA injecté via le filtre the_content dans functions.php -->
            </article>

        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>
