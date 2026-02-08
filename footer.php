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

<!-- WhatsApp Sticky Button -->
<?php if (function_exists('natpatoune_is_whatsapp_enabled') && natpatoune_is_whatsapp_enabled()) : ?>
<a href="<?php echo esc_url(function_exists('natpatoune_get_whatsapp_link') ? natpatoune_get_whatsapp_link() : 'https://wa.me/41787685047'); ?>" 
   target="_blank" 
   rel="noopener" 
   aria-label="<?php esc_attr_e('Contactez-nous sur WhatsApp', 'natpatoune'); ?>" 
   class="whatsapp-button fixed bottom-6 right-6 z-40 flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-lg transition group">
    <!-- Mobile: bouton rond seul -->
    <span class="w-14 h-14 flex items-center justify-center md:w-auto md:h-auto md:py-3 md:px-5">
        <i class="fab fa-whatsapp text-2xl md:text-xl" aria-hidden="true"></i>
    </span>
    <!-- Desktop: texte visible -->
    <span class="hidden md:inline-block font-bold pr-2">WhatsApp</span>
</a>
<?php endif; ?>

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

<?php wp_footer(); ?>
</body>
</html>