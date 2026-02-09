<?php
/**
 * Template Part: Zones d'intervention Section
 *
 * @package NatPatoune
 */
?>
<!-- Zones d'intervention Section -->
<section id="zones" class="py-20 bg-brand-beige">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-block text-brand-purple font-bold tracking-wider uppercase text-sm mb-2"><?php esc_html_e('Zone d\'intervention', 'natpatoune'); ?></span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mb-4"><?php esc_html_e('Morges, Lausanne et communes avoisinantes', 'natpatoune'); ?></h2>
            <p class="text-lg text-brand-text-light"><?php esc_html_e('Je me déplace dans toute la région de Morges et Lausanne pour prendre soin de votre chat à domicile. Voici les principales communes desservies :', 'natpatoune'); ?></p>
        </div>
        
        <!-- Zones Accordion -->
        <div class="max-w-3xl mx-auto space-y-4">
            
            <!-- Zone Morges -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="accordion-trigger w-full flex items-center justify-between p-6 text-left focus:outline-none group" aria-expanded="false" aria-controls="zone-morges">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-brand-purple/10 rounded-full flex items-center justify-center text-brand-purple text-xl group-hover:bg-brand-purple group-hover:text-white transition-colors">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-lg text-brand-text"><?php esc_html_e('Région de Morges', 'natpatoune'); ?></h3>
                            <p class="text-sm text-brand-text-light"><?php esc_html_e('15 communes', 'natpatoune'); ?></p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down text-brand-text-light transition-transform duration-300"></i>
                </button>
                
                <div id="zone-morges" class="accordion-content hidden border-t border-brand-grey/30">
                    <div class="p-6 bg-brand-cream/50">
                        <div class="flex flex-wrap gap-2 mb-6">
                            <?php
                            $communes = ['Morges', 'Saint-Prex', 'Tolochenaz', 'Lonay', 'Préverenges', 'Denges', 'Échichens', 'Colombier', 'Monnaz', 'Clarmont', 'Vufflens-le-Château', 'Vullierens', 'Chigny', 'Lully', 'Yens'];
                            foreach ($communes as $commune) {
                                echo '<span class="bg-white border border-brand-grey text-brand-text-light px-3 py-1 rounded-full text-sm">' . esc_html($commune) . '</span>';
                            }
                            ?>
                        </div>
                        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center gap-2 text-brand-purple font-bold hover:text-brand-purple-dark transition-colors">
                            <i class="fas fa-calendar-check"></i>
                            <?php esc_html_e('Demander un devis', 'natpatoune'); ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Zone Lausanne -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="accordion-trigger w-full flex items-center justify-between p-6 text-left focus:outline-none group" aria-expanded="false" aria-controls="zone-lausanne">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-brand-purple/10 rounded-full flex items-center justify-center text-brand-purple text-xl group-hover:bg-brand-purple group-hover:text-white transition-colors">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-lg text-brand-text"><?php esc_html_e('Région de Lausanne', 'natpatoune'); ?></h3>
                            <p class="text-sm text-brand-text-light"><?php esc_html_e('12 communes', 'natpatoune'); ?></p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down text-brand-text-light transition-transform duration-300"></i>
                </button>
                
                <div id="zone-lausanne" class="accordion-content hidden border-t border-brand-grey/30">
                    <div class="p-6 bg-brand-cream/50">
                        <div class="flex flex-wrap gap-2 mb-6">
                            <?php
                            $communes = ['Lausanne', 'Renens', 'Prilly', 'Pully', 'Lutry', 'Épalinges', 'Le Mont-sur-Lausanne', 'Crissier', 'Bussigny', 'Chavannes-près-Renens', 'Saint-Sulpice', 'Villars-Sainte-Croix'];
                            foreach ($communes as $commune) {
                                echo '<span class="bg-white border border-brand-grey text-brand-text-light px-3 py-1 rounded-full text-sm">' . esc_html($commune) . '</span>';
                            }
                            ?>
                        </div>
                        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center gap-2 text-brand-purple font-bold hover:text-brand-purple-dark transition-colors">
                            <i class="fas fa-calendar-check"></i>
                            <?php esc_html_e('Demander un devis', 'natpatoune'); ?>
                        </a>
                    </div>
                </div>
            </div>
            
            <!-- Zone Ouest lausannois -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="accordion-trigger w-full flex items-center justify-between p-6 text-left focus:outline-none group" aria-expanded="false" aria-controls="zone-ouest">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 bg-brand-purple/10 rounded-full flex items-center justify-center text-brand-purple text-xl group-hover:bg-brand-purple group-hover:text-white transition-colors">
                            <i class="fas fa-map-marker-alt"></i>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-lg text-brand-text"><?php esc_html_e('Ouest lausannois', 'natpatoune'); ?></h3>
                            <p class="text-sm text-brand-text-light"><?php esc_html_e('8 communes', 'natpatoune'); ?></p>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down text-brand-text-light transition-transform duration-300"></i>
                </button>
                
                <div id="zone-ouest" class="accordion-content hidden border-t border-brand-grey/30">
                    <div class="p-6 bg-brand-cream/50">
                        <div class="flex flex-wrap gap-2 mb-6">
                            <?php
                            $communes = ['Lausanne Ouest', 'Ecublens', 'Saint-Sulpice', 'Bussigny', 'Villars-Sainte-Croix', 'Assens', 'Bioley-Orjulaz', 'Romanel-sur-Lausanne'];
                            foreach ($communes as $commune) {
                                echo '<span class="bg-white border border-brand-grey text-brand-text-light px-3 py-1 rounded-full text-sm">' . esc_html($commune) . '</span>';
                            }
                            ?>
                        </div>
                        <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center gap-2 text-brand-purple font-bold hover:text-brand-purple-dark transition-colors">
                            <i class="fas fa-calendar-check"></i>
                            <?php esc_html_e('Demander un devis', 'natpatoune'); ?>
                        </a>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- Note complémentaire -->
        <div class="text-center mt-12">
            <p class="text-brand-text-light flex items-center justify-center gap-2">
                <i class="fas fa-info-circle text-brand-purple"></i>
                <?php esc_html_e('Votre commune ne figure pas dans la liste ? Contactez-moi, je me déplace volontiers dans d\'autres localités selon disponibilité.', 'natpatoune'); ?>
            </p>
        </div>
        
        <!-- CTA -->
        <div class="text-center mt-8">
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center gap-2 bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-3 px-8 rounded-full transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                <i class="fas fa-map-marked-alt" aria-hidden="true"></i>
                <?php esc_html_e('Vérifier ma zone', 'natpatoune'); ?>
                <i class="fas fa-arrow-right ml-2"></i>
            </a>
        </div>
    </div>
</section>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const triggers = document.querySelectorAll('.accordion-trigger');
        
        triggers.forEach(trigger => {
            trigger.addEventListener('click', function() {
                const contentId = this.getAttribute('aria-controls');
                const content = document.getElementById(contentId);
                const isExpanded = this.getAttribute('aria-expanded') === 'true';
                const icon = this.querySelector('.fa-chevron-down');
                
                // Close all other accordions
                triggers.forEach(otherTrigger => {
                    if (otherTrigger !== this) {
                        otherTrigger.setAttribute('aria-expanded', 'false');
                        const otherContentId = otherTrigger.getAttribute('aria-controls');
                        const otherContent = document.getElementById(otherContentId);
                        otherContent.classList.add('hidden');
                        const otherIcon = otherTrigger.querySelector('.fa-chevron-down');
                        if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                    }
                });
                
                // Toggle current
                this.setAttribute('aria-expanded', !isExpanded);
                content.classList.toggle('hidden');
                
                if (icon) {
                    icon.style.transform = isExpanded ? 'rotate(0deg)' : 'rotate(180deg)';
                }
            });
        });
    });
</script>
