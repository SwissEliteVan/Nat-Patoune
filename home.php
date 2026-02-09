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
                <?php
                while (have_posts()) :
                    the_post();
                    get_template_part('template-parts/post-card');
                endwhile;
                ?>
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
