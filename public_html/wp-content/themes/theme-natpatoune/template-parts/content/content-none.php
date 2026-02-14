<?php
/**
 * @package Theme_NatPatoune
 */
?>

<section class="no-results">
    <header class="entry-header">
        <h1 class="entry-title"><?php esc_html_e('Aucun résultat', 'theme-natpatoune'); ?></h1>
    </header>

    <div class="entry-content">
        <?php if (is_search()) : ?>
            <p><?php esc_html_e('Aucun contenu ne correspond à votre recherche. Essayez avec d'autres termes.', 'theme-natpatoune'); ?></p>
        <?php else : ?>
            <p><?php esc_html_e('Aucun contenu à afficher pour le moment.', 'theme-natpatoune'); ?></p>
        <?php endif; ?>

        <?php get_search_form(); ?>
    </div>
</section>
