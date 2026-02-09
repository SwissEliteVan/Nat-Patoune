<!-- Fermeture de la balise main du header.php -->
</main>
<!-- La balise main est ouverte dans header.php -->

<!-- Cookie Banner -->
<div id="cookie-banner" class="cookie-banner hidden fixed bottom-0 left-0 right-0 bg-white border-t-2 border-brand-purple shadow-lg z-50 animate-slide-up">
    <div class="container mx-auto px-4 py-6">
        <div class="flex flex-col md:flex-row items-start md:items-center gap-4 md:gap-6">
            <div class="flex-1">
                <p class="text-sm text-brand-text leading-relaxed">
                    <i class="fas fa-cookie-bite text-brand-purple mr-2" aria-hidden="true"></i>
                    <strong>Respect de votre vie privée</strong> – 
                    <?php 
                    if (function_exists('natpatoune_get_cookie_settings')) {
                        echo esc_html(natpatoune_get_cookie_settings()['text']);
                    } else {
                        echo 'Ce site utilise des cookies essentiels pour son fonctionnement. Aucun cookie de tracking ou publicitaire n\'est utilisé.';
                    }
                    ?>
                    <?php 
                    $policy_url = function_exists('natpatoune_get_cookie_settings') ? natpatoune_get_cookie_settings()['policyUrl'] : home_url('/politique-confidentialite/');
                    if ($policy_url && $policy_url !== '#') : 
                    ?>
                    <a href="<?php echo esc_url($policy_url); ?>" class="text-brand-purple underline hover:text-brand-purple-dark">En savoir plus</a>
                    <?php endif; ?>
                </p>
            </div>
            <div class="flex flex-wrap gap-2">
                <button id="cookie-accept" class="bg-brand-purple hover:bg-brand-purple-dark text-white font-bold px-6 py-2 rounded-full transition text-sm">
                    <?php 
                    if (function_exists('natpatoune_get_cookie_settings')) {
                        echo esc_html(natpatoune_get_cookie_settings()['buttonText']);
                    } else {
                        echo 'Accepter';
                    }
                    ?>
                </button>
                <button id="cookie-refuse" class="bg-gray-200 hover:bg-gray-300 text-brand-text font-bold px-6 py-2 rounded-full transition text-sm">
                    Refuser
                </button>
                <button id="cookie-customize" class="bg-white hover:bg-brand-beige text-brand-purple font-bold px-6 py-2 rounded-full transition border-2 border-brand-purple text-sm">
                    Personnaliser
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Cookie Modal (Personnalisation) -->
<div id="cookie-modal" class="cookie-modal hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
    <div class="bg-white rounded-3xl shadow-lg max-w-2xl w-full max-h-[90vh] overflow-y-auto">
        <div class="p-6 md:p-8">
            <div class="flex items-center justify-between mb-6">
                <h3 class="font-title font-bold text-2xl text-brand-text">
                    <i class="fas fa-cookie-bite text-brand-purple mr-2" aria-hidden="true"></i>
                    Paramètres des cookies
                </h3>
                <button id="cookie-modal-close" class="text-brand-text-light hover:text-brand-text text-2xl" aria-label="Fermer la fenêtre des paramètres">
                    <i class="fas fa-times" aria-hidden="true"></i>
                </button>
            </div>
            
            <p class="text-brand-text-light mb-6 leading-relaxed">
                Nous respectons votre vie privée. Vous pouvez choisir quels cookies accepter. Les cookies essentiels sont toujours activés car nécessaires au bon fonctionnement du site.
            </p>
            
            <div class="space-y-4">
                <!-- Cookies Essentiels -->
                <div class="bg-brand-beige rounded-2xl p-4">
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="font-bold text-brand-text">
                            <i class="fas fa-shield-alt text-brand-purple mr-2" aria-hidden="true"></i>
                            Cookies essentiels
                        </h4>
                        <span class="text-xs bg-brand-purple text-white px-3 py-1 rounded-full font-bold">Toujours actif</span>
                    </div>
                    <p class="text-sm text-brand-text-light">
                        Nécessaires au fonctionnement du site (navigation, formulaires, sécurité).
                    </p>
                </div>
                
                <!-- Cookies Statistiques -->
                <div class="bg-white border-2 border-brand-grey rounded-2xl p-4">
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="font-bold text-brand-text">
                            <i class="fas fa-chart-line text-brand-purple mr-2" aria-hidden="true"></i>
                            Cookies statistiques
                        </h4>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" id="cookie-stats" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-brand-purple/30 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-purple"></div>
                        </label>
                    </div>
                    <p class="text-sm text-brand-text-light">
                        Nous aident à comprendre comment vous utilisez le site pour l'améliorer (pas de tracking publicitaire).
                    </p>
                </div>
                
                <!-- Cookies Marketing -->
                <div class="bg-white border-2 border-brand-grey rounded-2xl p-4">
                    <div class="flex items-center justify-between mb-2">
                        <h4 class="font-bold text-brand-text">
                            <i class="fas fa-bullhorn text-brand-purple mr-2" aria-hidden="true"></i>
                            Cookies marketing
                        </h4>
                        <label class="relative inline-flex items-center cursor-pointer">
                            <input type="checkbox" id="cookie-marketing" class="sr-only peer">
                            <div class="w-11 h-6 bg-gray-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-brand-purple/30 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-brand-purple"></div>
                        </label>
                    </div>
                    <p class="text-sm text-brand-text-light">
                        Permettent de personnaliser les publicités (actuellement non utilisés sur ce site).
                    </p>
                </div>
            </div>
            
            <div class="flex gap-3 mt-8">
                <button id="cookie-save-prefs" class="flex-1 bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-3 px-6 rounded-full transition">
                    Enregistrer mes préférences
                </button>
                <button id="cookie-accept-all" class="flex-1 bg-brand-green hover:bg-brand-green/80 text-white font-bold py-3 px-6 rounded-full transition">
                    Tout accepter
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Lead Popup (non intrusive) -->
<div id="lead-popup" class="lead-popup hidden fixed inset-0 bg-black/50 z-45 flex items-center justify-center p-4" role="dialog" aria-modal="true" aria-labelledby="lead-popup-title">
    <div class="bg-white rounded-3xl shadow-2xl max-w-md w-full relative animate-slide-up">
        <button id="lead-popup-close" class="absolute top-4 right-4 text-brand-text-light hover:text-brand-purple text-2xl transition z-10" aria-label="<?php esc_attr_e('Fermer', 'natpatoune'); ?>">
            <i class="fas fa-times-circle" aria-hidden="true"></i>
        </button>
        
        <div class="p-8">
            <div class="text-center mb-6">
                <div class="w-16 h-16 bg-brand-purple/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-gift text-brand-purple text-3xl" aria-hidden="true"></i>
                </div>
                <h3 id="lead-popup-title" class="font-title font-bold text-2xl text-brand-text mb-3">
                    <?php esc_html_e('Offre de bienvenue', 'natpatoune'); ?>
                </h3>
                <p class="text-brand-text-light leading-relaxed">
                    <?php esc_html_e('Recevez gratuitement mon guide "5 conseils pour préparer votre chat à votre départ" et bénéficiez d\'une visite de contact offerte.', 'natpatoune'); ?>
                </p>
            </div>
            
            <form id="lead-popup-form" class="space-y-4">
                <div>
                    <label for="lead-name" class="block text-sm font-medium text-brand-text mb-1">
                        <?php esc_html_e('Votre prénom', 'natpatoune'); ?> <span class="text-brand-purple">*</span>
                    </label>
                    <input type="text" id="lead-name" name="lead-name" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring focus:ring-brand-purple/20 transition" placeholder="<?php esc_attr_e('Ex: Sophie', 'natpatoune'); ?>">
                </div>
                
                <div>
                    <label for="lead-email" class="block text-sm font-medium text-brand-text mb-1">
                        <?php esc_html_e('Votre email', 'natpatoune'); ?> <span class="text-brand-purple">*</span>
                    </label>
                    <input type="email" id="lead-email" name="lead-email" required class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring focus:ring-brand-purple/20 transition" placeholder="<?php esc_attr_e('votre@email.ch', 'natpatoune'); ?>">
                </div>
                
                <div class="flex items-start gap-2">
                    <input type="checkbox" id="lead-consent" name="lead-consent" required class="mt-1 h-4 w-4 focus:ring-2 focus:ring-brand-purple focus:ring-offset-2">
                    <label for="lead-consent" class="text-xs text-brand-text-light">
                        <?php esc_html_e('J\'accepte de recevoir le guide par email et les actualités de Nat Patoune. Désinscription possible à tout moment.', 'natpatoune'); ?>
                    </label>
                </div>
                
                <button type="submit" class="w-full bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-3 px-6 rounded-full transition shadow-medium hover:shadow-lg inline-flex items-center justify-center">
                    <i class="fas fa-download mr-2" aria-hidden="true"></i>
                    <?php esc_html_e('Recevoir mon guide gratuit', 'natpatoune'); ?>
                </button>
                
                <p class="text-xs text-brand-text-light text-center mt-3">
                    <?php esc_html_e('Pas de spam, promis. Seulement des conseils utiles.', 'natpatoune'); ?>
                </p>
            </form>
            
            <div id="lead-popup-success" class="hidden text-center">
                <div class="w-16 h-16 bg-brand-green/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <i class="fas fa-check-circle text-brand-green text-3xl" aria-hidden="true"></i>
                </div>
                <h4 class="font-title font-bold text-xl text-brand-text mb-3">
                    <?php esc_html_e('Merci !', 'natpatoune'); ?>
                </h4>
                <p class="text-brand-text-light mb-6">
                    <?php esc_html_e('Votre guide arrive dans votre boîte mail d\'ici quelques minutes. Pensez à vérifier vos spams si vous ne le recevez pas.', 'natpatoune'); ?>
                </p>
                <button id="lead-popup-close-success" class="bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-3 px-6 rounded-full transition">
                    <?php esc_html_e('Fermer', 'natpatoune'); ?>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Offre Commerciale -->
