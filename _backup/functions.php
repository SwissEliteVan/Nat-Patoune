<?php
/**
 * Nat Patoune Theme Functions
 *
 * @package NatPatoune
 * @since 1.0.0
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Configuration de débogage
 *
 * Pour activer le débogage, décommentez les lignes ci-dessous
 * et commentez les définitions existantes dans wp-config.php
 */
/*
if (!defined('WP_DEBUG')) {
    define('WP_DEBUG', false);
}
if (!defined('WP_DEBUG_LOG')) {
    define('WP_DEBUG_LOG', true); // Logs dans wp-content/debug.log
}
if (!defined('WP_DEBUG_DISPLAY')) {
    define('WP_DEBUG_DISPLAY', false); // Ne pas afficher les erreurs
}
*/

/**
 * Helpers
 */
function natpatoune_file_version($relative_path, $fallback = '1.0.0') {
    $path = get_theme_file_path($relative_path);
    if (is_readable($path)) {
        return (string) filemtime($path);
    }
    return (string) $fallback;
}

function natpatoune_theme_uri($relative_path) {
    return get_theme_file_uri($relative_path);
}

/**
 * Theme Setup
 */
function natpatoune_setup() {
    load_theme_textdomain('natpatoune', get_template_directory() . '/languages');

    // WP core supports
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('automatic-feed-links');
    add_theme_support('responsive-embeds');
    add_theme_support('wp-block-styles'); // Gutenberg front styles
    add_theme_support('editor-styles');   // Editor styles

    // Editor style: reuse your design system (safe, simple). Later we can switch to a lighter editor.css.
    add_editor_style('assets/css/site.css');

    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 400,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
        'style',
        'script',
    ));

    // Register navigation menus
    register_nav_menus(array(
        'primary' => __('Menu Principal (Header)', 'natpatoune'),
        'footer'  => __('Menu Footer', 'natpatoune'),
    ));

    // Image sizes
    add_image_size('natpatoune-featured', 800, 600, true);
    add_image_size('natpatoune-blog-thumb', 400, 300, true);
}
add_action('after_setup_theme', 'natpatoune_setup');

/**
 * Enqueue Styles and Scripts (perf + cache-busting)
 */
function natpatoune_enqueue_assets() {
    // style.css (WordPress theme header) – keep
    wp_enqueue_style(
        'natpatoune-style',
        get_stylesheet_uri(),
        array(),
        natpatoune_file_version('style.css', '1.0.0')
    );

    // site.css – your design system
    if (is_readable(get_theme_file_path('assets/css/site.css'))) {
        wp_enqueue_style(
            'natpatoune-site',
            natpatoune_theme_uri('assets/css/site.css'),
            array('natpatoune-style'),
            natpatoune_file_version('assets/css/site.css', '1.0.0')
        );
    }

    // Main theme script - load only if file exists
    if (is_readable(get_theme_file_path('assets/js/main.js'))) {
        wp_enqueue_script(
            'natpatoune-main',
            natpatoune_theme_uri('assets/js/main.js'),
            array('jquery'),
            natpatoune_file_version('assets/js/main.js', '1.0.0'),
            true
        );

        // Defer when supported (WP will ignore if not supported)
        if (function_exists('wp_script_add_data')) {
            wp_script_add_data('natpatoune-main', 'strategy', 'defer');
        }

        // Localize script for AJAX and site data
        wp_localize_script('natpatoune-main', 'natpatouneData', array(
            'ajaxUrl' => admin_url('admin-ajax.php'),
            'nonce'   => wp_create_nonce('natpatoune_nonce'),
            'homeUrl' => esc_url(home_url('/')),
            'themeUri' => get_template_directory_uri(),
            'isMobile' => wp_is_mobile(),
        ));
    }

    // Conditionally load scripts based on page type
    if (is_front_page()) {
        // Front page specific scripts if needed
        if (is_readable(get_theme_file_path('assets/js/home.js'))) {
            wp_enqueue_script(
                'natpatoune-home',
                natpatoune_theme_uri('assets/js/home.js'),
                array('jquery', 'natpatoune-main'),
                natpatoune_file_version('assets/js/home.js', '1.0.0'),
                true
            );
        }
    }
    
    // Blog specific scripts - only load on blog pages
    if ((is_home() || is_archive() || is_search()) && is_readable(get_theme_file_path('assets/js/blog.js'))) {
        wp_enqueue_script(
            'natpatoune-blog',
            natpatoune_theme_uri('assets/js/blog.js'),
            array('jquery', 'natpatoune-main'),
            natpatoune_file_version('assets/js/blog.js', '1.0.0'),
            true
        );
    }
    
    // Single post specific scripts
    if (is_singular('post') && is_readable(get_theme_file_path('assets/js/single.js'))) {
        wp_enqueue_script(
            'natpatoune-single',
            natpatoune_theme_uri('assets/js/single.js'),
            array('jquery', 'natpatoune-main'),
            natpatoune_file_version('assets/js/single.js', '1.0.0'),
            true
        );
    }
}
add_action('wp_enqueue_scripts', 'natpatoune_enqueue_assets');

