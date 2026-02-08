<?php
/**
 * Template for Search Results
 * 
 * @package NatPatoune
 */

get_header(); ?>

<main class="pt-24 pb-16 bg-brand-beige min-h-screen">
    <div class="container mx-auto px-4">
        <!-- Search Header -->
        <header class="text-center max-w-3xl mx-auto mb-12">
            <span class="text-brand-purple font-title font-bold tracking-wider uppercase text-sm">Résultats de recherche</span>
            <h1 class="font-title font-bold text-4xl md:text-5xl text-brand-text mt-2 mb-4">
                <?php
                printf(
                    __('Recherche : "%s"', 'natpatoune'),
                    '<span class="text-brand-purple">' . get_search_query() . '</span>'
                );
                ?>
            </h1>
            <?php if (have_posts()) : ?>
                <p class="text-brand-text-light leading-relaxed">
                    <?php
                    global $wp_query;
                    printf(
                        _n('%s résultat trouvé', '%s résultats trouvés', $wp_query->found_posts, 'natpatoune'),
                        '<strong>' . number_format_i18n($wp_query->found_posts) . '</strong>'
                    );
                    ?>
                </p>
            <?php endif; ?>
        </header>

        <?php if (have_posts()) : ?>
            <!-- Search Results Grid -->
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-6xl mx-auto mb-12">
                <?php
                while (have_posts()) : the_post();
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card bg-white rounded-3xl overflow-hidden shadow-soft hover:shadow-medium transition'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="block">
                                <?php the_post_thumbnail('medium', array('class' => 'w-full h-56 object-cover')); ?>
                            </a>
                        <?php else : ?>
                            <a href="<?php the_permalink(); ?>" class="block">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cat-sitting-domicile-vacances-suisse.webp'); ?>" alt="<?php the_title_attribute(); ?>" class="w-full h-56 object-cover">
                            </a>
                        <?php endif; ?>
                        
                        <div class="p-6">
                            <?php if (get_post_type() === 'post') : ?>
                                <?php
                                $categories = get_the_category();
                                if (!empty($categories)) :
                                ?>
                                    <div class="flex gap-2 mb-3">
                                        <?php foreach ($categories as $category) : ?>
                                            <span class="bg-brand-purple/10 text-brand-purple text-xs font-bold px-3 py-1 rounded-full">
                                                <?php echo esc_html($category->name); ?>
                                            </span>
                                        <?php endforeach; ?>
                                    </div>
                                <?php endif; ?>
                            <?php else : ?>
                                <div class="flex gap-2 mb-3">
                                    <span class="bg-brand-sage/10 text-brand-sage text-xs font-bold px-3 py-1 rounded-full">
                                        <?php echo esc_html(get_post_type_object(get_post_type())->labels->singular_name); ?>
                                    </span>
                                </div>
                            <?php endif; ?>
                            
                            <h2 class="font-title font-bold text-xl text-brand-text mb-3 line-clamp-2">
                                <a href="<?php the_permalink(); ?>" class="hover:text-brand-purple transition">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <div class="text-sm text-brand-text-light mb-4 line-clamp-3">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </div>
                            
                            <div class="flex items-center justify-between text-xs text-brand-text-light mb-4">
                                <span><i class="far fa-calendar mr-1"></i><?php echo get_the_date(); ?></span>
                                <?php if (get_post_type() === 'post') : ?>
                                    <span><i class="far fa-clock mr-1"></i><?php echo esc_html(ceil(str_word_count(get_the_content()) / 200)); ?> min</span>
                                <?php endif; ?>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="inline-block bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-2 px-6 rounded-full transition text-sm">
                                <i class="fas fa-arrow-right mr-2"></i><?php echo get_post_type() === 'post' ? 'Lire' : 'Voir'; ?>
                            </a>
                        </div>
                    </article>
                <?php
                endwhile;
                ?>
            </div>

            <!-- Pagination -->
            <?php
            the_posts_pagination(array(
                'mid_size'  => 2,
                'prev_text' => '<i class="fas fa-chevron-left mr-2"></i>' . __('Précédent', 'natpatoune'),
                'next_text' => __('Suivant', 'natpatoune') . '<i class="fas fa-chevron-right ml-2"></i>',
            ));
            ?>

        <?php else : ?>
            <!-- No Results -->
            <div class="text-center max-w-2xl mx-auto bg-white rounded-3xl p-12 shadow-soft">
                <i class="fas fa-search text-6xl text-brand-purple mb-6"></i>
                <h2 class="font-title font-bold text-2xl text-brand-text mb-4">
                    Aucun résultat trouvé
                </h2>
                <p class="text-brand-text-light mb-6">
                    Désolé, nous n'avons trouvé aucun résultat pour "<strong><?php echo get_search_query(); ?></strong>". 
                    Essayez avec d'autres mots-clés ou consultez nos articles récents.
                </p>
                
                <!-- Search Form -->
                <form role="search" method="get" action="<?php echo esc_url(home_url('/')); ?>" class="max-w-md mx-auto mb-8">
                    <div class="relative">
                        <input type="search" name="s" placeholder="Nouvelle recherche..." class="w-full px-6 py-4 pr-12 border-2 border-brand-grey rounded-full focus:outline-none focus:ring-2 focus:ring-brand-purple focus:border-brand-purple" value="<?php echo get_search_query(); ?>">
                        <button type="submit" class="absolute right-2 top-1/2 transform -translate-y-1/2 bg-brand-purple hover:bg-brand-purple-dark text-white w-10 h-10 rounded-full flex items-center justify-center transition">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>
                
                <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="inline-block bg-brand-purple hover:bg-brand-purple-dark text-white font-title font-bold py-3 px-8 rounded-full transition">
                    <i class="fas fa-book mr-2"></i>Voir tous les articles
                </a>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
