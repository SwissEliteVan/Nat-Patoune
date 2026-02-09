<?php
/**
 * Template Part: Galerie Section
 *
 * @package NatPatoune
 */
?>
<!-- Galerie -->
<section id="galerie" class="py-20 bg-brand-cream">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-title font-bold text-brand-text">Mes petits protégés</h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 max-w-5xl mx-auto">
            <?php
            $galerie_images = [
                ['file' => 'galerie-chat-1.webp', 'alt' => 'Chat tigré'],
                ['file' => 'luna.webp', 'alt' => 'Luna le chat'],
                ['file' => 'galerie-chat-3.webp', 'alt' => 'Chat noir et blanc'],
                ['file' => 'galerie-chat-4.webp', 'alt' => 'Chat roux'],
                ['file' => 'galerie-chat-5.webp', 'alt' => 'Chat dormant'],
                ['file' => 'galerie-chat-6.webp', 'alt' => 'Chat jouant'],
            ];
            
            foreach ($galerie_images as $image) :
                $image_path = get_theme_file_path('assets/img/' . $image['file']);
                if (file_exists($image_path)) : ?>
                    <img src="<?php echo esc_url(get_theme_file_uri('assets/img/' . $image['file'])); ?>" class="rounded-xl shadow-md hover:shadow-xl transition duration-300 h-40 md:h-64 w-full object-cover" loading="lazy" alt="<?php echo esc_attr($image['alt']); ?>" width="400" height="256">
                <?php else : ?>
                    <div class="rounded-xl shadow-md bg-gradient-to-br from-brand-purple/20 to-brand-pink/20 h-40 md:h-64 w-full flex items-center justify-center">
                        <i class="fas fa-cat text-brand-purple text-4xl opacity-40"></i>
                    </div>
                <?php endif;
            endforeach; ?>
        </div>
    </div>
</section>