/**
 * Set posts per page for blog to 6
 */
function natpatoune_posts_per_page($query) {
    if (!is_admin() && $query->is_main_query()) {
        if ($query->is_home() || $query->is_archive() || $query->is_search()) {
            $query->set('posts_per_page', 6);
        }
    }
}
add_action('pre_get_posts', 'natpatoune_posts_per_page');

/**
 * Fonction pour obtenir l'image par défaut pour les articles sans image mise en avant
 *
 * @return string URL de l'image par défaut
 */
function natpatoune_get_fallback_image() {
    $fallback_path = 'assets/img/fallback-featured-image.webp';
    $fallback_url = get_theme_file_uri($fallback_path);
    
    // Vérifier si le fichier existe physiquement
    if (!file_exists(get_theme_file_path($fallback_path))) {
        // Utiliser une autre image si disponible
        $fallback_url = get_theme_file_uri('assets/img/cat-sitting-domicile-vacances-suisse.webp');
        
        // Si cette image n'existe pas non plus, utiliser celle qui existe
        if (!file_exists(get_theme_file_path('assets/img/cat-sitting-domicile-vacances-suisse.webp'))) {
            // Chercher n'importe quelle image dans le dossier assets/img
            $images = glob(get_theme_file_path('assets/img/*.{jpg,jpeg,png,gif,webp}'), GLOB_BRACE);
            if (!empty($images)) {
                $fallback_url = get_theme_file_uri(str_replace(get_theme_file_path(), '', $images[0]));
            }
        }
    }
    
    return $fallback_url;
}

/**
 * Customizer Settings
 */
