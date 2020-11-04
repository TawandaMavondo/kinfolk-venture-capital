<?php

add_theme_support( 'menus' );
function register_primary_menu() {
    register_nav_menus( array(
        'primary'=> "The top Navigation Menu ",
    ));
}
add_filter('wpcf7_form_elements', function($content) {
    $content = preg_replace('/<(span).*?class="\s*(?:.*\s)?wpcf7-form-control-wrap(?:\s[^"]+)?\s*"[^\>]*>(.*)<\/\1>/i', '\2', $content);

    return $content;
});

add_action('init',add_theme_support( 'post-thumbnails' ));
add_action( 'after_setup_theme', 'register_primary_menu' );
