<?php
/**
 * Template Part: Zones d'intervention Section
 *
 * @package NatPatoune
 */
?>
<!-- Zones d'intervention Section -->
<section id="zones" class="py-16 md:py-24 bg-brand-beige">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm"><?php esc_html_e('Zone d\'intervention', 'natpatoune'); ?></span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-6">
                <?php esc_html_e('Morges, Lausanne et communes avoisinantes', 'natpatoune'); ?>
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                <?php esc_html_e('Je me déplace dans toute la région de Morges et Lausanne pour prendre soin de votre chat à domicile. Voici les principales communes desservies :', 'natpatoune'); ?>
            </p>
        </div>
        
        <!-- Zones Accordion -->
        <div class="max-w-5xl mx-auto space-y-4">
            
            <!-- Zone Morges -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="zone-accordion-trigger w-full flex items-center justify-between p-6 text-left hover:bg-brand-beige/50 transition group" aria-expanded="false" aria-controls="zone-morges">
                    <div class="flex items-center gap-4">
                        <div class="bg-brand-purple/10 rounded-full p-3 text-brand-purple group-hover:bg-brand-purple group-hover:text-white transition">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-xl text-brand-text mb-1"><?php esc_html_e('Région de Morges', 'natpatoune'); ?></h3>
                            <p class="text-sm text-brand-text-light"><?php esc_html_e('15 communes', 'natpatoune'); ?></p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down text-brand-purple transition-transform duration-300 group-hover:text-brand-purple-dark"></i>
                </button>
                
                <div id="zone-morges" class="zone-accordion-content hidden px-6 pb-6">
                    <div class="pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Morges', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Saint-Prex', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Tolochenaz', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Lonay', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Préverenges', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Denges', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Échichens', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Colombier', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Monnaz', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Clarmont', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Vufflens-le-Château', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Vullierens', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Chigny', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Lully', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Yens', 'natpatoune'); ?></span>
                        </div>
                        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-3 px-6 rounded-full transition shadow-soft hover:shadow-medium text-sm">
                            <i class="fas fa-calendar-check mr-2"></i>
                            <?php esc_html_e('Demander un devis', 'natpatoune'); ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Zone Lausanne -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="zone-accordion-trigger w-full flex items-center justify-between p-6 text-left hover:bg-brand-beige/50 transition group" aria-expanded="false" aria-controls="zone-lausanne">
                    <div class="flex items-center gap-4">
                        <div class="bg-brand-purple/10 rounded-full p-3 text-brand-purple group-hover:bg-brand-purple group-hover:text-white transition">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-xl text-brand-text mb-1"><?php esc_html_e('Région de Lausanne', 'natpatoune'); ?></h3>
                            <p class="text-sm text-brand-text-light"><?php esc_html_e('12 communes', 'natpatoune'); ?></p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down text-brand-purple transition-transform duration-300 group-hover:text-brand-purple-dark"></i>
                </button>
                
                <div id="zone-lausanne" class="zone-accordion-content hidden px-6 pb-6">
                    <div class="pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Lausanne', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Renens', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Prilly', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Pully', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Lutry', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Épalinges', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Le Mont-sur-Lausanne', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Crissier', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Bussigny', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Chavannes-près-Renens', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Saint-Sulpice', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Villars-Sainte-Croix', 'natpatoune'); ?></span>
                        </div>
                        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-3 px-6 rounded-full transition shadow-soft hover:shadow-medium text-sm">
                            <i class="fas fa-calendar-check mr-2"></i>
                            <?php esc_html_e('Demander un devis', 'natpatoune'); ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Zone Ouest lausannois -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="zone-accordion-trigger w-full flex items-center justify-between p-6 text-left hover:bg-brand-beige/50 transition group" aria-expanded="false" aria-controls="zone-ouest">
                    <div class="flex items-center gap-4">
                        <div class="bg-brand-purple/10 rounded-full p-3 text-brand-purple group-hover:bg-brand-purple group-hover:text-white transition">
                            <i class="fas fa-map-marker-alt text-xl"></i>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-xl text-brand-text mb-1"><?php esc_html_e('Ouest lausannois', 'natpatoune'); ?></h3>
                            <p class="text-sm text-brand-text-light"><?php esc_html_e('8 communes', 'natpatoune'); ?></p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down text-brand-purple transition-transform duration-300 group-hover:text-brand-purple-dark"></i>
                </button>
                
                <div id="zone-ouest" class="zone-accordion-content hidden px-6 pb-6">
                    <div class="pt-4 border-t border-gray-100">
                        <div class="flex flex-wrap gap-2 mb-6">
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Lausanne Ouest', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Ecublens', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Saint-Sulpice', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Bussigny', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Villars-Sainte-Croix', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Assens', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Bioley-Orjulaz', 'natpatoune'); ?></span>
                            <span class="bg-brand-purple/10 text-brand-purple text-sm px-4 py-2 rounded-full font-medium"><?php esc_html_e('Romanel-sur-Lausanne', 'natpatoune'); ?></span>
                        </div>
                        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-3 px-6 rounded-full transition shadow-soft hover:shadow-medium text-sm">
                            <i class="fas fa-calendar-check mr-2"></i>
                            <?php esc_html_e('Demander un devis', 'natpatoune'); ?>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Note complémentaire -->
        <div class="max-w-4xl mx-auto mt-12 text-center">
            <p class="text-brand-text-light">
                <i class="fas fa-info-circle text-brand-purple mr-2"></i>
                <?php esc_html_e('Votre commune ne figure pas dans la liste ? Contactez-moi, je me déplace volontiers dans d\'autres localités selon disponibilité.', 'natpatoune'); ?>
            </p>
        </div>
        
        <!-- CTA -->
        <div class="text-center mt-12">
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-4 px-10 rounded-full transition-all duration-300 shadow-medium hover:shadow-lg transform hover:scale-105 group">
                <span class="bg-white/20 p-2 rounded-full mr-3 group-hover:bg-white/30 transition-all">
                    <i class="fas fa-map-marked-alt" aria-hidden="true"></i>
                </span>
                <?php esc_html_e('Vérifier ma zone', 'natpatoune'); ?>
                <i class="fas fa-arrow-right ml-2 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>
