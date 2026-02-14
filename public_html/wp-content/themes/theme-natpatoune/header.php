<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php
        if (is_single() || is_page()) {
            echo esc_attr(wp_trim_words(get_the_excerpt(), 30));
        } else {
            echo esc_attr(get_bloginfo('description'));
        }
    ?>">

    <meta property="og:locale" content="<?php echo esc_attr(get_locale()); ?>">
    <meta property="og:site_name" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
    <?php if (is_single() || is_page()) : ?>
        <meta property="og:type" content="article">
        <meta property="og:title" content="<?php echo esc_attr(get_the_title()); ?>">
        <meta property="og:description" content="<?php echo esc_attr(wp_trim_words(get_the_excerpt(), 30)); ?>">
        <meta property="og:url" content="<?php echo esc_url(get_permalink()); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <meta property="og:image" content="<?php echo esc_url(get_the_post_thumbnail_url(null, 'large')); ?>">
        <?php endif; ?>
    <?php else : ?>
        <meta property="og:type" content="website">
        <meta property="og:title" content="<?php echo esc_attr(get_bloginfo('name')); ?>">
        <meta property="og:description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
        <meta property="og:url" content="<?php echo esc_url(home_url('/')); ?>">
    <?php endif; ?>

    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="<?php echo esc_attr(is_single() || is_page() ? get_the_title() : get_bloginfo('name')); ?>">
    <meta name="twitter:description" content="<?php
        echo esc_attr(is_single() || is_page() ? wp_trim_words(get_the_excerpt(), 30) : get_bloginfo('description'));
    ?>">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<header class="site-header" role="banner">
    <div class="site-branding">
        <?php if (has_custom_logo()) : ?>
            <div class="site-logo">
                <?php the_custom_logo(); ?>
            </div>
        <?php else : ?>
            <h1 class="site-title">
                <a href="<?php echo esc_url(home_url('/')); ?>">
                    <?php bloginfo('name'); ?>
                </a>
            </h1>
            <?php
            $description = get_bloginfo('description', 'display');
            if ($description) : ?>
                <p class="site-description"><?php echo esc_html($description); ?></p>
            <?php endif; ?>
        <?php endif; ?>
    </div>

    <nav class="main-navigation" role="navigation" aria-label="<?php esc_attr_e('Menu principal', 'theme-natpatoune'); ?>">
        <?php
        wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'primary-menu',
            'fallback_cb'    => false,
        ));
        ?>
    </nav>
</header>
