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
}
add_action('after_setup_theme', 'natpatoune_theme_setup');