<div id="modal-offre" class="fixed inset-0 bg-black/50 backdrop-blur-sm z-[9999] hidden items-center justify-center p-4" role="dialog" aria-modal="true" aria-labelledby="modal-offre-title">
  <div class="bg-brand-cream rounded-3xl border-2 border-brand-purple/20 shadow-2xl relative overflow-hidden max-w-md w-full animate-fade-in">
    
    <!-- Bouton fermer -->
    <button type="button"
            id="modal-offre-close"
            aria-label="Fermer"
            class="absolute top-4 right-4 z-30 flex h-10 w-10 items-center justify-center rounded-full bg-white hover:bg-brand-purple hover:text-white text-brand-text transition-all duration-300 shadow-medium hover:scale-110 focus:outline-none focus:ring-2 focus:ring-brand-purple focus:ring-offset-2">
      <i class="fas fa-times text-lg" aria-hidden="true"></i>
    </button>

    <!-- En-tête avec dégradé pastel -->
    <div class="relative bg-gradient-to-br from-brand-purple to-brand-pink px-6 pt-8 pb-6 text-center">
      <!-- Icône décorative -->
      <div class="w-16 h-16 bg-white/20 backdrop-blur-sm rounded-full flex items-center justify-center mx-auto mb-4 shadow-soft">
        <i class="fas fa-cat text-white text-3xl" aria-hidden="true"></i>
      </div>
      
      <h3 id="modal-offre-title" class="font-title font-bold text-2xl text-white leading-tight mb-2">
        Offre de bienvenue Nat'Patoune
      </h3>
      <p class="text-white/95 text-base font-medium">
        Pré-visite offerte pour une première garde
      </p>
    </div>

    <!-- Corps du modal -->
    <div class="p-6 bg-white">
      <!-- Liste des bénéfices -->
      <div class="space-y-3 mb-6">
        <div class="flex items-start gap-3">
          <div class="w-6 h-6 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
            <i class="fas fa-check text-brand-purple text-sm" aria-hidden="true"></i>
          </div>
          <span class="text-brand-text text-sm leading-relaxed">
            <strong class="font-semibold">Pré-visite offerte</strong>
          </span>
        </div>
        
        <div class="flex items-start gap-3">
          <div class="w-6 h-6 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
            <i class="fas fa-check text-brand-purple text-sm" aria-hidden="true"></i>
          </div>
          <span class="text-brand-text text-sm leading-relaxed">
            <strong class="font-semibold">Photos à chaque passage</strong>
          </span>
        </div>
        
        <div class="flex items-start gap-3">
          <div class="w-6 h-6 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
            <i class="fas fa-check text-brand-purple text-sm" aria-hidden="true"></i>
          </div>
          <span class="text-brand-text text-sm leading-relaxed">
            <strong class="font-semibold">Suivi personnalisé</strong> selon les habitudes de votre chat
          </span>
        </div>
      </div>

      <!-- Boutons CTA -->
      <div class="space-y-3">
        <a href="#contact"
           id="modal-offre-cta-primary"
           class="block w-full rounded-full bg-brand-purple hover:bg-brand-purple-dark px-6 py-3.5 font-title font-bold text-white shadow-medium transition-all duration-300 hover:shadow-lg hover:scale-105 text-center focus:outline-none focus:ring-2 focus:ring-brand-purple focus:ring-offset-2">
          <i class="fas fa-calendar-check mr-2" aria-hidden="true"></i>
          Réserver ma pré-visite
        </a>
        
        <a href="#zones-tarifs"
           id="modal-offre-cta-secondary"
           class="block w-full rounded-full bg-brand-beige hover:bg-brand-pink/20 px-6 py-3 font-title font-semibold text-brand-purple border-2 border-brand-purple/20 transition-all duration-300 hover:border-brand-pink text-center focus:outline-none focus:ring-2 focus:ring-brand-pink focus:ring-offset-2">
          <i class="fas fa-map-marker-alt mr-2" aria-hidden="true"></i>
          Voir les zones & tarifs
        </a>
      </div>

      <!-- Mention légale discrète -->
      <p class="mt-5 text-center text-xs text-brand-text-light">
        Offre valable pour une première réservation
      </p>
    </div>
  </div>
