<?php
/**
 * Template Part: Contact Section
 *
 * @package NatPatoune
 */
?>
<!-- Contact Section -->
<section id="contact" class="py-16 md:py-24 bg-brand-beige">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm"><?php esc_html_e('Contact', 'natpatoune'); ?></span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-6">
                <?php esc_html_e('Réservez une visite gratuite', 'natpatoune'); ?>
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                <?php esc_html_e('Contactez-moi pour discuter de vos besoins ou réserver une visite de prise de contact sans engagement', 'natpatoune'); ?>
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <!-- Contact Info -->
            <div class="bg-white rounded-3xl p-8 shadow-soft">
                <h3 class="font-title font-bold text-2xl mb-6 text-brand-text"><?php esc_html_e('Mes coordonnées', 'natpatoune'); ?></h3>
                
                <div class="space-y-6">
                    <div class="flex items-start gap-4">
                        <div class="bg-brand-purple/10 rounded-full p-3 text-brand-purple">
                            <i class="fas fa-phone text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1"><?php esc_html_e('Téléphone', 'natpatoune'); ?></h4>
                            <p class="text-brand-text-light">
                                <a href="tel:<?php echo esc_attr(preg_replace('/[^0-9+]/', '', function_exists('natpatoune_get_phone') ? natpatoune_get_phone() : '+41 78 768 50 47')); ?>" class="hover:text-brand-purple transition">
                                    <?php echo esc_html(function_exists('natpatoune_get_phone') ? natpatoune_get_phone() : '+41 78 768 50 47'); ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="bg-brand-purple/10 rounded-full p-3 text-brand-purple">
                            <i class="fas fa-envelope text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1"><?php esc_html_e('Email', 'natpatoune'); ?></h4>
                            <p class="text-brand-text-light">
                                <a href="mailto:<?php echo esc_attr(function_exists('natpatoune_get_email') ? natpatoune_get_email() : 'miaou@nat-patoune.ch'); ?>" class="hover:text-brand-purple transition">
                                    <?php echo esc_html(function_exists('natpatoune_get_email') ? natpatoune_get_email() : 'miaou@nat-patoune.ch'); ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="bg-brand-purple/10 rounded-full p-3 text-brand-purple">
                            <i class="fab fa-whatsapp text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1"><?php esc_html_e('WhatsApp', 'natpatoune'); ?></h4>
                            <p class="text-brand-text-light">
                                <a href="<?php echo esc_url(function_exists('natpatoune_get_whatsapp_link') ? natpatoune_get_whatsapp_link() : 'https://wa.me/41787685047'); ?>" target="_blank" rel="noopener noreferrer" class="hover:text-brand-purple transition">
                                    <?php esc_html_e('Envoyez-moi un message', 'natpatoune'); ?>
                                </a>
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="bg-brand-purple/10 rounded-full p-3 text-brand-purple">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1"><?php esc_html_e('Zone d\'intervention', 'natpatoune'); ?></h4>
                            <p class="text-brand-text-light">
                                <?php esc_html_e('Morges, Lausanne et environs', 'natpatoune'); ?>
                            </p>
                        </div>
                    </div>
                    
                    <div class="flex items-start gap-4">
                        <div class="bg-brand-purple/10 rounded-full p-3 text-brand-purple">
                            <i class="fas fa-clock text-xl"></i>
                        </div>
                        <div>
                            <h4 class="font-bold text-lg mb-1"><?php esc_html_e('Horaires', 'natpatoune'); ?></h4>
                            <p class="text-brand-text-light">
                                <?php esc_html_e('Tous les jours de 8h à 20h', 'natpatoune'); ?>
                            </p>
                        </div>
                    </div>
                </div>
                
                <div class="mt-8">
                    <h4 class="font-title font-bold text-lg mb-4"><?php esc_html_e('Suivez-moi', 'natpatoune'); ?></h4>
                    <div class="flex gap-4">
                        <a href="<?php echo esc_url(get_theme_mod('natpatoune_instagram_url', 'https://www.instagram.com/nat.patoune')); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('Instagram', 'natpatoune'); ?>" class="w-12 h-12 bg-brand-purple/10 hover:bg-brand-purple text-brand-purple hover:text-white rounded-full flex items-center justify-center transition-all">
                            <i class="fab fa-instagram text-lg"></i>
                        </a>
                        <a href="<?php echo esc_url(function_exists('natpatoune_get_whatsapp_link') ? natpatoune_get_whatsapp_link() : 'https://wa.me/41787685047'); ?>" target="_blank" rel="noopener noreferrer" aria-label="<?php esc_attr_e('WhatsApp', 'natpatoune'); ?>" class="w-12 h-12 bg-brand-purple/10 hover:bg-green-500 text-brand-purple hover:text-white rounded-full flex items-center justify-center transition-all">
                            <i class="fab fa-whatsapp text-lg"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Contact Form -->
            <div class="bg-white rounded-3xl p-8 shadow-soft">
                <h3 class="font-title font-bold text-2xl mb-6 text-brand-text"><?php esc_html_e('Envoyez-moi un message', 'natpatoune'); ?></h3>
                
                <?php
                // Récupérer l'ID du formulaire depuis les options du thème ou ACF
                $contact_form_id = get_theme_mod('natpatoune_contact_form_id', 0);
                
                // Vérifier si Contact Form 7 est actif et si un ID de formulaire est défini
                if (function_exists('wpcf7_contact_form') && $contact_form_id > 0) {
                    echo do_shortcode('[contact-form-7 id="' . absint($contact_form_id) . '" title="Formulaire de contact"]');
                } else {
                    // Formulaire HTML basique avec accessibilité améliorée si Contact Form 7 n'est pas disponible
                ?>
                <form action="#" method="post" class="space-y-4">
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="name" class="block text-sm font-medium text-brand-text-light mb-1">
                                <?php esc_html_e('Nom', 'natpatoune'); ?> <span class="text-brand-purple" aria-hidden="true">*</span>
                                <span class="sr-only"><?php esc_html_e('(requis)', 'natpatoune'); ?></span>
                            </label>
                            <input type="text" id="name" name="name" required aria-required="true" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring focus:ring-brand-purple/20 transition">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-brand-text-light mb-1">
                                <?php esc_html_e('Email', 'natpatoune'); ?> <span class="text-brand-purple" aria-hidden="true">*</span>
                                <span class="sr-only"><?php esc_html_e('(requis)', 'natpatoune'); ?></span>
                            </label>
                            <input type="email" id="email" name="email" required aria-required="true" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring focus:ring-brand-purple/20 transition">
                        </div>
                    </div>
                    
                    <div>
                        <label for="phone" class="block text-sm font-medium text-brand-text-light mb-1"><?php esc_html_e('Téléphone', 'natpatoune'); ?></label>
                        <input type="tel" id="phone" name="phone" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring focus:ring-brand-purple/20 transition">
                    </div>
                    
                    <div>
                        <label for="subject" class="block text-sm font-medium text-brand-text-light mb-1">
                            <?php esc_html_e('Sujet', 'natpatoune'); ?> <span class="text-brand-purple" aria-hidden="true">*</span>
                            <span class="sr-only"><?php esc_html_e('(requis)', 'natpatoune'); ?></span>
                        </label>
                        <select id="subject" name="subject" required aria-required="true" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring focus:ring-brand-purple/20 transition">
                            <option value=""><?php esc_html_e('Choisir un sujet', 'natpatoune'); ?></option>
                            <option value="reservation"><?php esc_html_e('Réservation de visite gratuite', 'natpatoune'); ?></option>
                            <option value="information"><?php esc_html_e('Demande d\'informations', 'natpatoune'); ?></option>
                            <option value="tarifs"><?php esc_html_e('Demande de tarifs', 'natpatoune'); ?></option>
                            <option value="autre"><?php esc_html_e('Autre', 'natpatoune'); ?></option>
                        </select>
                    </div>
                    
                    <div>
                        <label for="message" class="block text-sm font-medium text-brand-text-light mb-1">
                            <?php esc_html_e('Message', 'natpatoune'); ?> <span class="text-brand-purple" aria-hidden="true">*</span>
                            <span class="sr-only"><?php esc_html_e('(requis)', 'natpatoune'); ?></span>
                        </label>
                        <textarea id="message" name="message" rows="5" required aria-required="true" class="w-full px-4 py-3 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring focus:ring-brand-purple/20 transition"></textarea>
                    </div>
                    
                    <div class="flex items-start gap-2">
                        <input type="checkbox" id="privacy" name="privacy" required aria-required="true" class="mt-1 h-4 w-4 focus:ring-2 focus:ring-brand-purple focus:ring-offset-2">
                        <label for="privacy" class="text-sm text-brand-text-light">
                            <?php esc_html_e('J\'accepte que mes données soient traitées conformément à la', 'natpatoune'); ?>
                            <a href="<?php echo esc_url(function_exists('natpatoune_get_page_url') ? natpatoune_get_page_url('politique-confidentialite') : home_url('/politique-confidentialite/')); ?>" class="text-brand-purple hover:underline focus:outline-none focus:ring-2 focus:ring-brand-purple focus:ring-offset-2 focus:rounded-sm">
                                <?php esc_html_e('politique de confidentialité', 'natpatoune'); ?>
                            </a> <span class="text-brand-purple" aria-hidden="true">*</span>
                            <span class="sr-only"><?php esc_html_e('(requis)', 'natpatoune'); ?></span>
                        </label>
                    </div>
                    
                    <div class="text-center mt-6">
                        <button type="submit" class="bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-3 px-8 rounded-full transition shadow-medium hover:shadow-lg inline-flex items-center focus:outline-none focus:ring-2 focus:ring-brand-purple-dark focus:ring-offset-2">
                            <i class="fas fa-paper-plane mr-2"></i>
                            <?php esc_html_e('Envoyer', 'natpatoune'); ?>
                        </button>
                    </div>
                </form>
                <?php } ?>
                
                <p class="text-xs text-brand-text-light mt-6 text-center">
                    <?php esc_html_e('* Champs obligatoires. Réponse sous 24h.', 'natpatoune'); ?>
                </p>
            </div>
        </div>
    </div>
</section>