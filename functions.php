<?php

// her hentes interne og externe scrips / stylesheets ind 
 function webshop_files() {
    wp_enqueue_script('main-webshop-js', get_theme_file_uri('js/main.js'), NULL, '1.0', true);
    wp_enqueue_script('AOS', 'https://unpkg.com/aos@2.3.1/dist/aos.js');
    wp_enqueue_style('google-fonts', 'https://fonts.googleapis.com/css?family=Open+Sans');
    wp_enqueue_style('font-awesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css');
    wp_enqueue_style('webshop_main_styles', get_stylesheet_uri());
}
// eksekvere scriptet over
add_action('wp_enqueue_scripts','webshop_files' );



// add support - her kan man låse forskellige ting op i WP 
add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );



//   Her kan du sætte dine menuer - wp_nav_menu() - op og sætte dem op til forskellige lokationer
register_nav_menus( 

    array(

    'top-menu' => 'Top menu',
    'produkt-menu' => 'Produkt Menu'

) );



// Billeder størrelser (tror et plugin gør det samme)

// true cropper det (skære noget at billedet af) false = (cover)
// Man behøver ikke dette da man også kan bruge wps small / medium / large
add_image_size( 'post_image', 1100, 750, true); 




// woocommerce support - for at få woocommerce til at virke, skal det de 4 linjer skrives ind

function mytheme_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'mytheme_add_woocommerce_support' );