</div>

<!-- Boutons flottants (FABs) -->
<div class="fab-container fixed bottom-5 right-5 z-[900] flex flex-col gap-3">
    <button onclick="window.scrollTo({top: 0, behavior: 'smooth'})" class="fab-btn btn-top hidden bg-brand-purple text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition" id="backToTopBtn" aria-label="Haut de page">
        <i class="fas fa-chevron-up"></i>
    </button>
    <a href="tel:+41787685047" class="fab-btn btn-phone bg-blue-400 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-lg hover:scale-110 transition" aria-label="Appeler"><i class="fas fa-phone"></i></a>
</div>

<!-- WhatsApp Sticky Button -->
<?php /* WhatsApp toujours activé pour assurer la présence sur toutes les pages */ ?>
<a href="https://wa.me/41787685047"
   target="_blank"
   rel="noopener noreferrer"
   aria-label="WhatsApp Nat Patoune"
   class="whatsapp-button fixed bottom-6 right-6 z-40 flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-lg transition group">
    <!-- Mobile: bouton rond seul -->
    <span class="w-14 h-14 flex items-center justify-center md:w-auto md:h-auto md:py-3 md:px-5">
        <i class="fab fa-whatsapp text-2xl md:text-xl" aria-hidden="true"></i>
    </span>
    <!-- Desktop: texte visible -->
    <span class="hidden md:inline-block font-bold pr-2">WhatsApp</span>
