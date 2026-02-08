<?php
/**
 * Template Name: Page d'accueil
 *
 * @package NatPatoune
 */

get_header(); ?>

<!-- Hero Section -->
<section id="hero" class="relative min-h-[80vh] flex items-center justify-center overflow-hidden pt-24 pb-16">
    <!-- Background Video - Optimized preload -->
    <video autoplay muted loop playsinline preload="auto" loading="lazy" poster="<?php echo esc_url(get_theme_file_uri('assets/img/cat-sitting-lausanne-hero-poster.webp')); ?>" class="absolute inset-0 w-full h-full object-cover" aria-label="<?php esc_attr_e('Vidéo d\'ambiance de garde de chat', 'natpatoune'); ?>">
        <source src="<?php echo esc_url(get_theme_file_uri('assets/img/cat-sitting-lausanne-hero-720p.mp4')); ?>" type="video/mp4">
        <?php esc_html_e('Votre navigateur ne supporte pas la vidéo.', 'natpatoune'); ?>
    </video>
    <div class="absolute inset-0 bg-gradient-to-r from-brand-purple/60 to-brand-pink/40"></div>
    
    <!-- Content -->
    <div class="relative z-10 container mx-auto px-4 text-center text-white">
        <span class="inline-block bg-white/20 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-bold mb-6">
            <i class="fas fa-award mr-2" aria-hidden="true"></i><?php esc_html_e('Cat-Sitter Certifiée • Service Professionnel', 'natpatoune'); ?>
        </span>
        
        <h1 class="font-title font-bold text-4xl md:text-5xl lg:text-6xl mb-6 leading-tight">
            <?php esc_html_e('Garde de chats à domicile', 'natpatoune'); ?><br>
            <span class="text-brand-beige"><?php esc_html_e('Morges, Lausanne & environs', 'natpatoune'); ?></span>
        </h1>
        
        <p class="text-xl md:text-2xl max-w-4xl mx-auto mb-10 leading-relaxed font-medium">
            <?php esc_html_e('Une présence douce et professionnelle pour vos félins pendant vos absences', 'natpatoune'); ?>
        </p>
        
        <!-- Trust Pills -->
        <div class="flex flex-wrap justify-center gap-5 mb-12 max-w-5xl mx-auto">
            <div class="bg-white/10 backdrop-blur-md px-5 py-3 rounded-full border border-white/20">
                <i class="fas fa-camera text-brand-beige mr-2" aria-hidden="true"></i>
                <span class="text-sm md:text-base font-medium"><?php esc_html_e('Rapport quotidien + photos', 'natpatoune'); ?></span>
            </div>
            <div class="bg-white/10 backdrop-blur-md px-5 py-3 rounded-full border border-white/20">
                <i class="fas fa-gift text-brand-beige mr-2" aria-hidden="true"></i>
                <span class="text-sm md:text-base font-medium"><?php esc_html_e('Visite de contact offerte', 'natpatoune'); ?></span>
            </div>
            <div class="bg-white/10 backdrop-blur-md px-5 py-3 rounded-full border border-white/20">
                <i class="fas fa-cat text-brand-beige mr-2" aria-hidden="true"></i>
                <span class="text-sm md:text-base font-medium"><?php esc_html_e('Approche douce & respectueuse', 'natpatoune'); ?></span>
            </div>
            <div class="bg-white/10 backdrop-blur-md px-5 py-3 rounded-full border border-white/20">
                <i class="fas fa-home text-brand-beige mr-2" aria-hidden="true"></i>
                <span class="text-sm md:text-base font-medium"><?php esc_html_e('Service discret à domicile', 'natpatoune'); ?></span>
            </div>
        </div>
        
        <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
            <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="bg-white hover:bg-brand-beige text-brand-purple font-title font-bold py-4 px-10 rounded-full transition-all duration-300 shadow-medium hover:shadow-lg inline-flex items-center transform hover:scale-105 group">
                <span class="bg-brand-purple text-white p-2 rounded-full mr-3 group-hover:bg-brand-purple-dark transition-all">
                    <i class="fas fa-calendar-check" aria-hidden="true"></i>
                </span>
                <?php esc_html_e('Réserver une visite gratuite', 'natpatoune'); ?>
                <i class="fas fa-arrow-right ml-2 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all" aria-hidden="true"></i>
            </a>
            <a href="<?php echo esc_url(home_url('/#tarifs')); ?>" class="bg-brand-purple/20 backdrop-blur-sm hover:bg-brand-purple/30 text-white font-title font-bold py-4 px-10 rounded-full transition-all duration-300 border-2 border-white/80 hover:border-white inline-flex items-center transform hover:scale-105 group">
                <span class="bg-white/20 p-2 rounded-full mr-3 group-hover:bg-white/30 transition-all">
                    <i class="fas fa-tag text-white" aria-hidden="true"></i>
                </span>
                <?php esc_html_e('Voir les tarifs', 'natpatoune'); ?>
                <i class="fas fa-chevron-right ml-2 group-hover:translate-x-1 transition-all" aria-hidden="true"></i>
            </a>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#a-propos" class="text-white text-3xl" aria-label="<?php esc_attr_e('Défiler vers le bas', 'natpatoune'); ?>">
            <i class="fas fa-chevron-down" aria-hidden="true"></i>
        </a>
    </div>
