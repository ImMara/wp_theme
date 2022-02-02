<?php

/*to avoid colision we add namespace*/
namespace App;


/*create function which add title params from wp in header*/
function montheme_support (){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

 /*create function for assets*/
function montheme_register_assets(){
    wp_register_style('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css',[]);
    wp_register_script('bootstrap','https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js',[],false,true);
    // true to put the js in the footer
    wp_deregister_script('jquery');
    wp_enqueue_script('bootstrap');
    wp_enqueue_style('bootstrap');
}

function montheme_title_separator(){
    return '|';
}

/*the filter r used to change var*/
function montheme_document_title_parts($title){
//    var_dump($title); die();
    unset($title['tagline']);
    return $title;
}


/*hook after a specific action ll setup the function ( ex : here waits all setup from wp then add the theme support )*/
add_action('after_setup_theme','App\montheme_support');
add_action('wp_enqueue_scripts','App\montheme_register_assets');
add_filter('document_title_separator','App\montheme_title_separator');
add_filter('document_title_parts','App\montheme_document_title_parts');

