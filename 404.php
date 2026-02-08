<?php
/**
 * Template for 404 Error Page
 * 
 * @package NatPatoune
 */

get_header(); ?>

<main class="pt-24 pb-16 bg-brand-beige min-h-screen">
    <div class="container mx-auto px-4">
        <div class="max-w-3xl mx-auto text-center">
            <!-- 404 Content -->
            <div class="bg-white rounded-3xl p-12 md:p-16 shadow-soft">
                <!-- Large 404 with Cat Icon -->
                <div class="mb-8">
                    <div class="inline-block relative">
                        <span class="font-title font-bold text-9xl md:text-[180px] text-brand-purple opacity-20">404</span>
                        <i class="fas fa-cat text-6xl text-brand-purple absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2"></i>
                    </div>
                </div>
                
                <h1 class="font-title font-bold text-3xl md:text-4xl text-brand-text mb-4">
                    Miaou ! Cette page s'est cachée...
                </h1>
                
                <p class="text-lg text-brand-text-light leading-relaxed mb-8">
                    Comme un chat joueur, cette page a disparu. Elle n'existe peut-être plus ou l'adresse est incorrecte.
                </p>
                
                <!-- Search Form -->
                <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="max-w-md mx-auto mb-8">
                    <div class="relative">
                        <input type="search" name="s" placeholder="Rechercher..." class="w-full px-6 py-4 pr-12 border-2 border-brand-grey rounded-full focus:outline-none focus:ring-2 focus:ring-brand-purple focus:border-brand-purple">
                        <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-brand-purple hover:bg-brand-purple-dark text-white w-10 h-10 rounded-full flex items-center justify-center transition">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
                
                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center items-center">
                    <a href="<?php echo esc_url(home_url('/')); ?>" class="bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-4 px-8 rounded-full transition shadow-soft hover:shadow-medium inline-flex items-center">
                        <i class="fas fa-home mr-2"></i>
                        Retour à l'accueil
                    </a>
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="bg-brand-beige hover:bg-brand-grey text-brand-text font-title font-bold py-4 px-8 rounded-full transition inline-flex items-center">
                        <i class="fas fa-book mr-2"></i>
                        Voir le blog
                    </a>
                </div>
            </div>
            
            <!-- Recent Posts -->
            <?php
            $recent_posts = wp_get_recent_posts(array(
                'numberposts' => 3,
                'post_status' => 'publish'
            ));
            
            if (!empty($recent_posts)) :
            ?>
                <div class="mt-16">
                    <h2 class="font-title font-bold text-2xl text-brand-text mb-8">
                        Peut-être cherchiez-vous...
                    </h2>
                    <div class="grid md:grid-cols-3 gap-6">
                        <?php foreach ($recent_posts as $post) : ?>
                            <a href="<?php echo get_permalink($post['ID']); ?>" class="bg-white rounded-2xl p-6 shadow-soft hover:shadow-medium transition group text-left">
                                <?php if (has_post_thumbnail($post['ID'])) : ?>
                                    <div class="mb-4 rounded-xl overflow-hidden">
                                        <?php echo get_the_post_thumbnail($post['ID'], 'medium', array('class' => 'w-full h-40 object-cover')); ?>
                                    </div>
                                <?php endif; ?>
                                <h3 class="font-title font-bold text-lg text-brand-text group-hover:text-brand-purple transition mb-2">
                                    <?php echo esc_html($post['post_title']); ?>
                                </h3>
                                <p class="text-sm text-brand-text-light">
                                    <?php echo wp_trim_words($post['post_excerpt'] ?: $post['post_content'], 15); ?>
                                </p>
                            </a>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php
            wp_reset_query();
            endif;
            ?>
        </div>
    </div>
</main>

<?php get_footer(); ?>
