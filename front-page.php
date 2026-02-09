<?php
/**
 * Template Name: Page d'accueil
 *
 * @package NatPatoune
 */

get_header(); ?>

<!-- Hero Section -->
<?php get_template_part('template-parts/front-page/hero'); ?>

<!-- À propos Section -->
<?php get_template_part('template-parts/front-page/about'); ?>

<!-- Sections de la page d'accueil -->
<?php
// Charger les template-parts dans l'ordre exact du HTML de référence
$template_parts = [
    'services',
    'cadeau',
    'zones',
    'tarifs',
    'blog',
    'galerie',
    'testimonials',
    'process',
    'faq',
    'contact'
];

foreach ($template_parts as $part) {
    $template_path = 'template-parts/front-page/' . $part . '.php';
    if (file_exists(get_theme_file_path($template_path))) {
        include(locate_template($template_path));
    }
}
?>

<?php get_footer(); ?>
