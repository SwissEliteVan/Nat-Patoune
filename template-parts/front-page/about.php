<?php
/**
 * About Section
 */
?>
<section id="a-propos" class="py-20 bg-white overflow-hidden">
    <div class="container mx-auto px-4">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 lg:gap-20 items-center">
            <!-- Images avec Badge NP -->
            <div class="relative">
                <div class="relative z-10 rounded-3xl overflow-hidden shadow-2xl transform rotate-2 hover:rotate-0 transition-transform duration-500">
                    <?php
                    $photo_path = get_theme_file_path('assets/img/nathalie-piguet-cat-sitter-lausanne.webp');
                    if (file_exists($photo_path)) : ?>
                        <img
                            src="<?php echo esc_url(get_theme_file_uri('assets/img/nathalie-piguet-cat-sitter-lausanne.webp')); ?>"
                            alt="<?php esc_attr_e('Nathalie Piguet, cat-sitter certifiée à Lausanne', 'natpatoune'); ?>"
                            class="w-full h-auto object-cover"
                            loading="lazy"
                        >
                    <?php else : ?>
                        <div class="bg-brand-grey w-full h-96 flex flex-col items-center justify-center text-brand-text-light">
                            <i class="fas fa-cat text-4xl mb-4" aria-hidden="true"></i>
                            <p class="font-title font-bold text-xl"><?php esc_html_e('Nathalie Piguet', 'natpatoune'); ?></p>
                            <p class="text-sm"><?php esc_html_e('Cat-sitter certifiée', 'natpatoune'); ?></p>
                        </div>
                    <?php endif; ?>
                    
                    <!-- Badge NP -->
                    <div class="absolute -bottom-6 -right-6 w-24 h-24 bg-white rounded-full p-2 shadow-lg z-20">
                        <img
                            src="<?php echo esc_url(get_theme_file_uri('assets/img/monogramme-np-nat-patoune.svg')); ?>"
                            alt="<?php esc_attr_e('Monogramme NP - Nat Patoune', 'natpatoune'); ?>"
                            class="w-full h-full object-contain"
                            width="48"
                            height="48"
                            loading="lazy"
                        >
                    </div>
                </div>
                
                <!-- Decorative elements -->
                <div class="absolute top-10 -left-10 w-full h-full bg-brand-beige rounded-3xl -z-10 transform -rotate-3"></div>
                <div class="absolute -bottom-10 -right-10 w-32 h-32 bg-brand-pink/20 rounded-full blur-2xl -z-10"></div>
            </div>
            
            <!-- Content -->
            <div class="flex flex-col gap-6">
                <div>
                    <span class="inline-block text-brand-purple font-bold tracking-wider uppercase text-sm mb-2"><?php esc_html_e('Votre cat-sitter', 'natpatoune'); ?></span>
                    <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mb-6">
                        <?php esc_html_e('Nathalie Piguet : passionnée par le bien-être félin', 'natpatoune'); ?>
                    </h2>
                </div>
                
                <div class="prose prose-lg text-brand-text-light">
                    <p>
                        <?php echo wp_kses_post(__('Avec une <strong class="text-brand-purple">formation certifiée en comportement félin</strong> et une approche respectueuse de chaque tempérament, je veille au confort et à la sérénité de votre chat pendant votre absence.', 'natpatoune')); ?>
                    </p>
                    <p>
                        <?php echo wp_kses_post(__('Chaque garde est <strong class="text-brand-purple">personnalisée</strong> : je m\'adapte aux habitudes de votre compagnon, qu\'il soit câlin, timide, joueur ou senior. Mon objectif ? Que votre chat reste épanoui dans son environnement familier, et que vous partiez l\'esprit tranquille.', 'natpatoune')); ?>
                    </p>
                </div>
                
                <ul class="flex flex-col gap-4 mt-4">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-brand-green text-xl mt-1" aria-hidden="true"></i>
                        <span class="text-brand-text"><?php echo wp_kses_post(__('<strong>Formation certifiée</strong> en comportement et soins félins', 'natpatoune')); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-brand-green text-xl mt-1" aria-hidden="true"></i>
                        <span class="text-brand-text"><?php echo wp_kses_post(__('<strong>Approche douce</strong> respectant le rythme de chaque chat', 'natpatoune')); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-brand-green text-xl mt-1" aria-hidden="true"></i>
                        <span class="text-brand-text"><?php echo wp_kses_post(__('<strong>Rapports quotidiens avec photos</strong> pour rester connecté', 'natpatoune')); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-brand-green text-xl mt-1" aria-hidden="true"></i>
                        <span class="text-brand-text"><?php echo wp_kses_post(__('<strong>Réponse sous 24h</strong> pour toute demande', 'natpatoune')); ?></span>
                    </li>
                </ul>
                
                <div class="flex flex-wrap gap-4 mt-8">
                    <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center gap-2 bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-3 px-8 rounded-full transition-all shadow-md hover:shadow-lg transform hover:-translate-y-0.5">
                        <i class="fas fa-heart" aria-hidden="true"></i>
                        <?php esc_html_e('Me contacter', 'natpatoune'); ?>
                    </a>
                    
                    <?php
                    $certificat_path = get_theme_file_path('assets/img/certificat-cat-sitter-nathalie-piguet.webp');
                    if (file_exists($certificat_path)) : ?>
                        <button id="certificate-btn" class="inline-flex items-center gap-2 bg-white border-2 border-brand-purple text-brand-purple font-bold py-3 px-8 rounded-full hover:bg-brand-purple hover:text-white transition-all" aria-label="<?php esc_attr_e('Voir le certificat', 'natpatoune'); ?>">
                            <i class="fas fa-certificate" aria-hidden="true"></i>
                            <?php esc_html_e('Voir mon certificat', 'natpatoune'); ?>
                        </button>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modale Certificat -->