</a>
<?php /* WhatsApp toujours visible sur toutes les pages */ ?>

<!-- Footer -->
<footer class="bg-brand-text text-white py-16 md:py-20">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-10 mb-12">
            <!-- Col 1 : Logo & Description -->
            <div class="md:col-span-2 pr-0 md:pr-8">
                <div class="flex items-center gap-3 mb-4">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/img/logo-nat-patoune-cat-sitting.svg')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="h-10 w-auto">
                    <span class="font-title font-bold text-2xl"><?php bloginfo('name'); ?></span>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed mb-4">
                    <?php
                    $description = get_bloginfo('description');
                    echo $description ? esc_html($description) : 'Cat-sitting à domicile dans le canton de Vaud. Service professionnel avec rapport quotidien et visite de prise de contact offerte.';
                    ?>
                </p>
                <div class="flex gap-4 mt-6">
                    <a href="https://www.instagram.com/nat.patoune" target="_blank" rel="noopener" aria-label="<?php esc_attr_e('Suivez-nous sur Instagram', 'natpatoune'); ?>" class="w-12 h-12 bg-white/10 hover:bg-brand-purple rounded-full flex items-center justify-center transition-all hover:shadow-glow hover:scale-105">
                        <i class="fab fa-instagram text-lg" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo esc_url(function_exists('natpatoune_get_whatsapp_link') ? natpatoune_get_whatsapp_link() : 'https://wa.me/41787685047'); ?>" target="_blank" rel="noopener" aria-label="<?php esc_attr_e('Contactez-nous sur WhatsApp', 'natpatoune'); ?>" class="w-12 h-12 bg-white/10 hover:bg-green-500 rounded-full flex items-center justify-center transition-all hover:shadow-glow hover:scale-105">
                        <i class="fab fa-whatsapp text-lg" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            
            <!-- Col 2 : Navigation -->
            <div>
                <h4 class="font-title font-bold text-lg mb-5 relative inline-block after:content-[''] after:absolute after:bottom-[-6px] after:left-0 after:w-12 after:h-[3px] after:bg-brand-purple after:rounded-full"><?php esc_html_e('Navigation', 'natpatoune'); ?></h4>
                <?php
                if (has_nav_menu('footer')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer',
                        'container'      => false,
                        'menu_class'     => 'space-y-2 text-sm',
                        'fallback_cb'    => false,
                    ));
                } else {
                    echo '<ul class="space-y-2 text-sm">';
                    echo '<li><a href="' . esc_url(home_url('/')) . '" class="text-gray-300 hover:text-brand-beige transition">' . esc_html__('Accueil', 'natpatoune') . '</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/blog/')) . '" class="text-gray-300 hover:text-brand-beige transition">' . esc_html__('Blog', 'natpatoune') . '</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#services')) . '" class="text-gray-300 hover:text-brand-beige transition">' . esc_html__('Services', 'natpatoune') . '</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#tarifs')) . '" class="text-gray-300 hover:text-brand-beige transition">' . esc_html__('Tarifs', 'natpatoune') . '</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#avis')) . '" class="text-gray-300 hover:text-brand-beige transition">' . esc_html__('Témoignages', 'natpatoune') . '</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#faq')) . '" class="text-gray-300 hover:text-brand-beige transition">' . esc_html__('FAQ', 'natpatoune') . '</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#contact')) . '" class="text-gray-300 hover:text-brand-beige transition">' . esc_html__('Contact', 'natpatoune') . '</a></li>';
                    echo '</ul>';
                }
                ?>
            </div>
            
            <!-- Col 3 : Légal & Contact -->
            <div>
                <h4 class="font-title font-bold text-lg mb-5 relative inline-block after:content-[''] after:absolute after:bottom-[-6px] after:left-0 after:w-12 after:h-[3px] after:bg-brand-purple after:rounded-full"><?php esc_html_e('Informations légales', 'natpatoune'); ?></h4>
                <ul class="space-y-2 text-sm mb-6">
                    <?php if (function_exists('natpatoune_page_exists') && natpatoune_page_exists('mentions-legales')) : ?>
                    <li><a href="<?php echo esc_url(function_exists('natpatoune_get_page_url') ? natpatoune_get_page_url('mentions-legales') : home_url('/mentions-legales/')); ?>" class="text-gray-300 hover:text-brand-beige transition"><?php esc_html_e('Mentions légales', 'natpatoune'); ?></a></li>
                    <?php endif; ?>
                    
                    <?php if (function_exists('natpatoune_page_exists') && natpatoune_page_exists('politique-confidentialite')) : ?>
                    <li><a href="<?php echo esc_url(function_exists('natpatoune_get_page_url') ? natpatoune_get_page_url('politique-confidentialite') : home_url('/politique-confidentialite/')); ?>" class="text-gray-300 hover:text-brand-beige transition"><?php esc_html_e('Politique de confidentialité', 'natpatoune'); ?></a></li>
                    <?php endif; ?>
                    
                    <?php if (function_exists('natpatoune_page_exists') && natpatoune_page_exists('cgv')) : ?>
                    <li><a href="<?php echo esc_url(function_exists('natpatoune_get_page_url') ? natpatoune_get_page_url('cgv') : home_url('/cgv/')); ?>" class="text-gray-300 hover:text-brand-beige transition"><?php esc_html_e('CGV', 'natpatoune'); ?></a></li>
                    <?php endif; ?>
                    
                    <?php if (function_exists('natpatoune_page_exists') && natpatoune_page_exists('politique-cookies')) : ?>
                    <li><a href="<?php echo esc_url(function_exists('natpatoune_get_page_url') ? natpatoune_get_page_url('politique-cookies') : home_url('/politique-cookies/')); ?>" class="text-gray-300 hover:text-brand-beige transition"><?php esc_html_e('Politique de cookies', 'natpatoune'); ?></a></li>
                    <?php endif; ?>
                </ul>
                
                <h4 class="font-title font-bold text-lg mb-5 relative inline-block after:content-[''] after:absolute after:bottom-[-6px] after:left-0 after:w-12 after:h-[3px] after:bg-brand-purple after:rounded-full"><?php esc_html_e('Documents', 'natpatoune'); ?></h4>
                <ul class="space-y-2 text-sm text-gray-300 mb-6">
                    <?php if (function_exists('natpatoune_page_exists') && natpatoune_page_exists('contrat-garde-chat')) : ?>
                    <li><a href="<?php echo esc_url(function_exists('natpatoune_get_page_url') ? natpatoune_get_page_url('contrat-garde-chat') : home_url('/contrat-garde-chat/')); ?>" class="hover:text-brand-beige transition"><i class="fas fa-file-contract w-5" aria-hidden="true"></i><?php esc_html_e('Contrat de garde', 'natpatoune'); ?></a></li>
                    <?php endif; ?>
                    
                    <?php if (function_exists('natpatoune_page_exists') && natpatoune_page_exists('cgv')) : ?>
                    <li><a href="<?php echo esc_url(function_exists('natpatoune_get_page_url') ? natpatoune_get_page_url('cgv') : home_url('/cgv/')); ?>" class="hover:text-brand-beige transition"><i class="fas fa-file-lines w-5" aria-hidden="true"></i><?php esc_html_e('Conditions générales', 'natpatoune'); ?></a></li>
                    <?php endif; ?>
                </ul>
                
                <h4 class="font-title font-bold text-lg mb-5 relative inline-block after:content-[''] after:absolute after:bottom-[-6px] after:left-0 after:w-12 after:h-[3px] after:bg-brand-purple after:rounded-full"><?php esc_html_e('Contact', 'natpatoune'); ?></h4>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li>
                        <i class="fas fa-envelope w-5" aria-hidden="true"></i> 
                        <a href="mailto:<?php echo esc_attr(function_exists('natpatoune_get_email') ? natpatoune_get_email() : get_option('admin_email')); ?>" class="hover:text-brand-beige">
                            <?php echo esc_html(function_exists('natpatoune_get_email') ? natpatoune_get_email() : get_option('admin_email')); ?>
                        </a>
                    </li>
                    <li>
                        <i class="fas fa-phone w-5" aria-hidden="true"></i> 
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', function_exists('natpatoune_get_phone') ? natpatoune_get_phone() : '+41 78 768 50 47')); ?>" class="hover:text-brand-beige">
                            <?php echo esc_html(function_exists('natpatoune_get_phone') ? natpatoune_get_phone() : '+41 78 768 50 47'); ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-white/10 pt-8 text-center">
            <div class="flex flex-col md:flex-row items-center justify-center gap-2 md:gap-4 text-sm text-gray-300">
                <p>&copy; <?php echo date('Y'); ?> <strong class="text-white font-medium"><?php bloginfo('name'); ?></strong></p>
                <span class="hidden md:inline text-gray-500">•</span>
                <p><?php esc_html_e('Tous droits réservés', 'natpatoune'); ?></p>
                <span class="hidden md:inline text-gray-500">•</span>
                <p><?php esc_html_e('Garde de chats avec amour dans le canton de Vaud', 'natpatoune'); ?></p>
            </div>
            <p class="mt-4 text-xs text-gray-500"><?php esc_html_e('Site réalisé avec ❤️ pour les chats', 'natpatoune'); ?></p>
        </div>
    </div>
