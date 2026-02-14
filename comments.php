<?php
/**
 * Comments template.
 *
 * @package NatPatoune
 */

if (post_password_required()) {
	return;
}
?>

<section id="comments" class="comments-area container mx-auto px-4 py-10">
	<?php if (have_comments()) : ?>
		<h2 class="font-title text-2xl font-bold mb-6">
			<?php
			printf(
				esc_html(
					_n('%1$s commentaire', '%1$s commentaires', get_comments_number(), 'natpatoune')
				),
				number_format_i18n(get_comments_number())
			);
			?>
		</h2>

		<ol class="comment-list space-y-6">
			<?php wp_list_comments(array('style' => 'ol', 'short_ping' => true)); ?>
		</ol>

		<?php the_comments_pagination(); ?>
	<?php endif; ?>

	<?php if (!comments_open() && get_comments_number()) : ?>
		<p><?php esc_html_e('Les commentaires sont fermés.', 'natpatoune'); ?></p>
	<?php endif; ?>

	<?php comment_form(); ?>
</section>
