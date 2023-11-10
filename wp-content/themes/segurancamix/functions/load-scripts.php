<?php
function load_scripts()
{
    /* Styles */
    wp_enqueue_style('bootstrap', get_template_directory_uri() . '/inc/bootstrap/css/bootstrap.min.css', array(), '5.3.0', 'all');
    wp_enqueue_style('lightbox', get_template_directory_uri() . '/inc/lightbox/css/lightbox.min.css', array(), '2.11.3', 'all');
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/inc/fontawesome/css/fontawesome.min.css', array(), '6.4', 'all');
    wp_enqueue_style('fontawesome-brands', get_template_directory_uri() . '/inc/fontawesome/css/brands.min.css', array(), '6.4', 'all');
    wp_enqueue_style('fontawesome-regular', get_template_directory_uri() . '/inc/fontawesome/css/regular.min.css', array(), '6.4', 'all');
    wp_enqueue_style('fontawesome-solid', get_template_directory_uri() . '/inc/fontawesome/css/solid.min.css', array(), '6.4', 'all');
    wp_enqueue_style('owlcarousel', get_template_directory_uri() . '/inc/owlcarousel/css/owl.carousel.min.css', array(), '2.3.4', 'all');
    wp_enqueue_style('owlcarousel-theme-default', get_template_directory_uri() . '/inc/owlcarousel/css/owl.theme.default.min.css', array(), '2.3.4', 'all');
    wp_enqueue_style('aos', get_template_directory_uri() . '/inc/aos/css/aos.css', array(), '1.0.0', 'all');
    // wp_enqueue_style('magnific-popup', get_template_directory_uri() . '/inc/magnific-popup/dist/magnific-popup.css', array(), '1.1.0', 'all');
    // wp_enqueue_style('roboto-font-family', get_template_directory_uri() . '/assets/fonts/roboto-font-family/stylesheet.css', array(), '1.0.0', 'all');
    // wp_enqueue_style('animate', get_template_directory_uri() . '/inc/animate/animate.min.css', array(), '4.1.1', 'all');
    wp_enqueue_style('main', get_template_directory_uri() . '/assets/css/main.css', array(), '1.0.0', 'all');
    // wp_enqueue_style('media-queries', get_template_directory_uri() . '/assets/css/media-queries.css', array(), '1.0.0', 'all');

    /* Scripts */
    wp_enqueue_script('jquery-3.7.0', get_template_directory_uri() . '/inc/jquery/jquery-3.7.0.min.js', array(), '3.7.0', true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/inc/bootstrap/js/bootstrap.min.js', array(), '5.3.0', true);
    wp_enqueue_script('lightbox', get_template_directory_uri() . '/inc/lightbox/js/lightbox.min.js', array(), '2.11.3', true);
    wp_enqueue_script('owlcarousel', get_template_directory_uri() . '/inc/owlcarousel/js/owl.carousel.min.js', array(), '2.3.4', true);
    wp_enqueue_script('aos', get_template_directory_uri() . '/inc/aos/js/aos.js', array(), '1.0.0', true);
    // wp_enqueue_script('jquery-mask-plugin', get_template_directory_uri() . '/inc/jquery-mask-plugin/dist/jquery.mask.min.js', array(), '1.14.16', true);
    //wp_enqueue_script('scrollreveal', get_template_directory_uri() . '/inc/scrollreveal/scrollreveal.min.js', array(), '1.14.16',  false);
    //wp_enqueue_script('magnific-popup', get_template_directory_uri() . '/inc/magnific-popup/dist/jquery.magnific-popup.min.js', array(), '1.1.0', true);

    wp_enqueue_script('scripts-site', get_template_directory_uri() . '/assets/js/scripts-site.js', array(), '1.0.0', true);
}

add_action('wp_enqueue_scripts', 'load_scripts');