</section>

<!-- À propos Section -->
<section id="a-propos" class="py-20 md:py-28 bg-brand-beige">
    <div class="container mx-auto px-4">
        <div class="grid md:grid-cols-2 gap-16 items-center max-w-7xl mx-auto">
            <!-- Images avec Badge NP -->
            <div class="relative">
                <div class="nat-photo-container relative rounded-3xl overflow-hidden shadow-soft protected">
                    <img 
                        src="<?php echo esc_url(get_theme_file_uri('assets/img/nathalie-piguet-cat-sitter-lausanne.webp')); ?>" 
                        alt="<?php esc_attr_e('Nathalie Piguet, cat-sitter certifiée à Lausanne', 'natpatoune'); ?>" 
                        class="nat-photo w-full h-auto" 
                        loading="lazy"
                    >
                    <!-- Badge NP -->
                    <img 
                        src="<?php echo esc_url(get_theme_file_uri('assets/img/monogramme-np-nat-patoune.svg')); ?>" 
                        alt="<?php esc_attr_e('Monogramme NP - Nat Patoune', 'natpatoune'); ?>" 
                        class="nat-photo-badge"
                        width="48" 
                        height="48"
                        loading="lazy"
                    >
                </div>
                <div class="absolute -bottom-6 -right-6 w-48 h-48 bg-white rounded-2xl shadow-medium p-4 hidden md:block certificate-zoom-trigger cursor-pointer group" tabindex="0" role="button" aria-label="<?php esc_attr_e('Voir le certificat en grand', 'natpatoune'); ?>">
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/img/certificat-cat-sitter-nathalie-piguet.webp')); ?>" alt="<?php esc_attr_e('Certificat de formation cat-sitter – Nathalie Piguet', 'natpatoune'); ?>" class="w-full h-full object-cover rounded-xl" loading="lazy">
                    <span class="absolute top-2 right-2 bg-brand-green text-white text-xs font-bold px-3 py-1 rounded-full"><?php esc_html_e('Certifiée', 'natpatoune'); ?></span>
                    <span class="absolute inset-0 bg-black/0 group-hover:bg-black/10 transition rounded-2xl flex items-center justify-center">
                        <i class="fas fa-search-plus text-white text-2xl opacity-0 group-hover:opacity-100 transition" aria-hidden="true"></i>
                    </span>
                </div>
            </div>
            
            <!-- Content -->
            <div>
                <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm"><?php esc_html_e('Votre cat-sitter', 'natpatoune'); ?></span>
                <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mt-2 mb-6">
                    <?php esc_html_e('Nathalie Piguet : passionnée par le bien-être félin', 'natpatoune'); ?>
                </h2>
                
                <p class="text-brand-text-light leading-relaxed mb-4">
                    <?php echo wp_kses_post(__('Avec une <strong>formation certifiée en comportement félin</strong> et une approche respectueuse de chaque tempérament, je veille au confort et à la sérénité de votre chat pendant votre absence.', 'natpatoune')); ?>
                </p>
                
                <p class="text-brand-text-light leading-relaxed mb-6">
                    <?php echo wp_kses_post(__('Chaque garde est <strong>personnalisée</strong> : je m\'adapte aux habitudes de votre compagnon, qu\'il soit câlin, timide, joueur ou senior. Mon objectif ? Que votre chat reste épanoui dans son environnement familier, et que vous partiez l\'esprit tranquille.', 'natpatoune')); ?>
                </p>
                
                <ul class="space-y-3 mb-8">
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-brand-green text-xl mt-1 flex-shrink-0" aria-hidden="true"></i>
                        <span><?php echo wp_kses_post(__('<strong>Formation certifiée</strong> en comportement et soins félins', 'natpatoune')); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-brand-green text-xl mt-1 flex-shrink-0" aria-hidden="true"></i>
                        <span><?php echo wp_kses_post(__('<strong>Approche douce</strong> respectant le rythme de chaque chat', 'natpatoune')); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-brand-green text-xl mt-1 flex-shrink-0" aria-hidden="true"></i>
                        <span><?php echo wp_kses_post(__('<strong>Rapports quotidiens avec photos</strong> pour rester connecté', 'natpatoune')); ?></span>
                    </li>
                    <li class="flex items-start gap-3">
                        <i class="fas fa-check-circle text-brand-green text-xl mt-1 flex-shrink-0" aria-hidden="true"></i>
                        <span><?php echo wp_kses_post(__('<strong>Réponse sous 24h</strong> pour toute demande', 'natpatoune')); ?></span>
                    </li>
                </ul>
                
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-4 px-10 rounded-full transition-all duration-300 shadow-medium hover:shadow-lg transform hover:scale-105 group">
                    <span class="bg-white/20 p-2 rounded-full mr-3 group-hover:bg-white/30 transition-all">
                        <i class="fas fa-heart" aria-hidden="true"></i>
                    </span>
                    <?php esc_html_e('Me contacter', 'natpatoune'); ?>
                    <i class="fas fa-arrow-right ml-2 opacity-0 group-hover:opacity-100 group-hover:translate-x-1 transition-all" aria-hidden="true"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Modale Certificat -->
