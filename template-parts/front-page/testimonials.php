<?php
/**
 * Template Part: Testimonials Section
 *
 * @package NatPatoune
 */
?>
<!-- Témoignages Section -->
<section id="avis" class="py-20 bg-brand-beige">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-block text-brand-purple font-bold tracking-wider uppercase text-sm mb-2"><?php esc_html_e('Témoignages', 'natpatoune'); ?></span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mb-4"><?php esc_html_e('Ce que disent mes clients', 'natpatoune'); ?></h2>
            <p class="text-lg text-brand-text-light"><?php esc_html_e('La confiance et la satisfaction de mes clients sont ma priorité. Voici quelques retours de propriétaires qui m\'ont confié leurs chats.', 'natpatoune'); ?></p>
        </div>
        
        <!-- Testimonials Grid -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-16">
            
            <!-- Testimonial 1 -->
            <div class="bg-white rounded-2xl p-8 shadow-soft relative">
                <div class="absolute -top-4 left-8 w-10 h-10 bg-brand-purple text-white rounded-full flex items-center justify-center text-lg shadow-md">
                    <i class="fas fa-quote-left"></i>
                </div>
                
                <div class="mt-4">
                    <div class="flex text-yellow-400 text-sm mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    
                    <p class="text-brand-text-light italic mb-6">
                        <?php esc_html_e('« Nathalie s\'est occupée de notre chat Félix pendant 2 semaines. Elle est venue 2 fois par jour et nous envoyait des photos tous les soirs. Félix était visiblement heureux et nous sommes rentrés l\'esprit tranquille ! »', 'natpatoune'); ?>
                    </p>
                    
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-brand-grey rounded-full flex items-center justify-center text-brand-text-light">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <p class="font-bold text-brand-text"><?php esc_html_e('Sophie L.', 'natpatoune'); ?></p>
                            <p class="text-xs text-brand-text-light uppercase tracking-wide"><?php esc_html_e('Morges', 'natpatoune'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="bg-white rounded-2xl p-8 shadow-soft relative transform md:-translate-y-2">
                <div class="absolute -top-4 left-8 w-10 h-10 bg-brand-pink text-white rounded-full flex items-center justify-center text-lg shadow-md">
                    <i class="fas fa-quote-left"></i>
                </div>
                
                <div class="mt-4">
                    <div class="flex text-yellow-400 text-sm mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    
                    <p class="text-brand-text-light italic mb-6">
                        <?php esc_html_e('« Notre chatte Luna est très timide avec les inconnus. Nathalie a pris le temps de l\'apprivoiser lors de la visite gratuite et maintenant Luna l\'attend avec impatience ! Service professionnel et grande douceur. »', 'natpatoune'); ?>
                    </p>
                    
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-brand-grey rounded-full flex items-center justify-center text-brand-text-light">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <p class="font-bold text-brand-text"><?php esc_html_e('Marc et Julie D.', 'natpatoune'); ?></p>
                            <p class="text-xs text-brand-text-light uppercase tracking-wide"><?php esc_html_e('Lausanne', 'natpatoune'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="bg-white rounded-2xl p-8 shadow-soft relative">
                <div class="absolute -top-4 left-8 w-10 h-10 bg-brand-green text-white rounded-full flex items-center justify-center text-lg shadow-md">
                    <i class="fas fa-quote-left"></i>
                </div>
                
                <div class="mt-4">
                    <div class="flex text-yellow-400 text-sm mb-4">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                    </div>
                    
                    <p class="text-brand-text-light italic mb-6">
                        <?php esc_html_e('« Moustache a 15 ans et suit un traitement médical. Nathalie a géré l\'administration des médicaments sans problème et nous a tenus informés de son état quotidiennement. Une personne de confiance que je recommande ! »', 'natpatoune'); ?>
                    </p>
                    
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-brand-grey rounded-full flex items-center justify-center text-brand-text-light">
                            <i class="fas fa-user"></i>
                        </div>
                        <div>
                            <p class="font-bold text-brand-text"><?php esc_html_e('Catherine M.', 'natpatoune'); ?></p>
                            <p class="text-xs text-brand-text-light uppercase tracking-wide"><?php esc_html_e('Saint-Prex', 'natpatoune'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Social Proof -->
        <div class="bg-white rounded-2xl p-8 shadow-sm max-w-4xl mx-auto mb-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 text-center divide-y md:divide-y-0 md:divide-x divide-brand-grey/30">
                <div class="p-4">
                    <div class="font-title font-bold text-4xl text-brand-purple mb-2">50+</div>
                    <p class="text-brand-text-light text-sm uppercase tracking-wide"><?php esc_html_e('Chats gardés avec amour', 'natpatoune'); ?></p>
                </div>
                <div class="p-4">
                    <div class="font-title font-bold text-4xl text-brand-pink mb-2">100%</div>
                    <p class="text-brand-text-light text-sm uppercase tracking-wide"><?php esc_html_e('Clients satisfaits', 'natpatoune'); ?></p>
                </div>
                <div class="p-4">
                    <div class="font-title font-bold text-4xl text-brand-green mb-2">5★</div>
                    <p class="text-brand-text-light text-sm uppercase tracking-wide"><?php esc_html_e('Note moyenne', 'natpatoune'); ?></p>
                </div>
            </div>
        </div>
        
        <!-- Instagram CTA -->
        <div class="text-center">
            <p class="text-brand-text-light mb-6 flex items-center justify-center gap-2">
                <i class="fab fa-instagram text-brand-purple text-xl"></i>
                <?php esc_html_e('Suivez-moi sur Instagram pour voir plus de photos de chats heureux !', 'natpatoune'); ?>
            </p>
            <a href="<?php echo esc_url(get_theme_mod('natpatoune_instagram_url', 'https://www.instagram.com/nat.patoune')); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center gap-2 bg-gradient-to-r from-purple-500 to-pink-500 text-white font-bold py-3 px-8 rounded-full hover:shadow-lg transition-all transform hover:-translate-y-0.5">
                <i class="fab fa-instagram text-xl"></i>
                <?php esc_html_e('@nat.patoune', 'natpatoune'); ?>
            </a>
        </div>
    </div>
</section>
