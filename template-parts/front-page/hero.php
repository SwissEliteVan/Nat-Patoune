<?php
/**
 * Hero Section
 */
?>
<section id="hero" class="relative min-h-screen flex items-center justify-center overflow-hidden bg-brand-purple-dark">
    <!-- Background -->
    <div class="absolute inset-0 z-0">
        <video autoplay loop muted playsinline class="w-full h-full object-cover opacity-40">
            <source src="<?php echo esc_url(get_theme_file_uri('assets/img/cat-sitting-lausanne-hero-720p.mp4')); ?>" type="video/mp4">
            <img src="<?php echo esc_url(get_theme_file_uri('assets/img/cat-sitting-lausanne-hero-poster.webp')); ?>" alt="Cat sitting Lausanne" class="w-full h-full object-cover">
        </video>
        <div class="absolute inset-0 bg-gradient-to-b from-brand-purple-dark/80 to-brand-purple/60 mix-blend-multiply"></div>
    </div>
    
    <!-- Content -->
    <div class="container mx-auto px-4 relative z-10 text-center text-white pt-20">
        <div class="max-w-4xl mx-auto">
            <span class="inline-flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-full text-sm font-semibold mb-8 border border-white/20 animate-fade-in-up">
                <i class="fas fa-award text-brand-pink" aria-hidden="true"></i><?php esc_html_e('Cat-Sitter Certifiée • Service Professionnel', 'natpatoune'); ?>
            </span>
            
            <h1 class="font-title font-bold text-4xl md:text-6xl lg:text-7xl leading-tight mb-6 animate-fade-in-up delay-100">
                <?php esc_html_e('Garde de chats à domicile', 'natpatoune'); ?><br>
                <span class="text-brand-pink"><?php esc_html_e('Morges, Lausanne & environs', 'natpatoune'); ?></span>
            </h1>
            
            <p class="text-lg md:text-2xl text-brand-beige/90 mb-10 max-w-2xl mx-auto animate-fade-in-up delay-200">
                <?php esc_html_e('Une présence douce et professionnelle pour vos félins pendant vos absences', 'natpatoune'); ?>
            </p>
            
            <!-- Trust Pills -->
            <div class="flex flex-wrap justify-center gap-4 mb-12 animate-fade-in-up delay-300">
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg border border-white/10">
                    <i class="fas fa-camera text-brand-pink" aria-hidden="true"></i>
                    <span class="text-sm font-medium"><?php esc_html_e('Rapport quotidien + photos', 'natpatoune'); ?></span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg border border-white/10">
                    <i class="fas fa-gift text-brand-pink" aria-hidden="true"></i>
                    <span class="text-sm font-medium"><?php esc_html_e('Visite de contact offerte', 'natpatoune'); ?></span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg border border-white/10">
                    <i class="fas fa-cat text-brand-pink" aria-hidden="true"></i>
                    <span class="text-sm font-medium"><?php esc_html_e('Approche douce & respectueuse', 'natpatoune'); ?></span>
                </div>
                <div class="flex items-center gap-2 bg-white/10 backdrop-blur-sm px-4 py-2 rounded-lg border border-white/10">
                    <i class="fas fa-home text-brand-pink" aria-hidden="true"></i>
                    <span class="text-sm font-medium"><?php esc_html_e('Service discret à domicile', 'natpatoune'); ?></span>
                </div>
            </div>
            
            <div class="flex flex-col sm:flex-row justify-center gap-4 animate-fade-in-up delay-400">
                <a href="<?php echo esc_url(home_url('/#contact')); ?>" class="inline-flex items-center justify-center gap-3 bg-white text-brand-purple font-bold py-4 px-8 rounded-full hover:bg-brand-beige transition-all shadow-lg hover:shadow-xl transform hover:-translate-y-1">
                    <i class="fas fa-calendar-check" aria-hidden="true"></i>
                    <?php esc_html_e('Réserver une visite gratuite', 'natpatoune'); ?>
                </a>
                <a href="<?php echo esc_url(home_url('/#tarifs')); ?>" class="inline-flex items-center justify-center gap-3 bg-transparent border-2 border-white text-white font-bold py-4 px-8 rounded-full hover:bg-white/10 transition-all">
                    <i class="fas fa-tag" aria-hidden="true"></i>
                    <?php esc_html_e('Voir les tarifs', 'natpatoune'); ?>
                </a>
            </div>
        </div>
    </div>
    
    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <a href="#a-propos" aria-label="<?php esc_attr_e('Défiler vers le bas', 'natpatoune'); ?>" class="text-white/70 hover:text-white transition-colors">
            <i class="fas fa-chevron-down text-3xl" aria-hidden="true"></i>
        </a>
    </div>
</section>
