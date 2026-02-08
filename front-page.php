<?php
/* =======================================================
   VERSION FINALE : TOUS LES MÉDIAS INTÉGRÉS (0 DOUBLON)
   DATE : AUJOURD'HUI
   ======================================================= */
/**
 * Template Name: Page d'accueil
 *
 * @package NatPatoune
 */

get_header(); ?>

<!-- Hero Section 2026 -->
<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden pt-20">
    <!-- Background Video - Optimized preload -->
    <video autoplay muted loop playsinline preload="auto" loading="lazy" poster="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cat-sitting-lausanne-hero-poster.webp'); ?>" class="absolute inset-0 w-full h-full object-cover" aria-label="Vidéo d'ambiance de garde de chat">
        <source src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cat-sitting-lausanne-hero-720p.mp4'); ?>" type="video/mp4">
        Votre navigateur ne supporte pas la vidéo.
    </video>
    <div class="absolute inset-0 bg-gradient-to-r from-brand-purple/60 to-brand-pink/40"></div>
    
    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 text-center text-white">
        <span class="inline-block bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-bold mb-6">
            <i class="fas fa-award mr-2"></i>Cat-Sitter Certifiée • Service Professionnel
        </span>
        
        <h1 class="font-title font-bold text-4xl md:text-5xl lg:text-6xl mb-6 leading-tight">
            Garde de chats à domicile<br>
            <span class="text-brand-beige">Morges, Lausanne & environs</span>
        </h1>
        
        <p class="text-xl md:text-2xl max-w-3xl mx-auto mb-8 leading-relaxed font-medium">
            Une présence douce et professionnelle pour vos félins pendant vos absences
        </p>
        
        <!-- Trust Pills (moderne) -->
        <div class="flex flex-wrap justify-center gap-4 mb-10 max-w-4xl mx-auto">
            <div class="bg-white/10 backdrop-blur-md px-5 py-3 rounded-full border border-white/20">
                <i class="fas fa-camera text-brand-beige mr-2"></i>
                <span class="text-sm md:text-base font-medium">Rapport quotidien + photos</span>
            </div>
            <div class="bg-white/10 backdrop-blur-md px-5 py-3 rounded-full border border-white/20">
                <i class="fas fa-gift text-brand-beige mr-2"></i>
                <span class="text-sm md:text-base font-medium">Visite de contact offerte</span>
            </div>
            <div class="bg-white/10 backdrop-blur-md px-5 py-3 rounded-full border border-white/20">
                <i class="fas fa-cat text-brand-beige mr-2"></i>
                <span class="text-sm md:text-base font-medium">Approche douce & respectueuse</span>
            </div>
            <div class="bg-white/10 backdrop-blur-md px-5 py-3 rounded-full border border-white/20">
                <i class="fas fa-home text-brand-beige mr-2"></i>
                <span class="text-sm md:text-base font-medium">Service discret à domicile</span>
            </div>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="bg-white hover:bg-brand-beige text-brand-purple font-title font-bold py-4 px-8 rounded-full transition shadow-medium hover:shadow-lg inline-flex items-center">
                <i class="fas fa-calendar-check mr-2"></i>
                Réserver une visite gratuite
            </a>
            <a href="<?php echo esc_url(home_url('/#tarifs')); ?>" class="bg-brand-purple/20 backdrop-blur-sm hover:bg-brand-purple/30 text-white font-title font-bold py-4 px-8 rounded-full transition border-2 border-white inline-flex items-center">
                <i class="fas fa-tag mr-2"></i>
                Voir les tarifs
            </a>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#a-propos" class="text-white text-3xl" aria-label="Défiler vers le bas">
            <i class="fas fa-chevron-down"></i>
        </a>
    </div>
</section>

