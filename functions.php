<?php

    /**
     *  inserts 
     */

    
    // add tailwind 
    // function stricto_tailwind () {
    //     wp_register_style( 'tailwindcss', get_template_directory_uri() . "/assets/css/tailwind.prod.css", array(), false, 'all');
    //     wp_enqueue_style('tailwindcss');
    // }
    // add_action( 'wp_enqueue_scripts', 'stricto_tailwind' );

    
    function stricto_css () {
        wp_register_style( 'cssprod', get_template_directory_uri() . "/assets/css/style.css", array(), false, 'all');
        wp_enqueue_style('cssprod');
    }
    add_action( 'wp_enqueue_scripts', 'stricto_css' );


    // add js
    function stricto_script () {
        wp_enqueue_script('strict-js', get_template_directory_uri() . "/assets/js/main.js", array(), false, true);
    }
    add_action('wp_enqueue_scripts', 'stricto_script');

    add_filter('script_loader_tag', 'add_type_attribute' , 10, 3);
    
    function add_type_attribute($tag, $handle, $src) {
        // if not your script, do nothing and return original $tag
        if ( 'strict-js' !== $handle ) {
            return $tag;
        }
        // change the script tag by adding type="module" and return it.
        $tag = '<script type="module" src="' . esc_url( $src ) . '"></script>';
        return $tag;
    }


    /**
     * theme functions
    */
    

    add_theme_support('menus');
    add_theme_support('post-thumbnails');
    add_theme_support('widgets');
    add_theme_support('custom-logo');

    //images options
    add_image_size('stricto-large', 1080, 720, true);
    add_image_size('stricto-medium', 842, 595, true);
    add_image_size('stricto-normal', 720, 480, true);
    add_image_size('stricto-small', 480, 320, true);

    //load menus
    function register_menus() {

        register_nav_menus(
            
            array(
                
                'side-menu' => __('Stricto Side Menu'),
                'desk-menu' => __('Stricto Desk Menu')
    
            )
        );
    }
    add_action('init', 'register_menus');

    function themename_custom_logo_setup() {
        $defaults = array(
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'header-text'          => array( 'site-title', 'site-description' ),
            'unlink-homepage-logo' => true, 
        );
     
        add_theme_support( 'custom-logo', $defaults );
    }

    //register sidebars
    function stricto_sidebars() {
        register_sidebar(
            array(
                'name' => 'Page Sidebar',
                'id' => 'page-sidebar',
                'before_title' => '<h4 class="stricto-widget">',
                'after_title' => '</h4>'
            )
        );
        register_sidebar(
            array(
                'name' => 'Archive Sidebar',
                'id' => 'archive-sidebar',
                'before_title' => '<h4 class="stricto-widget">',
                'after_title' => '</h4>'
            )
        );
        register_sidebar(
            array(
                'name' => 'Footer Sidebar',
                'id' => 'footer-sidebar',
                'before_title' => '<h4 class="stricto-widget">',
                'after_title' => '</h4>'
            )
        );
    }
    add_action('widgets_init','stricto_sidebars');


    // CUSTOM POSTS
    function stricto_revista_venenosa () {
        
        $args = array (
            'labels' => array(
                'name' => 'Venenosa',
                'singular_name' => 'revista',
            ),
            'public' => true,
            'has_archive' => true,
            'supports' => array('title', 'editor', 'thumbnail', 'excerpt', 'post-formats' ),
        );

        register_post_type('Venenosa', $args);
    }
    add_action('init', 'stricto_revista_venenosa');

