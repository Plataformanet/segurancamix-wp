<?php

require get_template_directory() . '/functions/cpts.php';
// require get_template_directory() . '/functions/config.php';
// require get_template_directory() . '/functions/google-tags.php';
require get_template_directory() . '/functions/load-scripts.php';

function segurancamix_config()
{
    register_nav_menus(
        array(
            'my_main_menu' => __('Main Menu', 'segurancamix')
        )
    );

    add_theme_support('post-thumbnails');
    add_theme_support(
        'post-formats',
        array('video', 'image', 'gallery')
    );
    add_theme_support('title-tag');
    add_theme_support(
        'custom-logo',
        array('height' => 72, 'width' => 356)
    );
}
add_action('after_setup_theme', 'segurancamix_config', 0);

add_action("categoria-produtos_edit_form_fields", 'remove_description_field', 10, 2);

function remove_description_field($term, $taxonomy)
{
?>

    <script>
        jQuery(window).ready(function() {
            jQuery('label[for=description]').parent().parent().remove();
        });
    </script>
<?php
}