<!-- À propos Section -->
<section id="a-propos" class="py-16 md:py-24 bg-brand-beige">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-12 items-center max-w-6xl mx-auto">
            <!-- Images -->
            <div class="relative">
                <div class="relative rounded-3xl overflow-hidden shadow-soft">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/nathalie-piguet-cat-sitter-lausanne.webp'); ?>" alt="Nathalie Piguet, cat-sitter certifiée à Lausanne" class="w-full h-auto" loading="lazy">
                </div>
                <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-white rounded-2xl shadow-medium p-4 hidden md:block certificate-zoom-trigger cursor-pointer group" tabindex="0" role="button" aria-label="Voir le certificat en grand">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/certificat-cat-sitter-nathalie-piguet.webp'); ?>" alt="Certificat de formation cat-sitter – Nathalie Piguet" class="w-full h-full object-cover rounded-xl" loading="lazy">
                    <span class="absolute top-2 right-2 bg-brand-sage text-white text-xs font-bold px-3 py-1 rounded-full">Certifiée</span>
                    <span class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition rounded-2xl flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100 transition"></i>
                    </span>
                </div>
            </div>
            
            <!-- Content -->
            <div>
                <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">Votre cat-sitter</span>
                <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-6">
                    Nathalie Piguet : passionnée par le bien-être félin
                </h2>
                
                <p class="text-brand-text-light leading-relaxed mb-4">
                    Avec une <strong>formation certifiée en comportement félin</strong> et une approche respectueuse de chaque tempérament, je veille au confort et à la sérénité de votre chat pendant votre absence.
                </p>
                
                <p class="text-brand-text-light leading-relaxed mb-6">
                    Chaque garde est <strong>personnalisée</strong> : je m'adapte aux habitudes de votre compagnon, qu'il soit câlin, timide, joueur ou senior. Mon objectif ? Que votre chat reste épanoui dans son environnement familier, et que vous partiez l'esprit tranquille.
                </p>
                
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-brand-sage text-xl mt-1 flex-shrink-0"></i>
                        <span><strong>Formation certifiée</strong> en comportement et soins félins</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-brand-sage text-xl mt-1 flex-shrink-0"></i>
                        <span><strong>Approche douce</strong> respectant le rythme de chaque chat</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-brand-sage text-xl mt-1 flex-shrink-0"></i>
                        <span><strong>Rapports quotidiens avec photos</strong> pour rester connecté</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-brand-sage text-xl mt-1 flex-shrink-0"></i>
                        <span><strong>Réponse sous 24h</strong> pour toute demande</span>
                    </li>
                </ul>
                
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-block bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-3 px-8 rounded-full transition shadow-soft">
                    <i class="fas fa-heart mr-2"></i>Me contacter
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Comment ça marche ? (Process) Section -->
<section id="process" class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">Démarche simple</span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-4">
                Comment ça marche ?
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                Un processus clair et rassurant en 4 étapes, de la prise de contact jusqu'au retour de vos vacances.
            </p>
        </div>
        
        <div class="max-w-6xl mx-auto">
            <!-- Process Steps -->
            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 relative">
                <!-- Connecting Line (desktop only) -->
                <div class="hidden lg:block absolute top-20 left-0 right-0 h-1 bg-gradient-to-r from-brand-purple via-brand-pink to-brand-sage" style="z-index: 0;"></div>
                
                <!-- Step 1 -->
                <div class="relative z-10 reveal">
                    <div class="bg-white rounded-3xl p-8 shadow-soft hover:shadow-medium transition border-2 border-brand-purple/10">
                        <div class="flex items-center justify-center mb-6">
                            <div class="relative">
                                <div class="w-20 h-20 bg-gradient-to-br from-brand-purple to-brand-pink rounded-full flex items-center justify-center shadow-medium">
                                    <i class="fas fa-paper-plane text-white text-3xl"></i>
                                </div>
                                <div class="absolute -top-2 -right-2 w-8 h-8 bg-brand-beige rounded-full flex items-center justify-center font-title font-bold text-brand-purple border-2 border-white">1</div>
                            </div>
                        </div>
                        <h3 class="font-title font-bold text-xl text-center text-brand-text mb-3">Prise de contact</h3>
                        <p class="text-sm text-brand-text-light text-center leading-relaxed">
                            Remplissez le formulaire ou contactez-moi directement. Je vous réponds sous 24h pour discuter de vos besoins.
                        </p>
                    </div>
                </div>
                
                <!-- Step 2 -->
                <div class="relative z-10 reveal" style="animation-delay: 0.1s;">
                    <div class="bg-white rounded-3xl p-8 shadow-soft hover:shadow-medium transition border-2 border-brand-purple/10">
                        <div class="flex items-center justify-center mb-6">
                            <div class="relative">
                                <div class="w-20 h-20 bg-gradient-to-br from-brand-pink to-brand-sage rounded-full flex items-center justify-center shadow-medium">
                                    <i class="fas fa-handshake text-white text-3xl"></i>
                                </div>
                                <div class="absolute -top-2 -right-2 w-8 h-8 bg-brand-beige rounded-full flex items-center justify-center font-title font-bold text-brand-purple border-2 border-white">2</div>
                            </div>
                        </div>
                        <h3 class="font-title font-bold text-xl text-center text-brand-text mb-3">Visite gratuite</h3>
                        <p class="text-sm text-brand-text-light text-center leading-relaxed">
                            Je viens chez vous rencontrer votre chat, découvrir son environnement et noter toutes vos consignes.
                        </p>
                    </div>
                </div>
                
                <!-- Step 3 -->
                <div class="relative z-10 reveal" style="animation-delay: 0.2s;">
                    <div class="bg-white rounded-3xl p-8 shadow-soft hover:shadow-medium transition border-2 border-brand-purple/10">
                        <div class="flex items-center justify-center mb-6">
                            <div class="relative">
                                <div class="w-20 h-20 bg-gradient-to-br from-brand-sage to-brand-purple rounded-full flex items-center justify-center shadow-medium">
                                    <i class="fas fa-cat text-white text-3xl"></i>
                                </div>
                                <div class="absolute -top-2 -right-2 w-8 h-8 bg-brand-beige rounded-full flex items-center justify-center font-title font-bold text-brand-purple border-2 border-white">3</div>
                            </div>
                        </div>
                        <h3 class="font-title font-bold text-xl text-center text-brand-text mb-3">Visites quotidiennes</h3>
                        <p class="text-sm text-brand-text-light text-center leading-relaxed">
                            Pendant votre absence, je viens chaque jour prendre soin de votre chat et vous envoie un rapport avec photos.
                        </p>
                    </div>
                </div>
                
                <!-- Step 4 -->
                <div class="relative z-10 reveal" style="animation-delay: 0.3s;">
                    <div class="bg-white rounded-3xl p-8 shadow-soft hover:shadow-medium transition border-2 border-brand-purple/10">
                        <div class="flex items-center justify-center mb-6">
                            <div class="relative">
                                <div class="w-20 h-20 bg-gradient-to-br from-brand-purple to-brand-beige rounded-full flex items-center justify-center shadow-medium">
                                    <i class="fas fa-home-heart text-white text-3xl"></i>
                                </div>
                                <div class="absolute -top-2 -right-2 w-8 h-8 bg-brand-beige rounded-full flex items-center justify-center font-title font-bold text-brand-purple border-2 border-white">4</div>
                            </div>
                        </div>
                        <h3 class="font-title font-bold text-xl text-center text-brand-text mb-3">Bilan final</h3>
                        <p class="text-sm text-brand-text-light text-center leading-relaxed">
                            À votre retour, je vous fais un compte-rendu complet. Votre chat heureux, votre maison sécurisée !
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- CTA -->
            <div class="text-center mt-12">
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-4 px-8 rounded-full transition shadow-soft hover:shadow-medium">
                    <i class="fas fa-calendar-check mr-2"></i>Démarrer avec une visite gratuite
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="py-16 md:py-24 bg-brand-beige">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">Mes prestations</span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-4">
                Un service complet de garde à domicile
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                Chaque visite inclut tout le nécessaire pour le bien-être de votre chat et la sécurité de votre domicile.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 max-w-7xl mx-auto">
            <!-- Service 1 -->
            <div class="bg-gradient-to-br from-brand-beige to-white rounded-3xl p-8 shadow-soft hover:shadow-medium transition">
                <div class="w-16 h-16 bg-brand-purple/10 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-bowl-food text-brand-purple text-3xl"></i>
                </div>
                <h3 class="font-title font-bold text-xl text-brand-text mb-3">Visite quotidienne</h3>
                <ul class="space-y-2 text-sm text-brand-text-light">
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>Nourriture fraîche & eau</li>
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>Litière propre</li>
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>Jeux & câlins adaptés</li>
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>Surveillance santé</li>
                </ul>
            </div>
            
            <!-- Service 2 -->
            <div class="bg-gradient-to-br from-brand-beige to-white rounded-3xl p-8 shadow-soft hover:shadow-medium transition">
                <div class="w-16 h-16 bg-brand-pink/10 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-camera text-brand-pink text-3xl"></i>
                </div>
                <h3 class="font-title font-bold text-xl text-brand-text mb-3">Rapport quotidien</h3>
                <ul class="space-y-2 text-sm text-brand-text-light">
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>Photos de votre chat</li>
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>Compte-rendu détaillé</li>
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>WhatsApp ou email</li>
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>Tranquillité d'esprit</li>
                </ul>
            </div>
            
            <!-- Service 3 -->
            <div class="bg-gradient-to-br from-brand-beige to-white rounded-3xl p-8 shadow-soft hover:shadow-medium transition">
                <div class="w-16 h-16 bg-brand-sage/10 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-house-lock text-brand-sage text-3xl"></i>
                </div>
                <h3 class="font-title font-bold text-xl text-brand-text mb-3">Sécurité domicile</h3>
                <ul class="space-y-2 text-sm text-brand-text-light">
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>Relevé du courrier</li>
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>Lumières & volets</li>
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>Aération régulière</li>
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>Présence régulière</li>
                </ul>
            </div>
            
            <!-- Service 4 -->
            <div class="bg-gradient-to-br from-brand-beige to-white rounded-3xl p-8 shadow-soft hover:shadow-medium transition">
                <div class="w-16 h-16 bg-brand-purple/10 rounded-2xl flex items-center justify-center mb-6">
                    <i class="fas fa-heart-pulse text-brand-purple text-3xl"></i>
                </div>
                <h3 class="font-title font-bold text-xl text-brand-text mb-3">Soins spécifiques</h3>
                <ul class="space-y-2 text-sm text-brand-text-light">
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>Administration médicaments</li>
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>Chats âgés ou anxieux</li>
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>Besoins particuliers</li>
                    <li><i class="fas fa-paw text-brand-pink mr-2"></i>Suivi vétérinaire</li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Proof Photos Section - Authenticity & Trust -->
