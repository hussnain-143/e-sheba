<?php

class MedicalTheme {

    public function __construct() {

        add_action('wp_enqueue_scripts', [$this, 'enqueue_styles']);
        add_action('after_setup_theme', [$this, 'register_menus']);
    }

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

        wp_enqueue_style('dashicons');
    }

    public function register_menus() {

        register_nav_menus(array(
            'primary' => __('Primary Menu', 'esheba'),
            'footer'  => __('Footer Menu', 'esheba'),
        ));
    }
}

new MedicalTheme();
