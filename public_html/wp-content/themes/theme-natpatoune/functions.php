<?php

/**
 * Theme Nat-Patoune - functions.php
 */

function natpatoune_theme_setup() {
    // Support des images à la une (post-thumbnails)
    add_theme_support('post-thumbnails');

    // Support des extraits d'articles (excerpt)
    add_theme_support('excerpt');

    // Titre automatique de page géré par WordPress
    add_theme_support('title-tag');

    // Support du HTML5 pour les formulaires de recherche et de commentaires
    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));

    // Enregistrement des menus personnalisés
    register_nav_menus(array(
        'primary'   => __('Menu principal', 'theme-natpatoune'),
        'footer'    => __('Menu pied de page', 'theme-natpatoune'),
    ));

    // Support du logo dynamique via le Customizer
    add_theme_support('custom-logo', array(
        'height'      => 100,
        'width'       => 300,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'natpatoune_theme_setup');

/**
 * Chargement optimisé des scripts et styles via wp_enqueue.
 */
function natpatoune_enqueue_assets() {
    // Feuille de style principale
    wp_enqueue_style(
        'natpatoune-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    // Script principal du thème
    wp_enqueue_script(
        'natpatoune-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Script de navigation (menu responsive)
    wp_enqueue_script(
        'natpatoune-navigation',
        get_template_directory_uri() . '/assets/js/navigation.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    // Fil de commentaires
    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'natpatoune_enqueue_assets');