<section id="preuves" class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">En action</span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-4">
                Un aperçu de mes prestations
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                Photos authentiques de mes visites : rapport quotidien, soins aux chats, et l'attention portée à chaque détail.
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-6 max-w-6xl mx-auto">
            <!-- Photo 1 - Chat heureux -->
            <div class="group relative overflow-hidden rounded-3xl shadow-soft hover:shadow-medium transition">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/chat-maison-garde-chat-vaud-lausanne-1600.webp'); ?>"
                    alt="Chat heureux pendant une visite de garde à domicile"
                    class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500"
                    loading="lazy"
                    width="533"
                    height="320">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <p class="font-title font-bold text-lg mb-1">Moment de complicité</p>
                        <p class="text-sm">Chat détendu après une session de jeu</p>
                    </div>
                </div>
            </div>
            
            <!-- Photo 2 - Rapport quotidien -->
            <div class="group relative overflow-hidden rounded-3xl shadow-soft hover:shadow-medium transition">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/garde-chat-a-domicile-lausanne-service-cat-sitter.webp'); ?>"
                    alt="Exemple de rapport quotidien avec photo envoyée aux propriétaires"
                    class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500"
                    loading="lazy"
                    width="533"
                    height="320">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <p class="font-title font-bold text-lg mb-1">Rapport quotidien</p>
                        <p class="text-sm">Photo envoyée chaque jour aux propriétaires</p>
                    </div>
                </div>
            </div>
            
            <!-- Photo 3 - Soins attentifs -->
            <div class="group relative overflow-hidden rounded-3xl shadow-soft hover:shadow-medium transition">
                <img
                    src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cat-sitter-chat-age-anxieux-nat-patoune.webp'); ?>"
                    alt="Soins attentifs pour chat senior ou anxieux"
                    class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500"
                    loading="lazy"
                    width="533"
                    height="320">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity">
                    <div class="absolute bottom-4 left-4 right-4 text-white">
                        <p class="font-title font-bold text-lg mb-1">Approche douce</p>
                        <p class="text-sm">Adaptation au tempérament de chaque chat</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Stats / Reassurance -->
        <div class="grid md:grid-cols-4 gap-6 max-w-5xl mx-auto mt-12">
            <div class="text-center bg-brand-beige rounded-2xl p-6">
                <div class="text-4xl font-title font-bold text-brand-purple mb-2">200+</div>
                <p class="text-sm text-brand-text-light">Gardes réussies</p>
            </div>
            <div class="text-center bg-brand-beige rounded-2xl p-6">
                <div class="text-4xl font-title font-bold text-brand-purple mb-2">100%</div>
                <p class="text-sm text-brand-text-light">Clients satisfaits</p>
            </div>
            <div class="text-center bg-brand-beige rounded-2xl p-6">
                <div class="text-4xl font-title font-bold text-brand-purple mb-2">5★</div>
                <p class="text-sm text-brand-text-light">Note moyenne Google</p>
            </div>
            <div class="text-center bg-brand-beige rounded-2xl p-6">
                <div class="text-4xl font-title font-bold text-brand-purple mb-2">3 ans</div>
                <p class="text-sm text-brand-text-light">D'expérience</p>
            </div>
        </div>
    </div>
</section>

<!-- Vos Engagements Section (SANS assurance) -->
<section id="engagements" class="py-16 md:py-24 bg-brand-beige">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">Mes engagements</span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-4">
                Ce que je garantis pour votre chat
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                Un service professionnel qui allie expertise, bienveillance et transparence pour le bien-être de votre félin.
            </p>
        </div>
        
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto">
            <!-- Engagement 1 -->
            <div class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-medium transition">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-comments text-brand-purple text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-title font-bold text-lg text-brand-text mb-2">Communication rassurante</h3>
                        <p class="text-sm text-brand-text-light">Rapports quotidiens avec photos pour que vous restiez connecté avec votre compagnon.</p>
                    </div>
                </div>
            </div>
            
            <!-- Engagement 2 -->
            <div class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-medium transition">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-brand-pink/10 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-cat text-brand-pink text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-title font-bold text-lg text-brand-text mb-2">Approche respectueuse</h3>
                        <p class="text-sm text-brand-text-light">Pas de forçage, chaque interaction est adaptée au tempérament et au rythme de votre chat.</p>
                    </div>
                </div>
            </div>
            
            <!-- Engagement 3 -->
            <div class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-medium transition">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-brand-sage/10 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-clock text-brand-sage text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-title font-bold text-lg text-brand-text mb-2">Fiabilité & ponctualité</h3>
                        <p class="text-sm text-brand-text-light">Visites aux horaires convenus, respect de la routine de votre chat, organisation sans faille.</p>
                    </div>
                </div>
            </div>
            
            <!-- Engagement 4 -->
            <div class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-medium transition">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-key text-brand-purple text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-title font-bold text-lg text-brand-text mb-2">Discrétion & respect</h3>
                        <p class="text-sm text-brand-text-light">Votre domicile est respecté, je n'utilise que les espaces nécessaires aux soins de votre chat.</p>
                    </div>
                </div>
            </div>
            
            <!-- Engagement 5 -->
            <div class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-medium transition">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-brand-pink/10 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-clipboard-list text-brand-pink text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-title font-bold text-lg text-brand-text mb-2">Suivi de vos consignes</h3>
                        <p class="text-sm text-brand-text-light">Alimentation, litière, jeux, médicaments : je respecte scrupuleusement vos instructions.</p>
                    </div>
                </div>
            </div>
            
            <!-- Engagement 6 -->
            <div class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-medium transition">
                <div class="flex items-start gap-4">
                    <div class="w-12 h-12 bg-brand-sage/10 rounded-full flex items-center justify-center flex-shrink-0">
                        <i class="fas fa-heart-pulse text-brand-sage text-xl"></i>
                    </div>
                    <div>
                        <h3 class="font-title font-bold text-lg text-brand-text mb-2">Procédure d'urgence</h3>
                        <p class="text-sm text-brand-text-light">Contact immédiat en cas de problème de santé, coordination avec votre vétérinaire si besoin.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Tarifs Section -->
