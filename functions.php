<?php
add_theme_support( 'post-thumbnails' ); 
require_once('lib/wp_bootstrap_navwalker.php');

////////////////////////////////////////////////////////////////////
// Theme Information
////////////////////////////////////////////////////////////////////

$themename = "arstral.ro";
$developer_uri = "https://www.dsp-studio.ro";
$shortname = "arstral";
$version = '1';
load_theme_textdomain( 'arstral.ro', get_template_directory() . '/languages' );

////////////////////////////////////////////////////////////////////
// Enqueue Styles (normal style.css and bootstrap.css)
////////////////////////////////////////////////////////////////////

function dspstudio_theme_stylesheets()
{
  wp_enqueue_style('bootstrap.css', get_template_directory_uri() . '/lib/bootstrap-4.0.0-alpha.6-dist/css/bootstrap.min.css', array(), NULL, 'all');
  wp_enqueue_style('stylesheet', get_stylesheet_uri(), array(), null, 'all');
  wp_enqueue_style('ie10-viewport-bug-workaround.css', get_template_directory_uri() . '/css/ie10-viewport-bug-workaround.css', array(), NULL, 'all');
}
add_action('wp_enqueue_scripts', 'dspstudio_theme_stylesheets');

//Editor Style
// add_editor_style('css/editor-style.css');

////////////////////////////////////////////////////////////////////
// Enqueue javascripts
////////////////////////////////////////////////////////////////////

function dspstudio_theme_javascripts()
{
  wp_enqueue_script('jquery-slim.min.js', 'https://code.jquery.com/jquery-3.1.1.slim.min.js', array(), null, true);
  wp_enqueue_script('tether.min.js', 'https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js', array(), null, true);
  wp_enqueue_script('bootstrap.min.js', 'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js', array(), null, true );
  wp_enqueue_script('custom.js', get_template_directory_uri() . '/js/custom.js', array(), null, true );
}
add_action( 'wp_enqueue_scripts', 'dspstudio_theme_javascripts' );

////////////////////////////////////////////////////////////////////
// Register Menus
////////////////////////////////////////////////////////////////////

register_nav_menus(
    array(
        'main_menu' => 'Main Menu',
        'footer_menu' => 'Footer Menu'
    )
);