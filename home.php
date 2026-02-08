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
$fallback_rel  = 'assets/img/cat-sitting-domicile-vacances-suisse.webp';
$fallback_uri  = get_theme_file_uri($fallback_rel);
?>

<section class="pt-24 pb-16 bg-brand-beige min-h-screen">
    <div class="container mx-auto px-4">

        <!-- Blog Header -->
        <header class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">Le Blog Félin</span>

            <h1 class="font-title font-bold text-4xl md:text-5xl text-brand-text mt-2 mb-4">
                <?php
                if (is_home() && !is_front_page()) {
                    echo esc_html($posts_page_title);
                } else {
                    echo esc_html__('Conseils & Actualités', 'natpatoune');
                }
                ?>
            </h1>

            <p class="text-brand-text-light leading-relaxed">
                <?php echo esc_html__('Des astuces et informations utiles pour prendre soin de votre chat et préparer au mieux vos déplacements.', 'natpatoune'); ?>
            </p>
        </header>

        <?php if (have_posts()) : ?>

            <!-- Blog Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto mb-12">
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

                    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card bg-white rounded-3xl overflow-hidden shadow-soft hover:shadow-medium transition'); ?>>
                        <a href="<?php the_permalink(); ?>" class="block" aria-label="<?php echo esc_attr(get_the_title($post_id)); ?>">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php
                                the_post_thumbnail(
                                    'natpatoune-blog-thumb',
                                    array(
                                        'class' => 'w-full h-56 object-cover',
                                    )
                                );
                                ?>
                            <?php else : ?>
                                <img
                                    src="<?php echo esc_url($fallback_uri); ?>"
                                    alt="<?php echo esc_attr(get_the_title($post_id)); ?>"
                                    class="w-full h-56 object-cover"
                                    loading="lazy"
                                    decoding="async"
                                >
                            <?php endif; ?>
                        </a>

                        <div class="p-6">
                            <?php if (!empty($categories)) : ?>
                                <div class="flex flex-wrap gap-2 mb-3">
                                    <?php foreach ($categories as $category) : ?>
                                        <span class="bg-brand-purple/10 text-brand-purple text-xs font-bold px-3 py-1 rounded-full">
                                            <?php echo esc_html($category->name); ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>

                            <h2 class="font-title font-bold text-xl text-brand-text mb-3 line-clamp-2">
                                <a href="<?php the_permalink(); ?>" class="hover:text-brand-purple transition">
                                    <?php the_title(); ?>
                                </a>
                            </h2>

                            <div class="text-sm text-brand-text-light mb-4 line-clamp-3">
                                <?php echo esc_html(wp_trim_words(get_the_excerpt(), 20)); ?>
                            </div>

                            <div class="flex items-center justify-between text-xs text-brand-text-light mb-4">
                                <span>
                                    <i class="far fa-calendar mr-1"></i><?php echo esc_html(get_the_date()); ?>
                                </span>
                                <span>
                                    <i class="far fa-clock mr-1"></i><?php echo esc_html($read_min); ?> min
                                </span>
                            </div>

                            <a href="<?php the_permalink(); ?>" class="inline-block bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-2 px-6 rounded-full transition text-sm">
                                <i class="fas fa-arrow-right mr-2"></i><?php echo esc_html__('Lire', 'natpatoune'); ?>
                            </a>
                        </div>
                    </article>

                <?php endwhile; ?>
            </div>

            <!-- Pagination (WordPress natif + CSS .pagination déjà compatible) -->
            <?php
            the_posts_pagination(array(
                'mid_size'           => 2,
                'prev_text'          => '<i class="fas fa-chevron-left mr-2"></i>' . esc_html__('Précédent', 'natpatoune'),
                'next_text'          => esc_html__('Suivant', 'natpatoune') . '<i class="fas fa-chevron-right ml-2"></i>',
                'screen_reader_text' => esc_html__('Pagination du blog', 'natpatoune'),
            ));
            ?>

        <?php else : ?>

            <div class="text-center max-w-2xl mx-auto bg-white rounded-3xl p-12 shadow-soft">
                <i class="fas fa-cat text-6xl text-brand-purple mb-6"></i>

                <h2 class="font-title font-bold text-2xl text-brand-text mb-4">
                    <?php echo esc_html__('Aucun article pour le moment', 'natpatoune'); ?>
                </h2>

                <p class="text-brand-text-light mb-6">
                    <?php echo esc_html__('Les premiers articles seront bientôt disponibles. Revenez nous voir !', 'natpatoune'); ?>
                </p>

                <a href="<?php echo esc_url(home_url('/')); ?>" class="inline-block bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-3 px-8 rounded-full transition">
                    <i class="fas fa-home mr-2"></i><?php echo esc_html__('Retour à l’accueil', 'natpatoune'); ?>
                </a>
            </div>

        <?php endif; ?>

    </div>
</section>

<?php get_footer(); ?>
