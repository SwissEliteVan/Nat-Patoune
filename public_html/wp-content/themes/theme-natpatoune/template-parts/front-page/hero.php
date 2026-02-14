<?php
/**
 * @package Theme_NatPatoune
 */

$hero_title    = get_theme_mod('natpatoune_hero_title', __('Bienvenue chez Nat-Patoune', 'theme-natpatoune'));
$hero_subtitle = get_theme_mod('natpatoune_hero_subtitle', __('Le bien-être de vos compagnons est notre priorité', 'theme-natpatoune'));
$hero_btn_text = get_theme_mod('natpatoune_hero_btn_text', __('En savoir plus', 'theme-natpatoune'));
$hero_btn_url  = get_theme_mod('natpatoune_hero_btn_url', '#services');
$hero_image    = get_theme_mod('natpatoune_hero_image');
?>

<section class="hero-section" <?php if ($hero_image) : ?>style="background-image: url('<?php echo esc_url($hero_image); ?>');"<?php endif; ?>>
    <div class="hero-overlay">
        <div class="container">
            <?php if ($hero_title) : ?>
                <h1 class="hero-title"><?php echo esc_html($hero_title); ?></h1>
            <?php endif; ?>

            <?php if ($hero_subtitle) : ?>
                <p class="hero-subtitle"><?php echo esc_html($hero_subtitle); ?></p>
            <?php endif; ?>

            <?php if ($hero_btn_text) : ?>
                <a href="<?php echo esc_url($hero_btn_url); ?>" class="hero-btn">
                    <?php echo esc_html($hero_btn_text); ?>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