<div id="certificate-modal" class="fixed inset-0 bg-black/80 z-50 hidden flex items-center justify-center p-4" role="dialog" aria-modal="true" aria-labelledby="certificate-modal-title">
    <div class="relative max-w-4xl w-full">
        <button id="certificate-modal-close" class="absolute -top-12 right-0 text-white hover:text-brand-beige text-4xl transition" aria-label="<?php esc_attr_e('Fermer', 'natpatoune'); ?>">
            <i class="fas fa-times-circle" aria-hidden="true"></i>
        </button>
        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/certificat-cat-sitter-nathalie-piguet.webp')); ?>" alt="<?php esc_attr_e('Certificat de formation cat-sitter – Nathalie Piguet', 'natpatoune'); ?>" class="w-full h-auto rounded-lg shadow-2xl" loading="lazy">
        <p id="certificate-modal-title" class="text-white text-center mt-4 text-lg"><?php esc_html_e('Certificat de formation cat-sitter (certifiée)', 'natpatoune'); ?></p>
    </div>
</div>

<!-- Reste du contenu de la page d'accueil -->
<?php include(locate_template('template-parts/front-page/process.php')); ?>
<!-- Sections de la page d'accueil -->
<?php
// Vérifier si les fichiers existent avant de les inclure
$template_parts = [
    'services',
    'tarifs',
    'zone-intervention',
    'temoignages',
    'faq',
    'contact'
];

foreach ($template_parts as $part) {
    $template_path = 'template-parts/front-page/' . $part . '.php';
    if (file_exists(get_theme_file_path($template_path))) {
        include(locate_template($template_path));
    } else {
        // Afficher un placeholder pour les sections manquantes
        echo '<!-- Section ' . esc_html($part) . ' à créer -->';
        echo '<section id="' . esc_attr($part) . '" class="py-16 md:py-24 bg-brand-beige">';
        echo '<div class="container mx-auto px-4 text-center">';
        echo '<h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text mb-6">' . esc_html(ucfirst($part)) . '</h2>';
        echo '<p class="text-brand-text-light max-w-3xl mx-auto">Cette section sera bientôt disponible.</p>';
        echo '</div>';
        echo '</section>';
    }
}
?>

<?php get_footer(); ?>