<section id="tarifs" class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">Tarifs transparents</span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-4">
                Tarifs par zone d'intervention
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                Prix clairs et sans surprise. Tout est inclus dans chaque visite.
            </p>
        </div>
        
        <!-- Tarifs par zone -->
        <div class="grid md:grid-cols-3 gap-8 max-w-5xl mx-auto mb-12">
            <!-- Zone 1 -->
            <div class="pricing-card bg-gradient-to-br from-brand-beige to-white rounded-3xl p-8 shadow-soft hover:shadow-medium transition relative">
                <div class="text-center mb-6">
                    <div class="inline-block bg-brand-purple/10 px-4 py-2 rounded-full mb-4">
                        <span class="text-brand-purple font-title font-bold text-sm">ZONE 1</span>
                    </div>
                    <h3 class="font-title font-bold text-xl text-brand-text mb-2">Morges et environs</h3>
                    <div class="flex items-end justify-center gap-2 mb-4">
                        <span class="text-5xl font-title font-bold text-brand-purple">30</span>
                        <span class="text-2xl text-brand-text mb-2">CHF</span>
                    </div>
                    <p class="text-sm text-brand-text-light mb-4">par visite (max 2 chats)</p>
                    <button class="btn-voir-communes text-brand-purple hover:text-brand-purple-dark text-sm font-medium underline" data-target-zone="zone1">
                        Voir les communes →
                    </button>
                </div>
            </div>
            
            <!-- Zone 2 -->
            <div class="pricing-card bg-gradient-to-br from-brand-purple/5 to-white rounded-3xl p-8 shadow-medium hover:shadow-lg transition relative border-2 border-brand-purple">
                <div class="absolute -top-4 left-1/2 transform -translate-x-1/2">
                    <span class="bg-brand-pink text-white px-4 py-1 rounded-full text-xs font-bold">POPULAIRE</span>
                </div>
                <div class="text-center mb-6">
                    <div class="inline-block bg-brand-purple/10 px-4 py-2 rounded-full mb-4">
                        <span class="text-brand-purple font-title font-bold text-sm">ZONE 2</span>
                    </div>
                    <h3 class="font-title font-bold text-xl text-brand-text mb-2">Ouest lausannois + Lausanne</h3>
                    <div class="flex items-end justify-center gap-2 mb-4">
                        <span class="text-5xl font-title font-bold text-brand-purple">35</span>
                        <span class="text-2xl text-brand-text mb-2">CHF</span>
                    </div>
                    <p class="text-sm text-brand-text-light mb-4">par visite (max 2 chats)</p>
                    <button class="btn-voir-communes text-brand-purple hover:text-brand-purple-dark text-sm font-medium underline" data-target-zone="zone2">
                        Voir les communes →
                    </button>
                </div>
            </div>
            
            <!-- Zone 3 -->
            <div class="pricing-card bg-gradient-to-br from-brand-beige to-white rounded-3xl p-8 shadow-soft hover:shadow-medium transition relative">
                <div class="text-center mb-6">
                    <div class="inline-block bg-brand-purple/10 px-4 py-2 rounded-full mb-4">
                        <span class="text-brand-purple font-title font-bold text-sm">ZONE 3</span>
                    </div>
                    <h3 class="font-title font-bold text-xl text-brand-text mb-2">Échallens et environs</h3>
                    <div class="flex items-end justify-center gap-2 mb-4">
                        <span class="text-5xl font-title font-bold text-brand-purple">40</span>
                        <span class="text-2xl text-brand-text mb-2">CHF</span>
                    </div>
                    <p class="text-sm text-brand-text-light mb-4">par visite (max 2 chats)</p>
                    <button class="btn-voir-communes text-brand-purple hover:text-brand-purple-dark text-sm font-medium underline" data-target-zone="zone3">
                        Voir les communes →
                    </button>
                </div>
            </div>
        </div>
        
        <!-- Suppléments -->
        <div class="max-w-3xl mx-auto mb-12">
            <div class="bg-brand-beige rounded-2xl p-6 md:p-8">
                <h3 class="font-title font-bold text-xl text-brand-text mb-4 text-center">Suppléments</h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="flex items-center justify-between bg-white rounded-xl p-4">
                        <span class="text-brand-text">Chat supplémentaire (>2)</span>
                        <span class="font-title font-bold text-brand-purple">+ CHF 5.-</span>
                    </div>
                    <div class="flex items-center justify-between bg-white rounded-xl p-4">
                        <span class="text-brand-text">Stationnement payant</span>
                        <span class="font-title font-bold text-brand-purple">+ CHF 2.-</span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Offre de lancement -->
        <div class="max-w-4xl mx-auto mb-12">
            <div class="bg-gradient-to-r from-brand-pink to-brand-purple rounded-3xl p-8 text-center text-white shadow-medium">
                <i class="fas fa-gift text-5xl mb-4"></i>
                <h3 class="font-title font-bold text-2xl mb-3">Offre actuelle</h3>
                <p class="text-lg mb-2">Visite de prise de contact <strong>OFFERTE</strong></p>
                <p class="text-sm opacity-90">Faisons connaissance avec votre chat avant votre départ !</p>
            </div>
        </div>
        
        <!-- Prestations incluses -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-white border-2 border-brand-purple rounded-3xl p-8">
                <h3 class="font-title font-bold text-2xl text-brand-text mb-6 text-center">
                    <i class="fas fa-check-double text-brand-purple mr-2"></i>
                    Prestations incluses à chaque visite
                </h3>
                <div class="grid md:grid-cols-2 gap-4">
                    <div class="flex items-center gap-3">
                        <i class="fas fa-paw text-brand-pink text-xl"></i>
                        <span>Nourriture fraîche & eau</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-paw text-brand-pink text-xl"></i>
                        <span>Litière propre</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-paw text-brand-pink text-xl"></i>
                        <span>Jeux & câlins adaptés</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-paw text-brand-pink text-xl"></i>
                        <span>Rapport quotidien + photos</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-paw text-brand-pink text-xl"></i>
                        <span>Surveillance du domicile</span>
                    </div>
                    <div class="flex items-center gap-3">
                        <i class="fas fa-paw text-brand-pink text-xl"></i>
                        <span>Soins basiques</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-block bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-4 px-8 rounded-full transition shadow-soft">
                <i class="fas fa-calendar-check mr-2"></i>Demander une réservation
            </a>
        </div>
    </div>
</section>

<!-- Carte Cadeau Section -->
<section id="cadeau" class="py-16 md:py-24 bg-gradient-to-br from-brand-purple/5 to-brand-pink/5">
    <div class="container mx-auto px-4">
        <div class="max-w-5xl mx-auto">
            <div class="bg-white rounded-3xl shadow-soft overflow-hidden">
                <div class="grid lg:grid-cols-2 gap-0">
                    <!-- Image/Visual Side -->
                    <div class="bg-gradient-to-br from-brand-purple to-brand-pink p-12 flex flex-col justify-center items-center text-white text-center lg:text-left">
                        <div class="mb-6">
                            <i class="fas fa-gift text-7xl mb-4 opacity-90"></i>
                        </div>
                        <h3 class="font-title font-bold text-3xl mb-4">Carte cadeau<br>Nat Patoune</h3>
                        <p class="text-lg opacity-90 leading-relaxed">
                            Offrez un cadeau unique et utile : des visites de garde professionnelle pour le chat d'un proche.
                        </p>
                    </div>
                    
                    <!-- Content Side -->
                    <div class="p-8 md:p-12">
                        <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">Idée cadeau</span>
                        <h2 class="font-title font-bold text-3xl text-brand-text mt-2 mb-6">
                            Offrez des visites de garde
                        </h2>
                        
                        <p class="text-brand-text-light leading-relaxed mb-6">
                            Vous cherchez un cadeau original et pratique pour un propriétaire de chat ? La carte cadeau Nat Patoune est idéale pour toutes les occasions.
                        </p>
                        
                        <ul class="space-y-4 mb-8">
                            <li class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="fas fa-check text-brand-purple text-sm"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-brand-text mb-1">Valable sur toutes les visites</p>
                                    <p class="text-sm text-brand-text-light">Utilisable sur l'ensemble de nos prestations de garde</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="fas fa-heart text-brand-purple text-sm"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-brand-text mb-1">Personnalisable</p>
                                    <p class="text-sm text-brand-text-light">Montant et message selon votre choix</p>
                                </div>
                            </li>
                            <li class="flex items-start gap-3">
                                <div class="w-8 h-8 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0 mt-0.5">
                                    <i class="fas fa-paper-plane text-brand-purple text-sm"></i>
                                </div>
                                <div>
                                    <p class="font-bold text-brand-text mb-1">Envoi rapide</p>
                                    <p class="text-sm text-brand-text-light">Remise sous 24-48h par email ou courrier</p>
                                </div>
                            </li>
                        </ul>
                        
                        <a href="<?php echo esc_url(home_url('/#contact')); ?>"
                           class="inline-flex items-center justify-center w-full bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-4 px-8 rounded-full transition shadow-soft hover:shadow-medium"
                           onclick="prefillGiftCard(event)">
                            <i class="fas fa-gift mr-2"></i>
                            Offrir une carte cadeau
                        </a>
                        
                        <p class="text-xs text-brand-text-light text-center mt-4">
                            Une fois votre demande envoyée, je vous contacte pour finaliser votre carte cadeau personnalisée.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Zone d'intervention Section avec Accordéon -->
