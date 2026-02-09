<?php
/**
 * Template Part: Cadeau Section
 *
 * @package NatPatoune
 */
?>
<!-- Cadeau -->
<section id="cadeau" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="bg-brand-purple rounded-3xl p-8 md:p-12 shadow-lg relative overflow-hidden text-white">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 items-center relative z-10">
                <div class="md:col-span-2">
                    <div class="flex items-center gap-4 mb-6">
                        <span class="bg-brand-pink text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Idée Cadeau</span>
                        <span class="text-brand-pink text-sm font-medium flex items-center gap-1"><i class="fas fa-check-circle"></i> Valable 1 an</span>
                    </div>
                    <h2 class="font-title font-bold text-3xl md:text-4xl mb-4"><?php esc_html_e('Offrez de la sérénité avec un Bon Cadeau Nat\'Patoune', 'natpatoune'); ?></h2>
                    <p class="text-lg text-white/90 mb-8 max-w-2xl"><?php esc_html_e('Le cadeau idéal pour les propriétaires de chats ! Offrez des visites à domicile ou de la surveillance de maison. Vous choisissez le montant, ils choisissent les dates.', 'natpatoune'); ?></p>
                    
                    <div class="flex flex-wrap gap-4">
                        <a href="#contact" class="inline-flex items-center gap-2 bg-white text-brand-purple font-bold py-3 px-8 rounded-full hover:bg-brand-beige transition-all shadow-md hover:shadow-lg">
                            <i class="fas fa-gift" aria-hidden="true"></i> <?php esc_html_e('Commander un Bon', 'natpatoune'); ?>
                        </a>
                        <a href="#tarifs" class="inline-flex items-center gap-2 bg-transparent border-2 border-white text-white font-bold py-3 px-8 rounded-full hover:bg-white/10 transition-all">
                            <?php esc_html_e('Voir les tarifs', 'natpatoune'); ?>
                        </a>
                    </div>
                </div>
                
                <div class="hidden md:flex justify-center">
                    <div class="w-48 h-48 bg-white/10 rounded-full flex items-center justify-center relative">
                        <div class="absolute inset-0 bg-white/5 rounded-full animate-pulse"></div>
                        <i class="fas fa-gift text-8xl text-white/80" aria-hidden="true"></i>
                    </div>
                </div>
            </div>
            
            <!-- Decorative Background -->
            <div class="absolute top-0 right-0 w-96 h-96 bg-brand-purple-dark rounded-full mix-blend-multiply filter blur-3xl opacity-50 transform translate-x-1/2 -translate-y-1/2"></div>
            <div class="absolute bottom-0 left-0 w-64 h-64 bg-brand-pink rounded-full mix-blend-multiply filter blur-3xl opacity-30 transform -translate-x-1/2 translate-y-1/2"></div>
        </div>
    </div>
</section>