</footer>

<!-- Modal CGV -->
<div id="modal-cgv" class="fixed inset-0 bg-black/50 z-[9999] hidden items-center justify-center p-4">
    <div class="bg-white rounded-3xl overflow-hidden w-full max-w-4xl max-h-[85vh] flex flex-col">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50 sticky top-0 z-10">
            <h3 class="font-bold text-brand-purple">Conditions Générales</h3>
            <button onclick="document.getElementById('modal-cgv').classList.add('hidden')" class="text-gray-400" aria-label="Fermer"><i class="fas fa-times text-xl"></i></button>
        </div>
        <div class="p-6 overflow-y-auto text-gray-600 text-sm leading-relaxed">
            <p class="font-bold mb-2">1. Présentation de l'activité</p>
            <p class="mb-4">Nat'Patoune est une entreprise de gardiennage à domicile spécialisée dans le soin et la surveillance de chats au domicile de leur propriétaire.</p>
            <p class="font-bold mb-2">2. Pré-visite et remise des clés</p>
            <p class="mb-4">Une pré-visite à domicile est obligatoire avant le début de toute prestation. Elle permet un premier contact entre le client et Nat'Patoune. Cette pré-visite est payante, au tarif d'une visite de cat-sitting (sauf offre commerciale en cours).</p>
            <p class="font-bold mb-2">3. Conditions de paiement</p>
            <p class="mb-4">Le règlement de la prestation doit être effectué au plus tard le premier jour du cat-sitting. Modes de paiement : Cash, Virement bancaire, TWINT.</p>
            <p class="font-bold mb-2">4. Annulation</p>
            <p class="mb-4">Toute annulation doit être communiquée par écrit. Moins de 7 jours avant le début de la garde : 25 % du montant total est dû.</p>
            <p class="font-bold mb-2">5. Urgences</p>
            <p class="mb-4">En cas d'urgence médicale, Nat'Patoune conduira l'animal chez le vétérinaire. Les frais sont à la charge du propriétaire.</p>
        </div>
    </div>
