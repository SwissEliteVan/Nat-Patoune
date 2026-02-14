<?php
/**
 * @package Theme_NatPatoune
 */

function natpatoune_theme_setup() {
    load_theme_textdomain('theme-natpatoune', get_template_directory() . '/languages');

    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('automatic-feed-links');
    add_theme_support('custom-background', array(
        'default-color' => 'ffffff',
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

    register_nav_menus(array(
        'primary' => __('Menu principal', 'theme-natpatoune'),
        'footer'  => __('Menu pied de page', 'theme-natpatoune'),
    ));

    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));

    set_post_thumbnail_size(1200, 9999);
}
add_action('after_setup_theme', 'natpatoune_theme_setup');

function natpatoune_content_width() {
    $GLOBALS['content_width'] = apply_filters('natpatoune_content_width', 1200);
}
add_action('after_setup_theme', 'natpatoune_content_width', 0);

function natpatoune_widgets_init() {
    register_sidebar(array(
        'name'          => __('Barre latérale', 'theme-natpatoune'),
        'id'            => 'sidebar-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));

    register_sidebar(array(
        'name'          => __('Pied de page', 'theme-natpatoune'),
        'id'            => 'footer-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h2 class="widget-title">',
        'after_title'   => '</h2>',
    ));
}
add_action('widgets_init', 'natpatoune_widgets_init');

function natpatoune_enqueue_assets() {
    wp_enqueue_style(
        'natpatoune-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'natpatoune-navigation',
        get_template_directory_uri() . '/assets/js/navigation.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'natpatoune-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'natpatoune_enqueue_assets');

require get_template_directory() . '/inc/helpers.php';
require get_template_directory() . '/inc/customizer.php';
