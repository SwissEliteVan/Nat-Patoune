<?php
/**
 * @package Theme_NatPatoune
 */

$cta     = natpatoune_get_cta();
$phone   = natpatoune_get_phone();
$email   = natpatoune_get_email();
$socials = natpatoune_get_socials();
?>

<footer class="site-footer" role="contentinfo">
    <div class="container">

        <?php if ($cta['url'] && $cta['text']) : ?>
            <div class="footer-cta">
                <a href="<?php echo esc_url($cta['url']); ?>" class="hero-btn">
                    <?php echo esc_html($cta['text']); ?>
                </a>
            </div>
        <?php endif; ?>

        <div class="footer-contact">
            <?php if ($phone) : ?>
                <a href="tel:<?php echo esc_attr(preg_replace('/\s+/', '', $phone)); ?>">
                    <?php echo esc_html($phone); ?>
                </a>
            <?php endif; ?>

            <?php if ($email) : ?>
                <a href="mailto:<?php echo esc_attr($email); ?>">
                    <?php echo esc_html($email); ?>
                </a>
            <?php endif; ?>
        </div>

        <?php
        $active_socials = array_filter($socials);
        if ($active_socials) : ?>
            <nav class="footer-socials" aria-label="<?php esc_attr_e('Réseaux sociaux', 'theme-natpatoune'); ?>">
                <?php foreach ($active_socials as $network => $url) : ?>
                    <a href="<?php echo esc_url($url); ?>" target="_blank" rel="noopener noreferrer">
                        <?php echo esc_html(ucfirst($network)); ?>
                    </a>
                <?php endforeach; ?>
            </nav>
        <?php endif; ?>

        <?php
        wp_nav_menu(array(
            'theme_location' => 'footer',
            'container'      => 'nav',
            'container_class' => 'footer-navigation',
            'menu_class'     => 'footer-menu',
            'fallback_cb'    => false,
            'depth'          => 1,
        ));
        ?>

        <div class="footer-copy">
            <p>&copy; <?php echo esc_html(date_i18n('Y')); ?> <?php bloginfo('name'); ?></p>
        </div>

    </div>
</footer>

<?php wp_footer(); ?>
</body>
</html>
