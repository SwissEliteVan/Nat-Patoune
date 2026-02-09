</main>

<!-- Modals -->
<?php get_template_part('template-parts/footer/modals'); ?>

<!-- Boutons flottants (FABs) -->
<div class="fixed bottom-6 right-6 z-50 flex flex-col gap-4">
    <button id="backToTopBtn" class="hidden bg-brand-purple hover:bg-brand-purple-dark text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center transition-all transform hover:scale-110" aria-label="Haut de page">
        <i class="fas fa-chevron-up"></i>
    </button>
    <a href="tel:+41787685047" class="bg-brand-green hover:bg-green-600 text-white w-12 h-12 rounded-full shadow-lg flex items-center justify-center transition-all transform hover:scale-110 md:hidden" aria-label="Appeler">
        <i class="fas fa-phone"></i>
    </a>
</div>

<!-- WhatsApp Sticky Button -->
<a href="https://wa.me/41787685047" target="_blank" rel="noopener noreferrer" aria-label="WhatsApp Nat Patoune" class="fixed bottom-6 left-6 z-50 bg-[#25D366] hover:bg-[#128C7E] text-white py-2 px-4 rounded-full shadow-lg flex items-center gap-2 transition-all transform hover:scale-105 hover:shadow-xl group">
    <span class="text-2xl">
        <i class="fab fa-whatsapp" aria-hidden="true"></i>
    </span>
    <span class="font-bold hidden group-hover:inline-block transition-all duration-300">WhatsApp</span>
</a>