<?php
$certificat_modal_path = get_theme_file_path('assets/img/certificat-cat-sitter-nathalie-piguet.webp');
if (file_exists($certificat_modal_path)) : ?>
    <div id="certificate-modal" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4" role="dialog" aria-modal="true" aria-labelledby="certificate-modal-title">
        <div class="absolute inset-0 bg-black/80 backdrop-blur-sm" id="certificate-modal-overlay"></div>
        <div class="relative bg-white rounded-2xl shadow-2xl max-w-4xl w-full max-h-[90vh] overflow-auto p-2 animate-fade-in-up">
            <button id="certificate-modal-close" class="absolute top-4 right-4 bg-white text-brand-text hover:text-brand-purple w-10 h-10 rounded-full shadow-md flex items-center justify-center transition-colors z-10" aria-label="<?php esc_attr_e('Fermer', 'natpatoune'); ?>">
                <i class="fas fa-times text-xl" aria-hidden="true"></i>
            </button>
            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/certificat-cat-sitter-nathalie-piguet.webp')); ?>" alt="<?php esc_attr_e('Certificat de formation cat-sitter – Nathalie Piguet', 'natpatoune'); ?>" class="w-full h-auto rounded-xl" loading="lazy">
            <p id="certificate-modal-title" class="text-center font-medium text-brand-text-light mt-4 mb-2"><?php esc_html_e('Certificat de formation cat-sitter (certifiée)', 'natpatoune'); ?></p>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const btn = document.getElementById('certificate-btn');
            const modal = document.getElementById('certificate-modal');
            const closeBtn = document.getElementById('certificate-modal-close');
            const overlay = document.getElementById('certificate-modal-overlay');

            if (btn && modal) {
                btn.addEventListener('click', function() {
                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                });

                const closeModal = function() {
                    modal.classList.add('hidden');
                    document.body.style.overflow = '';
                };

                closeBtn.addEventListener('click', closeModal);
                overlay.addEventListener('click', closeModal);
                
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                        closeModal();
                    }
                });
            }
        });
    </script>
<?php endif; ?>