<section id="zone" class="py-16 md:py-24 bg-brand-beige">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">Secteur géographique</span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-4">
                Communes desservies dans le Canton de Vaud
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                Je me déplace à votre domicile dans ces communes pour garder votre chat dans son environnement familier.
            </p>
        </div>
        
        <!-- Accordéon des communes par zone -->
        <div class="max-w-6xl mx-auto space-y-4">
            <!-- Zone 1 Accordéon -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="zone-accordion-button w-full text-left p-6 flex items-center justify-between gap-4 hover:bg-brand-purple/5 transition" aria-expanded="false" data-zone="zone1">
                    <div class="flex items-center gap-3 flex-1">
                        <div class="w-10 h-10 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-brand-purple"></i>
                        </div>
                        <h3 class="font-title font-bold text-xl text-brand-purple">Zone 1 : Morges et environs (CHF 30.-)</h3>
                    </div>
                    <i class="fas fa-chevron-down zone-accordion-icon text-brand-purple text-xl transition-transform"></i>
                </button>
                <div id="zone1" class="zone-accordion-content hidden px-6 pb-6">
                    <div class="pl-14 flex flex-wrap gap-2">
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Morges</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Préverenges</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Tolochenaz</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Saint-Prex</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Lonay</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Denges</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Échichens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Vufflens-le-Château</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Lully</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Lussy-sur-Morges</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Chigny</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Bremblens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Denens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Échandens</span>
                    </div>
                </div>
            </div>
            
            <!-- Zone 2 Accordéon -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="zone-accordion-button w-full text-left p-6 flex items-center justify-between gap-4 hover:bg-brand-purple/5 transition" aria-expanded="false" data-zone="zone2">
                    <div class="flex items-center gap-3 flex-1">
                        <div class="w-10 h-10 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-brand-purple"></i>
                        </div>
                        <h3 class="font-title font-bold text-xl text-brand-purple">Zone 2 : Ouest lausannois + Lausanne (CHF 35.-)</h3>
                    </div>
                    <i class="fas fa-chevron-down zone-accordion-icon text-brand-purple text-xl transition-transform"></i>
                </button>
                <div id="zone2" class="zone-accordion-content hidden px-6 pb-6">
                    <div class="pl-14 flex flex-wrap gap-2">
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Lausanne</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Prilly</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Renens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Crissier</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Bussigny</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Écublens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Chavannes-près-Renens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Saint-Sulpice</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Villars-Sainte-Croix</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Le Mont-sur-Lausanne</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Épalinges</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Romanel-sur-Lausanne</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Jouxtens-Mézery</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Cheseaux-sur-Lausanne</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Pully</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Paudex</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Belmont-sur-Lausanne</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Lutry</span>
                    </div>
                </div>
            </div>
            
            <!-- Zone 3 Accordéon -->
            <div class="bg-white rounded-2xl shadow-soft overflow-hidden">
                <button class="zone-accordion-button w-full text-left p-6 flex items-center justify-between gap-4 hover:bg-brand-purple/5 transition" aria-expanded="false" data-zone="zone3">
                    <div class="flex items-center gap-3 flex-1">
                        <div class="w-10 h-10 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0">
                            <i class="fas fa-map-marker-alt text-brand-purple"></i>
                        </div>
                        <h3 class="font-title font-bold text-xl text-brand-purple">Zone 3 : Échallens et environs (CHF 40.-)</h3>
                    </div>
                    <i class="fas fa-chevron-down zone-accordion-icon text-brand-purple text-xl transition-transform"></i>
                </button>
                <div id="zone3" class="zone-accordion-content hidden px-6 pb-6">
                    <div class="pl-14 flex flex-wrap gap-2">
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Échallens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Assens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Bioley-Orjulaz</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Bottens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Bretigny-sur-Morrens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Cugy</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Morrens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Froideville</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Poliez-Pittet</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Saint-Barthélemy</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Villars-le-Terroir</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Goumoens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Étagnières</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Boussens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Sullens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Bournens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Mex</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Vufflens-la-Ville</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Penthaz</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Penthalaz</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Daillens</span>
                        <span class="bg-brand-purple/5 border border-brand-purple/20 text-brand-text text-sm px-4 py-2 rounded-full">Cossonay</span>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <p class="text-brand-text-light mb-4 text-lg">Votre commune n'apparaît pas dans cette liste ?</p>
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-block bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-3 px-8 rounded-full transition shadow-soft">
                <i class="fas fa-envelope mr-2"></i>Contactez-moi pour un devis
            </a>
        </div>
    </div>
</section>

