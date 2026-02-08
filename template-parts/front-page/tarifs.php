<?php
/**
 * Template Part: Tarifs Section
 *
 * @package NatPatoune
 */
?>
<!-- Tarifs Section -->
<section id="tarifs" class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm"><?php esc_html_e('Tarifs transparents', 'natpatoune'); ?></span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-6">
                <?php esc_html_e('Des formules adaptées à vos besoins', 'natpatoune'); ?>
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                <?php esc_html_e('Choisissez la formule qui convient le mieux à votre chat et à votre situation', 'natpatoune'); ?>
            </p>
        </div>
        
        <!-- Pricing Cards -->
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Formule Essentielle -->
            <div class="bg-brand-beige rounded-3xl overflow-hidden shadow-soft hover:shadow-medium transition group">
                <div class="bg-brand-purple/10 p-6 text-center">
                    <h3 class="font-title font-bold text-2xl text-brand-purple mb-2"><?php esc_html_e('Formule Essentielle', 'natpatoune'); ?></h3>
                    <p class="text-brand-text-light text-sm mb-4"><?php esc_html_e('Pour les absences courtes', 'natpatoune'); ?></p>
                    <div class="flex items-baseline justify-center">
                        <span class="text-4xl font-bold text-brand-text">25</span>
                        <span class="text-xl text-brand-text-light ml-1">CHF</span>
                    </div>
                    <p class="text-sm text-brand-text-light mt-1"><?php esc_html_e('par visite', 'natpatoune'); ?></p>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('1 visite de 30 minutes', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Nourriture et eau fraîche', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Nettoyage de la litière', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Jeux et câlins', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Photos et rapport quotidien', 'natpatoune'); ?></span>
                        </li>
                    </ul>
                    <div class="mt-8 text-center">
                        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-block bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-3 px-6 rounded-full transition shadow-soft hover:shadow-medium">
                            <?php esc_html_e('Réserver', 'natpatoune'); ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Formule Confort -->
            <div class="bg-brand-beige rounded-3xl overflow-hidden shadow-medium hover:shadow-lg transition group transform md:-translate-y-4 relative">
                <div class="absolute top-0 left-0 right-0 text-center">
                    <span class="inline-block bg-brand-green text-white text-xs font-bold px-4 py-1 rounded-b-lg">
                        <?php esc_html_e('Recommandé', 'natpatoune'); ?>
                    </span>
                </div>
                <div class="bg-brand-purple p-6 text-center text-white pt-8">
                    <h3 class="font-title font-bold text-2xl mb-2"><?php esc_html_e('Formule Confort', 'natpatoune'); ?></h3>
                    <p class="text-white/80 text-sm mb-4"><?php esc_html_e('Pour un bien-être optimal', 'natpatoune'); ?></p>
                    <div class="flex items-baseline justify-center">
                        <span class="text-4xl font-bold">40</span>
                        <span class="text-xl ml-1 opacity-80">CHF</span>
                    </div>
                    <p class="text-sm opacity-80 mt-1"><?php esc_html_e('par jour', 'natpatoune'); ?></p>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('2 visites de 30 minutes par jour', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Nourriture et eau fraîche', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Nettoyage de la litière', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Jeux et câlins prolongés', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Photos et rapport détaillé', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Arrosage des plantes', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Relevé du courrier', 'natpatoune'); ?></span>
                        </li>
                    </ul>
                    <div class="mt-8 text-center">
                        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-block bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-3 px-6 rounded-full transition shadow-medium hover:shadow-lg">
                            <?php esc_html_e('Réserver', 'natpatoune'); ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Formule Premium -->
            <div class="bg-brand-beige rounded-3xl overflow-hidden shadow-soft hover:shadow-medium transition group">
                <div class="bg-gradient-to-r from-brand-purple/10 to-brand-pink/10 p-6 text-center">
                    <h3 class="font-title font-bold text-2xl text-brand-purple mb-2"><?php esc_html_e('Formule Premium', 'natpatoune'); ?></h3>
                    <p class="text-brand-text-light text-sm mb-4"><?php esc_html_e('Pour les chats exigeants', 'natpatoune'); ?></p>
                    <div class="flex items-baseline justify-center">
                        <span class="text-4xl font-bold text-brand-text">55</span>
                        <span class="text-xl text-brand-text-light ml-1">CHF</span>
                    </div>
                    <p class="text-sm text-brand-text-light mt-1"><?php esc_html_e('par jour', 'natpatoune'); ?></p>
                </div>
                <div class="p-6">
                    <ul class="space-y-3">
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('3 visites de 30 minutes par jour', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Nourriture et eau fraîche', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Nettoyage de la litière', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Jeux et câlins prolongés', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Photos et vidéos quotidiennes', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Arrosage des plantes', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Relevé du courrier', 'natpatoune'); ?></span>
                        </li>
                        <li class="flex items-start gap-3">
                            <i class="fas fa-check-circle text-brand-green text-lg mt-1 flex-shrink-0" aria-hidden="true"></i>
                            <span class="text-sm"><?php esc_html_e('Brossage et soins spécifiques', 'natpatoune'); ?></span>
                        </li>
                    </ul>
                    <div class="mt-8 text-center">
                        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-block bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-3 px-6 rounded-full transition shadow-soft hover:shadow-medium">
                            <?php esc_html_e('Réserver', 'natpatoune'); ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Notes -->
        <div class="max-w-4xl mx-auto mt-16 bg-white/50 p-6 rounded-2xl border border-gray-100">
            <h3 class="font-title font-bold text-xl mb-4 text-center"><?php esc_html_e('Informations complémentaires', 'natpatoune'); ?></h3>
            <ul class="space-y-2 text-sm text-brand-text-light">
                <li class="flex items-start gap-2">
                    <i class="fas fa-info-circle text-brand-purple mt-1"></i>
                    <span><?php esc_html_e('Visite de prise de contact offerte et sans engagement', 'natpatoune'); ?></span>
                </li>
                <li class="flex items-start gap-2">
                    <i class="fas fa-info-circle text-brand-purple mt-1"></i>
                    <span><?php esc_html_e('Tarifs dégressifs pour les gardes de longue durée (plus de 2 semaines)', 'natpatoune'); ?></span>
                </li>
                <li class="flex items-start gap-2">
                    <i class="fas fa-info-circle text-brand-purple mt-1"></i>
                    <span><?php esc_html_e('Supplément de 10 CHF pour les jours fériés', 'natpatoune'); ?></span>
                </li>
                <li class="flex items-start gap-2">
                    <i class="fas fa-info-circle text-brand-purple mt-1"></i>
                    <span><?php esc_html_e('Réduction de 10% pour la garde de plusieurs chats', 'natpatoune'); ?></span>
                </li>
                <li class="flex items-start gap-2">
                    <i class="fas fa-info-circle text-brand-purple mt-1"></i>
                    <span><?php esc_html_e('Administration de médicaments sans supplément', 'natpatoune'); ?></span>
                </li>
            </ul>
        </div>
        
        <!-- CTA -->
        <div class="text-center mt-12">
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-4 px-10 rounded-full transition-all duration-300 shadow-medium hover:shadow-lg transform hover:scale-105 group">
                <span class="bg-white/20 p-2 rounded-full mr-3 group-hover:bg-white/30 transition-all">
                    <i class="fas fa-calendar-check" aria-hidden="true"></i>
                </span>
                <?php esc_html_e('Demander un devis personnalisé', 'natpatoune'); ?>
                <i class="fas fa-arrow-right ml-2 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>