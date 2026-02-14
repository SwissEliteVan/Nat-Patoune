<?php
/**
 * Template part : Section Services de la page d'accueil.
 * Contenus modifiables via Apparence > Personnaliser > Page d'accueil.
 *
 * @package Theme_NatPatoune
 */

$section_title = get_theme_mod('natpatoune_services_title', __('Nos Services', 'theme-natpatoune'));

$services = array(
    array(
        'title' => get_theme_mod('natpatoune_service_1_title', __('Toilettage', 'theme-natpatoune')),
        'desc'  => get_theme_mod('natpatoune_service_1_desc', __('Un soin complet pour le pelage de votre animal.', 'theme-natpatoune')),
        'image' => get_theme_mod('natpatoune_service_1_image'),
    ),
    array(
        'title' => get_theme_mod('natpatoune_service_2_title', __('Garde', 'theme-natpatoune')),
        'desc'  => get_theme_mod('natpatoune_service_2_desc', __('Un environnement sûr et chaleureux pour vos compagnons.', 'theme-natpatoune')),
        'image' => get_theme_mod('natpatoune_service_2_image'),
    ),
    array(
        'title' => get_theme_mod('natpatoune_service_3_title', __('Promenades', 'theme-natpatoune')),
        'desc'  => get_theme_mod('natpatoune_service_3_desc', __('Des promenades quotidiennes adaptées à chaque animal.', 'theme-natpatoune')),
        'image' => get_theme_mod('natpatoune_service_3_image'),
    ),
);
?>

<section class="services-section">
    <div class="container">
        <?php if ($section_title) : ?>
            <h2 class="section-title"><?php echo esc_html($section_title); ?></h2>
        <?php endif; ?>

        <div class="services-grid">
            <?php foreach ($services as $service) : ?>
                <article class="service-card">
                    <?php if ($service['image']) : ?>
                        <div class="service-image">
                            <img src="<?php echo esc_url($service['image']); ?>"
                                 alt="<?php echo esc_attr($service['title']); ?>">
                        </div>
                    <?php endif; ?>
                    <?php if ($service['title']) : ?>
                        <h3 class="service-title"><?php echo esc_html($service['title']); ?></h3>
                    <?php endif; ?>
                    <?php if ($service['desc']) : ?>
                        <p class="service-description"><?php echo esc_html($service['desc']); ?></p>
                    <?php endif; ?>
                </article>
            <?php endforeach; ?>
        </div>
    </div>
</section>