<!-- Footer -->
<footer class="bg-white pt-16 pb-8 border-t border-brand-grey/30">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-12">
            <!-- Col 1 : Logo & Description -->
            <div class="flex flex-col gap-6">
                <div class="flex items-center gap-3">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/img/logo-nat-patoune-cat-sitting.svg')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" class="h-12 w-auto">
                    <span class="font-title font-bold text-xl text-brand-purple"><?php bloginfo('name'); ?></span>
                </div>
                <p class="text-brand-text-light leading-relaxed">
                    <?php
                    $description = get_bloginfo('description');
                    echo $description ? esc_html($description) : 'Cat-sitting à domicile dans le canton de Vaud. Service professionnel avec rapport quotidien et visite de prise de contact offerte.';
                    ?>
                </p>
                <div class="flex gap-4">
                    <a href="https://www.instagram.com/nat.patoune" target="_blank" rel="noopener" aria-label="<?php esc_attr_e('Suivez-nous sur Instagram', 'natpatoune'); ?>" class="w-10 h-10 rounded-full bg-brand-beige flex items-center justify-center text-brand-purple hover:bg-brand-purple hover:text-white transition-all">
                        <i class="fab fa-instagram text-xl" aria-hidden="true"></i>
                    </a>
                    <a href="<?php echo esc_url(function_exists('natpatoune_get_whatsapp_link') ? natpatoune_get_whatsapp_link() : 'https://wa.me/41787685047'); ?>" target="_blank" rel="noopener" aria-label="<?php esc_attr_e('Contactez-nous sur WhatsApp', 'natpatoune'); ?>" class="w-10 h-10 rounded-full bg-brand-beige flex items-center justify-center text-brand-purple hover:bg-brand-purple hover:text-white transition-all">
                        <i class="fab fa-whatsapp text-xl" aria-hidden="true"></i>
                    </a>
                </div>
            </div>
            
            <!-- Col 2 : Navigation -->
            <div>
                <h4 class="font-title font-bold text-lg text-brand-purple mb-6"><?php esc_html_e('Navigation', 'natpatoune'); ?></h4>
                <nav>
                    <?php
                    if (has_nav_menu('footer')) {
                        wp_nav_menu(array(
                            'theme_location' => 'footer',
                            'container'      => false,
                            'menu_class'     => 'flex flex-col gap-3',
                            'fallback_cb'    => false,
                        ));
                    } else {
                        echo '<ul class="flex flex-col gap-3">';
                        $links = [
                            'Accueil' => '/',
                            'Blog' => '/blog/',
                            'Services' => '/#services',
                            'Tarifs' => '/#tarifs',
                            'Témoignages' => '/#avis',
                            'FAQ' => '/#faq',
                            'Contact' => '/#contact',
                        ];
                        foreach ($links as $label => $url) {
                            echo '<li><a href="' . esc_url(home_url($url)) . '" class="text-brand-text-light hover:text-brand-purple transition-colors">' . esc_html($label) . '</a></li>';
                        }
                        echo '</ul>';
                    }
                    ?>
                </nav>
            </div>
            
            <!-- Col 3 : Légal & Contact -->
            <div>
                <h4 class="font-title font-bold text-lg text-brand-purple mb-6"><?php esc_html_e('Informations légales', 'natpatoune'); ?></h4>
                <ul class="flex flex-col gap-3 mb-8">
                    <?php if (function_exists('natpatoune_page_exists') && natpatoune_page_exists('mentions-legales')) : ?>
                    <li><a href="<?php echo esc_url(function_exists('natpatoune_get_page_url') ? natpatoune_get_page_url('mentions-legales') : home_url('/mentions-legales/')); ?>" class="text-brand-text-light hover:text-brand-purple transition-colors"><?php esc_html_e('Mentions légales', 'natpatoune'); ?></a></li>
                    <?php endif; ?>
                    
                    <?php if (function_exists('natpatoune_page_exists') && natpatoune_page_exists('politique-confidentialite')) : ?>
                    <li><a href="<?php echo esc_url(function_exists('natpatoune_get_page_url') ? natpatoune_get_page_url('politique-confidentialite') : home_url('/politique-confidentialite/')); ?>" class="text-brand-text-light hover:text-brand-purple transition-colors"><?php esc_html_e('Politique de confidentialité', 'natpatoune'); ?></a></li>
                    <?php endif; ?>
                    
                    <?php if (function_exists('natpatoune_page_exists') && natpatoune_page_exists('cgv')) : ?>
                    <li><a href="<?php echo esc_url(function_exists('natpatoune_get_page_url') ? natpatoune_get_page_url('cgv') : home_url('/cgv/')); ?>" class="text-brand-text-light hover:text-brand-purple transition-colors"><?php esc_html_e('CGV', 'natpatoune'); ?></a></li>
                    <?php endif; ?>
                    
                    <?php if (function_exists('natpatoune_page_exists') && natpatoune_page_exists('politique-cookies')) : ?>
                    <li><a href="<?php echo esc_url(function_exists('natpatoune_get_page_url') ? natpatoune_get_page_url('politique-cookies') : home_url('/politique-cookies/')); ?>" class="text-brand-text-light hover:text-brand-purple transition-colors"><?php esc_html_e('Politique de cookies', 'natpatoune'); ?></a></li>
                    <?php endif; ?>
                </ul>
                
                <h4 class="font-title font-bold text-lg text-brand-purple mb-6"><?php esc_html_e('Documents', 'natpatoune'); ?></h4>
                <ul class="flex flex-col gap-3">
                    <?php if (function_exists('natpatoune_page_exists') && natpatoune_page_exists('contrat-garde-chat')) : ?>
                    <li><a href="<?php echo esc_url(function_exists('natpatoune_get_page_url') ? natpatoune_get_page_url('contrat-garde-chat') : home_url('/contrat-garde-chat/')); ?>" class="flex items-center gap-2 text-brand-text-light hover:text-brand-purple transition-colors"><i class="fas fa-file-contract w-5 text-center" aria-hidden="true"></i><?php esc_html_e('Contrat de garde', 'natpatoune'); ?></a></li>
                    <?php endif; ?>
                    
                    <?php if (function_exists('natpatoune_page_exists') && natpatoune_page_exists('cgv')) : ?>
                    <li><a href="<?php echo esc_url(function_exists('natpatoune_get_page_url') ? natpatoune_get_page_url('cgv') : home_url('/cgv/')); ?>" class="flex items-center gap-2 text-brand-text-light hover:text-brand-purple transition-colors"><i class="fas fa-file-lines w-5 text-center" aria-hidden="true"></i><?php esc_html_e('Conditions générales', 'natpatoune'); ?></a></li>
                    <?php endif; ?>
                </ul>
            </div>

            <!-- Col 4 : Contact -->
            <div>
                <h4 class="font-title font-bold text-lg text-brand-purple mb-6"><?php esc_html_e('Contact', 'natpatoune'); ?></h4>
                <ul class="flex flex-col gap-4">
                    <li>
                        <a href="mailto:<?php echo esc_attr(function_exists('natpatoune_get_email') ? natpatoune_get_email() : get_option('admin_email')); ?>" class="flex items-center gap-3 text-brand-text-light hover:text-brand-purple transition-colors group">
                            <span class="w-10 h-10 rounded-full bg-brand-beige flex items-center justify-center text-brand-purple group-hover:bg-brand-purple group-hover:text-white transition-all">
                                <i class="fas fa-envelope" aria-hidden="true"></i>
                            </span>
                            <?php echo esc_html(function_exists('natpatoune_get_email') ? natpatoune_get_email() : get_option('admin_email')); ?>
                        </a>
                    </li>
                    <li>
                        <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', function_exists('natpatoune_get_phone') ? natpatoune_get_phone() : '+41 78 768 50 47')); ?>" class="flex items-center gap-3 text-brand-text-light hover:text-brand-purple transition-colors group">
                            <span class="w-10 h-10 rounded-full bg-brand-beige flex items-center justify-center text-brand-purple group-hover:bg-brand-purple group-hover:text-white transition-all">
                                <i class="fas fa-phone" aria-hidden="true"></i>
                            </span>
                            <?php echo esc_html(function_exists('natpatoune_get_phone') ? natpatoune_get_phone() : '+41 78 768 50 47'); ?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        
        <!-- Copyright -->
        <div class="border-t border-brand-grey/30 pt-8 flex flex-col md:flex-row justify-between items-center gap-4 text-sm text-brand-text-light">
            <div class="flex flex-col md:flex-row items-center gap-2 md:gap-4 text-center md:text-left">
                <p>&copy; <?php echo date('Y'); ?> <strong><?php bloginfo('name'); ?></strong></p>
                <span class="hidden md:inline">•</span>
                <p><?php esc_html_e('Tous droits réservés', 'natpatoune'); ?></p>
                <span class="hidden md:inline">•</span>
                <p><?php esc_html_e('Garde de chats avec amour dans le canton de Vaud', 'natpatoune'); ?></p>
            </div>
            <p class="flex items-center gap-1">
                <?php esc_html_e('Site réalisé avec', 'natpatoune'); ?> <i class="fas fa-heart text-brand-pink"></i> <?php esc_html_e('pour les chats', 'natpatoune'); ?>
            </p>
        </div>
    </div>
