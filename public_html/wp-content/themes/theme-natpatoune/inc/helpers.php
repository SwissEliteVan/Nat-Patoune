<?php
/**
 * @package Theme_NatPatoune
 */

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
