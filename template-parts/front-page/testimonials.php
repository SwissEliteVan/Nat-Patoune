<?php
/**
 * Template Part: Testimonials Section
 *
 * @package NatPatoune
 */
?>
<!-- Témoignages Section -->
<section id="avis" class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm"><?php esc_html_e('Témoignages', 'natpatoune'); ?></span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-6">
                <?php esc_html_e('Ce que disent mes clients', 'natpatoune'); ?>
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                <?php esc_html_e('La confiance et la satisfaction de mes clients sont ma priorité. Voici quelques retours de propriétaires qui m\'ont confié leurs chats.', 'natpatoune'); ?>
            </p>
        </div>
        
        <!-- Testimonials Grid -->
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            
            <!-- Testimonial 1 -->
            <div class="bg-brand-beige rounded-3xl p-8 shadow-soft hover:shadow-medium transition relative">
                <div class="absolute -top-4 left-8">
                    <div class="bg-brand-purple text-white w-12 h-12 rounded-full flex items-center justify-center shadow-medium">
                        <i class="fas fa-quote-left text-xl"></i>
                    </div>
                </div>
                
                <div class="pt-6">
                    <div class="flex items-center gap-1 mb-4">
                        <i class="fas fa-star text-brand-green"></i>
                        <i class="fas fa-star text-brand-green"></i>
                        <i class="fas fa-star text-brand-green"></i>
                        <i class="fas fa-star text-brand-green"></i>
                        <i class="fas fa-star text-brand-green"></i>
                    </div>
                    
                    <p class="text-brand-text-light italic mb-6 leading-relaxed">
                        <?php esc_html_e('« Nathalie s\'est occupée de notre chat Félix pendant 2 semaines. Elle est venue 2 fois par jour et nous envoyait des photos tous les soirs. Félix était visiblement heureux et nous sommes rentrés l\'esprit tranquille ! »', 'natpatoune'); ?>
                    </p>
                    
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-brand-purple/10 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-brand-purple text-xl"></i>
                        </div>
                        <div>
                            <p class="font-bold text-brand-text"><?php esc_html_e('Sophie L.', 'natpatoune'); ?></p>
                            <p class="text-sm text-brand-text-light"><?php esc_html_e('Morges', 'natpatoune'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 2 -->
            <div class="bg-brand-beige rounded-3xl p-8 shadow-soft hover:shadow-medium transition relative">
                <div class="absolute -top-4 left-8">
                    <div class="bg-brand-purple text-white w-12 h-12 rounded-full flex items-center justify-center shadow-medium">
                        <i class="fas fa-quote-left text-xl"></i>
                    </div>
                </div>
                
                <div class="pt-6">
                    <div class="flex items-center gap-1 mb-4">
                        <i class="fas fa-star text-brand-green"></i>
                        <i class="fas fa-star text-brand-green"></i>
                        <i class="fas fa-star text-brand-green"></i>
                        <i class="fas fa-star text-brand-green"></i>
                        <i class="fas fa-star text-brand-green"></i>
                    </div>
                    
                    <p class="text-brand-text-light italic mb-6 leading-relaxed">
                        <?php esc_html_e('« Notre chatte Luna est très timide avec les inconnus. Nathalie a pris le temps de l\'apprivoiser lors de la visite gratuite et maintenant Luna l\'attend avec impatience ! Service professionnel et grande douceur. »', 'natpatoune'); ?>
                    </p>
                    
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-brand-purple/10 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-brand-purple text-xl"></i>
                        </div>
                        <div>
                            <p class="font-bold text-brand-text"><?php esc_html_e('Marc et Julie D.', 'natpatoune'); ?></p>
                            <p class="text-sm text-brand-text-light"><?php esc_html_e('Lausanne', 'natpatoune'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Testimonial 3 -->
            <div class="bg-brand-beige rounded-3xl p-8 shadow-soft hover:shadow-medium transition relative">
                <div class="absolute -top-4 left-8">
                    <div class="bg-brand-purple text-white w-12 h-12 rounded-full flex items-center justify-center shadow-medium">
                        <i class="fas fa-quote-left text-xl"></i>
                    </div>
                </div>
                
                <div class="pt-6">
                    <div class="flex items-center gap-1 mb-4">
                        <i class="fas fa-star text-brand-green"></i>
                        <i class="fas fa-star text-brand-green"></i>
                        <i class="fas fa-star text-brand-green"></i>
                        <i class="fas fa-star text-brand-green"></i>
                        <i class="fas fa-star text-brand-green"></i>
                    </div>
                    
                    <p class="text-brand-text-light italic mb-6 leading-relaxed">
                        <?php esc_html_e('« Moustache a 15 ans et suit un traitement médical. Nathalie a géré l\'administration des médicaments sans problème et nous a tenus informés de son état quotidiennement. Une personne de confiance que je recommande ! »', 'natpatoune'); ?>
                    </p>
                    
                    <div class="flex items-center gap-3">
                        <div class="w-12 h-12 bg-brand-purple/10 rounded-full flex items-center justify-center">
                            <i class="fas fa-user text-brand-purple text-xl"></i>
                        </div>
                        <div>
                            <p class="font-bold text-brand-text"><?php esc_html_e('Catherine M.', 'natpatoune'); ?></p>
                            <p class="text-sm text-brand-text-light"><?php esc_html_e('Saint-Prex', 'natpatoune'); ?></p>
                        </div>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Social Proof -->
        <div class="max-w-4xl mx-auto mt-16 bg-gradient-to-r from-brand-purple/10 to-brand-pink/10 rounded-3xl p-8 text-center">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <div class="text-4xl font-bold text-brand-purple mb-2">50+</div>
                    <p class="text-brand-text-light"><?php esc_html_e('Chats gardés avec amour', 'natpatoune'); ?></p>
                </div>
                <div>
                    <div class="text-4xl font-bold text-brand-purple mb-2">100%</div>
                    <p class="text-brand-text-light"><?php esc_html_e('Clients satisfaits', 'natpatoune'); ?></p>
                </div>
                <div>
                    <div class="text-4xl font-bold text-brand-purple mb-2">5★</div>
                    <p class="text-brand-text-light"><?php esc_html_e('Note moyenne', 'natpatoune'); ?></p>
                </div>
            </div>
        </div>
        
        <!-- Instagram CTA -->
        <div class="text-center mt-12">
            <p class="text-brand-text-light mb-4">
                <i class="fab fa-instagram text-brand-purple mr-2"></i>
                <?php esc_html_e('Suivez-moi sur Instagram pour voir plus de photos de chats heureux !', 'natpatoune'); ?>
            </p>
            <a href="<?php echo esc_url(get_theme_mod('natpatoune_instagram_url', 'https://www.instagram.com/nat.patoune')); ?>" target="_blank" rel="noopener noreferrer" class="inline-flex items-center bg-gradient-to-r from-brand-purple to-brand-pink hover:from-brand-purple-dark hover:to-brand-purple text-white font-title font-bold py-3 px-8 rounded-full transition-all duration-300 shadow-medium hover:shadow-lg transform hover:scale-105">
                <i class="fab fa-instagram text-xl mr-2"></i>
                <?php esc_html_e('@nat.patoune', 'natpatoune'); ?>
            </a>
        </div>
    </div>
</section>
