<?php
/**
 * Index fallback template
 * Required by WordPress theme standards
 * 
 * @package NatPatoune
 * @since 1.0.0
 */

get_header(); ?>

<?php if (have_posts()) : ?>
        
        <div class="container mx-auto px-4 py-12">
            <div class="max-w-4xl mx-auto">
                
                <?php while (have_posts()) : the_post(); ?>
                    
                    <article id="post-<?php the_ID(); ?>" <?php post_class('mb-12'); ?>>
                        
                        <?php if (has_post_thumbnail()) : ?>
                            <div class="mb-6">
                                <?php the_post_thumbnail('large', array('class' => 'w-full h-auto rounded-lg')); ?>
                            </div>
                        <?php endif; ?>
                        
                        <header class="entry-header mb-6">
                            <h2 class="text-3xl font-title font-bold mb-2">
                                <a href="<?php the_permalink(); ?>" class="text-brand-text hover:text-brand-purple transition-colors">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <div class="text-sm text-brand-text-light">
                                <time datetime="<?php echo get_the_date('c'); ?>">
                                    <?php echo get_the_date(); ?>
                                </time>
                            </div>
                        </header>
                        
                        <div class="entry-content prose max-w-none">
                            <?php the_excerpt(); ?>
                        </div>
                        
                        <footer class="entry-footer mt-4">
                            <a href="<?php the_permalink(); ?>" class="inline-flex items-center text-brand-purple hover:text-brand-purple-dark font-medium transition-colors">
                                Lire la suite
                                <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </a>
                        </footer>
                        
                    </article>
                    
                <?php endwhile; ?>
                
                <nav class="navigation pagination mt-12" role="navigation">
                    <?php
                    the_posts_pagination(array(
                        'mid_size' => 2,
                        'prev_text' => '&laquo; Précédent',
                        'next_text' => 'Suivant &raquo;',
                    ));
                    ?>
                </nav>
                
            </div>
        </div>
        
    <?php else : ?>
        
        <div class="container mx-auto px-4 py-12">
            <div class="max-w-2xl mx-auto text-center">
                <h1 class="text-4xl font-title font-bold mb-4">Aucun contenu trouvé</h1>
                <p class="text-lg text-brand-text-light mb-8">Désolé, aucun contenu ne correspond à votre recherche.</p>
                <a href="<?php echo home_url('/'); ?>" class="inline-block bg-brand-purple text-white px-8 py-3 rounded-full font-medium hover:bg-brand-purple-dark transition-colors">
                    Retour à l'accueil
                </a>
            </div>
        </div>
        
    <?php endif; ?>

<?php get_footer(); ?>
