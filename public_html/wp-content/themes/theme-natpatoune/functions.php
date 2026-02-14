<?php
/**
 * @package Theme_NatPatoune
 */

function natpatoune_theme_setup() {
    add_theme_support('post-thumbnails');
    add_theme_support('excerpt');
    add_theme_support('title-tag');

    add_theme_support('html5', array(
        'search-form',
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
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
}
add_action('after_setup_theme', 'natpatoune_theme_setup');

function natpatoune_enqueue_assets() {
    wp_enqueue_style(
        'natpatoune-style',
        get_stylesheet_uri(),
        array(),
        wp_get_theme()->get('Version')
    );

    wp_enqueue_script(
        'natpatoune-main',
        get_template_directory_uri() . '/assets/js/main.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    wp_enqueue_script(
        'natpatoune-navigation',
        get_template_directory_uri() . '/assets/js/navigation.js',
        array(),
        wp_get_theme()->get('Version'),
        true
    );

    if (is_singular() && comments_open() && get_option('thread_comments')) {
        wp_enqueue_script('comment-reply');
    }
}
add_action('wp_enqueue_scripts', 'natpatoune_enqueue_assets');

function natpatoune_customize_register($wp_customize) {

    $wp_customize->add_panel('natpatoune_frontpage_panel', array(
        'title'    => __("Page d'accueil", 'theme-natpatoune'),
        'priority' => 130,
    ));

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
            'label'   => sprintf(__('Service %d — Titre', 'theme-natpatoune'), $i),
            'section' => 'natpatoune_services_section',
            'type'    => 'text',
        ));

        $wp_customize->add_setting("natpatoune_service_{$i}_desc", array(
            'sanitize_callback' => 'sanitize_textarea_field',
        ));
        $wp_customize->add_control("natpatoune_service_{$i}_desc", array(
            'label'   => sprintf(__('Service %d — Description', 'theme-natpatoune'), $i),
            'section' => 'natpatoune_services_section',
            'type'    => 'textarea',
        ));

        $wp_customize->add_setting("natpatoune_service_{$i}_image", array(
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, "natpatoune_service_{$i}_image", array(
            'label'   => sprintf(__('Service %d — Image', 'theme-natpatoune'), $i),
            'section' => 'natpatoune_services_section',
        )));
    }

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

    $wp_customize->add_section('natpatoune_settings_section', array(
        'title'    => __('Paramètres Nat Patoune', 'theme-natpatoune'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('natpatoune_phone', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('natpatoune_phone', array(
        'label'       => __('Numéro de téléphone', 'theme-natpatoune'),
        'description' => __('Ex : +41 79 123 45 67', 'theme-natpatoune'),
        'section'     => 'natpatoune_settings_section',
        'type'        => 'text',
    ));

    $wp_customize->add_setting('natpatoune_email', array(
        'default'           => '',
        'sanitize_callback' => 'sanitize_email',
    ));
    $wp_customize->add_control('natpatoune_email', array(
        'label'   => __('Adresse email', 'theme-natpatoune'),
        'section' => 'natpatoune_settings_section',
        'type'    => 'email',
    ));

    $social_links = array(
        'natpatoune_facebook'  => __('Facebook — URL', 'theme-natpatoune'),
        'natpatoune_instagram' => __('Instagram — URL', 'theme-natpatoune'),
        'natpatoune_tiktok'    => __('TikTok — URL', 'theme-natpatoune'),
        'natpatoune_youtube'   => __('YouTube — URL', 'theme-natpatoune'),
    );
    foreach ($social_links as $id => $label) {
        $wp_customize->add_setting($id, array(
            'default'           => '',
            'sanitize_callback' => 'esc_url_raw',
        ));
        $wp_customize->add_control($id, array(
            'label'   => $label,
            'section' => 'natpatoune_settings_section',
            'type'    => 'url',
        ));
    }

    $wp_customize->add_setting('natpatoune_cta_text', array(
        'default'           => __('Prendre rendez-vous', 'theme-natpatoune'),
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control('natpatoune_cta_text', array(
        'label'   => __('CTA — Texte du bouton', 'theme-natpatoune'),
        'section' => 'natpatoune_settings_section',
        'type'    => 'text',
    ));

    $wp_customize->add_setting('natpatoune_cta_url', array(
        'default'           => '',
        'sanitize_callback' => 'esc_url_raw',
    ));
    $wp_customize->add_control('natpatoune_cta_url', array(
        'label'   => __('CTA — Lien du bouton', 'theme-natpatoune'),
        'section' => 'natpatoune_settings_section',
        'type'    => 'url',
    ));
}
add_action('customize_register', 'natpatoune_customize_register');

function natpatoune_get_phone() {
    return get_theme_mod('natpatoune_phone', '');
}

function natpatoune_get_email() {
    return get_theme_mod('natpatoune_email', '');
}

function natpatoune_get_socials() {
    return array(
        'facebook'  => get_theme_mod('natpatoune_facebook', ''),
        'instagram' => get_theme_mod('natpatoune_instagram', ''),
        'tiktok'    => get_theme_mod('natpatoune_tiktok', ''),
        'youtube'   => get_theme_mod('natpatoune_youtube', ''),
    );
}

function natpatoune_get_cta() {
    return array(
        'text' => get_theme_mod('natpatoune_cta_text', __('Prendre rendez-vous', 'theme-natpatoune')),
        'url'  => get_theme_mod('natpatoune_cta_url', ''),
    );
}
