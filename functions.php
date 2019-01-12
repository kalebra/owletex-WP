<?php

    include('customizer.php');

    function my_scripts(){
        wp_enqueue_style('reset', get_stylesheet_directory_uri() . '/style/reset.css', false, time() );
        wp_enqueue_style('fonts-ttcommons', get_stylesheet_directory_uri() . '/fonts/TTCommons/stylesheet.css', false, time() );
        wp_enqueue_style('fonts-roboto', 'https://fonts.googleapis.com/css?family=Roboto', false, time() );
        wp_enqueue_style('slick-css', get_stylesheet_directory_uri() . '/slick/slick.css', false, time() );
        wp_enqueue_style('slick-theme-css', get_stylesheet_directory_uri() . '/slick/slick-theme.css', false, time() );
        wp_enqueue_style('aos-css', get_stylesheet_directory_uri() . '/style/aos.css', false, time() );
        wp_enqueue_style('style-main', get_stylesheet_directory_uri() . '/style/style.css', false, time() );

        wp_deregister_script('jquery');
        wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, null);
        wp_enqueue_script('jquery');

        wp_enqueue_script('lottie', get_stylesheet_directory_uri() . '/js/lottie.min.js', false, null, true );
        wp_enqueue_script('aos', get_stylesheet_directory_uri() . '/js/aos.js', false, null, true );
        wp_enqueue_script('slick', get_stylesheet_directory_uri() . '/slick/slick.js', 'jquery', null, true );
        wp_enqueue_script('main', get_stylesheet_directory_uri() . '/js/main.js', array('jquery', 'lottie', 'slick'), null, true );
    }
    add_action('wp_enqueue_scripts', 'my_scripts');

    //отключаем админ бар
    add_filter('show_admin_bar', '__return_false');

    //убираем отступ под админ бар
    function remove_admin_login_header() {
        remove_action('wp_head', '_admin_bar_bump_cb');
    }
    add_action('get_header', 'remove_admin_login_header');

    //включить миниатюры постов
    add_theme_support( 'post-thumbnails' );

    //мультиязычность
    function setup_theme(){
        load_theme_textdomain('owletex-landing', get_template_directory() . '/languages');
    }
    add_action('after_setup_theme', 'setup_theme');

    //инициализации меню
    function register_my_menu() {
        register_nav_menu('header-menu',__( 'Header Menu' ));
    }
    add_action( 'init', 'register_my_menu' );

    function register_my_menus() {
        register_nav_menus(
            array(
                'header-menu' => __( 'Header Menu' )
            )
        );
    }
    add_action( 'init', 'register_my_menus' );