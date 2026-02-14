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

/**
 * Réglages du Customizer pour la page d'accueil.
 */
function natpatoune_customize_register($wp_customize) {

    // --- Panel Page d'accueil ---
    $wp_customize->add_panel('natpatoune_frontpage_panel', array(
        'title'    => __("Page d'accueil", 'theme-natpatoune'),
        'priority' => 130,
    ));

    // === Section Hero ===
    $wp_customize->add_section('natpatoune_hero_section', array(
        'title' => __('Hero', 'theme-natpatoune'),
        'panel' => 'natpatoune_frontpage_panel',
    ));

    $hero_fields = array(
        'natpatoune_hero_title'    => array('label' => __('Titre', 'theme-natpatoune'), 'type' => 'text'),
        'natpatoune_hero_subtitle' => array('label' => __('Sous-titre', 'theme-natpatoune'), 'type' => 'text'),
        'natpatoune_hero_btn_text' => array('label' => __('Texte du bouton', 'theme-natpatoune'), 'type' => 'text'),
        'natpatoune_hero_btn_url'  => array('label' => __('Lien du bouton', 'theme-natpatoune'), 'type' => 'url'),
    );
    foreach ($hero_fields as $id => $field) {
        $wp_customize->add_setting($id, array(
            'sanitize_callback' => $field['type'] === 'url' ? 'esc_url_raw' : 'sanitize_text_field',
        ));
        $wp_customize->add_control($id, array(
            'label'   => $field['label'],
            'section' => 'natpatoune_hero_section',
            'type'    => $field['type'],
        ));
    }

    $wp_customize->add_setting('natpatoune_hero_image', array(
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'natpatoune_hero_image', array(
        'label'   => __("Image d'arrière-plan", 'theme-natpatoune'),
        'section' => 'natpatoune_hero_section',
    )));

    // === Section Services ===
    $wp_customize->add_section('natpatoune_services_section', array(
        'title' => __('Services', 'theme-natpatoune'),
        'panel' => 'natpatoune_frontpage_panel',
    ));

    $wp_customize->add_setting('natpatoune_services_title', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('natpatoune_services_title', array(
        'label'   => __('Titre de la section', 'theme-natpatoune'),
        'section' => 'natpatoune_services_section',
        'type'    => 'text',
    ));

    for ($i = 1; $i <= 3; $i++) {
        $wp_customize->add_setting("natpatoune_service_{$i}_title", array(
            'sanitize_callback' => 'sanitize_text_field',
        ));
        $wp_customize->add_control("natpatoune_service_{$i}_title", array(
            'label'   => sprintf(__('Service %d - Titre', 'theme-natpatoune'), $i),
            'section' => 'natpatoune_services_section',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("natpatoune_service_{$i}_desc", array(
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("natpatoune_service_{$i}_desc", array(
            'label'   => sprintf(__('Service %d - Description', 'theme-natpatoune'), $i),
            'section' => 'natpatoune_services_section',
            'type'    => 'textarea',
        ));

        $wp_customize->add_setting("natpatoune_service_{$i}_image", array(
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "natpatoune_service_{$i}_image", array(
            'label'   => sprintf(__('Service %d - Image', 'theme-natpatoune'), $i),
            'section' => 'natpatoune_services_section',
        )));
    }

    // === Section Blog ===
    $wp_customize->add_section('natpatoune_blog_section', array(
        'title' => __('Derniers articles', 'theme-natpatoune'),
        'panel' => 'natpatoune_frontpage_panel',
    ));

    $wp_customize->add_setting('natpatoune_blog_title', array(
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('natpatoune_blog_title', array(
        'label'   => __('Titre de la section', 'theme-natpatoune'),
        'section' => 'natpatoune_blog_section',
        'type'    => 'text',
    ));
}
add_action('customize_register', 'natpatoune_customize_register');
