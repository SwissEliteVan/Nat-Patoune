<?php
/**
 * Template Part: Blog Post Card
 * 
 * Réutilisable pour home.php, archive.php, et single.php (articles similaires)
 *
 * @package NatPatoune
 */

$post_id = get_the_ID();

// Temps de lecture : 200 mots/min, min 1 minute
$raw_content = (string) get_post_field('post_content', $post_id);
$plain_text  = wp_strip_all_tags($raw_content);
$word_count  = str_word_count($plain_text);
$read_min    = max(1, (int) ceil($word_count / 200));

// Catégories
$categories = get_the_category($post_id);

// Fallback image
$fallback_image = function_exists('natpatoune_get_fallback_image')
    ? natpatoune_get_fallback_image()
    : get_theme_file_uri('assets/img/fallback-featured-image.webp');
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('blog-card bg-white hover:shadow-medium transition-all duration-300'); ?>>
    <a href="<?php the_permalink(); ?>" class="block" aria-label="<?php echo esc_attr(get_the_title($post_id)); ?>">
        <?php if (has_post_thumbnail()) : ?>
            <?php
            the_post_thumbnail(
                'natpatoune-blog-thumb',
                array(
                    'class' => 'blog-card__image',
                    'loading' => 'lazy',
                    'decoding' => 'async',
                )
            );
            ?>
        <?php else : ?>
            <img
                src="<?php echo esc_url($fallback_image); ?>"
                alt="<?php echo esc_attr(get_the_title($post_id)); ?>"
                class="blog-card__image"
                loading="lazy"
                decoding="async"
            >
        <?php endif; ?>
    </a>

    <div class="blog-card__content">
        <?php if (!empty($categories)) : ?>
            <div class="flex flex-wrap gap-2 mb-3">
                <?php foreach ($categories as $category) : ?>
                    <a href="<?php echo esc_url(get_category_link($category->term_id)); ?>" class="blog-card__category">
                        <?php echo esc_html($category->name); ?>
                    </a>
                <?php endforeach; ?>
            </div>
        <?php endif; ?>

        <h2 class="blog-card__title">
            <a href="<?php the_permalink(); ?>" class="hover:text-brand-purple transition">
                <?php the_title(); ?>
            </a>
        </h2>

        <div class="blog-card__excerpt">
            <?php
            $excerpt = get_the_excerpt();
            if (!empty($excerpt)) {
                echo esc_html(wp_trim_words($excerpt, 20));
            } else {
                // Si pas d'extrait, on utilise le début du contenu
                $content = wp_strip_all_tags(get_the_content());
                echo esc_html(wp_trim_words($content, 20));
            }
            ?>
        </div>

        <div class="blog-card__meta">
            <span>
                <i class="far fa-calendar mr-1" aria-hidden="true"></i><?php echo esc_html(get_the_date()); ?>
            </span>
            <span>
                <i class="far fa-clock mr-1" aria-hidden="true"></i><?php echo esc_html($read_min); ?> min
            </span>
        </div>

        <a href="<?php the_permalink(); ?>" class="inline-flex items-center bg-brand-purple hover:bg-brand-purple-dark text-white font-bold py-2 px-6 rounded-full transition-all duration-300 text-sm shadow-sm hover:shadow-md transform hover:scale-105">
            <?php echo esc_html__('Lire l\'article', 'natpatoune'); ?> <i class="fas fa-arrow-right ml-2" aria-hidden="true"></i>
        </a>
    </div>
</article>
