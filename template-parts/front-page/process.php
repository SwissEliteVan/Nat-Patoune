<?php
/**
 * Template Part: Process Section
 *
 * @package NatPatoune
 */
?>
<!-- Process Section -->
<section id="process" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-block text-brand-purple font-bold tracking-wider uppercase text-sm mb-2"><?php esc_html_e('Comment ça marche', 'natpatoune'); ?></span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mb-4"><?php esc_html_e('Un processus simple et rassurant', 'natpatoune'); ?></h2>
            <p class="text-lg text-brand-text-light"><?php esc_html_e('Voici comment se déroule la mise en place d\'une garde pour votre chat', 'natpatoune'); ?></p>
        </div>
        
        <!-- Process Steps -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
            <!-- Connecting Line (Desktop) -->
            <div class="hidden lg:block absolute top-12 left-0 w-full h-1 bg-brand-grey/30 -z-10 transform translate-y-1/2"></div>
            
            <!-- Step 1 -->
            <div class="relative bg-white p-6 rounded-2xl shadow-soft hover:shadow-medium transition-all text-center group">
                <div class="w-12 h-12 bg-brand-purple text-white rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-6 border-4 border-white shadow-md relative z-10">1</div>
                <div class="w-16 h-16 bg-brand-purple/10 rounded-full flex items-center justify-center text-brand-purple text-2xl mx-auto mb-4 group-hover:bg-brand-purple group-hover:text-white transition-colors">
                    <i class="fas fa-comments"></i>
                </div>
                <h3 class="font-title font-bold text-xl text-brand-text mb-3"><?php esc_html_e('Premier contact', 'natpatoune'); ?></h3>
                <p class="text-brand-text-light text-sm"><?php esc_html_e('Contactez-moi par téléphone, WhatsApp ou email pour me parler de votre chat et de vos besoins.', 'natpatoune'); ?></p>
            </div>
            
            <!-- Step 2 -->
            <div class="relative bg-white p-6 rounded-2xl shadow-soft hover:shadow-medium transition-all text-center group">
                <div class="w-12 h-12 bg-brand-pink text-white rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-6 border-4 border-white shadow-md relative z-10">2</div>
                <div class="w-16 h-16 bg-brand-pink/10 rounded-full flex items-center justify-center text-brand-pink text-2xl mx-auto mb-4 group-hover:bg-brand-pink group-hover:text-white transition-colors">
                    <i class="fas fa-home"></i>
                </div>
                <h3 class="font-title font-bold text-xl text-brand-text mb-3"><?php esc_html_e('Visite à domicile', 'natpatoune'); ?></h3>
                <p class="text-brand-text-light text-sm"><?php esc_html_e('Je me déplace chez vous pour rencontrer votre chat et comprendre ses habitudes (visite offerte).', 'natpatoune'); ?></p>
            </div>
            
            <!-- Step 3 -->
            <div class="relative bg-white p-6 rounded-2xl shadow-soft hover:shadow-medium transition-all text-center group">
                <div class="w-12 h-12 bg-brand-green text-white rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-6 border-4 border-white shadow-md relative z-10">3</div>
                <div class="w-16 h-16 bg-brand-green/10 rounded-full flex items-center justify-center text-brand-green text-2xl mx-auto mb-4 group-hover:bg-brand-green group-hover:text-white transition-colors">
                    <i class="fas fa-file-signature"></i>
                </div>
                <h3 class="font-title font-bold text-xl text-brand-text mb-3"><?php esc_html_e('Réservation', 'natpatoune'); ?></h3>
                <p class="text-brand-text-light text-sm"><?php esc_html_e('Nous convenons ensemble des dates et des modalités de garde, puis signons le contrat.', 'natpatoune'); ?></p>
            </div>
            
            <!-- Step 4 -->
            <div class="relative bg-white p-6 rounded-2xl shadow-soft hover:shadow-medium transition-all text-center group">
                <div class="w-12 h-12 bg-brand-purple text-white rounded-full flex items-center justify-center font-bold text-xl mx-auto mb-6 border-4 border-white shadow-md relative z-10">4</div>
                <div class="w-16 h-16 bg-brand-purple/10 rounded-full flex items-center justify-center text-brand-purple text-2xl mx-auto mb-4 group-hover:bg-brand-purple group-hover:text-white transition-colors">
                    <i class="fas fa-heart"></i>
                </div>
                <h3 class="font-title font-bold text-xl text-brand-text mb-3"><?php esc_html_e('Visites de garde', 'natpatoune'); ?></h3>
                <p class="text-brand-text-light text-sm"><?php esc_html_e('Je prends soin de votre chat pendant votre absence et vous envoie des nouvelles quotidiennes avec photos.', 'natpatoune'); ?></p>
            </div>
        </div>
        
        <!-- CTA -->
        <div class="text-center mt-16">
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center gap-2 bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-3 px-8 rounded-full transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                <i class="fas fa-calendar-check" aria-hidden="true"></i>
                <?php esc_html_e('Réserver une visite gratuite', 'natpatoune'); ?>
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>
