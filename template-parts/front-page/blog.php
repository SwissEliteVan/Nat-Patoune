<?php
/**
 * Template Part: Blog Section
 *
 * @package NatPatoune
 */
?>
<!-- Blog -->
<section id="blog" class="py-16 md:py-24 bg-white" aria-labelledby="blog-heading">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <span class="text-brand-purple font-bold tracking-wider uppercase text-sm">Conseils d'experte</span>
            <h2 id="blog-heading" class="text-3xl md:text-4xl font-title font-bold text-brand-text mt-2 mb-4">Le Guide du Chat Heureux</h2>
            <p class="text-gray-500 max-w-2xl mx-auto">En tant que cat-sitter certifiée, je partage ici mes conseils pour garantir le bien-être de vos compagnons.</p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Article 1 -->
            <article onclick="document.getElementById('article-1').classList.remove('hidden'); document.getElementById('article-1').classList.add('flex')" class="group cursor-pointer bg-gray-50 rounded-2xl p-4 hover:shadow-lg transition flex flex-col h-full border border-gray-100">
                <figure class="rounded-xl overflow-hidden mb-4 h-52 bg-gray-200 relative m-0 shrink-0">
                    <?php
                    $img1_path = get_theme_file_path('assets/img/garde-chat-domicile-sans-stress-vaud.webp');
                    if (file_exists($img1_path)) : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/garde-chat-domicile-sans-stress-vaud.webp')); ?>" width="1200" height="675" class="w-full h-full object-cover transition duration-500 group-hover:scale-110" alt="Chat détendu pendant garde à domicile" loading="lazy">
                    <?php else : ?>
                        <div class="w-full h-full bg-gradient-to-br from-brand-purple/20 to-brand-pink/20 flex items-center justify-center">
                            <i class="fas fa-cat text-brand-purple text-5xl opacity-40"></i>
                        </div>
                    <?php endif; ?>
                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-brand-purple">Bien-être</div>
                </figure>
                <div class="flex flex-col flex-grow">
                    <h3 class="font-bold text-lg mb-3 group-hover:text-brand-purple leading-tight text-brand-text">Pourquoi la garde à domicile réduit-elle le stress de votre chat&nbsp;?</h3>
                    <p class="text-sm text-gray-600 line-clamp-3 mb-4 flex-grow">La garde à domicile s'avère être une solution apaisante pour les chats, qui sont très sensibles aux changements de territoire.</p>
                    <span class="text-sm text-brand-purple font-bold mt-auto inline-flex items-center">Lire l'article <i class="fas fa-arrow-right ml-2 text-xs transition-transform group-hover:translate-x-1"></i></span>
                </div>
            </article>

            <!-- Article 2 -->
            <article onclick="document.getElementById('article-2').classList.remove('hidden'); document.getElementById('article-2').classList.add('flex')" class="group cursor-pointer bg-gray-50 rounded-2xl p-4 hover:shadow-lg transition flex flex-col h-full border border-gray-100">
                <figure class="rounded-xl overflow-hidden mb-4 h-52 bg-gray-200 relative m-0 shrink-0">
                    <?php
                    $img2_path = get_theme_file_path('assets/img/cat-sitting-domicile-vacances-suisse.webp');
                    if (file_exists($img2_path)) : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/cat-sitting-domicile-vacances-suisse.webp')); ?>" width="1200" height="675" class="w-full h-full object-cover transition duration-500 group-hover:scale-110" alt="Chat relax chez lui pendant vacances" loading="lazy">
                    <?php else : ?>
                        <div class="w-full h-full bg-gradient-to-br from-brand-purple/20 to-brand-pink/20 flex items-center justify-center">
                            <i class="fas fa-cat text-brand-purple text-5xl opacity-40"></i>
                        </div>
                    <?php endif; ?>
                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-brand-purple">Vacances</div>
                </figure>
                <div class="flex flex-col flex-grow">
                    <h3 class="font-bold text-lg mb-3 group-hover:text-brand-purple leading-tight text-brand-text">Vacances tranquilles : faire garder son chat à domicile dans le canton de Vaud</h3>
                    <p class="text-sm text-gray-600 line-clamp-3 mb-4 flex-grow">La garde à domicile dans le canton de Vaud permet de profiter de ses vacances sans se soucier de son animal.</p>
                    <span class="text-sm text-brand-purple font-bold mt-auto inline-flex items-center">Lire l'article <i class="fas fa-arrow-right ml-2 text-xs transition-transform group-hover:translate-x-1"></i></span>
                </div>
            </article>

            <!-- Article 3 -->
            <article onclick="document.getElementById('article-3').classList.remove('hidden'); document.getElementById('article-3').classList.add('flex')" class="group cursor-pointer bg-gray-50 rounded-2xl p-4 hover:shadow-lg transition flex flex-col h-full border border-gray-100">
                <figure class="rounded-xl overflow-hidden mb-4 h-52 bg-gray-200 relative m-0 shrink-0">
                    <?php
                    $img3_path = get_theme_file_path('assets/img/chaton-cache-couverture.webp');
                    if (file_exists($img3_path)) : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/chaton-cache-couverture.webp')); ?>" width="1200" height="675" class="w-full h-full object-cover object-center transition duration-500 group-hover:scale-110" alt="Soin médical à domicile pour chat" loading="lazy">
                    <?php else : ?>
                        <div class="w-full h-full bg-gradient-to-br from-brand-purple/20 to-brand-pink/20 flex items-center justify-center">
                            <i class="fas fa-cat text-brand-purple text-5xl opacity-40"></i>
                        </div>
                    <?php endif; ?>
                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-brand-purple">Soins Spécifiques</div>
                </figure>
                <div class="flex flex-col flex-grow">
                    <h3 class="font-bold text-lg mb-3 group-hover:text-brand-purple leading-tight text-brand-text">Chat âgé ou anxieux : pourquoi le cat-sitting est indispensable</h3>
                    <p class="text-sm text-gray-600 line-clamp-3 mb-4 flex-grow">Les chats âgés ont des habitudes profondément ancrées. Un changement de routine ou d'environnement peut accentuer des pathologies existantes.</p>
                    <span class="text-sm text-brand-purple font-bold mt-auto inline-flex items-center">Lire l'article <i class="fas fa-arrow-right ml-2 text-xs transition-transform group-hover:translate-x-1"></i></span>
                </div>
            </article>

            <!-- Article 4 -->
            <article onclick="document.getElementById('article-4').classList.remove('hidden'); document.getElementById('article-4').classList.add('flex')" class="group cursor-pointer bg-gray-50 rounded-2xl p-4 hover:shadow-lg transition flex flex-col h-full border border-gray-100">
                <figure class="rounded-xl overflow-hidden mb-4 h-52 bg-gray-200 relative m-0 shrink-0">
                    <?php
                    $img4_path = get_theme_file_path('assets/img/galerie-chat-5.webp');
                    if (file_exists($img4_path)) : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/galerie-chat-5.webp')); ?>" width="1200" height="675" class="w-full h-full object-cover transition duration-500 group-hover:scale-110" alt="Chat paisible à la maison avant un départ" loading="lazy">
                    <?php else : ?>
                        <div class="w-full h-full bg-gradient-to-br from-brand-purple/20 to-brand-pink/20 flex items-center justify-center">
                            <i class="fas fa-cat text-brand-purple text-5xl opacity-40"></i>
                        </div>
                    <?php endif; ?>
                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-brand-purple">Organisation</div>
                </figure>
                <div class="flex flex-col flex-grow">
                    <h3 class="font-bold text-lg mb-3 group-hover:text-brand-purple leading-tight text-brand-text">Avant de partir : la checklist simple pour une garde à domicile réussie</h3>
                    <p class="text-sm text-gray-600 line-clamp-3 mb-4 flex-grow">Instructions, alimentation, sécurité, contacts utiles : préparez votre domicile et votre chat pour des visites sereines et efficaces.</p>
                    <span class="text-sm text-brand-purple font-bold mt-auto inline-flex items-center">Lire l'article <i class="fas fa-arrow-right ml-2 text-xs transition-transform group-hover:translate-x-1"></i></span>
                </div>
            </article>

            <!-- Article 5 -->
            <article onclick="document.getElementById('article-5').classList.remove('hidden'); document.getElementById('article-5').classList.add('flex')" class="group cursor-pointer bg-gray-50 rounded-2xl p-4 hover:shadow-lg transition flex flex-col h-full border border-gray-100">
                <figure class="rounded-xl overflow-hidden mb-4 h-52 bg-gray-200 relative m-0 shrink-0">
                    <?php
                    $img5_path = get_theme_file_path('assets/img/galerie-chat-6.webp');
                    if (file_exists($img5_path)) : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/galerie-chat-6.webp')); ?>" width="1200" height="675" class="w-full h-full object-cover transition duration-500 group-hover:scale-110" alt="Chat près de sa gamelle et de son eau" loading="lazy">
                    <?php else : ?>
                        <div class="w-full h-full bg-gradient-to-br from-brand-purple/20 to-brand-pink/20 flex items-center justify-center">
                            <i class="fas fa-cat text-brand-purple text-5xl opacity-40"></i>
                        </div>
                    <?php endif; ?>
                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-brand-purple">Routine</div>
                </figure>
                <div class="flex flex-col flex-grow">
                    <h3 class="font-bold text-lg mb-3 group-hover:text-brand-purple leading-tight text-brand-text">Eau, litière, nourriture : les essentiels pour des visites efficaces</h3>
                    <p class="text-sm text-gray-600 line-clamp-3 mb-4 flex-grow">Les bons réglages font toute la différence : quantités, hygiène, emplacements et astuces pour limiter le stress pendant votre absence.</p>
                    <span class="text-sm text-brand-purple font-bold mt-auto inline-flex items-center">Lire l'article <i class="fas fa-arrow-right ml-2 text-xs transition-transform group-hover:translate-x-1"></i></span>
                </div>
            </article>

            <!-- Article 6 -->
            <article onclick="document.getElementById('article-6').classList.remove('hidden'); document.getElementById('article-6').classList.add('flex')" class="group cursor-pointer bg-gray-50 rounded-2xl p-4 hover:shadow-lg transition flex flex-col h-full border border-gray-100">
                <figure class="rounded-xl overflow-hidden mb-4 h-52 bg-gray-200 relative m-0 shrink-0">
                    <?php
                    $img6_path = get_theme_file_path('assets/img/galerie-chat-4.webp');
                    if (file_exists($img6_path)) : ?>
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/galerie-chat-4.webp')); ?>" width="1200" height="675" class="w-full h-full object-cover transition duration-500 group-hover:scale-110" alt="Chat curieux dans un intérieur sécurisé" loading="lazy">
                    <?php else : ?>
                        <div class="w-full h-full bg-gradient-to-br from-brand-purple/20 to-brand-pink/20 flex items-center justify-center">
                            <i class="fas fa-cat text-brand-purple text-5xl opacity-40"></i>
                        </div>
                    <?php endif; ?>
                    <div class="absolute top-3 left-3 bg-white/90 backdrop-blur-sm px-3 py-1 rounded-full text-xs font-bold text-brand-purple">Sécurité</div>
                </figure>
                <div class="flex flex-col flex-grow">
                    <h3 class="font-bold text-lg mb-3 group-hover:text-brand-purple leading-tight text-brand-text">Sécurité à domicile : éviter les petits risques pendant votre absence</h3>
                    <p class="text-sm text-gray-600 line-clamp-3 mb-4 flex-grow">Câbles, fenêtres, plantes toxiques, objets fragiles : les points à vérifier pour protéger votre chat et votre logement.</p>
                    <span class="text-sm text-brand-purple font-bold mt-auto inline-flex items-center">Lire l'article <i class="fas fa-arrow-right ml-2 text-xs transition-transform group-hover:translate-x-1"></i></span>
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
