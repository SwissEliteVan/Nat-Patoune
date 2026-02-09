<?php
/**
 * Template for Blog List (Posts Page)
 *
 * @package NatPatoune
 */

get_header();

// Page de blog si configurée dans Réglages > Lecture
$posts_page_id = (int) get_option('page_for_posts');
$posts_page_title = $posts_page_id ? get_the_title($posts_page_id) : 'Blog';

// Fallback image (si pas de thumbnail)
$fallback_image = function_exists('natpatoune_get_fallback_image')
    ? natpatoune_get_fallback_image()
    : get_theme_file_uri('assets/img/fallback-featured-image.webp');
?>

<section class="pt-24 pb-16 bg-brand-beige min-h-screen">
    <div class="container mx-auto px-4">

        <!-- Blog Header -->
        <header class="text-center max-w-4xl mx-auto mb-12">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">
                <?php echo esc_html__('Le Blog Félin', 'natpatoune'); ?>
            </span>

            <h1 class="font-title font-bold text-4xl md:text-5xl text-brand-text mt-2 mb-4">
                <?php
                if (is_home() && !is_front_page()) {
                    echo esc_html($posts_page_title);
                } elseif (is_category()) {
                    echo esc_html(single_cat_title('', false));
                } elseif (is_tag()) {
                    echo esc_html(single_tag_title('', false));
                } elseif (is_search()) {
                    printf(esc_html__('Résultats pour : %s', 'natpatoune'), '<span>' . get_search_query() . '</span>');
                } else {
                    echo esc_html__('Conseils & Actualités', 'natpatoune');
                }
                ?>
            </h1>

            <p class="text-brand-text-light leading-relaxed">
                <?php 
                if (is_category() || is_tag()) {
                    echo esc_html(term_description());
                } else {
                    echo esc_html__('Des astuces et informations utiles pour prendre soin de votre chat et préparer au mieux vos déplacements.', 'natpatoune');
                }
                ?>
            </p>
        </header>

        <?php if (have_posts()) : ?>

            <!-- Blog Grid -->
            <div class="blog-grid max-w-6xl mx-auto mb-12">
                <?php while (have_posts()) : the_post(); ?>
                    <?php
                    $post_id = get_the_ID();

                    // Temps de lecture : 200 mots/min, min 1 minute
                    $raw_content = (string) get_post_field('post_content', $post_id);
                    $plain_text  = wp_strip_all_tags($raw_content);
                    $word_count  = str_word_count($plain_text);
                    $read_min    = max(1, (int) ceil($word_count / 200));

                    // Catégories
                    $categories = get_the_category($post_id);
                    ?>

                    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card bg-white hover:shadow-medium transition-all duration-300'); ?>>
                        <a href="<?php the_permalink(); ?>" class="block" aria-label="<?php echo esc_attr(get_the_title($post_id)); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php
                                the_post_thumbnail(
                                    'natpatoune-blog-thumb',
                                    array(
                                        'class' => 'blog-card__image',
                                        'loading' => 'lazy',
                                        'decoding' => 'async',
                                    )
                                );
                                ?>
                            <?php else : ?>
                                <img
                                    src="<?php echo esc_url($fallback_image); ?>"
                                    alt="<?php echo esc_attr(get_the_title($post_id)); ?>"
                                    class="blog-card__image"
                                    loading="lazy"
                                    decoding="async"
                                >
                            <?php endif; ?>
                        </a>

                        <div class="blog-card__content">
                            <?php if (!empty($categories)) : ?>
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <?php foreach ($categories as $category) : ?>
                                        <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="blog-card__category">
                                            <?php echo esc_html($category->name); ?>
                                        </a>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <h2 class="blog-card__title">
                                <a href="<?php the_permalink(); ?>" class="hover:text-brand-purple transition">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <div class="blog-card__excerpt">
                                <?php
                                $excerpt = get_the_excerpt();
                                if (!empty($excerpt)) {
                                    echo esc_html(wp_trim_words($excerpt, 20));
                                } else {
                                    // Si pas d'extrait, on utilise le début du contenu
                                    $content = wp_strip_all_tags(get_the_content());
                                    echo esc_html(wp_trim_words($content, 20));
                                }
                                ?>
                            </div>

                            <div class="blog-card__meta">
                                <span>
                                    <i class="far fa-calendar mr-1" aria-hidden="true"></i><?php echo esc_html(get_the_date()); ?>
                                </span>
                                <span>
                                    <i class="far fa-clock mr-1" aria-hidden="true"></i><?php echo esc_html($read_min); ?> min
                                </span>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-2 px-6 rounded-full transition-all duration-300 text-sm shadow-sm hover:shadow-md transform hover:scale-105">
                                <?php echo esc_html__('Lire l\'article', 'natpatoune'); ?> <i class="fas fa-arrow-right ml-2" aria-hidden="true"></i>
                            </a>
                        </div>
                    </article>

                <?php endwhile; ?>
            </div>

            <!-- Pagination (WordPress natif + CSS .pagination déjà compatible) -->
            <nav class="pagination-container max-w-6xl mx-auto" aria-label="<?php esc_attr_e('Navigation des articles', 'natpatoune'); ?>">
                <?php
                the_posts_pagination(array(
                    'mid_size'           => 2,
                    'prev_text'          => '<i class="fas fa-chevron-left" aria-hidden="true"></i><span class="screen-reader-text">' . esc_html__('Articles précédents', 'natpatoune') . '</span>',
                    'next_text'          => '<span class="screen-reader-text">' . esc_html__('Articles suivants', 'natpatoune') . '</span><i class="fas fa-chevron-right" aria-hidden="true"></i>',
                    'screen_reader_text' => esc_html__('Pagination du blog', 'natpatoune'),
                    'aria_label'         => esc_html__('Navigation des articles', 'natpatoune'),
                    'class'              => 'pagination',
                ));
                ?>
            </nav>

        <?php else : ?>

            <div class="text-center max-w-2xl mx-auto bg-white rounded-3xl p-12 shadow-soft">
                <i class="fas fa-cat text-6xl text-brand-purple mb-6" aria-hidden="true"></i>

                <h2 class="font-title font-bold text-2xl text-brand-text mb-4">
                    <?php echo esc_html__('Aucun article pour le moment', 'natpatoune'); ?>
                </h2>

                <p class="text-brand-text-light mb-6">
                    <?php echo esc_html__('Les premiers articles seront bientôt disponibles. Revenez nous voir !', 'natpatoune'); ?>
                </p>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-3 px-8 rounded-full transition">
                    <i class="fas fa-home mr-2" aria-hidden="true"></i><?php echo esc_html__('Retour à l'accueil', 'natpatoune'); ?>
                </a>
            </div>

        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