<!-- Témoignages Section -->
<section id="avis" class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">Ils me font confiance</span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-4">
                Témoignages de mes clients
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                Découvrez ce que pensent les propriétaires de chats que j'accompagne.
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto mb-12">
            <!-- Témoignage 1 -->
            <div class="bg-brand-beige rounded-2xl p-6 shadow-soft">
                <div class="flex items-center gap-3 mb-4">
                    <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/luna.webp'); ?>" alt="Chat Luna" class="w-16 h-16 rounded-full object-cover" loading="lazy">
                    <div>
                        <h4 class="font-title font-bold text-brand-text">Sophie</h4>
                        <p class="text-sm text-brand-text-light">Morges • Luna</p>
                    </div>
                </div>
                <div class="flex gap-1 mb-3">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-brand-text-light italic leading-relaxed">
                    "Nathalie a été parfaite avec ma Luna qui est très timide. Les photos quotidiennes m'ont vraiment rassurée pendant mes vacances. Je recommande à 100% !"
                </p>
            </div>
            
            <!-- Témoignage 2 -->
            <div class="bg-brand-beige rounded-2xl p-6 shadow-soft">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-16 h-16 bg-brand-purple/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-cat text-brand-purple text-2xl"></i>
                    </div>
                    <div>
                        <h4 class="font-title font-bold text-brand-text">Marc</h4>
                        <p class="text-sm text-brand-text-light">Lausanne • Minou & Felix</p>
                    </div>
                </div>
                <div class="flex gap-1 mb-3">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-brand-text-light italic leading-relaxed">
                    "Service impeccable ! Mes deux chats ont été chouchoutés et la maison était nickel à notre retour. Rapport quotidien très apprécié. Merci Nathalie !"
                </p>
            </div>
            
            <!-- Témoignage 3 -->
            <div class="bg-brand-beige rounded-2xl p-6 shadow-soft">
                <div class="flex items-center gap-3 mb-4">
                    <div class="w-16 h-16 bg-brand-pink/20 rounded-full flex items-center justify-center">
                        <i class="fas fa-cat text-brand-pink text-2xl"></i>
                    </div>
                    <div>
                        <h4 class="font-title font-bold text-brand-text">Caroline</h4>
                        <p class="text-sm text-brand-text-light">Échallens • Tigrou</p>
                    </div>
                </div>
                <div class="flex gap-1 mb-3">
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                    <i class="fas fa-star text-yellow-400"></i>
                </div>
                <p class="text-brand-text-light italic leading-relaxed">
                    "Tigrou, qui est très âgé, a besoin de médicaments quotidiens. Nathalie a été très professionnelle et rassurante. Je la recommande vivement !"
                </p>
            </div>
        </div>
        
        <!-- Enhanced Google Reviews Widget -->
        <div class="max-w-4xl mx-auto">
            <div class="bg-gradient-to-br from-brand-beige to-white rounded-3xl p-8 md:p-12 shadow-soft border-2 border-brand-purple/10">
                <div class="flex flex-col md:flex-row items-center gap-8">
                    <!-- Google Icon & Rating -->
                    <div class="flex-shrink-0 text-center md:text-left">
                        <i class="fab fa-google text-7xl text-brand-purple mb-4"></i>
                        <div class="flex items-center justify-center md:justify-start gap-2 mb-2">
                            <div class="flex gap-1">
                                <i class="fas fa-star text-yellow-400 text-2xl"></i>
                                <i class="fas fa-star text-yellow-400 text-2xl"></i>
                                <i class="fas fa-star text-yellow-400 text-2xl"></i>
                                <i class="fas fa-star text-yellow-400 text-2xl"></i>
                                <i class="fas fa-star text-yellow-400 text-2xl"></i>
                            </div>
                        </div>
                        <p class="text-3xl font-title font-bold text-brand-purple">5.0/5</p>
                        <p class="text-sm text-brand-text-light">Basé sur les avis Google</p>
                    </div>
                    
                    <!-- Content -->
                    <div class="flex-1 text-center md:text-left">
                        <h3 class="font-title font-bold text-2xl text-brand-text mb-3">
                            Des propriétaires de chats satisfaits
                        </h3>
                        <p class="text-brand-text-light leading-relaxed mb-6">
                            Consultez les avis authentiques de mes clients sur Google. Leur confiance et leur satisfaction sont ma plus belle récompense !
                        </p>
                        <div class="flex flex-col sm:flex-row gap-3 justify-center md:justify-start">
                            <a href="https://g.page/r/CQaAnyMyUz8_EAI/review" target="_blank" rel="noopener nofollow" class="inline-flex items-center justify-center bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-3 px-6 rounded-full transition shadow-soft hover:shadow-medium">
                                <i class="fab fa-google mr-2"></i>Voir les avis Google
                            </a>
                            <a href="https://g.page/r/CQaAnyMyUz8_EAI/review" target="_blank" rel="noopener nofollow" class="inline-flex items-center justify-center bg-white hover:bg-brand-beige text-brand-purple font-title font-bold py-3 px-6 rounded-full transition border-2 border-brand-purple">
                                <i class="fas fa-pencil mr-2"></i>Laisser un avis
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- FAQ Section (SANS assurance) -->
<section id="faq" class="py-16 md:py-24 bg-brand-beige">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">Questions fréquentes</span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-4">
                Vos questions, mes réponses
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                Tout ce que vous devez savoir avant de réserver votre garde.
            </p>
        </div>
        
        <div class="max-w-4xl mx-auto space-y-4">
            <!-- Question 1 -->
            <div class="faq-item bg-white rounded-2xl overflow-hidden">
                <button class="faq-question w-full text-left p-6 flex items-start justify-between gap-4" aria-expanded="false">
                    <div class="flex items-start gap-4 flex-1">
                        <div class="w-10 h-10 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-handshake text-brand-purple"></i>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-lg text-brand-text mb-2">Comment se passe la première visite ?</h3>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down faq-icon text-brand-purple text-xl flex-shrink-0 mt-1"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <div class="pl-14">
                        <p class="text-brand-text-light leading-relaxed">
                            La visite de prise de contact est <strong>gratuite et sans engagement</strong>. Je me déplace chez vous pour rencontrer votre chat, découvrir son environnement et ses habitudes. Nous discutons de ses besoins spécifiques, de son caractère, et de toutes vos attentes. Cette rencontre permet à votre chat de faire connaissance avec moi en toute tranquillité.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Question 2 -->
            <div class="faq-item bg-white rounded-2xl overflow-hidden">
                <button class="faq-question w-full text-left p-6 flex items-start justify-between gap-4" aria-expanded="false">
                    <div class="flex items-start gap-4 flex-1">
                        <div class="w-10 h-10 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-camera text-brand-purple"></i>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-lg text-brand-text mb-2">Que recevez-vous comme nouvelles ?</h3>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down faq-icon text-brand-purple text-xl flex-shrink-0 mt-1"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <div class="pl-14">
                        <p class="text-brand-text-light leading-relaxed">
                            Vous recevrez un <strong>rapport quotidien avec photos</strong> de votre chat après chaque visite, par WhatsApp ou email selon votre préférence. Ce compte-rendu détaille ce qui s'est passé : repas, litière, humeur, jeux, câlins. Vous restez connecté avec votre compagnon même à distance.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Question 3 -->
            <div class="faq-item bg-white rounded-2xl overflow-hidden">
                <button class="faq-question w-full text-left p-6 flex items-start justify-between gap-4" aria-expanded="false">
                    <div class="flex items-start gap-4 flex-1">
                        <div class="w-10 h-10 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-cat text-brand-purple"></i>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-lg text-brand-text mb-2">Mon chat est timide : comment faites-vous ?</h3>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down faq-icon text-brand-purple text-xl flex-shrink-0 mt-1"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <div class="pl-14">
                        <p class="text-brand-text-light leading-relaxed">
                            J'ai l'habitude des chats timides ou craintifs. Mon approche est basée sur la <strong>patience et le respect</strong> : je ne force jamais le contact. Je laisse votre chat venir à son rythme, en lui parlant doucement et en respectant sa zone de confort. Beaucoup de chats réservés finissent par accepter ma présence après quelques visites.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Question 4 -->
            <div class="faq-item bg-white rounded-2xl overflow-hidden">
                <button class="faq-question w-full text-left p-6 flex items-start justify-between gap-4" aria-expanded="false">
                    <div class="flex items-start gap-4 flex-1">
                        <div class="w-10 h-10 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-truck-medical text-brand-purple"></i>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-lg text-brand-text mb-2">Que se passe-t-il en cas d'urgence ?</h3>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down faq-icon text-brand-purple text-xl flex-shrink-0 mt-1"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <div class="pl-14">
                        <p class="text-brand-text-light leading-relaxed">
                            En cas d'urgence vétérinaire, je vous <strong>contacte immédiatement</strong> pour vous informer et obtenir votre accord. Si vous êtes injoignable et que la situation est critique, je prends l'initiative de conduire votre chat chez le vétérinaire le plus proche. J'ai toujours avec moi les coordonnées de votre vétérinaire habituel et les numéros d'urgence.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Question 5 -->
            <div class="faq-item bg-white rounded-2xl overflow-hidden">
                <button class="faq-question w-full text-left p-6 flex items-start justify-between gap-4" aria-expanded="false">
                    <div class="flex items-start gap-4 flex-1">
                        <div class="w-10 h-10 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-pills text-brand-purple"></i>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-lg text-brand-text mb-2">Administrez-vous des médicaments ?</h3>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down faq-icon text-brand-purple text-xl flex-shrink-0 mt-1"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <div class="pl-14">
                        <p class="text-brand-text-light leading-relaxed">
                            Oui, je suis <strong>formée pour administrer des médicaments</strong> : comprimés, pipettes, gouttes, et même insuline pour les chats diabétiques. Lors de la visite de prise de contact, nous détaillons ensemble le protocole de soins et je m'assure de bien comprendre les instructions de votre vétérinaire.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Question 6 -->
            <div class="faq-item bg-white rounded-2xl overflow-hidden">
                <button class="faq-question w-full text-left p-6 flex items-start justify-between gap-4" aria-expanded="false">
                    <div class="flex items-start gap-4 flex-1">
                        <div class="w-10 h-10 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-calendar-xmark text-brand-purple"></i>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-lg text-brand-text mb-2">Puis-je modifier ou annuler ma réservation ?</h3>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down faq-icon text-brand-purple text-xl flex-shrink-0 mt-1"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <div class="pl-14">
                        <p class="text-brand-text-light leading-relaxed">
                            Oui, selon les conditions détaillées dans mes <a href="<?php echo esc_url(home_url('/cgv/')); ?>" class="text-brand-purple underline">Conditions Générales de Vente</a>. En résumé : annulation gratuite jusqu'à 7 jours avant le début de la garde. Au-delà, des frais peuvent s'appliquer. Je reste flexible en cas d'imprévu majeur.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Question 7 -->
            <div class="faq-item bg-white rounded-2xl overflow-hidden">
                <button class="faq-question w-full text-left p-6 flex items-start justify-between gap-4" aria-expanded="false">
                    <div class="flex items-start gap-4 flex-1">
                        <div class="w-10 h-10 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-list-check text-brand-purple"></i>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-lg text-brand-text mb-2">Combien de visites par jour ?</h3>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down faq-icon text-brand-purple text-xl flex-shrink-0 mt-1"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <div class="pl-14">
                        <p class="text-brand-text-light leading-relaxed">
                            Par défaut, je propose <strong>une visite par jour</strong>, généralement en milieu de journée. Cette durée est suffisante pour les chats adultes autonomes. Pour les chatons, les chats âgés ou ceux qui nécessitent des soins particuliers, nous pouvons convenir de deux visites quotidiennes (supplément à prévoir).
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Question 8 -->
            <div class="faq-item bg-white rounded-2xl overflow-hidden">
                <button class="faq-question w-full text-left p-6 flex items-start justify-between gap-4" aria-expanded="false">
                    <div class="flex items-start gap-4 flex-1">
                        <div class="w-10 h-10 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0 mt-1">
                            <i class="fas fa-calendar-days text-brand-purple"></i>
                        </div>
                        <div>
                            <h3 class="font-title font-bold text-lg text-brand-text mb-2">Comment réserver pendant les vacances scolaires ?</h3>
                        </div>
                    </div>
                    <i class="fas fa-chevron-down faq-icon text-brand-purple text-xl flex-shrink-0 mt-1"></i>
                </button>
                <div class="faq-answer hidden px-6 pb-6">
                    <div class="pl-14">
                        <p class="text-brand-text-light leading-relaxed">
                            Les périodes de <strong>vacances scolaires sont très demandées</strong> (été, Noël, Pâques). Je vous recommande de réserver 3 à 4 semaines à l'avance pour garantir ma disponibilité. N'hésitez pas à me contacter dès que vous connaissez vos dates de départ.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center mt-12">
            <p class="text-brand-text-light mb-4">Une autre question ?</p>
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-block bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-3 px-8 rounded-full transition shadow-soft">
                <i class="fas fa-envelope mr-2"></i>Contactez-moi
            </a>
        </div>
    </div>
