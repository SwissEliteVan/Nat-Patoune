<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="<?php echo esc_attr(get_bloginfo('description')); ?>">
  
  <?php if (!function_exists('has_site_icon') || !has_site_icon()) : ?>
    <link rel="icon" type="image/png" href="<?php echo esc_url(get_theme_file_uri('assets/img/favicon-natpatoune-chat.png')); ?>">
  <?php endif; ?>

  <?php if (is_front_page()) : ?>
    <link rel="preload" href="<?php echo esc_url(get_theme_file_uri('assets/img/cat-sitting-lausanne-hero-poster.webp')); ?>" as="image">
    <link rel="preload" href="<?php echo esc_url(get_theme_file_uri('assets/img/cat-sitting-lausanne-hero-720p.mp4')); ?>" as="video" type="video/mp4">
  <?php endif; ?>

  <!-- Polices Google -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">

  <!-- Tailwind Config -->
  <script>
    if (typeof tailwind === 'undefined') {
      // Tailwind n'est pas encore chargé, on crée un objet vide pour éviter les erreurs
      window.tailwind = { config: { theme: { extend: {} } } };
    }
    
    // Configuration Tailwind (système de design)
    window.tailwindConfig = {
      theme: {
        extend: {
          colors: {
            'brand-purple': '#8F78D3',
            'brand-purple-dark': '#7A65B8',
            'brand-pink': '#E8AEC3',
            'brand-green': '#9BB89F',
            'brand-beige': '#FBF9F4',
            'brand-text': '#3A3A3A',
            'brand-text-light': '#6B6B6B',
            'brand-white': '#FFFFFF',
            'brand-grey': '#E5E5E5',
          },
          fontFamily: {
            'title': ['Outfit', 'system-ui', 'sans-serif'],
            'body': ['Inter', 'system-ui', 'sans-serif'],
          },
          boxShadow: {
            'soft': '0 10px 30px rgba(0, 0, 0, 0.06)',
            'medium': '0 15px 40px rgba(0, 0, 0, 0.1)',
          }
        }
      }
    };
    
    // Si Tailwind CDN est chargé, on applique la config
    if (typeof tailwind !== 'undefined' && tailwind.config) {
      tailwind.config = window.tailwindConfig;
    }
  </script>
  
  <!-- Tailwind CDN (sera remplacé par une version compilée plus tard) -->
  <script src="https://cdn.tailwindcss.com"></script>

  <?php wp_head(); ?>
</head>

<body <?php body_class('font-body text-brand-text bg-brand-white'); ?>>
<?php wp_body_open(); ?>

<!-- Accessibilité: lien d'évitement -->
<a href="#main-content" class="sr-only focus:not-sr-only focus:absolute focus:top-4 focus:left-4 focus:z-50 focus:px-4 focus:py-2 focus:bg-white focus:text-brand-purple focus:shadow-medium focus:rounded-md">
  <?php esc_html_e('Aller au contenu principal', 'natpatoune'); ?>
</a>

