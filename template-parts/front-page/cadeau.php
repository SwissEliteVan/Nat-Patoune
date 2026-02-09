<?php
/**
 * Template Part: Cadeau Section
 *
 * @package NatPatoune
 */
?>
<!-- Cadeau -->
<section id="cadeau" class="py-16 bg-white relative overflow-hidden">
    <div class="container mx-auto px-4 relative z-10">
        <div class="max-w-5xl mx-auto bg-gradient-to-r from-brand-purple-dark to-brand-purple text-white rounded-3xl shadow-2xl p-8 md:p-12 flex flex-col md:flex-row items-center gap-10">
            <div class="md:w-2/3">
                <div class="flex items-center gap-3 mb-4">
                    <span class="bg-brand-pink text-brand-text text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">Idée Cadeau</span>
                    <span class="text-brand-pink text-sm"><i class="fas fa-check-circle mr-1"></i> Valable 1 an</span>
                </div>
                <h2 class="text-3xl md:text-4xl font-title font-bold mb-4 leading-tight">Offrez de la sérénité avec un Bon Cadeau Nat'Patoune</h2>
                <p class="mb-8 text-white/90 leading-relaxed text-lg">Le cadeau idéal pour les propriétaires de chats ! Offrez des visites à domicile ou de la surveillance de maison. Vous choisissez le montant, ils choisissent les dates.</p>
                
                <div class="flex flex-col sm:flex-row gap-4">
                    <button onclick="document.getElementById('modal-cadeau').classList.remove('hidden'); document.getElementById('modal-cadeau').classList.add('flex')" class="bg-white text-brand-purple font-bold py-4 px-8 rounded-xl hover:bg-brand-pink hover:text-white transition shadow-lg transform hover:-translate-y-1 text-center cursor-pointer">
                        <i class="fas fa-gift mr-2"></i> Commander un Bon
                    </button>
                    <a href="#zones-tarifs" class="border border-white/30 text-white font-medium py-4 px-8 rounded-xl hover:bg-white/10 transition text-center">
                        Voir les tarifs
                    </a>
                </div>
            </div>
            <div class="md:w-1/3 flex justify-center relative">
                <div class="absolute inset-0 bg-brand-pink rounded-full blur-3xl opacity-20 animate-pulse"></div>
                <div class="w-40 h-40 bg-white/10 backdrop-blur-md rounded-full flex items-center justify-center border-4 border-white/20 shadow-2xl relative z-10 transform rotate-3">
                    <i class="fas fa-gift text-6xl text-brand-pink drop-shadow-md"></i>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Modal Cadeau -->
