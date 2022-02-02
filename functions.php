<?php

// create function wich add title params from wp in header
function montheme_support (){
    add_theme_support('title-tag');
}
// after a specific action ll setup the function ( ex : here waits all setup from wp then add the theme support )
add_action('after_setup_theme','montheme_support');


