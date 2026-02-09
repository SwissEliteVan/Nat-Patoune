<?php
/**
 * Modals and Popups
 */
?>

<!-- Cookie Banner -->
<div id="cookie-banner" class="fixed bottom-0 left-0 right-0 bg-white border-t border-brand-grey/30 shadow-lg z-50 p-4 hidden">
    <div class="container mx-auto px-4">
        <div class="flex flex-col md:flex-row items-center justify-between gap-4">
            <div class="text-sm text-brand-text-light">
                <p>
                    <i class="fas fa-cookie-bite text-brand-purple mr-2" aria-hidden="true"></i>
                    <strong>Respect de votre vie privée</strong> – 
                    <?php 
                    if (function_exists('natpatoune_get_cookie_settings')) {
                        echo esc_html(natpatoune_get_cookie_settings()['text']);
                    } else {
                        echo 'Ce site utilise des cookies essentiels pour son fonctionnement.';
                    }
                    ?>
                    <?php 
                    $policy_url = function_exists('natpatoune_get_cookie_settings') ? natpatoune_get_cookie_settings()['policyUrl'] : home_url('/politique-confidentialite/');
                    if ($policy_url && $policy_url !== '#') : 
                    ?>
                    <a href="<?php echo esc_url($policy_url); ?>" class="text-brand-purple hover:underline ml-1">En savoir plus</a>
                    <?php endif; ?>
                </p>
            </div>
            <div class="flex gap-2">
                <button id="cookie-accept" class="bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-2 px-4 rounded-full text-sm transition-colors">
                    <?php 
                    if (function_exists('natpatoune_get_cookie_settings')) {
                        echo esc_html(natpatoune_get_cookie_settings()['buttonText']);
                    } else {
                        echo 'Accepter';
                    }
                    ?>
                </button>
                <button id="cookie-refuse" class="bg-brand-grey hover:bg-gray-300 text-brand-text font-bold py-2 px-4 rounded-full text-sm transition-colors">
                    Refuser
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Gift Modal -->
<div id="modal-cadeau" class="fixed inset-0 z-50 hidden flex items-center justify-center p-4" role="dialog" aria-modal="true">
    <div class="absolute inset-0 bg-black/80 backdrop-blur-sm modal-overlay"></div>
    <div class="relative bg-white rounded-2xl shadow-2xl max-w-lg w-full max-h-[90vh] overflow-auto animate-fade-in-up">
        <div class="bg-brand-purple text-white p-6 rounded-t-2xl flex justify-between items-start">
            <div>
                <h3 class="font-title font-bold text-xl"><i class="fas fa-gift mr-2 text-brand-pink"></i> Créer votre Bon Cadeau</h3>
                <p class="text-xs text-white/80 mt-1">Étape 1/2 : Personnalisation</p>
            </div>
            <button class="text-white hover:text-brand-pink transition-colors modal-close" aria-label="Fermer">
                <i class="fas fa-times text-xl"></i>
            </button>
        </div>
        <div class="p-6">
            <form id="giftForm" class="space-y-4">
                <div>
                    <label class="block text-sm font-bold text-brand-text mb-2">Montant du bon</label>
                    <div class="grid grid-cols-3 gap-3">
                        <label class="cursor-pointer">
                            <input type="radio" name="amount" value="50" class="peer sr-only" required>
                            <div class="border-2 border-brand-grey rounded-lg p-3 text-center peer-checked:border-brand-purple peer-checked:bg-brand-purple/5 peer-checked:text-brand-purple font-bold transition-all">50.-</div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="amount" value="100" class="peer sr-only">
                            <div class="border-2 border-brand-grey rounded-lg p-3 text-center peer-checked:border-brand-purple peer-checked:bg-brand-purple/5 peer-checked:text-brand-purple font-bold transition-all">100.-</div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="amount" value="Autre" class="peer sr-only">
                            <div class="border-2 border-brand-grey rounded-lg p-3 text-center peer-checked:border-brand-purple peer-checked:bg-brand-purple/5 peer-checked:text-brand-purple font-bold transition-all">Autre</div>
                        </label>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label for="giftFrom" class="block text-sm font-bold text-brand-text mb-1">De la part de</label>
                        <input type="text" id="giftFrom" class="w-full px-3 py-2 rounded-lg border border-brand-grey focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 outline-none transition-all" placeholder="Votre nom" required>
                    </div>
                    <div>
                        <label for="giftTo" class="block text-sm font-bold text-brand-text mb-1">Pour (Bénéficiaire)</label>
                        <input type="text" id="giftTo" class="w-full px-3 py-2 rounded-lg border border-brand-grey focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 outline-none transition-all" placeholder="Nom du bénéficiaire" required>
                    </div>
                </div>
                <div>
                    <label for="giftMessage" class="block text-sm font-bold text-brand-text mb-1">Votre message personnel</label>
                    <textarea id="giftMessage" rows="2" class="w-full px-3 py-2 rounded-lg border border-brand-grey focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 outline-none transition-all" placeholder="Joyeux anniversaire !"></textarea>
                </div>
                <div>
                    <label for="giftEmail" class="block text-sm font-bold text-brand-text mb-1">Votre Email (pour recevoir le bon)</label>
                    <input type="email" id="giftEmail" class="w-full px-3 py-2 rounded-lg border border-brand-grey focus:border-brand-purple focus:ring-2 focus:ring-brand-purple/20 outline-none transition-all" placeholder="email@exemple.ch" required>
                </div>
                <button type="submit" class="w-full bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-3 px-6 rounded-full transition-all shadow-md hover:shadow-lg flex items-center justify-center gap-2">
                    <span>Valider la commande</span> <i class="fas fa-arrow-right"></i>
                </button>
                <p class="text-xs text-center text-brand-text-light mt-2"><i class="fas fa-lock mr-1"></i> Paiement sécurisé par TWINT ou Virement après validation.</p>
            </form>
        </div>
    </div>
