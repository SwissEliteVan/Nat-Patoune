<?php
/**
 * @package Theme_NatPatoune
 */
?>

<form role="search" method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
    <label class="screen-reader-text" for="s"><?php esc_html_e('Rechercher :', 'theme-natpatoune'); ?></label>
    <input type="search" id="s" class="search-field" placeholder="<?php esc_attr_e('Rechercher…', 'theme-natpatoune'); ?>" value="<?php echo esc_attr(get_search_query()); ?>" name="s" />
    <button type="submit" class="search-submit"><?php esc_html_e('Rechercher', 'theme-natpatoune'); ?></button>
</form>
