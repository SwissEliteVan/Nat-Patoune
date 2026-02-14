<!doctype html>
<html <?php language_attributes(); ?> class="scroll-smooth">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
  
  <?php if (!function_exists('has_site_icon') || !has_site_icon()) : ?>
    <link rel="icon" type="image/png" href="<?php echo esc_url(get_theme_file_uri('assets/img/favicon-natpatoune-chat.png')); ?>">
  <?php endif; ?>

  <?php if (is_front_page()) : ?>
    <link rel="preload" href="<?php echo esc_url(get_theme_file_uri('assets/img/cat-sitting-lausanne-hero-poster.webp')); ?>" as="image">
  <?php endif; ?>


  <?php wp_head(); ?>
</head>

<body <?php body_class('font-body text-brand-text antialiased bg-brand-beige'); ?>>
<?php wp_body_open(); ?>

<!-- Accessibilité: lien d'évitement -->
<a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 z-50 bg-brand-purple text-white px-4 py-2 rounded-md">
  <?php esc_html_e('Aller au contenu principal', 'natpatoune'); ?>
</a>

<!-- Barre supérieure -->
<div class="bg-brand-purple text-white text-sm py-2 hidden md:block">
    <div class="container mx-auto px-4 flex justify-between items-center">
        <span class="flex items-center gap-2">
            <i class="fas fa-map-marker-alt"></i> Morges, Ouest lausannois, Lausanne et Échallens
        </span>
        <a href="mailto:<?php echo esc_attr(function_exists('natpatoune_get_email') ? natpatoune_get_email() : 'miaou@nat-patoune.ch'); ?>" class="hover:text-brand-pink transition-colors">
            Contact
        </a>
    </div>
</div>

<!-- Header avec navigation -->
<header class="sticky top-0 z-40 bg-white/90 backdrop-blur-md shadow-sm transition-all duration-300" id="site-header">
  <div class="container mx-auto px-4">
    <div class="flex justify-between items-center h-20">

      <!-- Logo -->
      <div class="flex-shrink-0">
        <?php
        if (function_exists('natpatoune_get_logo')) {
          natpatoune_get_logo();
        } else {
          echo '<a href="' . esc_url(home_url('/')) . '" class="font-title font-bold text-2xl text-brand-purple">Nat Patoune</a>';
        }
        ?>
      </div>

      <!-- Desktop Menu -->
      <nav class="hidden lg:flex items-center gap-8" aria-label="<?php esc_attr_e('Menu principal', 'natpatoune'); ?>">
        <?php
        if (has_nav_menu('primary')) {
          wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'flex items-center gap-8 font-medium text-brand-text hover:text-brand-purple transition-colors',
            'fallback_cb'    => false,
            'items_wrap'     => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            'link_before'    => '',
            'link_after'     => '',
          ));
        } else {
            // Fallback menu
            $menu_items = [
                'Services' => '/#services',
                'Tarifs' => '/#tarifs',
                'Blog' => '/blog/',
                'Contact' => '/#contact',
            ];
            echo '<ul class="flex items-center gap-8">';
            foreach ($menu_items as $label => $url) {
                echo '<li><a href="' . esc_url(home_url($url)) . '" class="font-medium text-brand-text hover:text-brand-purple transition-colors">' . esc_html($label) . '</a></li>';
            }
            echo '</ul>';
        }
        ?>
      </nav>

      <!-- CTA + Mobile Menu Button -->
      <div class="flex items-center gap-4">
        <?php
        $cta_url  = function_exists('natpatoune_get_cta_url') ? natpatoune_get_cta_url() : home_url('/#contact');
        $cta_text = function_exists('natpatoune_get_cta_text') ? natpatoune_get_cta_text() : 'Réserver';
        ?>
        <a href="<?php echo esc_url($cta_url); ?>" class="hidden md:inline-flex items-center gap-2 bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-2 px-6 rounded-full transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
          <i class="fas fa-calendar-check" aria-hidden="true"></i><?php echo esc_html($cta_text); ?>
        </a>

        <button id="mobile-menu-btn" class="lg:hidden text-brand-text hover:text-brand-purple focus:outline-none p-2" aria-label="<?php esc_attr_e('Ouvrir le menu', 'natpatoune'); ?>" aria-expanded="false" aria-controls="mobile-menu">
          <i class="fas fa-bars text-2xl" aria-hidden="true"></i>
        </button>
      </div>

    </div>
    
    <!-- Mobile Menu (fermé par défaut) -->
    <div id="mobile-menu" class="hidden lg:hidden border-t border-gray-100 py-4 bg-white absolute left-0 right-0 shadow-lg px-4">
      <nav class="flex flex-col gap-4" aria-label="<?php esc_attr_e('Menu mobile', 'natpatoune'); ?>">
        <?php
        if (has_nav_menu('primary')) {
          wp_nav_menu(array(
            'theme_location' => 'primary',
            'container'      => false,
            'menu_class'     => 'flex flex-col gap-4 font-medium text-lg',
            'fallback_cb'    => false,
          ));
        } else {
            echo '<ul class="flex flex-col gap-4 font-medium text-lg">';
            echo '<li><a href="' . esc_url(home_url('/#services')) . '" class="flex items-center gap-3 py-2 text-brand-text hover:text-brand-purple"><i class="fas fa-paw w-6 text-center text-brand-purple/60"></i>Services</a></li>';
            echo '<li><a href="' . esc_url(home_url('/#tarifs')) . '" class="flex items-center gap-3 py-2 text-brand-text hover:text-brand-purple"><i class="fas fa-tag w-6 text-center text-brand-purple/60"></i>Tarifs</a></li>';
            echo '<li><a href="' . esc_url(home_url('/blog/')) . '" class="flex items-center gap-3 py-2 text-brand-text hover:text-brand-purple"><i class="fas fa-book w-6 text-center text-brand-purple/60"></i>Blog</a></li>';
            echo '<li><a href="' . esc_url(home_url('/#contact')) . '" class="flex items-center gap-3 py-2 text-brand-text hover:text-brand-purple"><i class="fas fa-envelope w-6 text-center text-brand-purple/60"></i>Contact</a></li>';
            echo '</ul>';
        }
        ?>
        
        <div class="mt-4 pt-4 border-t border-gray-100">
          <a href="<?php echo esc_url($cta_url); ?>" class="flex items-center justify-center gap-2 w-full bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-3 px-6 rounded-xl transition-colors shadow-md">
            <i class="fas fa-calendar-check" aria-hidden="true"></i><?php echo esc_html($cta_text); ?>
          </a>
        </div>
      </nav>
    </div>
  </div>
</header>

<!-- Contenu principal -->
<main id="main-content" role="main" class="flex-grow">
