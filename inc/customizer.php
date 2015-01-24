<?php
/**
 * wows Theme Customizer
 *
 * @package wows
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function wows_customize_register( $wp_customize ) {


	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';
  $wp_customize->add_section('wows_color_scheme', array(
        'title'    => __('Email Settings', 'wows'),
        'description' => '',
        'priority' => 120,
    ));

    //  =============================
    //  = Text Input                =
    //  =============================
    $wp_customize->add_setting('text_test', array(
        'default'        => '12343224',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('wows_text_test', array(
        'label'      => __('MailChimp Settings', 'wows'),
        'section'    => 'wows_color_scheme',
        'settings'   => 'text_test',
    ));


 
}
add_action( 'customize_register', 'wows_customize_register' );

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function wows_customize_preview_js() {
	wp_enqueue_script( 'wows_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'wows_customize_preview_js' );
