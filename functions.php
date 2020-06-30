<?php

/**
 * CSS
 */

// cette fonction se charge d'intégrer les feuilles de style du thème
function my_theme_enqueue_styles() {
    // chargement de la feuille de style du thème
    wp_enqueue_style( 'bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css', [] );
    wp_enqueue_style( 'my-theme-main', get_stylesheet_directory_uri().'/style.css', ['bootstrap'] );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );

/**
 * JS
 */

// cette fonction se charge d'intégrer les scripts JS du thème
function my_theme_enqueue_script() {
    // chargement du script JS du thème
    wp_enqueue_script( 'my-theme-main', get_stylesheet_directory_uri().'/js/main.js', [] );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_script' );
