<?php
/**
 * Template Part: Services Section
 *
 * @package NatPatoune
 */
?>
<!-- Services -->
<section id="services" class="py-20 bg-brand-beige">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mb-4"><?php esc_html_e('Pourquoi choisir la garde à domicile ?', 'natpatoune'); ?></h2>
            <p class="text-lg text-brand-text-light"><?php esc_html_e('Votre chat reste dans son environnement familier, sans le stress du transport.', 'natpatoune'); ?></p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="bg-white rounded-2xl p-8 shadow-soft hover:shadow-medium transition-all transform hover:-translate-y-1">
                <div class="w-16 h-16 bg-brand-pink/10 rounded-full flex items-center justify-center text-brand-pink text-2xl mb-6">
                    <i class="fas fa-heart" aria-hidden="true"></i>
                </div>
                <h3 class="font-title font-bold text-xl text-brand-text mb-4"><?php esc_html_e('Bien-être & Câlins', 'natpatoune'); ?></h3>
                <p class="text-brand-text-light leading-relaxed"><?php esc_html_e('Nourriture, eau fraîche, litière, mais surtout du temps de jeu et d\'affection pour votre compagnon.', 'natpatoune'); ?></p>
            </div>
            
            <!-- Service 2 -->
            <div class="bg-white rounded-2xl p-8 shadow-soft hover:shadow-medium transition-all transform hover:-translate-y-1">
                <div class="w-16 h-16 bg-brand-purple/10 rounded-full flex items-center justify-center text-brand-purple text-2xl mb-6">
                    <i class="fas fa-user-md" aria-hidden="true"></i>
                </div>
                <h3 class="font-title font-bold text-xl text-brand-text mb-4"><?php esc_html_e('Soins Médicaux', 'natpatoune'); ?></h3>
                <p class="text-brand-text-light leading-relaxed"><?php esc_html_e('Administration de médicaments et insuline (je suis formée et certifiée).', 'natpatoune'); ?></p>
            </div>
            
            <!-- Service 3 -->
            <div class="bg-white rounded-2xl p-8 shadow-soft hover:shadow-medium transition-all transform hover:-translate-y-1">
                <div class="w-16 h-16 bg-brand-green/10 rounded-full flex items-center justify-center text-brand-green text-2xl mb-6">
                    <i class="fas fa-house-user" aria-hidden="true"></i>
                </div>
                <h3 class="font-title font-bold text-xl text-brand-text mb-4"><?php esc_html_e('Vigilance & Gestion de domicile', 'natpatoune'); ?></h3>
                <p class="text-brand-text-light leading-relaxed"><?php esc_html_e('Au-delà du chat, je veille sur votre domicile. Relève du courrier, aération, arrosage des plantes et simulation de présence pour dissuader les intrusions.', 'natpatoune'); ?></p>
            </div>
        </div>
    </div>
</section>
