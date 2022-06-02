<?php

function import_stylesheets(){
    wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/css/slick.min.css');
    //
}

function import_scripts(){
    wp_enqueue_script( 'slick-js', get_stylesheet_directory_uri() . '/js/slick.min.js',array('jquery'));
}