</section>

<!-- Blog Section -->
<section id="blog" class="py-16 md:py-24 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">Le Blog Félin</span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-4">
                Conseils & actualités
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                Des astuces et informations utiles pour prendre soin de votre chat et préparer au mieux vos déplacements.
            </p>
        </div>
        
        <div class="grid md:grid-cols-3 gap-8 max-w-6xl mx-auto" id="blog-container">
            <!-- Les articles du blog seront chargés dynamiquement depuis posts.json -->
            <div class="text-center col-span-3 py-12">
                <i class="fas fa-spinner fa-spin text-4xl text-brand-purple mb-4"></i>
                <p class="text-brand-text-light">Chargement des articles...</p>
            </div>
        </div>
    </div>
</section>

<!-- Contact / Réservation Section -->
<section id="contact" class="py-16 md:py-24 bg-brand-beige">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">Réservation</span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-4">
                Demander une réservation
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                Remplissez ce formulaire et je vous réponds sous 24h. La visite de prise de contact est offerte !
            </p>
        </div>
        
        <div class="grid lg:grid-cols-2 gap-12 max-w-6xl mx-auto">
            <!-- Coordonnées -->
            <div>
                <div class="bg-white rounded-3xl p-8 shadow-soft mb-8">
                    <h3 class="font-title font-bold text-2xl text-brand-text mb-6">Mes coordonnées</h3>
                    
                    <div class="space-y-6">
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-envelope text-brand-purple text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-brand-text mb-1">Email</p>
                                <a href="mailto:<?php echo esc_attr(natpatoune_get_email()); ?>" class="text-brand-purple hover:underline"><?php echo esc_html(natpatoune_get_email()); ?></a>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-brand-pink/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-phone text-brand-pink text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-brand-text mb-1">Téléphone</p>
                                <a href="tel:+41<?php echo esc_attr(str_replace(' ', '', natpatoune_get_phone())); ?>" class="text-brand-purple hover:underline"><?php echo esc_html(natpatoune_get_phone()); ?></a>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-brand-sage/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fas fa-map-marker-alt text-brand-sage text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-brand-text mb-1">Zone d'intervention</p>
                                <p class="text-brand-text-light">Canton de Vaud, Suisse</p>
                            </div>
                        </div>
                        
                        <div class="flex items-start gap-4">
                            <div class="w-12 h-12 bg-brand-purple/10 rounded-full flex items-center justify-center flex-shrink-0">
                                <i class="fab fa-whatsapp text-brand-purple text-xl"></i>
                            </div>
                            <div>
                                <p class="font-bold text-brand-text mb-1">WhatsApp</p>
                                <a href="https://wa.me/41787685047" target="_blank" rel="noopener" class="text-brand-purple hover:underline">Discuter sur WhatsApp</a>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="bg-gradient-to-br from-brand-purple to-brand-pink rounded-3xl p-8 text-white text-center">
                    <i class="fas fa-clock text-5xl mb-4"></i>
                    <h4 class="font-title font-bold text-xl mb-3">Réponse rapide</h4>
                    <p class="text-sm opacity-90">Je vous réponds sous 24h, y compris le week-end et jours fériés.</p>
                </div>
            </div>
            
            <!-- Formulaire -->
            <div class="bg-white rounded-3xl p-8 shadow-soft">
                <form id="booking-form" class="space-y-6">
                    <!-- Nom & Prénom -->
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="nom" class="block text-sm font-bold text-brand-text mb-2">Nom *</label>
                            <input type="text" id="nom" name="nom" required class="form-input w-full px-4 py-3 border border-brand-grey rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-purple">
                        </div>
                        <div>
                            <label for="prenom" class="block text-sm font-bold text-brand-text mb-2">Prénom *</label>
                            <input type="text" id="prenom" name="prenom" required class="form-input w-full px-4 py-3 border border-brand-grey rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-purple">
                        </div>
                    </div>
                    
                    <!-- Email & Téléphone -->
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="email" class="block text-sm font-bold text-brand-text mb-2">Email *</label>
                            <input type="email" id="email" name="email" required class="form-input w-full px-4 py-3 border border-brand-grey rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-purple">
                        </div>
                        <div>
                            <label for="telephone" class="block text-sm font-bold text-brand-text mb-2">Téléphone *</label>
                            <input type="tel" id="telephone" name="telephone" autocomplete="tel" required class="form-input w-full px-4 py-3 border border-brand-grey rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-purple">
                        </div>
                    </div>
                    
                    <!-- Localité & Nombre de chats -->
                    <div class="grid md:grid-cols-2 gap-4">
                        <div>
                            <label for="localite" class="block text-sm font-bold text-brand-text mb-2">Localité *</label>
                            <input type="text" id="localite" name="localite" required placeholder="Ex: Morges, Lausanne..." class="form-input w-full px-4 py-3 border border-brand-grey rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-purple">
                        </div>
                        <div>
                            <label for="nombre_chats" class="block text-sm font-bold text-brand-text mb-2">Nombre de chats</label>
                            <input type="number" id="nombre_chats" name="nombre_chats" min="1" value="1" placeholder="1" class="form-input w-full px-4 py-3 border border-brand-grey rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-purple">
                        </div>
                    </div>
                    
                    <!-- Nom(s) du/des chat(s) -->
                    <div>
                        <label for="cat_names" class="block text-sm font-bold text-brand-text mb-2">Nom(s) du/des chat(s) *</label>
                        <input type="text" id="cat_names" name="cat_names" required placeholder="Ex : Luna, Minou…" class="form-input w-full px-4 py-3 border border-brand-grey rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-purple">
                        <p class="text-xs text-brand-text-light mt-1">Si plusieurs chats, séparez les noms par des virgules</p>
                    </div>
                    
                    <!-- Profil du/des chat(s) -->
                    <div>
                        <label for="cat_profile" class="block text-sm font-bold text-brand-text mb-2">Âge / Profil du/des chat(s) *</label>
                        <select id="cat_profile" name="cat_profile" required class="form-select w-full px-4 py-3 border border-brand-grey rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-purple">
                            <option value="">Sélectionnez un profil</option>
                            <option value="chaton">Chaton (moins de 1 an)</option>
                            <option value="adulte">Chat adulte (1-7 ans)</option>
                            <option value="senior">Chat senior (plus de 7 ans)</option>
                            <option value="anxieux">Chat anxieux / craintif</option>
                            <option value="special">Besoins spéciaux / Handicap</option>
                            <option value="multiple">Plusieurs profils différents</option>
                        </select>
                        <p class="text-xs text-brand-text-light mt-1">Ceci m'aide à adapter mes visites</p>
                    </div>
                    
                    <!-- Médicaments / Soins -->
                    <div>
                        <label class="block text-sm font-bold text-brand-text mb-3">Médicaments ou soins particuliers ? *</label>
                        <div class="flex gap-4 mb-3">
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="has_medication" value="non" checked class="w-4 h-4 text-brand-purple border-brand-grey focus:ring-brand-purple">
                                <span class="text-brand-text">Non</span>
                            </label>
                            <label class="flex items-center gap-2 cursor-pointer">
                                <input type="radio" name="has_medication" value="oui" class="w-4 h-4 text-brand-purple border-brand-grey focus:ring-brand-purple">
                                <span class="text-brand-text">Oui</span>
                            </label>
                        </div>
                        <div id="medication-details" class="hidden">
                            <textarea id="medication_info" name="medication_info" rows="3" placeholder="Décrivez les médicaments, horaires, et méthode d'administration..." class="form-input w-full px-4 py-3 border border-brand-grey rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-purple"></textarea>
                            <p class="text-xs text-brand-text-light mt-1">Ex: Comprimé 2x/jour, pipette au coucher, insuline matin...</p>
                        </div>
                    </div>
                    
                    
                    <!-- Préférence de contact -->
                    <div>
                        <label for="contact_preference" class="block text-sm font-bold text-brand-text mb-2">Comment préférez-vous être contacté ? *</label>
                        <select id="contact_preference" name="contact_preference" required class="form-select w-full px-4 py-3 border border-brand-grey rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-purple">
                            <option value="">Choisissez votre préférence</option>
                            <option value="whatsapp">WhatsApp (recommandé pour les photos)</option>
                            <option value="email">Email</option>
                            <option value="phone">Appel téléphonique</option>
                            <option value="any">Peu importe</option>
                        </select>
                    </div>
                    
                    <!-- Dates & Message -->
                    <div>
                        <label for="message" class="block text-sm font-bold text-brand-text mb-2">Dates souhaitées & informations complémentaires *</label>
                        <textarea id="message" name="message" rows="4" required placeholder="Ex: Du 15 au 30 juillet. Mon chat Luna est timide mais adore jouer le soir..." class="form-input w-full px-4 py-3 border border-brand-grey rounded-xl focus:outline-none focus:ring-2 focus:ring-brand-purple"></textarea>
                        <p class="text-xs text-brand-text-light mt-1">Dates, habitudes du chat, accès au domicile, informations importantes...</p>
                    </div>
                    
                    <!-- RGPD -->
                    <div class="flex items-start gap-3">
                        <input type="checkbox" id="rgpd" name="rgpd" required class="mt-1 w-5 h-5 text-brand-purple border-brand-grey rounded focus:ring-brand-purple">
                        <label for="rgpd" class="text-sm text-brand-text-light">
                            J'accepte que mes données soient utilisées pour traiter ma demande de réservation. <a href="<?php echo esc_url(home_url('/politique-confidentialite/')); ?>" class="text-brand-purple underline">En savoir plus</a>
                        </label>
                    </div>
                    
                    <!-- Submit -->
                    <button type="submit" class="w-full bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-4 px-8 rounded-full transition shadow-soft hover:shadow-medium">
                        <i class="fas fa-paper-plane mr-2"></i>Envoyer ma demande
                    </button>
                    
                    <!-- Message de confirmation -->
                    <div id="form-message" class="hidden p-4 rounded-xl text-center"></div>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Modale Certificat -->
