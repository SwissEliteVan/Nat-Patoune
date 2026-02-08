<!doctype html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php
  $meta_title       = wp_get_document_title();
  $meta_description = get_bloginfo('description');
  $meta_url         = is_singular() ? get_permalink() : home_url('/');
  $meta_type        = is_singular() ? 'article' : 'website';
  $meta_image       = '';

  if (is_singular() && has_post_thumbnail()) {
    $meta_image = get_the_post_thumbnail_url(null, 'full');
  }
  ?>

  <meta name="description" content="<?php echo esc_attr($meta_description); ?>">
  <meta property="og:title" content="<?php echo esc_attr($meta_title); ?>">
  <meta property="og:description" content="<?php echo esc_attr($meta_description); ?>">
  <meta property="og:url" content="<?php echo esc_url($meta_url); ?>">
  <meta property="og:type" content="<?php echo esc_attr($meta_type); ?>">
  <?php if (!empty($meta_image)) : ?>
    <meta property="og:image" content="<?php echo esc_url($meta_image); ?>">
  <?php endif; ?>

  <?php if (!function_exists('has_site_icon') || !has_site_icon()) : ?>
    <link rel="icon" type="image/png" href="<?php echo esc_url(get_theme_file_uri('assets/img/favicon-natpatoune-chat.png')); ?>">
  <?php endif; ?>

  <?php if (is_front_page()) : ?>
    <link rel="preload" href="<?php echo esc_url(get_theme_file_uri('assets/img/cat-sitting-lausanne-hero-poster.webp')); ?>" as="image">
    <link rel="preload" href="<?php echo esc_url(get_theme_file_uri('assets/img/cat-sitting-lausanne-hero-720p.mp4')); ?>" as="video" type="video/mp4">
  <?php endif; ?>

  <!-- Tailwind CDN (on l'enlèvera plus tard quand on compilera proprement) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
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
    }
  </script>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600;700;800&family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" crossorigin="anonymous" referrerpolicy="no-referrer">

  <?php wp_head(); ?>
</head>

<body <?php body_class('font-body text-brand-text bg-brand-white'); ?>>
<?php wp_body_open(); ?>

<a href="#main-content" class="skip-to-content">Aller au contenu principal</a>

<header class="fixed top-0 left-0 right-0 bg-white/95 backdrop-blur-md shadow-sm z-50">
  <nav class="container mx-auto px-4 py-4" aria-label="Navigation principale">
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
          'items_wrap'     => '<ul id="primary-menu" class="%2$s">%3$s</ul>',
          'fallback_cb'    => false,
        ));
      } else {
        echo '<ul id="primary-menu" class="hidden lg:flex items-center gap-6 text-sm font-medium">';
        echo '<li><a href="' . esc_url(home_url('/#services')) . '" class="hover:text-brand-purple transition">Services</a></li>';
        echo '<li><a href="' . esc_url(home_url('/#tarifs')) . '" class="hover:text-brand-purple transition">Tarifs</a></li>';
        echo '<li><a href="' . esc_url(home_url('/blog/')) . '" class="hover:text-brand-purple transition">Blog</a></li>';
        echo '<li><a href="' . esc_url(home_url('/#contact')) . '" class="hover:text-brand-purple transition">Contact</a></li>';
        echo '</ul>';
      }
      ?>

      <!-- CTA + Mobile -->
      <div class="flex items-center gap-4">
        <?php
        $cta_url  = function_exists('natpatoune_get_cta_url') ? natpatoune_get_cta_url() : home_url('/#contact');
        $cta_text = function_exists('natpatoune_get_cta_text') ? natpatoune_get_cta_text() : 'Réserver';
        ?>
        <a href="<?php echo esc_url($cta_url); ?>" class="hidden md:inline-flex items-center bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-3 px-6 rounded-full transition shadow-soft hover:shadow-medium">
          <i class="fas fa-calendar-check mr-2" aria-hidden="true"></i><?php echo esc_html($cta_text); ?>
        </a>

        <button id="mobile-menu-btn" class="lg:hidden text-brand-purple text-2xl" aria-label="Ouvrir le menu" aria-expanded="false" aria-controls="primary-menu">
          <i class="fas fa-bars" aria-hidden="true"></i>
        </button>
      </div>

    </div>
  </nav>
</header>

<main id="main-content" role="main">