</div>

<!-- Modal Confidentialité -->
<div id="modal-privacy" class="fixed inset-0 bg-black/50 z-[9999] hidden items-center justify-center p-4">
    <div class="bg-white rounded-3xl overflow-hidden w-full max-w-3xl max-h-[85vh] flex flex-col">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50 sticky top-0 z-10">
            <h3 class="font-bold text-brand-purple">Politique de Confidentialité (nLPD)</h3>
            <button onclick="document.getElementById('modal-privacy').classList.add('hidden')" class="text-gray-400" aria-label="Fermer"><i class="fas fa-times text-xl"></i></button>
        </div>
        <div class="p-6 overflow-y-auto text-gray-600 text-sm leading-relaxed">
            <p class="mb-4">Nat'Patoune respecte la Loi fédérale sur la protection des données (LPD) et le RGPD.</p>
            <h4 class="font-bold mb-2">1. Responsable du traitement</h4>
            <p class="mb-4">Nathalie Piguet, Nat'Patoune, Saint-Saphorin-sur-Morges.</p>
            <h4 class="font-bold mb-2">2. Données collectées</h4>
            <p class="mb-4">Nous collectons uniquement les données nécessaires à la prestation (Nom, Adresse, Infos chat, Clés). Via le site : Cookies techniques et statistiques anonymisées.</p>
            <h4 class="font-bold mb-2">3. Cookies & Traceurs</h4>
            <p class="mb-4">Vous pouvez gérer vos préférences via la bannière en bas de page. Nous n'utilisons pas de cookies publicitaires tiers intrusifs.</p>
            <h4 class="font-bold mb-2">4. Vos droits</h4>
            <p class="mb-4">Droit d'accès, de rectification et de suppression de vos données sur simple demande.</p>
        </div>
    </div>
