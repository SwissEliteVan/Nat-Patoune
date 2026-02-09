<?php
/**
 * Template Part: Blog Section
 *
 * @package NatPatoune
 */
?>
<!-- Blog -->
<section id="blog" class="py-20 bg-brand-beige" aria-labelledby="blog-heading">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="inline-block text-brand-purple font-bold tracking-wider uppercase text-sm mb-2"><?php esc_html_e('Conseils d\'experte', 'natpatoune'); ?></span>
            <h2 id="blog-heading" class="font-title font-bold text-3xl md:text-4xl text-brand-text mb-4"><?php esc_html_e('Le Guide du Chat Heureux', 'natpatoune'); ?></h2>
            <p class="text-lg text-brand-text-light"><?php esc_html_e('En tant que cat-sitter certifiée, je partage ici mes conseils pour garantir le bien-être de vos compagnons.', 'natpatoune'); ?></p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Article 1 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-soft hover:shadow-medium transition-all transform hover:-translate-y-1 cursor-pointer group modal-trigger" data-modal="article-1">
                <figure class="relative h-48 overflow-hidden">
                    <?php
                    $img1_path = get_theme_file_path('assets/img/garde-chat-domicile-sans-stress-vaud.webp');
                    if (file_exists($img1_path)) : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/garde-chat-domicile-sans-stress-vaud.webp')); ?>" width="1200" height="675" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Chat détendu pendant garde à domicile" loading="lazy">
                    <?php else : ?>
                        <div class="w-full h-full bg-brand-grey flex items-center justify-center text-brand-text-light">
                            <i class="fas fa-cat text-4xl"></i>
                        </div>
                    <?php endif; ?>
                    <div class="absolute top-4 right-4 bg-brand-purple text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide"><?php esc_html_e('Bien-être', 'natpatoune'); ?></div>
                </figure>
                <div class="p-6">
                    <h3 class="font-title font-bold text-xl text-brand-text mb-3 group-hover:text-brand-purple transition-colors"><?php esc_html_e('Pourquoi la garde à domicile réduit-elle le stress de votre chat ?', 'natpatoune'); ?></h3>
                    <p class="text-brand-text-light text-sm mb-4 line-clamp-3"><?php esc_html_e('La garde à domicile s\'avère être une solution apaisante pour les chats, qui sont très sensibles aux changements de territoire.', 'natpatoune'); ?></p>
                    <span class="inline-flex items-center text-brand-purple font-bold text-sm group-hover:underline"><?php esc_html_e('Lire l\'article', 'natpatoune'); ?> <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i></span>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-soft hover:shadow-medium transition-all transform hover:-translate-y-1 cursor-pointer group modal-trigger" data-modal="article-2">
                <figure class="relative h-48 overflow-hidden">
                    <?php
                    $img2_path = get_theme_file_path('assets/img/cat-sitting-domicile-vacances-suisse.webp');
                    if (file_exists($img2_path)) : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/cat-sitting-domicile-vacances-suisse.webp')); ?>" width="1200" height="675" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Chat relax chez lui pendant vacances" loading="lazy">
                    <?php else : ?>
                        <div class="w-full h-full bg-brand-grey flex items-center justify-center text-brand-text-light">
                            <i class="fas fa-cat text-4xl"></i>
                        </div>
                    <?php endif; ?>
                    <div class="absolute top-4 right-4 bg-brand-purple text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide"><?php esc_html_e('Vacances', 'natpatoune'); ?></div>
                </figure>
                <div class="p-6">
                    <h3 class="font-title font-bold text-xl text-brand-text mb-3 group-hover:text-brand-purple transition-colors"><?php esc_html_e('Vacances tranquilles : faire garder son chat à domicile dans le canton de Vaud', 'natpatoune'); ?></h3>
                    <p class="text-brand-text-light text-sm mb-4 line-clamp-3"><?php esc_html_e('La garde à domicile dans le canton de Vaud permet de profiter de ses vacances sans se soucier de son animal.', 'natpatoune'); ?></p>
                    <span class="inline-flex items-center text-brand-purple font-bold text-sm group-hover:underline"><?php esc_html_e('Lire l\'article', 'natpatoune'); ?> <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i></span>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-soft hover:shadow-medium transition-all transform hover:-translate-y-1 cursor-pointer group modal-trigger" data-modal="article-3">
                <figure class="relative h-48 overflow-hidden">
                    <?php
                    $img3_path = get_theme_file_path('assets/img/chaton-cache-couverture.webp');
                    if (file_exists($img3_path)) : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/chaton-cache-couverture.webp')); ?>" width="1200" height="675" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Soin médical à domicile pour chat" loading="lazy">
                    <?php else : ?>
                        <div class="w-full h-full bg-brand-grey flex items-center justify-center text-brand-text-light">
                            <i class="fas fa-cat text-4xl"></i>
                        </div>
                    <?php endif; ?>
                    <div class="absolute top-4 right-4 bg-brand-purple text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide"><?php esc_html_e('Soins Spécifiques', 'natpatoune'); ?></div>
                </figure>
                <div class="p-6">
                    <h3 class="font-title font-bold text-xl text-brand-text mb-3 group-hover:text-brand-purple transition-colors"><?php esc_html_e('Chat âgé ou anxieux : pourquoi le cat-sitting est indispensable', 'natpatoune'); ?></h3>
                    <p class="text-brand-text-light text-sm mb-4 line-clamp-3"><?php esc_html_e('Les chats âgés ont des habitudes profondément ancrées. Un changement de routine ou d\'environnement peut accentuer des pathologies existantes.', 'natpatoune'); ?></p>
                    <span class="inline-flex items-center text-brand-purple font-bold text-sm group-hover:underline"><?php esc_html_e('Lire l\'article', 'natpatoune'); ?> <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i></span>
                </div>
            </article>

            <!-- Article 4 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-soft hover:shadow-medium transition-all transform hover:-translate-y-1 cursor-pointer group modal-trigger" data-modal="article-4">
                <figure class="relative h-48 overflow-hidden">
                    <?php
                    $img4_path = get_theme_file_path('assets/img/galerie-chat-5.webp');
                    if (file_exists($img4_path)) : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/galerie-chat-5.webp')); ?>" width="1200" height="675" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Chat paisible à la maison avant un départ" loading="lazy">
                    <?php else : ?>
                        <div class="w-full h-full bg-brand-grey flex items-center justify-center text-brand-text-light">
                            <i class="fas fa-cat text-4xl"></i>
                        </div>
                    <?php endif; ?>
                    <div class="absolute top-4 right-4 bg-brand-purple text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide"><?php esc_html_e('Organisation', 'natpatoune'); ?></div>
                </figure>
                <div class="p-6">
                    <h3 class="font-title font-bold text-xl text-brand-text mb-3 group-hover:text-brand-purple transition-colors"><?php esc_html_e('Avant de partir : la checklist simple pour une garde à domicile réussie', 'natpatoune'); ?></h3>
                    <p class="text-brand-text-light text-sm mb-4 line-clamp-3"><?php esc_html_e('Instructions, alimentation, sécurité, contacts utiles : préparez votre domicile et votre chat pour des visites sereines et efficaces.', 'natpatoune'); ?></p>
                    <span class="inline-flex items-center text-brand-purple font-bold text-sm group-hover:underline"><?php esc_html_e('Lire l\'article', 'natpatoune'); ?> <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i></span>
                </div>
            </article>

            <!-- Article 5 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-soft hover:shadow-medium transition-all transform hover:-translate-y-1 cursor-pointer group modal-trigger" data-modal="article-5">
                <figure class="relative h-48 overflow-hidden">
                    <?php
                    $img5_path = get_theme_file_path('assets/img/galerie-chat-6.webp');
                    if (file_exists($img5_path)) : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/galerie-chat-6.webp')); ?>" width="1200" height="675" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Chat près de sa gamelle et de son eau" loading="lazy">
                    <?php else : ?>
                        <div class="w-full h-full bg-brand-grey flex items-center justify-center text-brand-text-light">
                            <i class="fas fa-cat text-4xl"></i>
                        </div>
                    <?php endif; ?>
                    <div class="absolute top-4 right-4 bg-brand-purple text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide"><?php esc_html_e('Routine', 'natpatoune'); ?></div>
                </figure>
                <div class="p-6">
                    <h3 class="font-title font-bold text-xl text-brand-text mb-3 group-hover:text-brand-purple transition-colors"><?php esc_html_e('Eau, litière, nourriture : les essentiels pour des visites efficaces', 'natpatoune'); ?></h3>
                    <p class="text-brand-text-light text-sm mb-4 line-clamp-3"><?php esc_html_e('Les bons réglages font toute la différence : quantités, hygiène, emplacements et astuces pour limiter le stress pendant votre absence.', 'natpatoune'); ?></p>
                    <span class="inline-flex items-center text-brand-purple font-bold text-sm group-hover:underline"><?php esc_html_e('Lire l\'article', 'natpatoune'); ?> <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i></span>
                </div>
            </article>

            <!-- Article 6 -->
            <article class="bg-white rounded-2xl overflow-hidden shadow-soft hover:shadow-medium transition-all transform hover:-translate-y-1 cursor-pointer group modal-trigger" data-modal="article-6">
                <figure class="relative h-48 overflow-hidden">
                    <?php
                    $img6_path = get_theme_file_path('assets/img/galerie-chat-4.webp');
                    if (file_exists($img6_path)) : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/galerie-chat-4.webp')); ?>" width="1200" height="675" class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" alt="Chat curieux dans un intérieur sécurisé" loading="lazy">
                    <?php else : ?>
                        <div class="w-full h-full bg-brand-grey flex items-center justify-center text-brand-text-light">
                            <i class="fas fa-cat text-4xl"></i>
                        </div>
                    <?php endif; ?>
                    <div class="absolute top-4 right-4 bg-brand-purple text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide"><?php esc_html_e('Sécurité', 'natpatoune'); ?></div>
                </figure>
                <div class="p-6">
                    <h3 class="font-title font-bold text-xl text-brand-text mb-3 group-hover:text-brand-purple transition-colors"><?php esc_html_e('Sécurité à domicile : éviter les petits risques pendant votre absence', 'natpatoune'); ?></h3>
                    <p class="text-brand-text-light text-sm mb-4 line-clamp-3"><?php esc_html_e('Câbles, fenêtres, plantes toxiques, objets fragiles : les points à vérifier pour protéger votre chat et votre logement.', 'natpatoune'); ?></p>
                    <span class="inline-flex items-center text-brand-purple font-bold text-sm group-hover:underline"><?php esc_html_e('Lire l\'article', 'natpatoune'); ?> <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i></span>
                </div>
            </article>
        </div>
    </div>
</section>

<!-- Modales Articles -->
<?php
// Inclure les modales des articles
for ($i = 1; $i <= 6; $i++) {
    $modal_path = 'template-parts/blog/article-' . $i . '-modal.php';
    if (file_exists(get_theme_file_path($modal_path))) {
        include(locate_template($modal_path));
    }
}
?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const triggers = document.querySelectorAll('.modal-trigger');
        
        triggers.forEach(trigger => {
            trigger.addEventListener('click', function() {
                const modalId = this.getAttribute('data-modal');
                const modal = document.getElementById(modalId);
                
                if (modal) {
                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                    
                    // Close logic
                    const closeBtn = modal.querySelector('.modal-close');
                    const overlay = modal.querySelector('.modal-overlay');
                    
                    const closeModal = function() {
                        modal.classList.add('hidden');
                        document.body.style.overflow = '';
                    };
                    
                    if (closeBtn) closeBtn.addEventListener('click', closeModal);
                    if (overlay) overlay.addEventListener('click', closeModal);
                    
                    document.addEventListener('keydown', function(e) {
                        if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                            closeModal();
                        }
                    });
                }
            });
        });
    });
</script>
