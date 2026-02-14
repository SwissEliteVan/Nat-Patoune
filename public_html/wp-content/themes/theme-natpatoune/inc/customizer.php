<?php
/**
 * @package Theme_NatPatoune
 */

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
