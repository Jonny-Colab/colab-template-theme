<?php
if ( ! defined( 'ABSPATH' ) ) {
  exit;
}

add_action( 'wp_enqueue_scripts', function () {
  $version = wp_get_theme()->get( 'Version' );

  wp_enqueue_style(
    'hello-elementor',
    get_template_directory_uri() . '/style.css',
    [],
    $version
  );

  wp_enqueue_style(
    'colab-template-theme',
    get_stylesheet_uri(),
    [ 'hello-elementor' ],
    $version
  );

  wp_enqueue_script(
    'colab-template-theme',
    get_stylesheet_directory_uri() . '/assets/js/main.js',
    [],
    $version,
    true
  );
}, 20 );
