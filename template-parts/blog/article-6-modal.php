<!-- Article 6 Modal -->
<div id="article-6" class="fixed inset-0 bg-black/80 z-[9999] hidden items-center justify-center p-4">
    <div class="bg-white rounded-2xl w-full max-w-3xl max-h-[85vh] overflow-hidden relative z-10 flex flex-col">
        <div class="relative h-64 shrink-0">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/galerie-chat-4.webp')); ?>" class="w-full h-full object-cover" alt="Chat curieux dans un intérieur sécurisé" loading="lazy">
            <button onclick="document.getElementById('article-6').classList.add('hidden')" class="absolute top-4 right-4 bg-white/90 p-3 rounded-full hover:bg-white text-gray-800 transition shadow-sm font-bold" aria-label="Fermer"><i class="fas fa-times text-xl"></i></button>
        </div>
        <div class="p-8 overflow-y-auto bg-white">
            <article class="blog-article prose max-w-none text-gray-600">
                <header class="mb-6 border-b border-gray-100 pb-6">
                    <div class="text-xs font-bold text-brand-purple uppercase tracking-wider mb-2">Sécurité</div>
                    <h2 class="text-3xl font-title font-bold text-brand-text mb-4 sm:text-2xl">Sécurité à domicile : éviter les petits risques pendant votre absence</h2>
                    <div class="flex items-center text-sm text-gray-500">
                        <span class="font-medium">Par Nat'Patoune</span>
                        <span class="mx-2">•</span>
                        <span>Temps de lecture : 4 min</span>
                    </div>
                </header>
                <div>
                    <p class="font-medium text-lg text-gray-700 mb-6">Même un chat calme peut avoir des réflexes imprévisibles quand il s'ennuie ou quand la routine change. Quelques ajustements simples permettent de réduire les risques, tout en gardant un environnement agréable.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Fenêtres et balcons</h2>
                    <p>Les fenêtres oscillo-battantes représentent un risque réel. Préférez une ouverture sécurisée ou une fermeture complète. Si votre chat a accès au balcon, vérifiez la présence et l'état des protections.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Câbles et objets à mâcher</h2>
                    <p>Cachez ou fixez les câbles (chargeurs, multiprises). Rangez les ficelles, élastiques et petits objets : ils attirent beaucoup et peuvent être avalés.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Plantes toxiques et produits ménagers</h2>
                    <p>De nombreuses plantes d'intérieur sont toxiques. Si vous en avez, placez-les hors d'accès. Fermez les placards contenant produits ménagers et médicaments.</p>
                    <h2 class="text-xl font-bold text-brand-text mt-8 mb-3">Confort et stimulation</h2>
                    <p>Un chat stimulé est souvent un chat moins "bricoleur". Un arbre à chat, un griffoir accessible, et quelques jouets (sans danger) aident à canaliser l'énergie.</p>
                    <div class="bg-brand-cream p-6 rounded-xl mt-8 border border-brand-purple/20">
                        <h4 class="font-bold text-brand-purple mb-2">Vous voulez partir l'esprit tranquille ?</h4>
                        <p class="text-sm">Lors de la pré-visite, je peux aussi vous conseiller sur les points de sécurité à vérifier.</p>
                        <a href="#contact" onclick="document.getElementById('article-6').classList.add('hidden')" class="inline-block mt-4 text-brand-purple font-bold underline hover:text-brand-purple-dark">Demander une pré-visite →</a>
                    </div>
                </div>
            </article>
        </div>
    </div>
</div>
