<?php
/**
 * Index fallback template
 * Required by WordPress theme standards
 * 
 * @package NatPatoune
 * @since 1.0.0
 */

get_header(); ?>

<div class="py-20 bg-brand-beige min-h-screen">
    <div class="container mx-auto px-4">
        
        <div class="text-center max-w-3xl mx-auto mb-16">
            <h1 class="font-title font-bold text-4xl md:text-5xl text-brand-text mb-4"><?php single_post_title(); ?></h1>
            <?php if (is_home() && !is_front_page()) : ?>
                <p class="text-lg text-brand-text-light"><?php esc_html_e('Conseils, astuces et actualités pour le bien-être de votre chat.', 'natpatoune'); ?></p>
            <?php endif; ?>
        </div>

        <?php if (have_posts()) : ?>
            
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <?php while (have_posts()) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('bg-white rounded-2xl overflow-hidden shadow-soft hover:shadow-medium transition-all transform hover:-translate-y-1 flex flex-col h-full'); ?>>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="relative h-56 overflow-hidden">
                                <a href="<?php the_permalink(); ?>" class="block w-full h-full">
                                    <?php the_post_thumbnail('large', array('class' => 'w-full h-full object-cover transition-transform duration-500 hover:scale-110')); ?>
                                </a>
                                <?php 
                                $categories = get_the_category();
                                if (!empty($categories)) : ?>
                                    <div class="absolute top-4 right-4 bg-brand-purple text-white text-xs font-bold px-3 py-1 rounded-full uppercase tracking-wide">
                                        <?php echo esc_html($categories[0]->name); ?>
                                    </div>
                                <?php endif; ?>
                            </div>
                        <?php endif; ?>
                        
                        <div class="p-6 flex flex-col flex-grow">
                            <header class="mb-4">
                                <div class="text-xs text-brand-text-light mb-2 flex items-center gap-2">
                                    <i class="far fa-calendar-alt"></i>
                                    <time datetime="<?php echo get_the_date('c'); ?>">
                                        <?php echo get_the_date(); ?>
                                    </time>
                                </div>
                                <h2 class="font-title font-bold text-xl text-brand-text hover:text-brand-purple transition-colors">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                            </header>
                            
                            <div class="text-brand-text-light text-sm mb-6 line-clamp-3 flex-grow">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <footer class="mt-auto pt-4 border-t border-brand-grey/30">
                                <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-brand-purple font-bold text-sm hover:underline group">
                                    <?php esc_html_e('Lire la suite', 'natpatoune'); ?>
                                    <i class="fas fa-arrow-right ml-2 transition-transform group-hover:translate-x-1"></i>
                                </a>
                            </footer>
                        </div>
                        
                    </article>
                    
                <?php endwhile; ?>
                
            </div>
            
            <div class="mt-16 flex justify-center">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '<i class="fas fa-chevron-left mr-2"></i> ' . esc_html__('Précédent', 'natpatoune'),
                    'next_text' => esc_html__('Suivant', 'natpatoune') . ' <i class="fas fa-chevron-right ml-2"></i>',
                    'class'     => 'flex gap-2',
                ));
                ?>
            </div>
            
        <?php else : ?>
            
            <div class="text-center py-20">
                <div class="w-24 h-24 bg-brand-grey rounded-full flex items-center justify-center text-brand-text-light text-4xl mx-auto mb-6">
                    <i class="fas fa-search"></i>
                </div>
                <h2 class="font-title font-bold text-2xl text-brand-text mb-4"><?php esc_html_e('Aucun contenu trouvé', 'natpatoune'); ?></h2>
                <p class="text-brand-text-light mb-8"><?php esc_html_e('Désolé, aucun contenu ne correspond à votre recherche.', 'natpatoune'); ?></p>
                <a href="<?php echo home_url('/'); ?>" class="inline-flex items-center gap-2 bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-3 px-8 rounded-full transition-all shadow-md hover:shadow-lg">
                    <i class="fas fa-home"></i>
                    <?php esc_html_e('Retour à l\'accueil', 'natpatoune'); ?>
                </a>
            </div>
            
        <?php endif; ?>
        
    </div>
</div>

<?php get_footer(); ?>
