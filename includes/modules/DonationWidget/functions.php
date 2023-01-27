<?php

/*
* Add your own functions here. You can also copy some of the theme functions into this file.
* Wordpress will use those functions instead of the original functions then.
*/

/*
* List of files to backup before theme upgrade, in the parent theme, outside this folder

*/

//set builder mode to debug
add_action('avia_builder_mode', "builder_set_debug");
function builder_set_debug()
{
    return "debug";
}

//custom css field
add_theme_support('avia_template_builder_custom_css');

// Load shortcodes
add_filter('avia_load_shortcodes', 'avia_include_shortcode_template', 15, 1);
function avia_include_shortcode_template($paths)
{
    $template_url = get_stylesheet_directory();
    array_unshift($paths, $template_url . '/shortcodes/');
    return $paths;
}

add_theme_support('deactivate_layerslider');
add_theme_support('avia_disable_dummy_import');


/* HEADING */
add_filter('avf_google_heading_font', 'avia_add_heading_font');
function avia_add_heading_font($fonts)
{
    $fonts['Raleway titre'] = 'Raleway:300,500';
    return $fonts;
}
/* CONTENT */
add_filter('avf_google_content_font', 'avia_add_content_font');
function avia_add_content_font($fonts)
{
    $fonts['Roboto'] = 'Roboto:300,400,700';
    return $fonts;
}

add_filter('avf_postgrid_excerpt_length', 'avia_change_postgrid_excerpt_length', 10, 1);
function avia_change_postgrid_excerpt_length($length)
{
    $length = 30;
    return $length;
}
function avia_new_excerpt_length($length)
{
    return 30;
}
add_filter('excerpt_length', 'avia_new_excerpt_length');

/*to add the page to the bottom of the contact form */
add_filter('avf_form_message', 'avf_form_message_mod');
function avf_form_message_mod($message)
{
    global $post;
    $message .= "<br>Page: " . get_the_title($post->ID);
    return $message;
}
add_action('admin_bar_menu', 'toolbar_link_to_mypage', 999);

function toolbar_link_to_mypage($wp_admin_bar)
{
    $args = array(
        'id'    => 'insert-media-button',
        'title' => 'ADD MEDIA',
        'href'  => '',
        'meta'  => array('class' => 'insert-media add_media')
    );
    $wp_admin_bar->add_node($args);
}

//to make the advanced custom field update the feature image
function acf_set_featured_image($value, $post_id, $field)
{

    if ($value != '') {
        //Add the value which is the image ID to the _thumbnail_id meta data for the current post
        update_post_meta($post_id, '_thumbnail_id', $value);
    }

    return $value;
}

// acf/update_value/name={$field_name} - filter for a specific field based on it's name
add_filter('acf/update_value/name=feature_image', 'acf_set_featured_image', 10, 3);

//Remove the WYSIWYG content in the button Modal Window
add_action('admin_print_scripts', 'avia_gravity_forms_admin');
function avia_gravity_forms_admin()
{
    echo "<style type='text/css'>";
    echo "#wp-aviaTBContentInButtonModal-editor-container, #wp-aviaTBContentInButtonModal-editor-tools .wp-editor-tabs, li#menu-comments { display: none; }";
    echo "</style>";
}

if (!is_admin()) add_action('wp_enqueue_scripts', 'avia_register_child_frontend_scripts', 100);
function avia_register_child_frontend_scripts()
{
    $child_theme_url = get_stylesheet_directory_uri();
    wp_dequeue_script('avia-default');

    //register js
    wp_register_script('avia-default-child', $child_theme_url . '/js/avia.js', array('jquery'), 1, true);
    wp_enqueue_script('avia-default-child');
}
//edit custom post type for realtypress to disable with_front
add_filter('register_post_type_args', function ($args, $post_type) {
    if ('rps_listing' === $post_type && is_array($args))
        $args['rewrite']['with_front'] = false;

    return $args;
}, 99, 2);
add_filter('register_post_type_args', function ($args, $post_type) {
    if ('portfolio' === $post_type && is_array($args))
        $args['rewrite']['with_front'] = false;

    return $args;
}, 99, 2);
