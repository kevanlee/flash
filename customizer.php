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

    //  =============================
    //  = Radio Input               =
    //  =============================
    $wp_customize->add_setting('wows_theme_options[color_scheme]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',
    ));

    $wp_customize->add_control('wows_color_scheme', array(
        'label'      => __('Color Scheme', 'wows'),
        'section'    => 'wows_color_scheme',
        'settings'   => 'wows_theme_options[color_scheme]',
        'type'       => 'radio',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));

    //  =============================
    //  = Checkbox                  =
    //  =============================
    $wp_customize->add_setting('wows_theme_options[checkbox_test]', array(
        'capability' => 'edit_theme_options',
        'type'       => 'option',
    ));

    $wp_customize->add_control('display_header_text', array(
        'settings' => 'wows_theme_options[checkbox_test]',
        'label'    => __('Show Email Signup Box'),
        'section'  => 'wows_color_scheme',
        'type'     => 'checkbox',
    ));


    //  =============================
    //  = Select Box                =
    //  =============================
     $wp_customize->add_setting('wows_theme_options[header_select]', array(
        'default'        => 'value2',
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));
    $wp_customize->add_control( 'example_select_box', array(
        'settings' => 'wows_theme_options[header_select]',
        'label'   => 'Select Something:',
        'section' => 'wows_color_scheme',
        'type'    => 'select',
        'choices'    => array(
            'value1' => 'Choice 1',
            'value2' => 'Choice 2',
            'value3' => 'Choice 3',
        ),
    ));


    //  =============================
    //  = Image Upload              =
    //  =============================
    $wp_customize->add_setting('image_upload_test', array(
        'default'           => 'image.jpg',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'image_upload_test', array(
        'label'    => __('Image Upload Test', 'wows'),
        'section'  => 'wows_color_scheme',
        'settings' => 'image_upload_test',
    )));

    //  =============================
    //  = File Upload               =
    //  =============================
    $wp_customize->add_setting('wows_theme_options[upload_test]', array(
        'default'           => 'arse',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Upload_Control($wp_customize, 'upload_test', array(
        'label'    => __('Upload Test', 'wows'),
        'section'  => 'wows_color_scheme',
        'settings' => 'wows_theme_options[upload_test]',
    )));


    //  =============================
    //  = Color Picker              =
    //  =============================
    $wp_customize->add_setting('link_color', array(
        'default'           => '000',
        'sanitize_callback' => 'sanitize_hex_color',
        'capability'        => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'link_color', array(
        'label'    => __('Link Color', 'wows'),
        'section'  => 'wows_color_scheme',
        'settings' => 'link_color',
    )));


    //  =============================
    //  = Page Dropdown             =
    //  =============================
    $wp_customize->add_setting('wows_theme_options[page_test]', array(
        'capability'     => 'edit_theme_options',
        'type'           => 'option',

    ));

    $wp_customize->add_control('wows_page_test', array(
        'label'      => __('Page Test', 'wows'),
        'section'    => 'wows_color_scheme',
        'type'    => 'dropdown-pages',
        'settings'   => 'wows_theme_options[page_test]',
    ));

    // =====================
    //  = Category Dropdown =
    //  =====================
    $categories = get_categories();
  $cats = array();
  $i = 0;
  foreach($categories as $category){
    if($i==0){
      $default = $category->slug;
      $i++;
    }
    $cats[$category->slug] = $category->name;
  }

  $wp_customize->add_setting('_s_f_slide_cat', array(
    'default'        => $default
  ));
  $wp_customize->add_control( 'cat_select_box', array(
    'settings' => '_s_f_slide_cat',
    'label'   => 'Select Category:',
    'section'  => '_s_f_home_slider',
    'type'    => 'select',
    'choices' => $cats,
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
