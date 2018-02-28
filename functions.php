<?php

/**
 * SourceTheme functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @link https://codex.wordpress.org/Child_Themes
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are
 * instead attached to a filter or action hook.
 *
 * For more information on hooks, actions, and filters,
 * {@link https://codex.wordpress.org/Plugin_API}
 *
 * @package SourceTheme
 */

// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

/**
 * Define theme constants
 * @since 2.0.0
 */
define( 'ST_VERSION', '2.0.0' );
define( 'ST_BASEDIR', trailingslashit( get_template_directory() ) );
define( 'ST_BASEURL', trailingslashit( get_template_directory_uri() ) );
define( 'ST_TEXTDOMAIN', 'source-theme' );

if ( file_exists( ST_BASEDIR . 'includes/source-theme.phar' ) ) {
  $abspath = 'phar://' . ST_BASEDIR . 'includes/source-theme.phar';
} else {
  $abspath = ST_BASEDIR . 'includes';
}

/**
 * Absolute path to the plugin or phar package
 * @since 1.0.0
 */
define( 'ST_ABSPATH', $abspath );

//Registering an autoload implementation
spl_autoload_register( function($class_name) {
  $namespace = explode( '\\', $class_name );

  if ( $namespace[0] != 'SourceTheme' ) {
    return false;
  }

  $namespace = array_map( 'strtolower', $namespace );

  if ( in_array( 'abstracts', $namespace ) ) {
    $class_filename = 'abstract-class-' . str_replace( '_', '-', end( $namespace ) );
    array_pop( $namespace );
    array_pop( $namespace );
    $namespace[]    = 'core';
  } elseif ( in_array( 'settings', $namespace ) ) {
    $class_filename = 'class-' . str_replace( '_', '-', end( $namespace ) );
    array_pop( $namespace );
    array_pop( $namespace );
    $namespace[]    = 'core';
  } else {
    $class_filename = 'class-' . str_replace( '_', '-', end( $namespace ) );
    array_pop( $namespace );
  }

  $namespace[0] = ST_ABSPATH;
  $namespace[]  = $class_filename;

  $filename = implode( DIRECTORY_SEPARATOR, $namespace ) . '.php';

  if ( file_exists( $filename ) ) {
    require $filename;
  } else {
    // developmet
    var_dump( $filename );
    die;
  }
} );

// Check if SourceFramework is active
if ( !defined( 'SF_ABSPATH' ) ) {

  /**
   * Show notice for required SourceFramework
   * @since 2.0.0
   */
  function source_theme_requires_source_framework() {
    $message = __( 'SourceTheme requires SourceFramework.', ST_TEXTDOMAIN );
    printf( '<div class="notice notice-error is-dismissible"><p>%s</p></div>', esc_html( $message ) );
  }

  add_action( 'admin_notices', 'source_theme_requires_source_framework' );

  // Avoid execute the rest of file
  return;
}

// Check if the minimum requirements are met
if ( version_compare( PHP_VERSION, '5.4.0', '<' ) ) {

  /**
   * Show notice for minimum PHP version required for SourceTheme
   * @since 2.0.0
   */
  function source_theme_min_php_error() {
    $message = __( 'SourceTheme requires PHP version 5.4 or later.', ST_TEXTDOMAIN );
    printf( '<div class="notice notice-error is-dismissible"><p>%s</p></div>', esc_html( $message ) );
  }

  add_action( 'admin_notices', 'source_theme_min_php_error' );
} else {

  // Initialize SourceTheme
  SourceTheme\Core\Init::instance();
}