</footer>

<?php wp_footer(); ?>

<!-- Scripts -->
<script>
    // Mobile Menu Toggle
    document.addEventListener('DOMContentLoaded', function() {
        const mobileMenuBtn = document.getElementById('mobile-menu-btn');
        const mobileMenu = document.getElementById('mobile-menu');
        
        if (mobileMenuBtn && mobileMenu) {
            mobileMenuBtn.addEventListener('click', function() {
                const isExpanded = mobileMenuBtn.getAttribute('aria-expanded') === 'true';
                mobileMenuBtn.setAttribute('aria-expanded', !isExpanded);
                mobileMenu.classList.toggle('hidden');
                
                // Icon toggle
                const icon = mobileMenuBtn.querySelector('i');
                if (icon) {
                    icon.classList.toggle('fa-bars');
                    icon.classList.toggle('fa-times');
                }
            });
        }

        // Back to Top Button
        const backToTopBtn = document.getElementById('backToTopBtn');
        if (backToTopBtn) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 300) {
                    backToTopBtn.classList.remove('hidden');
                } else {
                    backToTopBtn.classList.add('hidden');
                }
            });

            backToTopBtn.addEventListener('click', function() {
                window.scrollTo({
                    top: 0,
                    behavior: 'smooth'
                });
            });
        }
    });
</script>

</body>
</html>
