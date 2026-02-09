<?php
/**
 * Template Part: Galerie Section
 *
 * @package NatPatoune
 */
?>
<!-- Galerie -->
<section id="galerie" class="py-20 bg-white">
    <div class="container mx-auto px-4">
        <div class="text-center mb-12">
            <h2 class="font-title font-bold text-3xl md:text-4xl text-brand-text"><?php esc_html_e('Mes petits protégés', 'natpatoune'); ?></h2>
        </div>
        <div class="grid grid-cols-2 md:grid-cols-3 gap-4 md:gap-6">
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
                    <div class="aspect-w-4 aspect-h-3 rounded-xl overflow-hidden shadow-soft hover:shadow-lg transition-all transform hover:scale-105">
                        <img src="<?php echo esc_url(get_theme_file_uri('assets/img/' . $image['file'])); ?>" class="w-full h-full object-cover" loading="lazy" alt="<?php echo esc_attr($image['alt']); ?>" width="400" height="256">
                    </div>
                <?php else : ?>
                    <div class="aspect-w-4 aspect-h-3 rounded-xl overflow-hidden bg-brand-grey flex items-center justify-center text-brand-text-light">
                        <i class="fas fa-cat text-4xl"></i>
                    </div>
                <?php endif;
            endforeach; ?>
        </div>
    </div>
</section>
