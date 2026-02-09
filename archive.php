<?php
/**
 * Template for Archives (Category, Tag, Date, Author)
 * 
 * @package NatPatoune
 */

get_header(); ?>

<main class="blog-archive">
    <div class="container">
        <!-- Archive Header -->
        <header class="section-header text-center">
            <span class="section-subtitle"><?php esc_html_e('Archives', 'natpatoune'); ?></span>
            <h1 class="section-title">
                <?php the_archive_title(); ?>
            </h1>
            <?php if (get_the_archive_description()) : ?>
                <div class="section-desc">
                    <?php the_archive_description(); ?>
                </div>
            <?php endif; ?>
        </header>

        <?php if (have_posts()) : ?>
            <!-- Archive Grid -->
            <div class="blog-archive__grid">
                <?php
                while (have_posts()) : the_post();
                ?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class('post-card'); ?>>
                        <?php if (has_post_thumbnail()) : ?>
                            <a href="<?php the_permalink(); ?>" class="post-card__media-link">
                                <?php the_post_thumbnail('medium', array('class' => 'post-card__image')); ?>
                            </a>
                        <?php else : ?>
                            <a href="<?php the_permalink(); ?>" class="post-card__media-link">
                                <img src="<?php echo esc_url(get_template_directory_uri() . '/assets/img/cat-sitting-domicile-vacances-suisse.webp'); ?>" alt="<?php the_title_attribute(); ?>" class="post-card__image">
                            </a>
                        <?php endif; ?>
                        
                        <div class="post-card__content">
                            <?php
                            $categories = get_the_category();
                            if (!empty($categories)) :
                            ?>
                                <div class="post-card__categories">
                                    <?php foreach ($categories as $category) : ?>
                                        <span class="badge badge--light">
                                            <?php echo esc_html($category->name); ?>
                                        </span>
                                    <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
                            
                            <h2 class="post-card__title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <div class="post-card__excerpt">
                                <?php echo wp_trim_words(get_the_excerpt(), 20); ?>
                            </div>
                            
                            <div class="post-card__meta">
                                <span><i class="far fa-calendar mr-1"></i><?php echo get_the_date(); ?></span>
                                <span><i class="far fa-clock mr-1"></i><?php echo esc_html(ceil(str_word_count(get_the_content()) / 200)); ?> min</span>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="btn btn-primary btn-sm mt-4">
                                <i class="fas fa-arrow-right mr-2"></i><?php esc_html_e('Lire', 'natpatoune'); ?>
                            </a>
                        </div>
                    </article>
                <?php
                endwhile;
                ?>
            </div>

            <!-- Pagination -->
            <nav class="pagination" role="navigation">
                <?php
                the_posts_pagination(array(
                    'mid_size'  => 2,
                    'prev_text' => '<i class="fas fa-chevron-left mr-2"></i>' . __('Précédent', 'natpatoune'),
                    'next_text' => __('Suivant', 'natpatoune') . '<i class="fas fa-chevron-right ml-2"></i>',
                ));
                ?>
            </nav>

        <?php else : ?>
            <div class="no-results">
                <div class="container text-center">
                    <i class="fas fa-folder-open no-results__icon"></i>
                    <h2 class="section-title">
                        <?php esc_html_e('Aucun article dans cette archive', 'natpatoune'); ?>
                    </h2>
                    <p class="section-desc">
                        <?php esc_html_e('Il n\'y a pas encore d\'articles dans cette catégorie. Consultez nos autres articles !', 'natpatoune'); ?>
                    </p>
                    <a href="<?php echo esc_url(home_url('/blog/')); ?>" class="btn btn-primary mt-6">
                        <i class="fas fa-book mr-2"></i><?php esc_html_e('Voir tous les articles', 'natpatoune'); ?>
                    </a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
