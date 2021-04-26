<?php
add_filter( 'excerpt_length', function( $length ) { return 20; } );

/**
 * Register Custom Navigation Walker
 */
//function register_navwalker(){
    require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
//}
//add_action( 'after_setup_theme', 'register_navwalker' );

if( ! function_exists('wpjk_theme_setup')):
    function wpjk_theme_setup() {

        register_nav_menus([
           'primary_menu' => __('Primary menu', 'wpjk'),
           'footer_menu' =>  __('Footer menu', 'wpjk'),
           'extra_menu' =>  __('Extra menu', 'wpjk')
        ]);
    }
endif;


add_action('after_setup_theme', 'wpjk_theme_setup');

function wpjk_register_sidebars() {

    register_sidebar([
       'id' => 'front_page_main_text',
       'name' => 'Front page main text',
       'description' => 'Front page main text'
    ]);

    register_sidebar([
       'id' => 'front_page_skill_1',
       'name' => 'Front page skill 1',
       'description' => 'Front page first skill',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ]);
    register_sidebar([
       'id' => 'front_page_skill_2',
       'name' => 'Front page skill 2 ',
       'description' => 'Front page second skill',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ]);
    register_sidebar([
       'id' => 'front_page_skill_3',
       'name' => 'Front page skill 3',
       'description' => 'Front page third skill',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ]);



}

add_action('widgets_init', 'wpjk_register_sidebars');
add_theme_support( 'post-thumbnails' );