</div>

<script>
    // Cookie Banner Logic
    document.addEventListener('DOMContentLoaded', function() {
        const cookieBanner = document.getElementById('cookie-banner');
        const acceptBtn = document.getElementById('cookie-accept');
        const refuseBtn = document.getElementById('cookie-refuse');
        
        if (!localStorage.getItem('natpatoune_cookies_accepted')) {
            setTimeout(() => {
                cookieBanner.classList.remove('hidden');
            }, 1000);
        }
        
        if (acceptBtn) {
            acceptBtn.addEventListener('click', function() {
                localStorage.setItem('natpatoune_cookies_accepted', 'true');
                cookieBanner.classList.add('hidden');
            });
        }
        
        if (refuseBtn) {
            refuseBtn.addEventListener('click', function() {
                localStorage.setItem('natpatoune_cookies_accepted', 'false');
                cookieBanner.classList.add('hidden');
            });
        }

        // Generic Modal Logic
        const modalTriggers = document.querySelectorAll('.modal-trigger');
        modalTriggers.forEach(trigger => {
            trigger.addEventListener('click', function(e) {
                e.preventDefault();
                const modalId = this.getAttribute('data-modal');
                const modal = document.getElementById(modalId);
                if (modal) {
                    modal.classList.remove('hidden');
                    document.body.style.overflow = 'hidden';
                }
            });
        });

        const closeButtons = document.querySelectorAll('.modal-close');
        closeButtons.forEach(btn => {
            btn.addEventListener('click', function() {
                const modal = this.closest('.fixed'); // Assuming modal container has 'fixed' class
                if (modal) {
                    modal.classList.add('hidden');
                    document.body.style.overflow = '';
                }
            });
        });

        const overlays = document.querySelectorAll('.modal-overlay');
        overlays.forEach(overlay => {
            overlay.addEventListener('click', function() {
                const modal = this.closest('.fixed');
                if (modal) {
                    modal.classList.add('hidden');
                    document.body.style.overflow = '';
                }
            });
        });
    });
</script>