<div id="modal-cadeau" class="fixed inset-0 bg-black/50 z-[9999] hidden items-center justify-center p-4">
    <div class="bg-white rounded-3xl overflow-hidden w-full max-w-lg shadow-2xl">
        <div class="bg-brand-purple p-6 text-white flex justify-between items-center">
            <div>
                <h3 class="font-title font-bold text-xl"><i class="fas fa-gift mr-2 text-brand-pink"></i> Créer votre Bon Cadeau</h3>
                <p class="text-xs text-white/80 mt-1">Étape 1/2 : Personnalisation</p>
            </div>
            <button onclick="document.getElementById('modal-cadeau').classList.add('hidden')" class="text-white/80 hover:text-white"><i class="fas fa-times text-xl"></i></button>
        </div>
        <div class="p-6 md:p-8 max-h-[70vh] overflow-y-auto">
            <form id="giftForm" class="space-y-5">
                <div>
                    <label class="block text-sm font-bold text-gray-700 mb-3">Montant du bon</label>
                    <div class="grid grid-cols-3 gap-3">
                        <label class="cursor-pointer">
                            <input type="radio" name="amount" value="50" class="peer sr-only" required>
                            <div class="border-2 border-gray-200 peer-checked:border-brand-purple peer-checked:bg-brand-purple/5 peer-checked:text-brand-purple rounded-xl p-3 text-center transition font-bold">50.-</div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="amount" value="100" class="peer sr-only">
                            <div class="border-2 border-gray-200 peer-checked:border-brand-purple peer-checked:bg-brand-purple/5 peer-checked:text-brand-purple rounded-xl p-3 text-center transition font-bold">100.-</div>
                        </label>
                        <label class="cursor-pointer">
                            <input type="radio" name="amount" value="Autre" class="peer sr-only">
                            <div class="border-2 border-gray-200 peer-checked:border-brand-purple peer-checked:bg-brand-purple/5 peer-checked:text-brand-purple rounded-xl p-3 text-center transition font-bold">Autre</div>
                        </label>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-xs font-bold text-gray-500 mb-1 uppercase">De la part de</label>
                        <input type="text" id="giftFrom" placeholder="Votre nom" class="w-full p-3 bg-gray-50 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-1 focus:ring-brand-purple outline-none" required>
                    </div>
                    <div>
                        <label class="block text-xs font-bold text-gray-500 mb-1 uppercase">Pour (Bénéficiaire)</label>
                        <input type="text" id="giftTo" placeholder="Nom du bénéficiaire" class="w-full p-3 bg-gray-50 rounded-xl border border-gray-200 focus:border-brand-purple focus:ring-1 focus:ring-brand-purple outline-none" required>
                    </div>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-500 mb-1 uppercase">Votre message personnel</label>
                    <textarea id="giftMessage" rows="2" placeholder="Joyeux anniversaire ! Pour prendre soin de Minou..." class="w-full p-3 bg-gray-50 rounded-xl border border-gray-200 focus:border-brand-purple outline-none"></textarea>
                </div>
                <div>
                    <label class="block text-xs font-bold text-gray-500 mb-1 uppercase">Votre Email (pour recevoir le bon)</label>
                    <input type="email" id="giftEmail" placeholder="email@exemple.ch" class="w-full p-3 bg-gray-50 rounded-xl border border-gray-200 focus:border-brand-purple outline-none" required>
                </div>
                <button type="submit" class="w-full bg-brand-purple text-white font-bold py-4 rounded-xl hover:bg-brand-purple-dark transition shadow-md flex items-center justify-center gap-2">
                    <span>Valider la commande</span> <i class="fas fa-arrow-right"></i>
                </button>
                <p class="text-xs text-center text-gray-400 mt-2"><i class="fas fa-lock mr-1"></i> Paiement sécurisé par TWINT ou Virement après validation.</p>
            </form>
            <div id="giftSuccess" class="hidden text-center py-4">
                <div class="w-20 h-20 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <i class="fas fa-check text-4xl text-green-500"></i>
                </div>
                <h3 class="text-2xl font-title font-bold text-brand-text mb-2">Commande enregistrée !</h3>
                <p class="text-gray-600 mb-6 text-sm">Merci <span id="confName" class="font-bold"></span>. Pour recevoir votre bon cadeau par email, veuillez procéder au règlement du montant choisi.</p>
                <div class="bg-gray-50 p-6 rounded-2xl border border-gray-200 mb-6 text-left">
                    <p class="font-bold text-brand-purple mb-4 text-sm uppercase tracking-wide">Options de paiement :</p>
                    <div class="flex items-center gap-4 mb-4">
                        <div class="bg-white p-2 rounded-lg shadow-sm w-12 h-12 flex items-center justify-center"><i class="fas fa-qrcode text-2xl text-red-500"></i></div>
                        <div>
                            <p class="font-bold text-gray-800">TWINT</p>
                            <p class="text-sm text-gray-600 select-all">+41 78 768 50 47</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-4">
                        <div class="bg-white p-2 rounded-lg shadow-sm w-12 h-12 flex items-center justify-center"><i class="fas fa-university text-2xl text-blue-500"></i></div>
                        <div>
                            <p class="font-bold text-gray-800">Virement Bancaire</p>
                            <p class="text-xs text-gray-500">IBAN envoyé par email ou SMS sur demande.</p>
                        </div>
                    </div>
                </div>
                <a href="#" onclick="window.location.reload()" class="text-brand-purple font-bold text-sm underline">Fermer et retourner au site</a>
            </div>
        </div>
    </div>
</div>
