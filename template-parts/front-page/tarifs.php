<?php
/**
 * Template Part: Tarifs Section
 *
 * @package NatPatoune
 */
?>
<!-- Tarifs Section -->
<section id="tarifs" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-block text-brand-purple font-bold tracking-wider uppercase text-sm mb-2"><?php esc_html_e('Tarifs transparents', 'natpatoune'); ?></span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mb-4"><?php esc_html_e('Des formules adaptées à vos besoins', 'natpatoune'); ?></h2>
            <p class="text-lg text-brand-text-light"><?php esc_html_e('Choisissez la formule qui convient le mieux à votre chat et à votre situation', 'natpatoune'); ?></p>
        </div>
        
        <!-- Pricing Cards -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            <!-- Formule Essentielle -->
            <div class="bg-white rounded-2xl shadow-soft hover:shadow-medium transition-all border border-brand-grey/30 overflow-hidden flex flex-col">
                <div class="p-8 bg-brand-cream/30 border-b border-brand-grey/30 text-center">
                    <h3 class="font-title font-bold text-xl text-brand-text mb-2"><?php esc_html_e('Formule Essentielle', 'natpatoune'); ?></h3>
                    <p class="text-sm text-brand-text-light mb-6"><?php esc_html_e('Pour les absences courtes', 'natpatoune'); ?></p>
                    <div class="flex items-baseline justify-center gap-1 text-brand-purple">
                        <span class="font-title font-bold text-5xl">25</span>
                        <span class="font-bold text-xl">CHF</span>
                    </div>
                    <p class="text-sm text-brand-text-light mt-2"><?php esc_html_e('par visite', 'natpatoune'); ?></p>
                </div>
                <div class="p-8 flex-grow flex flex-col">
                    <ul class="space-y-4 mb-8 flex-grow">
                        <li class="flex items-start gap-3 text-brand-text-light"><i class="fas fa-check-circle text-brand-green mt-1"></i> <?php esc_html_e('1 visite de 30 minutes', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text-light"><i class="fas fa-check-circle text-brand-green mt-1"></i> <?php esc_html_e('Nourriture et eau fraîche', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text-light"><i class="fas fa-check-circle text-brand-green mt-1"></i> <?php esc_html_e('Nettoyage de la litière', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text-light"><i class="fas fa-check-circle text-brand-green mt-1"></i> <?php esc_html_e('Jeux et câlins', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text-light"><i class="fas fa-check-circle text-brand-green mt-1"></i> <?php esc_html_e('Photos et rapport quotidien', 'natpatoune'); ?></li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="block w-full py-3 px-6 text-center border-2 border-brand-purple text-brand-purple font-bold rounded-full hover:bg-brand-purple hover:text-white transition-all">
                        <?php esc_html_e('Réserver', 'natpatoune'); ?>
                    </a>
                </div>
            </div>
            
            <!-- Formule Confort -->
            <div class="bg-white rounded-2xl shadow-lg hover:shadow-xl transition-all border-2 border-brand-purple overflow-hidden flex flex-col transform md:-translate-y-4 relative">
                <div class="absolute top-0 inset-x-0 bg-brand-purple text-white text-center text-xs font-bold uppercase tracking-wider py-1">
                    <?php esc_html_e('Recommandé', 'natpatoune'); ?>
                </div>
                <div class="p-8 pt-10 bg-brand-purple/5 border-b border-brand-purple/10 text-center">
                    <h3 class="font-title font-bold text-xl text-brand-purple mb-2"><?php esc_html_e('Formule Confort', 'natpatoune'); ?></h3>
                    <p class="text-sm text-brand-text-light mb-6"><?php esc_html_e('Pour un bien-être optimal', 'natpatoune'); ?></p>
                    <div class="flex items-baseline justify-center gap-1 text-brand-purple">
                        <span class="font-title font-bold text-5xl">40</span>
                        <span class="font-bold text-xl">CHF</span>
                    </div>
                    <p class="text-sm text-brand-text-light mt-2"><?php esc_html_e('par jour', 'natpatoune'); ?></p>
                </div>
                <div class="p-8 flex-grow flex flex-col">
                    <ul class="space-y-4 mb-8 flex-grow">
                        <li class="flex items-start gap-3 text-brand-text"><i class="fas fa-check-circle text-brand-purple mt-1"></i> <?php esc_html_e('2 visites de 30 minutes par jour', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text"><i class="fas fa-check-circle text-brand-purple mt-1"></i> <?php esc_html_e('Nourriture et eau fraîche', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text"><i class="fas fa-check-circle text-brand-purple mt-1"></i> <?php esc_html_e('Nettoyage de la litière', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text"><i class="fas fa-check-circle text-brand-purple mt-1"></i> <?php esc_html_e('Jeux et câlins prolongés', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text"><i class="fas fa-check-circle text-brand-purple mt-1"></i> <?php esc_html_e('Photos et rapport détaillé', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text"><i class="fas fa-check-circle text-brand-purple mt-1"></i> <?php esc_html_e('Arrosage des plantes', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text"><i class="fas fa-check-circle text-brand-purple mt-1"></i> <?php esc_html_e('Relevé du courrier', 'natpatoune'); ?></li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="block w-full py-3 px-6 text-center bg-brand-purple text-white font-bold rounded-full hover:bg-brand-purple-dark transition-all shadow-md hover:shadow-lg">
                        <?php esc_html_e('Réserver', 'natpatoune'); ?>
                    </a>
                </div>
            </div>
            
            <!-- Formule Premium -->
            <div class="bg-white rounded-2xl shadow-soft hover:shadow-medium transition-all border border-brand-grey/30 overflow-hidden flex flex-col">
                <div class="p-8 bg-brand-cream/30 border-b border-brand-grey/30 text-center">
                    <h3 class="font-title font-bold text-xl text-brand-text mb-2"><?php esc_html_e('Formule Premium', 'natpatoune'); ?></h3>
                    <p class="text-sm text-brand-text-light mb-6"><?php esc_html_e('Pour les chats exigeants', 'natpatoune'); ?></p>
                    <div class="flex items-baseline justify-center gap-1 text-brand-purple">
                        <span class="font-title font-bold text-5xl">55</span>
                        <span class="font-bold text-xl">CHF</span>
                    </div>
                    <p class="text-sm text-brand-text-light mt-2"><?php esc_html_e('par jour', 'natpatoune'); ?></p>
                </div>
                <div class="p-8 flex-grow flex flex-col">
                    <ul class="space-y-4 mb-8 flex-grow">
                        <li class="flex items-start gap-3 text-brand-text-light"><i class="fas fa-check-circle text-brand-green mt-1"></i> <?php esc_html_e('3 visites de 30 minutes par jour', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text-light"><i class="fas fa-check-circle text-brand-green mt-1"></i> <?php esc_html_e('Nourriture et eau fraîche', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text-light"><i class="fas fa-check-circle text-brand-green mt-1"></i> <?php esc_html_e('Nettoyage de la litière', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text-light"><i class="fas fa-check-circle text-brand-green mt-1"></i> <?php esc_html_e('Jeux et câlins prolongés', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text-light"><i class="fas fa-check-circle text-brand-green mt-1"></i> <?php esc_html_e('Photos et vidéos quotidiennes', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text-light"><i class="fas fa-check-circle text-brand-green mt-1"></i> <?php esc_html_e('Arrosage des plantes', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text-light"><i class="fas fa-check-circle text-brand-green mt-1"></i> <?php esc_html_e('Relevé du courrier', 'natpatoune'); ?></li>
                        <li class="flex items-start gap-3 text-brand-text-light"><i class="fas fa-check-circle text-brand-green mt-1"></i> <?php esc_html_e('Brossage et soins spécifiques', 'natpatoune'); ?></li>
                    </ul>
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="block w-full py-3 px-6 text-center border-2 border-brand-purple text-brand-purple font-bold rounded-full hover:bg-brand-purple hover:text-white transition-all">
                        <?php esc_html_e('Réserver', 'natpatoune'); ?>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Notes -->
        <div class="bg-brand-beige rounded-2xl p-8 max-w-4xl mx-auto">
            <h3 class="font-title font-bold text-lg text-brand-text mb-6 flex items-center gap-2">
                <i class="fas fa-info-circle text-brand-purple"></i>
                <?php esc_html_e('Informations complémentaires', 'natpatoune'); ?>
            </h3>
            <ul class="grid grid-cols-1 md:grid-cols-2 gap-4 text-brand-text-light">
                <li class="flex items-start gap-2"><i class="fas fa-check text-brand-green mt-1"></i> <?php esc_html_e('Visite de prise de contact offerte et sans engagement', 'natpatoune'); ?></li>
                <li class="flex items-start gap-2"><i class="fas fa-check text-brand-green mt-1"></i> <?php esc_html_e('Tarifs dégressifs pour les gardes de longue durée (plus de 2 semaines)', 'natpatoune'); ?></li>
                <li class="flex items-start gap-2"><i class="fas fa-check text-brand-green mt-1"></i> <?php esc_html_e('Supplément de 10 CHF pour les jours fériés', 'natpatoune'); ?></li>
                <li class="flex items-start gap-2"><i class="fas fa-check text-brand-green mt-1"></i> <?php esc_html_e('Réduction de 10% pour la garde de plusieurs chats', 'natpatoune'); ?></li>
                <li class="flex items-start gap-2"><i class="fas fa-check text-brand-green mt-1"></i> <?php esc_html_e('Administration de médicaments sans supplément', 'natpatoune'); ?></li>
            </ul>
        </div>
        
        <!-- Zone d'intervention & Communes -->
        <div class="text-center mt-12">
            <p class="text-brand-text-light mb-6"><?php esc_html_e('Je me déplace dans la région de Morges et Lausanne. Tarif selon zone : déplacement inclus dans un rayon de 10 km autour de Morges.', 'natpatoune'); ?></p>
            
            <a href="#zones" class="inline-flex items-center gap-2 text-brand-purple font-bold hover:text-brand-purple-dark transition-colors">
                <i class="fas fa-map-marker-alt"></i>
                <?php esc_html_e('Voir le détail des zones', 'natpatoune'); ?>
            </a>
        </div>
    </div>
</section>
