<?php
/**
 * Template Part: Process Section
 *
 * @package NatPatoune
 */

// Placeholder template part
?>
<!-- Process Section -->
<section id="process" class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm"><?php esc_html_e('Comment ça marche', 'natpatoune'); ?></span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-6">
                <?php esc_html_e('Un processus simple et rassurant', 'natpatoune'); ?>
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                <?php esc_html_e('Voici comment se déroule la mise en place d\'une garde pour votre chat', 'natpatoune'); ?>
            </p>
        </div>
        
        <!-- Process Steps -->
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-6xl mx-auto">
            <!-- Step 1 -->
            <div class="bg-brand-beige rounded-2xl p-6 shadow-soft hover:shadow-medium transition relative overflow-hidden group">
                <div class="absolute top-0 right-0 bg-brand-purple text-white w-10 h-10 flex items-center justify-center rounded-bl-xl font-bold text-lg">1</div>
                <div class="text-center pt-6">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-soft group-hover:shadow-medium transition">
                        <i class="fas fa-comments text-2xl text-brand-purple"></i>
                    </div>
                    <h3 class="font-title font-bold text-xl mb-3"><?php esc_html_e('Premier contact', 'natpatoune'); ?></h3>
                    <p class="text-brand-text-light text-sm"><?php esc_html_e('Contactez-moi par téléphone, WhatsApp ou email pour me parler de votre chat et de vos besoins.', 'natpatoune'); ?></p>
                </div>
            </div>
            
            <!-- Step 2 -->
            <div class="bg-brand-beige rounded-2xl p-6 shadow-soft hover:shadow-medium transition relative overflow-hidden group">
                <div class="absolute top-0 right-0 bg-brand-purple text-white w-10 h-10 flex items-center justify-center rounded-bl-xl font-bold text-lg">2</div>
                <div class="text-center pt-6">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-soft group-hover:shadow-medium transition">
                        <i class="fas fa-home text-2xl text-brand-purple"></i>
                    </div>
                    <h3 class="font-title font-bold text-xl mb-3"><?php esc_html_e('Visite à domicile', 'natpatoune'); ?></h3>
                    <p class="text-brand-text-light text-sm"><?php esc_html_e('Je me déplace chez vous pour rencontrer votre chat et comprendre ses habitudes (visite offerte).', 'natpatoune'); ?></p>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div class="bg-brand-beige rounded-2xl p-6 shadow-soft hover:shadow-medium transition relative overflow-hidden group">
                <div class="absolute top-0 right-0 bg-brand-purple text-white w-10 h-10 flex items-center justify-center rounded-bl-xl font-bold text-lg">3</div>
                <div class="text-center pt-6">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-soft group-hover:shadow-medium transition">
                        <i class="fas fa-file-signature text-2xl text-brand-purple"></i>
                    </div>
                    <h3 class="font-title font-bold text-xl mb-3"><?php esc_html_e('Réservation', 'natpatoune'); ?></h3>
                    <p class="text-brand-text-light text-sm"><?php esc_html_e('Nous convenons ensemble des dates et des modalités de garde, puis signons le contrat.', 'natpatoune'); ?></p>
                </div>
            </div>
            
            <!-- Step 4 -->
            <div class="bg-brand-beige rounded-2xl p-6 shadow-soft hover:shadow-medium transition relative overflow-hidden group">
                <div class="absolute top-0 right-0 bg-brand-purple text-white w-10 h-10 flex items-center justify-center rounded-bl-xl font-bold text-lg">4</div>
                <div class="text-center pt-6">
                    <div class="w-16 h-16 bg-white rounded-full flex items-center justify-center mx-auto mb-4 shadow-soft group-hover:shadow-medium transition">
                        <i class="fas fa-heart text-2xl text-brand-purple"></i>
                    </div>
                    <h3 class="font-title font-bold text-xl mb-3"><?php esc_html_e('Visites de garde', 'natpatoune'); ?></h3>
                    <p class="text-brand-text-light text-sm"><?php esc_html_e('Je prends soin de votre chat pendant votre absence et vous envoie des nouvelles quotidiennes avec photos.', 'natpatoune'); ?></p>
                </div>
            </div>
        </div>
        
        <!-- CTA -->
        <div class="text-center mt-16">
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-4 px-10 rounded-full transition-all duration-300 shadow-medium hover:shadow-lg transform hover:scale-105 group">
                <span class="bg-white/20 p-2 rounded-full mr-3 group-hover:bg-white/30 transition-all">
                    <i class="fas fa-calendar-check" aria-hidden="true"></i>
                </span>
                <?php esc_html_e('Réserver une visite gratuite', 'natpatoune'); ?>
                <i class="fas fa-arrow-right ml-2 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>