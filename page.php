<?php
/**
 * Template for Pages
 * 
 * @package NatPatoune
 */

get_header(); ?>

<main class="pt-24 pb-16 bg-brand-beige min-h-screen">
    <div class="container mx-auto px-4">
        <?php
        while (have_posts()) : the_post();
        ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class('max-w-4xl mx-auto'); ?>>
                <header class="mb-8 text-center">
                    <h1 class="font-title font-bold text-4xl md:text-5xl text-brand-text mb-4">
                        <?php the_title(); ?>
                    </h1>
                    <?php if (has_post_thumbnail()) : ?>
                        <div class="rounded-3xl overflow-hidden shadow-soft mb-8">
                            <?php the_post_thumbnail('large', array('class' => 'w-full h-auto')); ?>
                        </div>
                    <?php endif; ?>
                </header>

                <div class="bg-white rounded-3xl p-8 md:p-12 shadow-soft">
                    <div class="prose prose-lg max-w-none">
                        <?php
                        the_content();
                        
                        wp_link_pages(array(
                            'before' => '<div class="page-links mt-8"><span class="page-links-title">' . __('Pages:', 'natpatoune') . '</span>',
                            'after'  => '</div>',
                        ));
                        ?>
                    </div>
                </div>
            </article>
        <?php
        endwhile;
        ?>
    </div>
</main>

<?php get_footer(); ?>
