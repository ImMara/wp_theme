<?php

/*create function which add title params from wp in header*/
function montheme_support (){
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('menus');
    register_nav_menu('header','En tete du menu');
    register_nav_menu('footer','Pied de page');

    add_image_size('card-header', 350,215, true);
    remove_image_size('medium');
    add_image_size('medium',500,500,true);
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

function montheme_menu_class($classes)
{
    $classes[] = 'nav-item';
    return $classes;
}

function montheme_menu_link_class($attrs)
{
    $attrs['class'] = 'nav-link';
    return $attrs;
}

function montheme_pagination()
{
    $pages = paginate_links(['type' => 'array']);

    if( $pages === null ){
        return;
    }

    echo '<nav aria-label="Paginations" class="my-4">';
    echo '<ul class="pagination">';

    foreach($pages as $page )
    {
        $active = strpos($page,'current') !== false;
        $class= 'page-item';
        if($active){
            $class .=' active';
        }
        echo '<li class=" ' .$class. '">';
        echo str_replace('page-numbers','page-link',$page);
        echo '</li>';
    }
    echo '</ul>';
    echo '</nav>';
}




/*hook after a specific action ll setup the function ( ex : here waits all setup from wp then add the theme support )*/
add_action('after_setup_theme','montheme_support');
add_action('wp_enqueue_scripts','montheme_register_assets');
add_filter('document_title_separator','montheme_title_separator');
add_filter('document_title_parts','montheme_document_title_parts');
add_filter('nav_menu_css_class','montheme_menu_class');
add_filter('nav_menu_link_attributes','montheme_menu_link_class');

require_once('metaboxes/sponso.php');
SponsoMetaBox::register();