</div>

<!-- Modal Mentions légales -->
<div id="modal-mentions" class="fixed inset-0 bg-black/50 z-[9999] hidden items-center justify-center p-4">
    <div class="bg-white rounded-3xl overflow-hidden w-full max-w-lg max-h-[85vh] flex flex-col">
        <div class="p-4 border-b border-gray-100 flex justify-between items-center bg-gray-50 sticky top-0 z-10">
            <h3 class="font-bold text-brand-purple">Mentions Légales</h3>
            <button onclick="document.getElementById('modal-mentions').classList.add('hidden')" class="text-gray-400" aria-label="Fermer"><i class="fas fa-times text-xl"></i></button>
        </div>
        <div class="p-6 overflow-y-auto text-gray-600 text-sm leading-relaxed">
            <p class="mb-2"><strong>Éditeur du site :</strong><br>Nat'Patoune<br>Représentée par : Mme Nathalie Piguet<br>Adresse : Saint-Saphorin-sur-Morges, Vaud, Suisse</p>
            <p class="mb-2"><strong>Hébergement :</strong><br>Hostinger International Ltd.<br>61 Lordou Vironos Street, 6023 Larnaca, Chypre.</p>
        </div>
    </div>
</div>

<?php wp_footer(); ?>
</body>
</html>