function natpatoune_customize_register($wp_customize) {
    // Section Contact
    $wp_customize->add_section('natpatoune_contact', array(
        'title'    => __('Informations de Contact', 'natpatoune'),
        'priority' => 30,
    ));

    // Téléphone
    $wp_customize->add_setting('natpatoune_phone', array(
        'default'           => '078 768 50 47',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('natpatoune_phone', array(
        'label'   => __('Téléphone', 'natpatoune'),
        'section' => 'natpatoune_contact',
        'type'    => 'text',
    ));

    // WhatsApp
    $wp_customize->add_setting('natpatoune_whatsapp_enabled', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    $wp_customize->add_control('natpatoune_whatsapp_enabled', array(
        'label'   => __('Activer le bouton WhatsApp', 'natpatoune'),
        'section' => 'natpatoune_contact',
        'type'    => 'checkbox',
    ));

    // Email
    $wp_customize->add_setting('natpatoune_email', array(
        'default'           => 'miaou@nat-patoune.ch',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('natpatoune_email', array(
        'label'   => __('Email', 'natpatoune'),
        'section' => 'natpatoune_contact',
        'type'    => 'email',
    ));

    // Section CTA
    $wp_customize->add_section('natpatoune_cta', array(
        'title'    => __('CTA Principal', 'natpatoune'),
        'priority' => 35,
    ));

    // CTA Text
    $wp_customize->add_setting('natpatoune_cta_text', array(
        'default'           => 'Réserver',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('natpatoune_cta_text', array(
        'label'   => __('Texte du bouton CTA', 'natpatoune'),
        'section' => 'natpatoune_cta',
        'type'    => 'text',
    ));

    // CTA URL
    $wp_customize->add_setting('natpatoune_cta_url', array(
        'default'           => '#contact',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('natpatoune_cta_url', array(
        'label'   => __('Lien du bouton CTA', 'natpatoune'),
        'section' => 'natpatoune_cta',
        'type'    => 'url',
    ));

    // Section CTA Fin d'Article
    $wp_customize->add_section('natpatoune_post_cta', array(
        'title'    => __('CTA Fin d\'Article', 'natpatoune'),
        'priority' => 40,
    ));

    $wp_customize->add_setting('natpatoune_post_cta_title', array(
        'default'           => 'Besoin d\'une garde pour votre chat ?',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('natpatoune_post_cta_title', array(
        'label'   => __('Titre du CTA', 'natpatoune'),
        'section' => 'natpatoune_post_cta',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('natpatoune_post_cta_text', array(
        'default'           => 'Je vous propose un service de garde à domicile professionnel et personnalisé. Visite de prise de contact offerte !',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('natpatoune_post_cta_text', array(
        'label'   => __('Texte du CTA', 'natpatoune'),
        'section' => 'natpatoune_post_cta',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('natpatoune_post_cta_button_text', array(
        'default'           => 'Réserver une visite gratuite',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('natpatoune_post_cta_button_text', array(
        'label'   => __('Texte du bouton', 'natpatoune'),
        'section' => 'natpatoune_post_cta',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('natpatoune_post_cta_button_url', array(
        'default'           => '#contact',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('natpatoune_post_cta_button_url', array(
        'label'   => __('Lien du bouton', 'natpatoune'),
        'section' => 'natpatoune_post_cta',
        'type'    => 'url',
    ));

    // Section Cookie Banner
    $wp_customize->add_section('natpatoune_cookies', array(
        'title'    => __('Bannière Cookies', 'natpatoune'),
        'priority' => 45,
    ));

    $wp_customize->add_setting('natpatoune_cookie_enabled', array(
        'default'           => true,
        'sanitize_callback' => 'wp_validate_boolean',
    ));
    $wp_customize->add_control('natpatoune_cookie_enabled', array(
        'label'   => __('Activer la bannière cookies', 'natpatoune'),
        'section' => 'natpatoune_cookies',
        'type'    => 'checkbox',
    ));

    $wp_customize->add_setting('natpatoune_cookie_text', array(
        'default'           => 'Ce site utilise des cookies pour améliorer votre expérience. En continuant à naviguer, vous acceptez notre utilisation des cookies.',
        'sanitize_callback' => 'sanitize_textarea_field',
    ));
    $wp_customize->add_control('natpatoune_cookie_text', array(
        'label'   => __('Texte de la bannière', 'natpatoune'),
        'section' => 'natpatoune_cookies',
        'type'    => 'textarea',
    ));

    $wp_customize->add_setting('natpatoune_cookie_button_text', array(
        'default'           => 'Accepter',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('natpatoune_cookie_button_text', array(
        'label'   => __('Texte du bouton d\'acceptation', 'natpatoune'),
        'section' => 'natpatoune_cookies',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('natpatoune_cookie_policy_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('natpatoune_cookie_policy_url', array(
        'label'   => __('Lien vers la politique de cookies', 'natpatoune'),
        'section' => 'natpatoune_cookies',
        'type'    => 'url',
        'description' => __('Laissez vide pour utiliser /politique-cookies/ par défaut', 'natpatoune'),
    ));
}
add_action('customize_register', 'natpatoune_customize_register');

/**
 * Theme Activation Hook
 * - Create Blog & Accueil pages if missing
 * - Set reading options ONLY if not already configured
 * - Set permalink structure ONLY if empty
 */
function natpatoune_after_switch_theme() {
    $did_change_rewrites = false;

    // Blog page (create or retrieve)
    $blog_page = get_page_by_path('blog');
    if (!$blog_page) {
        $blog_id = wp_insert_post(array(
            'post_title'   => 'Blog',
            'post_name'    => 'blog',
            'post_content' => '<!-- wp:paragraph --><p>Découvrez nos conseils et actualités sur la garde de chats.</p><!-- /wp:paragraph -->',
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ));
        $blog_page = $blog_id ? get_post($blog_id) : null;
    }

    // Home page (create or retrieve)
    $home_page = get_page_by_path('accueil');
    if (!$home_page) {
        $home_id = wp_insert_post(array(
            'post_title'   => 'Accueil',
            'post_name'    => 'accueil',
            'post_content' => '<!-- wp:paragraph --><p>Page d\'accueil</p><!-- /wp:paragraph -->',
            'post_status'  => 'publish',
            'post_type'    => 'page',
        ));
        $home_page = $home_id ? get_post($home_id) : null;
    }

    // Pages légales
    $legal_pages = array(
        'mentions-legales' => 'Mentions Légales',
        'politique-confidentialite' => 'Politique de Confidentialité',
        'cgv' => 'Conditions Générales de Vente',
        'politique-cookies' => 'Politique de Cookies'
    );

    foreach ($legal_pages as $slug => $title) {
        $page = get_page_by_path($slug);
        if (!$page) {
            wp_insert_post(array(
                'post_title'   => $title,
                'post_name'    => $slug,
                'post_content' => '<!-- wp:paragraph --><p>Cette page est en cours de rédaction.</p><!-- /wp:paragraph -->',
                'post_status'  => 'publish',
                'post_type'    => 'page',
            ));
        }
    }

    // Default categories
    $default_categories = array('Conseils', 'Santé', 'Comportement', 'Voyage');
    foreach ($default_categories as $cat_name) {
        if (!term_exists($cat_name, 'category')) {
            wp_insert_term($cat_name, 'category');
        }
    }

    /**
     * Reading settings:
     * We only set them if they are not already set (avoid overriding existing configuration).
     */
    $page_on_front  = (int) get_option('page_on_front');
    $page_for_posts = (int) get_option('page_for_posts');

    if ($home_page && $page_on_front === 0) {
        update_option('show_on_front', 'page');
        update_option('page_on_front', (int) $home_page->ID);
    }

    // Toujours définir la page des articles, même si elle a été modifiée
    if ($blog_page) {
        update_option('page_for_posts', (int) $blog_page->ID);
        // S'assurer que le réglage "page des articles" est activé
        update_option('show_on_front', 'page');
    }

    // Permalink structure: set only if empty (default)
    $permalink_structure = (string) get_option('permalink_structure');
    if ($permalink_structure === '') {
        update_option('permalink_structure', '/%postname%/');
        $did_change_rewrites = true;
    }

    if ($did_change_rewrites) {
        flush_rewrite_rules();
    }
}
add_action('after_switch_theme', 'natpatoune_after_switch_theme');

/**
 * Register Block Patterns (for easy blog writing)
 */
function natpatoune_register_block_patterns() {
    if (!function_exists('register_block_pattern')) {
        return;
    }

    if (function_exists('register_block_pattern_category')) {
        register_block_pattern_category('natpatoune', array(
            'label' => __('Nat Patoune', 'natpatoune'),
        ));
    }

    register_block_pattern(
        'natpatoune/article-pattern',
        array(
            'title'       => __('Article Nat Patoune (SEO + conversion)', 'natpatoune'),
            'description' => __('Structure d\'article optimisée pour le SEO et la conversion', 'natpatoune'),
            'categories'  => array('natpatoune'),
            'content'     => '<!-- wp:paragraph -->
<p><strong>Introduction courte (2-3 phrases)</strong> — Présentez le sujet et accrochez le lecteur.</p>
<!-- /wp:paragraph -->

<!-- wp:heading -->
<h2>Ce qu\'il faut savoir</h2>
<!-- /wp:heading -->

<!-- wp:list -->
<ul>
<li>Point important 1</li>
<li>Point important 2</li>
<li>Point important 3</li>
<li>Point important 4</li>
<li>Point important 5</li>
<li>Point important 6</li>
</ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2>Conseils pratiques</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Développez vos conseils pratiques ici avec des détails concrets et actionnables.</p>
<!-- /wp:paragraph -->

<!-- wp:list -->
<ul>
<li>Conseil pratique 1</li>
<li>Conseil pratique 2</li>
<li>Conseil pratique 3</li>
</ul>
<!-- /wp:list -->

<!-- wp:heading -->
<h2>À retenir</h2>
<!-- /wp:heading -->

<!-- wp:quote -->
<blockquote class="wp-block-quote">
<p><strong>Résumé en 3 points :</strong></p>
<p>✓ Point clé n°1<br>✓ Point clé n°2<br>✓ Point clé n°3</p>
</blockquote>
<!-- /wp:quote -->',
        )
    );
}
add_action('init', 'natpatoune_register_block_patterns');

/**
 * Custom Excerpt
 */
function natpatoune_excerpt_length($length) {
    return 25;
}
add_filter('excerpt_length', 'natpatoune_excerpt_length', 999);

function natpatoune_excerpt_more($more) {
    return '…';
}
add_filter('excerpt_more', 'natpatoune_excerpt_more');

/**
 * Activer les extraits pour les pages
 * Utile si on veut afficher des extraits de pages dans le futur
 */
add_post_type_support('page', 'excerpt');

/**
 * Ajouter une métabox pour l'extrait dans l'éditeur classique
 * Rend l'extrait plus visible pour l'utilisateur
 */
function natpatoune_add_excerpt_metabox() {
    add_meta_box('natpatoune_excerpt_metabox', __('Extrait de l\'article', 'natpatoune'), 'natpatoune_excerpt_metabox_callback', 'post', 'normal', 'high');
}
add_action('add_meta_boxes', 'natpatoune_add_excerpt_metabox');

/**
 * Callback pour la métabox d'extrait
 */
function natpatoune_excerpt_metabox_callback($post) {
    ?>
    <p>
        <label for="excerpt">
            <?php _e('L\'extrait est un court résumé de votre article qui apparaît dans les listes d\'articles. Si vous ne le remplissez pas, il sera automatiquement généré à partir du contenu.', 'natpatoune'); ?>
        </label>
    </p>
    <textarea rows="5" cols="50" name="excerpt" id="excerpt" style="width: 100%;"><?php echo $post->post_excerpt; ?></textarea>
    <?php
}

/**
 * Add Post CTA after content (only on single posts)
 */
function natpatoune_post_cta($content) {
    if (!is_singular('post') || is_admin()) {
        return $content;
    }

    $cta_title       = get_theme_mod('natpatoune_post_cta_title', 'Besoin d\'une garde pour votre chat ?');
    $cta_text        = get_theme_mod('natpatoune_post_cta_text', 'Je vous propose un service de garde à domicile professionnel et personnalisé. Visite de prise de contact offerte !');
    $cta_button_text = get_theme_mod('natpatoune_post_cta_button_text', 'Réserver une visite gratuite');
    $cta_button_url  = get_theme_mod('natpatoune_post_cta_button_url', home_url('/#contact'));

    $cta_html = '
    <div class="post-cta bg-gradient-to-br from-brand-purple to-brand-pink rounded-3xl p-8 my-12 text-center text-white">
        <h3 class="font-title font-bold text-2xl mb-4">' . esc_html($cta_title) . '</h3>
        <p class="text-lg mb-6 max-w-2xl mx-auto">' . esc_html($cta_text) . '</p>
        <a href="' . esc_url($cta_button_url) . '" class="inline-block bg-white hover:bg-brand-beige text-brand-purple font-title font-bold py-4 px-8 rounded-full transition shadow-medium hover:shadow-lg">
            ' . esc_html($cta_button_text) . '
        </a>
    </div>';

    return $content . $cta_html;
}
add_filter('the_content', 'natpatoune_post_cta');

/**
 * Ajouter une notice dans l'admin pour rappeler l'importance de l'image mise en avant
 */
function natpatoune_featured_image_admin_notice() {
    global $post_type;
    
    // Seulement sur l'écran d'édition des articles
    if ($post_type !== 'post' || !isset($_GET['action']) || $_GET['action'] !== 'edit') {
        return;
    }
    
    global $post;
    
    // Si l'article n'a pas d'image mise en avant
    if (!has_post_thumbnail($post->ID)) {
        ?>
        <div class="notice notice-info">
            <p>
                <strong><?php _e('Conseil:', 'natpatoune'); ?></strong>
                <?php _e('N\'oubliez pas d\'ajouter une image mise en avant à votre article. Si vous n\'en ajoutez pas, une image par défaut sera utilisée.', 'natpatoune'); ?>
            </p>
        </div>
        <?php
    }
}
add_action('admin_notices', 'natpatoune_featured_image_admin_notice');

/**
 * Get logo or site name
 */
function natpatoune_get_logo() {
    if (has_custom_logo()) {
        the_custom_logo();
        return;
    }

    $name = get_bloginfo('name');
    $logo_rel = 'assets/img/logo-nat-patoune-cat-sitting.svg';
    $logo_path = get_theme_file_path($logo_rel);

    echo '<a href="' . esc_url(home_url('/')) . '" class="flex items-center gap-3 group">';

    if (is_readable($logo_path)) {
        echo '<img src="' . esc_url(get_theme_file_uri($logo_rel)) . '" alt="' . esc_attr($name) . '" class="h-12 w-auto" width="48" height="48">';
    }

    echo '<span class="font-title font-bold text-2xl text-brand-purple group-hover:text-brand-purple-dark transition">' . esc_html($name) . '</span>';
    echo '</a>';
}

/**
 * Get contact info from customizer
 */
function natpatoune_get_phone() {
    return get_theme_mod('natpatoune_phone', '078 768 50 47');
}

function natpatoune_get_email() {
    return get_theme_mod('natpatoune_email', 'miaou@nat-patoune.ch');
}

function natpatoune_get_cta_text() {
    return get_theme_mod('natpatoune_cta_text', 'Réserver');
}

function natpatoune_get_cta_url() {
    return get_theme_mod('natpatoune_cta_url', home_url('/#contact'));
}

// La fonction natpatoune_get_fallback_image() est déjà définie plus haut

/**
 * Check if page exists by slug
 */
function natpatoune_page_exists($slug) {
    $page = get_page_by_path($slug);
    return !empty($page);
}

/**
 * Get page URL by slug (safe)
 */
function natpatoune_get_page_url($slug) {
    $page = get_page_by_path($slug);
    if ($page) {
        return get_permalink($page->ID);
    }
    return '#';
}

/**
 * Get WhatsApp link with phone number
 */
function natpatoune_get_whatsapp_link() {
    $phone = preg_replace('/[^0-9+]/', '', natpatoune_get_phone());
    if (substr($phone, 0, 1) !== '+') {
        $phone = '+41' . ltrim($phone, '0');
    }
    return 'https://wa.me/' . esc_attr($phone);
}

/**
 * Check if WhatsApp button is enabled
 */
function natpatoune_is_whatsapp_enabled() {
    return get_theme_mod('natpatoune_whatsapp_enabled', true);
}

/**
 * Get cookie banner settings
 */
function natpatoune_get_cookie_settings() {
    return array(
        'enabled' => get_theme_mod('natpatoune_cookie_enabled', true),
        'text' => get_theme_mod('natpatoune_cookie_text', 'Ce site utilise des cookies pour améliorer votre expérience. En continuant à naviguer, vous acceptez notre utilisation des cookies.'),
        'buttonText' => get_theme_mod('natpatoune_cookie_button_text', 'Accepter'),
        'policyUrl' => get_theme_mod('natpatoune_cookie_policy_url', '') ?: natpatoune_get_page_url('politique-cookies')
    );
}

/**
 * Localize cookie settings for JS
 */
function natpatoune_localize_cookie_settings() {
    if (is_readable(get_theme_file_path('assets/js/main.js'))) {
        wp_localize_script('natpatoune-main', 'natpatouneCookies', natpatoune_get_cookie_settings());
    }
}
add_action('wp_enqueue_scripts', 'natpatoune_localize_cookie_settings', 20);

/**
 * Optimisation des images
 * - Ajoute le support WebP
 * - Définit des tailles d'images optimisées
 */
function natpatoune_image_optimization() {
    // Ajouter le support WebP
    add_filter('upload_mimes', 'natpatoune_add_webp_mime_type');
    
    // Définir des tailles d'images optimisées
    add_image_size('natpatoune-hero', 1920, 1080, true);
    add_image_size('natpatoune-card', 600, 400, true);
    add_image_size('natpatoune-thumbnail', 300, 300, true);
    add_image_size('natpatoune-medium', 800, 600, false);
    add_image_size('natpatoune-large', 1200, 900, false);
    
    // Optimiser les attributs des images
    add_filter('wp_get_attachment_image_attributes', 'natpatoune_optimize_image_attributes', 10, 3);
    
    // Ajouter loading="lazy" aux images dans le contenu
    add_filter('the_content', 'natpatoune_add_lazy_loading');
}
add_action('after_setup_theme', 'natpatoune_image_optimization');

/**
 * Ajouter le support WebP
 */
function natpatoune_add_webp_mime_type($mimes) {
    $mimes['webp'] = 'image/webp';
    return $mimes;
}

/**
 * Optimiser les attributs des images
 */
function natpatoune_optimize_image_attributes($attr, $attachment, $size) {
    // Ajouter loading="lazy" pour toutes les images sauf les images critiques
    if (!isset($attr['loading'])) {
        $attr['loading'] = 'lazy';
    }
    
    // Ajouter decoding="async" pour améliorer les performances
    if (!isset($attr['decoding'])) {
        $attr['decoding'] = 'async';
    }
    
    // Ajouter les dimensions pour éviter le CLS (Cumulative Layout Shift)
    if (!isset($attr['width']) || !isset($attr['height'])) {
        $dimensions = wp_get_attachment_image_src($attachment->ID, $size);
        if ($dimensions) {
            $attr['width'] = $dimensions[1];
            $attr['height'] = $dimensions[2];
        }
    }
    
    return $attr;
}

/**
 * Ajouter loading="lazy" aux images dans le contenu
 */
function natpatoune_add_lazy_loading($content) {
    // Ne pas modifier le contenu dans l'admin
    if (is_admin()) {
        return $content;
    }
    
    // Ajouter loading="lazy" aux images qui n'ont pas déjà cet attribut
    $content = preg_replace_callback('/<img([^>]+)>/i', function($matches) {
        // Ne pas modifier si loading est déjà défini
        if (strpos($matches[1], 'loading=') !== false) {
            return $matches[0];
        }
        
        // Ajouter l'attribut loading="lazy"
        return '<img' . $matches[1] . ' loading="lazy">';
    }, $content);
    
    return $content;
}

/**
 * Fonction pour générer une image WebP avec fallback
 */
function natpatoune_webp_image($attachment_id, $size = 'full', $attr = array(), $fallback = true) {
    // Vérifier si l'image existe
    if (!$attachment_id) {
        return '';
    }
    
    // Récupérer l'URL de l'image
    $image_url = wp_get_attachment_image_url($attachment_id, $size);
    if (!$image_url) {
        return '';
    }
    
    // Vérifier si une version WebP existe
    $webp_url = natpatoune_get_webp_url($image_url);
    $webp_exists = $webp_url && file_exists(natpatoune_url_to_path($webp_url));
    
    // Si WebP existe, utiliser <picture> avec fallback
    if ($webp_exists && $fallback) {
        $img_attr = wp_get_attachment_image_src($attachment_id, $size);
        $alt = get_post_meta($attachment_id, '_wp_attachment_image_alt', true);
        
        $output = '<picture>';
        $output .= '<source srcset="' . esc_url($webp_url) . '" type="image/webp">';
        $output .= '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($alt) . '"';
        
        // Ajouter les dimensions
        if ($img_attr && isset($img_attr[1]) && isset($img_attr[2])) {
            $output .= ' width="' . esc_attr($img_attr[1]) . '" height="' . esc_attr($img_attr[2]) . '"';
        }
        
        // Ajouter loading="lazy" et decoding="async"
        $output .= ' loading="lazy" decoding="async"';
        
        // Ajouter les attributs supplémentaires
        foreach ($attr as $name => $value) {
            $output .= ' ' . esc_attr($name) . '="' . esc_attr($value) . '"';
        }
        
        $output .= '>';
        $output .= '</picture>';
        
        return $output;
    }
    
    // Sinon, utiliser l'image standard
    return wp_get_attachment_image($attachment_id, $size, false, $attr);
}

/**
 * Obtenir l'URL WebP d'une image
 */
function natpatoune_get_webp_url($url) {
    $path_parts = pathinfo($url);
    if (isset($path_parts['extension'])) {
        return str_replace('.' . $path_parts['extension'], '.webp', $url);
    }
    return false;
}

/**
 * Convertir une URL en chemin de fichier
 */
function natpatoune_url_to_path($url) {
    $site_url = site_url();
    $site_dir = wp_normalize_path(ABSPATH);
    
    $url_path = wp_normalize_path($url);
    $url_path = str_replace($site_url, $site_dir, $url_path);
    
    return $url_path;
}

/**
 * Fonction de sécurité pour échapper les données ACF
 * Utiliser cette fonction pour les champs ACF qui pourraient contenir du HTML
 */
function natpatoune_kses_post($content) {
    if (empty($content)) {
        return '';
    }
    
    return wp_kses_post($content);
}

/**
 * Fonction pour récupérer une valeur ACF avec fallback
 */
function natpatoune_get_acf_field($field_name, $post_id = null, $default = '') {
    if (!function_exists('get_field')) {
        return $default;
    }
    
    $value = get_field($field_name, $post_id);
    return !empty($value) ? $value : $default;
}

/**
 * Fonction pour récupérer une image ACF avec dimensions et fallback
 */
function natpatoune_get_acf_image($field_name, $post_id = null, $size = 'medium', $attr = array(), $fallback_image = '') {
    if (!function_exists('get_field')) {
        if (!empty($fallback_image)) {
            return '<img src="' . esc_url($fallback_image) . '" alt="' . esc_attr__('Image', 'natpatoune') . '" ' . natpatoune_parse_image_attributes($attr) . '>';
        }
        return '';
    }
    
    $image = get_field($field_name, $post_id);
    
    if (empty($image)) {
        if (!empty($fallback_image)) {
            return '<img src="' . esc_url($fallback_image) . '" alt="' . esc_attr__('Image', 'natpatoune') . '" ' . natpatoune_parse_image_attributes($attr) . '>';
        }
        return '';
    }
    
    if (is_array($image)) {
        // Format ACF image array
        $image_url = isset($image['sizes'][$size]) ? $image['sizes'][$size] : $image['url'];
        $image_alt = isset($image['alt']) ? $image['alt'] : '';
        $image_width = isset($image['sizes'][$size . '-width']) ? $image['sizes'][$size . '-width'] : '';
        $image_height = isset($image['sizes'][$size . '-height']) ? $image['sizes'][$size . '-height'] : '';
        
        $attributes = '';
        if (!empty($image_width)) {
            $attr['width'] = $image_width;
        }
        if (!empty($image_height)) {
            $attr['height'] = $image_height;
        }
        
        return '<img src="' . esc_url($image_url) . '" alt="' . esc_attr($image_alt) . '" ' . natpatoune_parse_image_attributes($attr) . '>';
    } else {
        // Format ID or URL
        if (is_numeric($image)) {
            return wp_get_attachment_image($image, $size, false, $attr);
        } else {
            return '<img src="' . esc_url($image) . '" alt="' . esc_attr__('Image', 'natpatoune') . '" ' . natpatoune_parse_image_attributes($attr) . '>';
        }
    }
}

/**
 * Helper pour parser les attributs d'image
 */
function natpatoune_parse_image_attributes($attr) {
    $attributes = '';
    foreach ($attr as $name => $value) {
        $attributes .= ' ' . esc_attr($name) . '="' . esc_attr($value) . '"';
    }
    return $attributes;
  }
  
  /**
   * Ajouter les données structurées Schema.org (LocalBusiness + Service)
   * Améliore le SEO et l'affichage dans les résultats de recherche Google
   */
  function natpatoune_add_schema_org() {
    // Uniquement sur la page d'accueil
    if (!is_front_page()) {
      return;
    }
    
    $schema = array(
      '@context' => 'https://schema.org',
      '@graph' => array(
        // LocalBusiness
        array(
          '@type' => 'LocalBusiness',
          '@id' => home_url('/#localbusiness'),
          'name' => 'Nat Patoune',
          'description' => 'Service professionnel de garde de chats à domicile dans la région de Morges et Lausanne. Cat-sitter certifiée avec rapport quotidien et photos.',
          'url' => home_url('/'),
          'telephone' => '+41787685047',
          'email' => function_exists('natpatoune_get_email') ? natpatoune_get_email() : 'miaou@nat-patoune.ch',
          'priceRange' => 'CHF 25-55',
          'image' => get_theme_file_uri('assets/img/logo-nat-patoune-cat-sitting.svg'),
          'address' => array(
            '@type' => 'PostalAddress',
            'addressLocality' => 'Morges',
            'addressRegion' => 'VD',
            'addressCountry' => 'CH'
          ),
          'geo' => array(
            '@type' => 'GeoCoordinates',
            'latitude' => '46.5117',
            'longitude' => '6.4987'
          ),
          'areaServed' => array(
            array(
              '@type' => 'City',
              'name' => 'Morges'
            ),
            array(
              '@type' => 'City',
              'name' => 'Lausanne'
            ),
            array(
              '@type' => 'City',
              'name' => 'Saint-Prex'
            ),
            array(
              '@type' => 'City',
              'name' => 'Renens'
            ),
            array(
              '@type' => 'City',
              'name' => 'Prilly'
            )
          ),
          'openingHoursSpecification' => array(
            '@type' => 'OpeningHoursSpecification',
            'dayOfWeek' => array('Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday', 'Sunday'),
            'opens' => '08:00',
            'closes' => '20:00'
          ),
          'sameAs' => array(
            'https://www.instagram.com/nat.patoune'
          ),
          'hasOfferCatalog' => array(
            '@type' => 'OfferCatalog',
            'name' => 'Services de garde de chats',
            'itemListElement' => array(
              array(
                '@type' => 'Offer',
                'itemOffered' => array(
                  '@type' => 'Service',
                  'name' => 'Formule Essentielle',
                  'description' => '1 visite de 30 minutes par jour avec nourriture, eau, litière, jeux et rapport quotidien',
                  'provider' => array(
                    '@id' => home_url('/#localbusiness')
                  ),
                  'areaServed' => array(
                    '@type' => 'City',
                    'name' => 'Morges'
                  ),
                  'priceSpecification' => array(
                    '@type' => 'PriceSpecification',
                    'price' => '25',
                    'priceCurrency' => 'CHF'
                  )
                )
              ),
              array(
                '@type' => 'Offer',
                'itemOffered' => array(
                  '@type' => 'Service',
                  'name' => 'Formule Confort',
                  'description' => '2 visites de 30 minutes par jour avec nourriture, eau, litière, jeux, rapport détaillé, arrosage et courrier',
                  'provider' => array(
                    '@id' => home_url('/#localbusiness')
                  ),
                  'areaServed' => array(
                    '@type' => 'City',
                    'name' => 'Morges'
                  ),
                  'priceSpecification' => array(
                    '@type' => 'PriceSpecification',
                    'price' => '40',
                    'priceCurrency' => 'CHF'
                  )
                )
              ),
              array(
                '@type' => 'Offer',
                'itemOffered' => array(
                  '@type' => 'Service',
                  'name' => 'Formule Premium',
                  'description' => '3 visites de 30 minutes par jour avec nourriture, eau, litière, jeux, photos/vidéos, arrosage, courrier et brossage',
                  'provider' => array(
                    '@id' => home_url('/#localbusiness')
                  ),
                  'areaServed' => array(
                    '@type' => 'City',
                    'name' => 'Morges'
                  ),
                  'priceSpecification' => array(
                    '@type' => 'PriceSpecification',
                    'price' => '55',
                    'priceCurrency' => 'CHF'
                  )
                )
              )
            )
          )
        ),
        // Organization
        array(
          '@type' => 'Organization',
          '@id' => home_url('/#organization'),
          'name' => 'Nat Patoune',
          'url' => home_url('/'),
          'logo' => get_theme_file_uri('assets/img/logo-nat-patoune-cat-sitting.svg'),
          'sameAs' => array(
            'https://www.instagram.com/nat.patoune'
          ),
          'contactPoint' => array(
            '@type' => 'ContactPoint',
            'telephone' => '+41787685047',
            'contactType' => 'Customer Service',
            'areaServed' => 'CH',
            'availableLanguage' => array('French')
          )
        ),
        // WebSite
        array(
          '@type' => 'WebSite',
          '@id' => home_url('/#website'),
          'url' => home_url('/'),
          'name' => 'Nat Patoune - Garde de chats à domicile',
          'description' => 'Cat-sitting professionnel dans la région de Morges et Lausanne',
          'publisher' => array(
            '@id' => home_url('/#organization')
          ),
          'inLanguage' => 'fr-CH'
        )
      )
    );
    
    echo '<script type="application/ld+json">' . wp_json_encode($schema, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '</script>' . "\n";
  }
  add_action('wp_head', 'natpatoune_add_schema_org', 5);
