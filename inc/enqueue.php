<?php

/**
 * Package Name assets (Styles and scripts)
 *
 * @package Package_Name
 */

function coiny_assets() {
  // Load styles
  wp_enqueue_style( 'coiny-styles', get_template_directory_uri() . '/app/dist/styles.css', [], THEME_VERSION );

  // Load scripts
  wp_enqueue_script( 'coiny-scripts', get_template_directory_uri() . '/app/dist/bundled.js', [], THEME_VERSION, true );
}

add_action( 'wp_enqueue_scripts', 'coiny_assets' );