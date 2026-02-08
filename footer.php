<div id="cookie-banner" class="cookie-banner hidden fixed bottom-0 left-0 right-0 bg-white border-t-2 border-brand-purple shadow-lg z-50 animate-slide-up">
    <div class="container mx-auto px-4 py-6">
        <div class="flex flex-col md:flex-row items-start md:items-center gap-4 md:gap-6">
            <div class="flex-1">
                <p class="text-sm text-brand-text leading-relaxed">
                    <i class="fas fa-cookie-bite text-brand-purple mr-2"></i>
                    <strong>Respect de votre vie privée</strong> – Ce site utilise des cookies essentiels pour son fonctionnement. Aucun cookie de tracking ou publicitaire n'est utilisé.
                    <a href="<?php echo esc_url(home_url('/politique-confidentialite/')); ?>" class="text-brand-purple underline hover:text-brand-purple-dark">En savoir plus</a>
                </p>
            </div>
            <div class="flex flex-wrap gap-2">
                <button id="cookie-accept" class="bg-brand-purple hover:bg-brand-purple-dark text-white font-bold px-6 py-2 rounded-full transition text-sm">
                    Accepter
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
                    <i class="fas fa-cookie-bite text-brand-purple mr-2"></i>
                    Paramètres des cookies
                </h3>
                <button id="cookie-modal-close" class="text-brand-text-light hover:text-brand-text text-2xl" aria-label="Fermer la fenêtre des paramètres">
                    <i class="fas fa-times"></i>
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
                            <i class="fas fa-shield-check text-brand-purple mr-2"></i>
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
                            <i class="fas fa-chart-line text-brand-purple mr-2"></i>
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
                            <i class="fas fa-bullhorn text-brand-purple mr-2"></i>
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
<a href="https://wa.me/41787685047" target="_blank" rel="noopener" aria-label="Contactez-nous sur WhatsApp" class="whatsapp-button fixed bottom-6 right-6 z-40 flex items-center gap-2 bg-green-500 hover:bg-green-600 text-white rounded-full shadow-lg transition group">
    <!-- Mobile: bouton rond seul -->
    <span class="w-14 h-14 flex items-center justify-center md:w-auto md:h-auto md:py-3 md:px-5">
        <i class="fab fa-whatsapp text-2xl md:text-xl"></i>
    </span>
    <!-- Desktop: texte visible -->
    <span class="hidden md:inline-block font-bold pr-2">WhatsApp</span>
</a>

<!-- Footer -->
<footer class="bg-brand-text text-white py-12">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-4 gap-8 mb-8">
            <!-- Col 1 : Logo & Description -->
            <div class="md:col-span-2">
                <div class="flex items-center gap-3 mb-4">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/logo-nat-patoune-cat-sitting.svg'); ?>" alt="Logo Nat Patoune" class="h-10 w-auto">
                    <span class="font-title font-bold text-2xl"><?php bloginfo('name'); ?></span>
                </div>
                <p class="text-gray-300 text-sm leading-relaxed mb-4">
                    <?php
                    $description = get_bloginfo('description');
                    echo $description ? esc_html($description) : 'Cat-sitting à domicile dans le canton de Vaud. Service professionnel avec rapport quotidien et visite de prise de contact offerte.';
                    ?>
                </p>
                <div class="flex gap-4">
                    <a href="https://www.instagram.com/nat.patoune" target="_blank" rel="noopener" aria-label="Suivez-nous sur Instagram" class="w-10 h-10 bg-white/10 hover:bg-brand-purple rounded-full flex items-center justify-center transition">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://wa.me/41787685047" target="_blank" rel="noopener" aria-label="Contactez-nous sur WhatsApp" class="w-10 h-10 bg-white/10 hover:bg-green-500 rounded-full flex items-center justify-center transition">
                        <i class="fab fa-whatsapp"></i>
                    </a>
                </div>
            </div>
            
            <!-- Col 2 : Navigation -->
            <div>
                <h4 class="font-title font-bold text-lg mb-4">Navigation</h4>
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
                    echo '<li><a href="' . esc_url(home_url('/')) . '" class="text-gray-300 hover:text-brand-beige transition">Accueil</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/blog/')) . '" class="text-gray-300 hover:text-brand-beige transition">Blog</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#services')) . '" class="text-gray-300 hover:text-brand-beige transition">Services</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#tarifs')) . '" class="text-gray-300 hover:text-brand-beige transition">Tarifs</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#avis')) . '" class="text-gray-300 hover:text-brand-beige transition">Témoignages</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#faq')) . '" class="text-gray-300 hover:text-brand-beige transition">FAQ</a></li>';
                    echo '<li><a href="' . esc_url(home_url('/#contact')) . '" class="text-gray-300 hover:text-brand-beige transition">Contact</a></li>';
                    echo '</ul>';
                }
                ?>
            </div>
            
            <!-- Col 3 : Légal & Contact -->
            <div>
                <h4 class="font-title font-bold text-lg mb-4">Informations légales</h4>
                <ul class="space-y-2 text-sm mb-6">
                    <li><a href="<?php echo esc_url(home_url('/mentions-legales/')); ?>" class="text-gray-300 hover:text-brand-beige transition">Mentions légales</a></li>
                    <li><a href="<?php echo esc_url(home_url('/politique-confidentialite/')); ?>" class="text-gray-300 hover:text-brand-beige transition">Politique de confidentialité</a></li>
                    <li><a href="<?php echo esc_url(home_url('/cgv/')); ?>" class="text-gray-300 hover:text-brand-beige transition">CGV</a></li>
                </ul>
                
                <h4 class="font-title font-bold text-lg mb-3">Documents</h4>
                <ul class="space-y-2 text-sm text-gray-300 mb-6">
                    <li><a href="<?php echo esc_url(home_url('/contrat-garde-chat/')); ?>" class="hover:text-brand-beige transition"><i class="fas fa-file-contract w-5"></i>Contrat de garde</a></li>
                    <li><a href="<?php echo esc_url(home_url('/cgv/')); ?>" class="hover:text-brand-beige transition"><i class="fas fa-file-lines w-5"></i>Conditions générales</a></li>
                </ul>
                
                <h4 class="font-title font-bold text-lg mb-3">Contact</h4>
                <ul class="space-y-2 text-sm text-gray-300">
                    <li><i class="fas fa-envelope w-5"></i> <a href="mailto:<?php echo esc_attr(function_exists('natpatoune_get_email') ? natpatoune_get_email() : get_option('admin_email')); ?>" class="hover:text-brand-beige"><?php echo esc_html(function_exists('natpatoune_get_email') ? natpatoune_get_email() : get_option('admin_email')); ?></a></li>
                    <li><i class="fas fa-phone w-5"></i> <a href="tel:+41787685047" class="hover:text-brand-beige"><?php echo esc_html(function_exists('natpatoune_get_phone') ? natpatoune_get_phone() : '+41 78 768 50 47'); ?></a></li>
                </ul>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-white/10 pt-8 text-center text-sm text-gray-400">
            <p>&copy; <?php echo date('Y'); ?> <strong><?php bloginfo('name'); ?></strong> (Nat Patoune) • Tous droits réservés • Garde de chats avec amour dans le canton de Vaud</p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>