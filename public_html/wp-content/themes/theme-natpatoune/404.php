<?php
/**
 * @package Theme_NatPatoune
 */

get_header(); ?>

<main id="primary" class="site-main" role="main">
    <div class="container">

        <section class="error-404">
            <header class="entry-header">
                <h1 class="entry-title"><?php esc_html_e('Page introuvable', 'theme-natpatoune'); ?></h1>
            </header>

            <div class="entry-content">
                <p><?php esc_html_e('La page que vous recherchez n'existe pas ou a été déplacée.', 'theme-natpatoune'); ?></p>

                <?php get_search_form(); ?>
            </div>
        </section>

    </div>
</main>

<?php get_footer(); ?>
