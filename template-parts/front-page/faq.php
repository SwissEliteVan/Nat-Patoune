<?php
/**
 * Template Part: FAQ Section
 *
 * @package NatPatoune
 */
?>
<!-- FAQ Section -->
<section id="faq" class="py-16 md:py-24 bg-brand-beige">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm"><?php esc_html_e('FAQ', 'natpatoune'); ?></span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-6">
                <?php esc_html_e('Questions fréquentes', 'natpatoune'); ?>
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                <?php esc_html_e('Vous avez des questions ? Voici les réponses aux interrogations les plus courantes sur mes services de garde de chats.', 'natpatoune'); ?>
            </p>
        </div>
        
        <!-- FAQ Accordion -->
        <div class="max-w-4xl mx-auto space-y-4">
            
            <!-- FAQ 1 -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="faq-accordion-trigger w-full flex items-center justify-between p-6 text-left hover:bg-brand-beige/50 transition group" aria-expanded="false" aria-controls="faq-1">
                    <h3 class="font-title font-bold text-lg text-brand-text pr-4">
                        <?php esc_html_e('Comment se déroule la première visite de prise de contact ?', 'natpatoune'); ?>
                    </h3>
                    <i class="fas fa-chevron-down text-brand-purple transition-transform duration-300 flex-shrink-0"></i>
                </button>
                
                <div id="faq-1" class="faq-accordion-content hidden px-6 pb-6">
                    <div class="pt-4 border-t border-gray-100 text-brand-text-light leading-relaxed">
                        <p class="mb-3">
                            <?php esc_html_e('La visite de prise de contact est gratuite et sans engagement. Je me déplace chez vous pour :', 'natpatoune'); ?>
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li><?php esc_html_e('Rencontrer votre chat et observer son comportement', 'natpatoune'); ?></li>
                            <li><?php esc_html_e('Discuter de ses habitudes, préférences alimentaires et soins spécifiques', 'natpatoune'); ?></li>
                            <li><?php esc_html_e('Récupérer vos clés et noter les informations importantes (vétérinaire, contact d\'urgence)', 'natpatoune'); ?></li>
                            <li><?php esc_html_e('Répondre à toutes vos questions sur la garde', 'natpatoune'); ?></li>
                        </ul>
                        <p class="mt-3">
                            <?php esc_html_e('Cette visite dure environ 30 minutes et permet d\'établir une relation de confiance avant la garde.', 'natpatoune'); ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- FAQ 2 -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="faq-accordion-trigger w-full flex items-center justify-between p-6 text-left hover:bg-brand-beige/50 transition group" aria-expanded="false" aria-controls="faq-2">
                    <h3 class="font-title font-bold text-lg text-brand-text pr-4">
                        <?php esc_html_e('À quelle fréquence recevrai-je des nouvelles de mon chat ?', 'natpatoune'); ?>
                    </h3>
                    <i class="fas fa-chevron-down text-brand-purple transition-transform duration-300 flex-shrink-0"></i>
                </button>
                
                <div id="faq-2" class="faq-accordion-content hidden px-6 pb-6">
                    <div class="pt-4 border-t border-gray-100 text-brand-text-light leading-relaxed">
                        <p>
                            <?php esc_html_e('Je vous envoie un compte-rendu quotidien avec des photos de votre chat après chaque visite. Vous saurez ce qu\'il a mangé, comment il se comporte, et vous recevrez des photos pour le voir épanoui. En cas de besoin ou de question, je suis joignable à tout moment par téléphone ou WhatsApp.', 'natpatoune'); ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- FAQ 3 -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="faq-accordion-trigger w-full flex items-center justify-between p-6 text-left hover:bg-brand-beige/50 transition group" aria-expanded="false" aria-controls="faq-3">
                    <h3 class="font-title font-bold text-lg text-brand-text pr-4">
                        <?php esc_html_e('Mon chat est timide/agressif/senior, est-ce un problème ?', 'natpatoune'); ?>
                    </h3>
                    <i class="fas fa-chevron-down text-brand-purple transition-transform duration-300 flex-shrink-0"></i>
                </button>
                
                <div id="faq-3" class="faq-accordion-content hidden px-6 pb-6">
                    <div class="pt-4 border-t border-gray-100 text-brand-text-light leading-relaxed">
                        <p>
                            <?php esc_html_e('Absolument pas ! Ma formation en comportement félin me permet de m\'adapter à tous les tempéraments. Je prends le temps nécessaire pour apprivoiser les chats timides, je respecte l\'espace des chats indépendants, et j\'apporte une attention particulière aux chats seniors ou ayant des besoins spécifiques. Chaque chat est unique et mérite une approche personnalisée.', 'natpatoune'); ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- FAQ 4 -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="faq-accordion-trigger w-full flex items-center justify-between p-6 text-left hover:bg-brand-beige/50 transition group" aria-expanded="false" aria-controls="faq-4">
                    <h3 class="font-title font-bold text-lg text-brand-text pr-4">
                        <?php esc_html_e('Proposez-vous l\'administration de médicaments ?', 'natpatoune'); ?>
                    </h3>
                    <i class="fas fa-chevron-down text-brand-purple transition-transform duration-300 flex-shrink-0"></i>
                </button>
                
                <div id="faq-4" class="faq-accordion-content hidden px-6 pb-6">
                    <div class="pt-4 border-t border-gray-100 text-brand-text-light leading-relaxed">
                        <p>
                            <?php esc_html_e('Oui, je peux administrer des médicaments sans supplément (comprimés, gouttes, pipettes). Il suffit de me montrer la procédure lors de la visite de contact et de me fournir les consignes écrites du vétérinaire. Je suis habituée à gérer les traitements quotidiens et les soins spécifiques.', 'natpatoune'); ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- FAQ 5 -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="faq-accordion-trigger w-full flex items-center justify-between p-6 text-left hover:bg-brand-beige/50 transition group" aria-expanded="false" aria-controls="faq-5">
                    <h3 class="font-title font-bold text-lg text-brand-text pr-4">
                        <?php esc_html_e('Que se passe-t-il en cas d\'urgence vétérinaire ?', 'natpatoune'); ?>
                    </h3>
                    <i class="fas fa-chevron-down text-brand-purple transition-transform duration-300 flex-shrink-0"></i>
                </button>
                
                <div id="faq-5" class="faq-accordion-content hidden px-6 pb-6">
                    <div class="pt-4 border-t border-gray-100 text-brand-text-light leading-relaxed">
                        <p class="mb-3">
                            <?php esc_html_e('En cas d\'urgence, je vous contacte immédiatement et j\'agis selon vos consignes. Si vous êtes injoignable :', 'natpatoune'); ?>
                        </p>
                        <ul class="list-disc pl-6 space-y-2">
                            <li><?php esc_html_e('Je contacte votre vétérinaire habituel', 'natpatoune'); ?></li>
                            <li><?php esc_html_e('Si nécessaire, je conduis votre chat chez le vétérinaire d\'urgence le plus proche', 'natpatoune'); ?></li>
                            <li><?php esc_html_e('Je vous tiens informé à chaque étape', 'natpatoune'); ?></li>
                        </ul>
                        <p class="mt-3">
                            <?php esc_html_e('Je privilégie toujours le bien-être de votre chat et prends les décisions responsables en cas d\'urgence.', 'natpatoune'); ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- FAQ 6 -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="faq-accordion-trigger w-full flex items-center justify-between p-6 text-left hover:bg-brand-beige/50 transition group" aria-expanded="false" aria-controls="faq-6">
                    <h3 class="font-title font-bold text-lg text-brand-text pr-4">
                        <?php esc_html_e('Puis-je annuler ou modifier une réservation ?', 'natpatoune'); ?>
                    </h3>
                    <i class="fas fa-chevron-down text-brand-purple transition-transform duration-300 flex-shrink-0"></i>
                </button>
                
                <div id="faq-6" class="faq-accordion-content hidden px-6 pb-6">
                    <div class="pt-4 border-t border-gray-100 text-brand-text-light leading-relaxed">
                        <p>
                            <?php esc_html_e('Oui, vous pouvez annuler ou modifier votre réservation jusqu\'à 48h avant le début de la garde sans frais. Pour les annulations de dernière minute (moins de 48h), 50% du montant total reste dû. Je reste flexible et compréhensive en cas d\'imprévu, n\'hésitez pas à me contacter pour en discuter.', 'natpatoune'); ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- FAQ 7 -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="faq-accordion-trigger w-full flex items-center justify-between p-6 text-left hover:bg-brand-beige/50 transition group" aria-expanded="false" aria-controls="faq-7">
                    <h3 class="font-title font-bold text-lg text-brand-text pr-4">
                        <?php esc_html_e('Gardez-vous plusieurs chats simultanément dans différents foyers ?', 'natpatoune'); ?>
                    </h3>
                    <i class="fas fa-chevron-down text-brand-purple transition-transform duration-300 flex-shrink-0"></i>
                </button>
                
                <div id="faq-7" class="faq-accordion-content hidden px-6 pb-6">
                    <div class="pt-4 border-t border-gray-100 text-brand-text-light leading-relaxed">
                        <p>
                            <?php esc_html_e('Oui, j\'organise mes tournées pour visiter plusieurs chats dans la région selon les horaires convenus. Je respecte scrupuleusement l\'hygiène entre chaque visite (lavage des mains, désinfection) pour éviter tout risque de transmission. Votre chat reste dans son environnement familier et reçoit une attention personnalisée.', 'natpatoune'); ?>
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- FAQ 8 -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="faq-accordion-trigger w-full flex items-center justify-between p-6 text-left hover:bg-brand-beige/50 transition group" aria-expanded="false" aria-controls="faq-8">
                    <h3 class="font-title font-bold text-lg text-brand-text pr-4">
                        <?php esc_html_e('Comment se fait le paiement ?', 'natpatoune'); ?>
                    </h3>
                    <i class="fas fa-chevron-down text-brand-purple transition-transform duration-300 flex-shrink-0"></i>
                </button>
                
                <div id="faq-8" class="faq-accordion-content hidden px-6 pb-6">
                    <div class="pt-4 border-t border-gray-100 text-brand-text-light leading-relaxed">
                        <p>
                            <?php esc_html_e('Le paiement se fait après la garde, par virement bancaire ou TWINT. Je vous envoie une facture détaillée à la fin de la prestation. Pour les gardes de longue durée (plus de 2 semaines), un acompte de 50% peut être demandé.', 'natpatoune'); ?>
                        </p>
                    </div>
                </div>
            </div>
            
        </div>
        
        <!-- CTA -->
        <div class="text-center mt-16">
            <p class="text-brand-text-light mb-6">
                <?php esc_html_e('Vous avez d\'autres questions ?', 'natpatoune'); ?>
            </p>
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-4 px-10 rounded-full transition-all duration-300 shadow-medium hover:shadow-lg transform hover:scale-105 group">
                <span class="bg-white/20 p-2 rounded-full mr-3 group-hover:bg-white/30 transition-all">
                    <i class="fas fa-comments" aria-hidden="true"></i>
                </span>
                <?php esc_html_e('Contactez-moi', 'natpatoune'); ?>
                <i class="fas fa-arrow-right ml-2 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all" aria-hidden="true"></i>
            </a>
        </div>
    </div>
</section>
