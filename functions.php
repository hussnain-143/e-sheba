<?php

class MedicalTheme {

    /**
     * 
     */
    public function __construct() {
        add_action('wp_enqueue_scripts', [$this, 'enqueue_styles']);
        add_action('after_setup_theme', [$this, 'register_menus']);
        add_action('acf/init',  [$this, 'register_medical_landing_fields']);
    }

    /**
     * set the theme Scripts
     */
    public function enqueue_styles() {

        wp_enqueue_style(
            'tailwind-css',
            get_template_directory_uri() . '/src/output.css',
            array(),
            '1.0'
        );

        wp_enqueue_style(
            'main-style',
            get_stylesheet_directory_uri() . '/style.css',
            array(),
            '1.0'
        );
        
        wp_enqueue_script(
            'main-script',
            get_stylesheet_directory_uri() . '/src/js/script.js',
            array('jquery'),
            '1.0',
            true 
        );

        wp_enqueue_style('dashicons');
    }

    /**
     * Register the Theme Menus
     */
    public function register_menus() {

        register_nav_menus(array(
            'primary' => __('Primary Menu', 'esheba'),
            'footer'  => __('Footer Menu', 'esheba'),
        ));
    }

    /**
     * Register the ACF Fields
     */
    public function register_medical_landing_fields() {

        if (!function_exists('acf_add_local_field_group')) {
            return;
        }

        acf_add_local_field_group(array(
            'key' => 'group_medical_landing',
            'title' => 'Medical Landing Page',
            'fields' => array(

                array(
                    'key' => 'field_hero_title',
                    'label' => 'Hero Title',
                    'name' => 'hero_title',
                    'type' => 'text',
                    'default_value' => 'Get the Best Medical Support Instantly',
                ),

                array(
                    'key' => 'field_hero_description',
                    'label' => 'Hero Description',
                    'name' => 'hero_description',
                    'type' => 'textarea',
                    'default_value' => 'Find expert doctors and medical specialists online 24/7 to support your healthcare journey.',
                ),

                array(
                    'key' => 'field_hero_image',
                    'label' => 'Hero Image',
                    'name' => 'hero_image',
                    'type' => 'image',
                    'return_format' => 'array',
                    'preview_size' => 'medium',
                    'library' => 'all',
                ),

                array(
                    'key' => 'field_specialists_title_a',
                    'label' => 'Specialist A Title',
                    'name' => 'specialists_title_a',
                    'type' => 'text',
                    'default_value' => 'Cardiology',
                ),
                array(
                    'key' => 'field_specialists_description_a',
                    'label' => 'Specialist A Description',
                    'name' => 'consulting_specialists_description_a',
                    'type' => 'textarea',
                    'default_value' => 'Our cardiology department offers world-class heart care services with expert consultation.',
                ),

                array(
                    'key' => 'field_specialists_title_b',
                    'label' => 'Specialist B Title',
                    'name' => 'specialists_title_b',
                    'type' => 'text',
                    'default_value' => 'Neurology',
                ),
                array(
                    'key' => 'field_specialists_description_b',
                    'label' => 'Specialist B Description',
                    'name' => 'consulting_specialists_description_b',
                    'type' => 'textarea',
                    'default_value' => 'Our neurologists help treat brain and nervous system disorders with advanced diagnostics.',
                ),

                array(
                    'key' => 'field_specialists_title_c',
                    'label' => 'Specialist C Title',
                    'name' => 'specialists_title_c',
                    'type' => 'text',
                    'default_value' => 'Dermatology',
                ),
                array(
                    'key' => 'field_specialists_description_c',
                    'label' => 'Specialist C Description',
                    'name' => 'consulting_specialists_description_c',
                    'type' => 'textarea',
                    'default_value' => 'Top dermatologists offering skincare solutions for all ages and skin types.',
                ),

                array(
                    'key' => 'field_specialists_title_d',
                    'label' => 'Specialist D Title',
                    'name' => 'specialists_title_d',
                    'type' => 'text',
                    'default_value' => 'Orthopedics',
                ),
                array(
                    'key' => 'field_specialists_description_d',
                    'label' => 'Specialist D Description',
                    'name' => 'consulting_specialists_description_d',
                    'type' => 'textarea',
                    'default_value' => 'Expert orthopedic care for bones, joints, and muscles.',
                ),

            ),
            'location' => array(
                array(
                    array(
                        'param' => 'page_template',
                        'operator' => '==',
                        'value' => 'front-page.php',
                    ),
                ),
            ),
        ));
    }
    
}

new MedicalTheme();