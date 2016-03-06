<?php
    function theme_resources(){
        wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'theme_resources');

//navigation menu
register_nav_menus(array(
    'primary' => __( 'Header menu' ),
    'footer' => __( 'Footer Menu' ),
));

//add social links
function social_links( $wp_customize ) {
    $wp_customize->add_section( 'social_links' , array(
        'title'      => __( 'Social Links', 'classic' ),
        'priority'   => 30,
    ) );

    $wp_customize->add_setting( 'twitter' , array(
        'default'     => '',
    ) );

    $wp_customize->add_control('twitter', array(
        'label'      => __('Twitter Link', 'classic'),
        'section'    => 'social_links',
        'settings'   => 'twitter',
    ));

    $wp_customize->add_setting( 'facebook' , array(
        'default'     => '',
    ) );

    $wp_customize->add_control('facebook', array(
        'label'      => __('Facebook Link', 'classic'),
        'section'    => 'social_links',
        'settings'   => 'facebook',
    ));

    $wp_customize->add_setting( 'pinterest' , array(
        'default'     => '',
    ) );

    $wp_customize->add_control('pinterest', array(
        'label'      => __('pinterest Link', 'classic'),
        'section'    => 'social_links',
        'settings'   => 'pinterest',
    ));

    $wp_customize->add_setting( 'google' , array(
        'default'     => '',
    ) );

    $wp_customize->add_control('google', array(
        'label'      => __('google Link', 'classic'),
        'section'    => 'social_links',
        'settings'   => 'google',
    ));

}
add_action( 'customize_register', 'social_links' );

//add featured image support
function classic_setup(){
    add_theme_support('post-thumbnails');
    add_image_size('small-thumbnails', 328, 228, true);
    add_image_size('banner-thumbnails', 960, 360, true);
}

add_action('after_setup_theme', 'classic_setup');

// add pagination

function classic_pagination(){
    $pagination = get_the_posts_pagination( array(
        'mid_size' => 2,
        'prev_text' => __( '<span class="fa fa-chevron-left"></span>', 'textdomain' ),
        'next_text' => __( '<span class="fa fa-chevron-right"></span>', 'textdomain' ),
        'screen_reader_text' => __( ' ', 'textdomain' ),
    ) );
    echo $pagination;
}