<div id="certificate-modal" class="fixed inset-0 bg-black/80 z-50 hidden flex items-center justify-center p-4" role="dialog" aria-modal="true" aria-labelledby="certificate-modal-title">
    <div class="relative max-w-4xl w-full">
        <button id="certificate-modal-close" class="absolute -top-12 right-0 text-white hover:text-brand-beige text-4xl transition" aria-label="Fermer">
            <i class="fas fa-times-circle"></i>
        </button>
        <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/certificat-cat-sitter-nathalie-piguet.webp'); ?>" alt="Certificat de formation cat-sitter – Nathalie Piguet" class="w-full h-auto rounded-lg shadow-2xl" loading="lazy">
        <p id="certificate-modal-title" class="text-white text-center mt-4 text-lg">Certificat de formation cat-sitter (certifiée)</p>
    </div>
</div>

<!-- Gallery Section -->
<section id="gallery" class="py-16 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">Galerie</span>
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-4">
                Nos amis les chats
            </h2>
            <p class="text-brand-text-light leading-relaxed">
                Découvrez les félins que nous avons le plaisir de chouchouter.
            </p>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            <div class="rounded-xl overflow-hidden shadow-soft hover:shadow-medium transition">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/alternative-pension-chat-vaud.webp'); ?>" alt="Alternative pension pour chats dans le canton de Vaud" class="w-full h-48 object-cover transform hover:scale-105 transition duration-500" loading="lazy">
            </div>
            <div class="rounded-xl overflow-hidden shadow-soft hover:shadow-medium transition">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/avis-client-chat-luna-vaud.webp'); ?>" alt="Avis client pour chat Luna à Vaud" class="w-full h-48 object-cover transform hover:scale-105 transition duration-500" loading="lazy">
            </div>
            <div class="rounded-xl overflow-hidden shadow-soft hover:shadow-medium transition">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cat-sitter-chat-age-anxieux-nat-patoune.webp'); ?>" alt="Chat âgé anxieux pris en charge par Nat Patoune" class="w-full h-48 object-cover transform hover:scale-105 transition duration-500" loading="lazy">
            </div>
            <div class="rounded-xl overflow-hidden shadow-soft hover:shadow-medium transition">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cat-sitting-domicile-vacances-suisse.webp'); ?>" alt="Garde de chat à domicile pendant les vacances en Suisse" class="w-full h-48 object-cover transform hover:scale-105 transition duration-500" loading="lazy">
            </div>
            <div class="rounded-xl overflow-hidden shadow-soft hover:shadow-medium transition">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cat-sitting-echallens-proximite-1200.webp'); ?>" alt="Service de cat-sitting à Échallens et proximité" class="w-full h-48 object-cover transform hover:scale-105 transition duration-500" loading="lazy">
            </div>
            <div class="rounded-xl overflow-hidden shadow-soft hover:shadow-medium transition">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/luna.webp'); ?>" alt="Chat Luna heureuse pendant une garde" class="w-full h-48 object-cover transform hover:scale-105 transition duration-500" loading="lazy">
            </div>
            <div class="rounded-xl overflow-hidden shadow-soft hover:shadow-medium transition">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/serenite-chat-vacances-lausanne-1600.webp'); ?>" alt="Chat serein pendant les vacances à Lausanne" class="w-full h-48 object-cover transform hover:scale-105 transition duration-500" loading="lazy">
            </div>
            <div class="rounded-xl overflow-hidden shadow-soft hover:shadow-medium transition">
                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/soins-chaton-lausanne-blog.webp'); ?>" alt="Soins pour chaton à Lausanne" class="w-full h-48 object-cover transform hover:scale-105 transition duration-500" loading="lazy">
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>
