<?php
/**
 * @package Theme_NatPatoune
 */

if (post_password_required()) {
    return;
}
?>

<section id="comments" class="comments-area">

    <?php if (have_comments()) : ?>
        <h2 class="comments-title">
            <?php
            $comment_count = get_comments_number();
            printf(
                esc_html(_n('%d commentaire', '%d commentaires', $comment_count, 'theme-natpatoune')),
                $comment_count
            );
            ?>
        </h2>

        <ol class="comment-list">
            <?php
            wp_list_comments(array(
                'style'      => 'ol',
                'short_ping' => true,
                'avatar_size' => 50,
            ));
            ?>
        </ol>

        <?php the_comments_navigation(); ?>

    <?php endif; ?>

    <?php
    comment_form(array(
        'title_reply'        => __('Laisser un commentaire', 'theme-natpatoune'),
        'label_submit'       => __('Publier', 'theme-natpatoune'),
        'comment_notes_after' => '',
    ));
    ?>

</section>