<!-- Header avec navigation -->
<header class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-md shadow-sm z-50">
  <nav class="container mx-auto px-4 py-4">
    <div class="flex items-center justify-between">

      <!-- Logo -->
      <div class="flex items-center gap-3">
        <?php
        if (function_exists('natpatoune_get_logo')) {
          natpatoune_get_logo();
        } else {
          echo '<a href="' . esc_url(home_url('/')) . '" class="font-title font-bold text-2xl text-brand-purple">Nat Patoune</a>';
        }
        ?>
      </div>

      <!-- Desktop Menu -->
      <?php
      if (has_nav_menu('primary')) {
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'hidden lg:flex items-center gap-6 text-sm font-medium',
          'fallback_cb'    => false,
        ));
      } else {
        echo '<ul class="hidden lg:flex items-center gap-6 text-sm font-medium">';
        echo '<li><a href="' . esc_url(home_url('/#services')) . '" class="hover:text-brand-purple transition focus:outline-none focus:ring-2 focus:ring-brand-purple focus:ring-offset-2 focus:rounded-md px-2 py-1">Services</a></li>';
        echo '<li><a href="' . esc_url(home_url('/#tarifs')) . '" class="hover:text-brand-purple transition focus:outline-none focus:ring-2 focus:ring-brand-purple focus:ring-offset-2 focus:rounded-md px-2 py-1">Tarifs</a></li>';
        echo '<li><a href="' . esc_url(home_url('/blog/')) . '" class="hover:text-brand-purple transition focus:outline-none focus:ring-2 focus:ring-brand-purple focus:ring-offset-2 focus:rounded-md px-2 py-1">Blog</a></li>';
        echo '<li><a href="' . esc_url(home_url('/#contact')) . '" class="hover:text-brand-purple transition focus:outline-none focus:ring-2 focus:ring-brand-purple focus:ring-offset-2 focus:rounded-md px-2 py-1">Contact</a></li>';
        echo '</ul>';
      }
      ?>

      <!-- CTA + Mobile Menu Button -->
      <div class="flex items-center gap-4">
        <?php
        $cta_url  = function_exists('natpatoune_get_cta_url') ? natpatoune_get_cta_url() : home_url('/#contact');
        $cta_text = function_exists('natpatoune_get_cta_text') ? natpatoune_get_cta_text() : 'Réserver';
        ?>
        <a href="<?php echo esc_url($cta_url); ?>" class="hidden md:inline-flex items-center bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-3 px-6 rounded-full transition-all duration-300 shadow-soft hover:shadow-medium transform hover:scale-105 group focus:outline-none focus:ring-2 focus:ring-brand-purple-dark focus:ring-offset-2">
          <i class="fas fa-calendar-check mr-2 group-hover:animate-pulse" aria-hidden="true"></i><?php echo esc_html($cta_text); ?>
          <i class="fas fa-arrow-right ml-2 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all" aria-hidden="true"></i>
        </a>

        <button id="mobile-menu-btn" class="lg:hidden text-brand-purple text-2xl p-2 rounded-full hover:bg-brand-purple/10 transition focus:outline-none focus:ring-2 focus:ring-brand-purple focus:ring-offset-2" aria-label="<?php esc_attr_e('Ouvrir le menu', 'natpatoune'); ?>" aria-expanded="false" aria-controls="mobile-menu">
          <i class="fas fa-bars" aria-hidden="true"></i>
        </button>
      </div>

    </div>
    
    <!-- Mobile Menu (fermé par défaut) -->
    <div id="mobile-menu" class="lg:hidden hidden mt-4 pb-4 border-t border-gray-100 rounded-xl bg-white/95 backdrop-blur-md shadow-medium">
      <?php
      if (has_nav_menu('primary')) {
        wp_nav_menu(array(
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'flex flex-col space-y-4 mt-4',
          'fallback_cb'    => false,
        ));
      } else {
        echo '<ul class="flex flex-col space-y-2 mt-4 px-4">';
        echo '<li><a href="' . esc_url(home_url('/#services')) . '" class="block py-3 px-4 rounded-lg hover:bg-brand-purple/10 hover:text-brand-purple transition flex items-center focus:outline-none focus:ring-2 focus:ring-brand-purple focus:bg-brand-purple/5"><i class="fas fa-paw mr-3 text-brand-purple"></i>Services</a></li>';
        echo '<li><a href="' . esc_url(home_url('/#tarifs')) . '" class="block py-3 px-4 rounded-lg hover:bg-brand-purple/10 hover:text-brand-purple transition flex items-center focus:outline-none focus:ring-2 focus:ring-brand-purple focus:bg-brand-purple/5"><i class="fas fa-tag mr-3 text-brand-purple"></i>Tarifs</a></li>';
        echo '<li><a href="' . esc_url(home_url('/blog/')) . '" class="block py-3 px-4 rounded-lg hover:bg-brand-purple/10 hover:text-brand-purple transition flex items-center focus:outline-none focus:ring-2 focus:ring-brand-purple focus:bg-brand-purple/5"><i class="fas fa-book mr-3 text-brand-purple"></i>Blog</a></li>';
        echo '<li><a href="' . esc_url(home_url('/#contact')) . '" class="block py-3 px-4 rounded-lg hover:bg-brand-purple/10 hover:text-brand-purple transition flex items-center focus:outline-none focus:ring-2 focus:ring-brand-purple focus:bg-brand-purple/5"><i class="fas fa-envelope mr-3 text-brand-purple"></i>Contact</a></li>';
        echo '</ul>';
      }
      
      // CTA mobile
      echo '<div class="mt-6 px-4 pb-2">';
      echo '<a href="' . esc_url($cta_url) . '" class="flex items-center justify-center w-full bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-4 px-6 rounded-full transition-all duration-300 shadow-medium hover:shadow-lg group focus:outline-none focus:ring-2 focus:ring-brand-purple-dark focus:ring-offset-2">';
      echo '<span class="bg-white/20 p-2 rounded-full mr-3 group-hover:bg-white/30 transition-all"><i class="fas fa-calendar-check" aria-hidden="true"></i></span>';
      echo esc_html($cta_text);
      echo '<i class="fas fa-arrow-right ml-2 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all" aria-hidden="true"></i>';
      echo '</a>';
      echo '</div>';
      ?>
    </div>
  </nav>
</header>

<!-- Contenu principal -->
<main id="main-content" role="main">
<!-- La balise main est fermée dans footer.php -->
