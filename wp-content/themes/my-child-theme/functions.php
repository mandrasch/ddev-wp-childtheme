<?php
if (!defined('ABSPATH')) {
  exit;
}

function enqueue_child_theme_styles()
{
  // parent theme css
  wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

  // child theme css & js
  wp_enqueue_style('my-child-theme-style-main', get_stylesheet_directory_uri() . '/style.css', array('parent-style'));

  // child theme js (to footer)
  wp_enqueue_script('my-child-theme-style-js', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '1.0', true);

  // Add other css / js files (or fonts via
  // https://github.com/WPTT/webfont-loader)

  wp_enqueue_style('my-child-theme-style-custom', get_stylesheet_directory_uri() . '/css/custom.css', array('parent-style'));
}
add_action('wp_enqueue_scripts', 'enqueue_child_theme_styles');
