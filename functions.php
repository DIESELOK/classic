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