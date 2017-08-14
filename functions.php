<?php

/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

/**
 * Define plugin constants
 * @since 1.0.0
 */
define( 'SourceTheme\VERSION', '1.0.0' );
define( 'SourceTheme\PLUGIN_FILE', __FILE__ );
define( 'SourceTheme\BASENAME', plugin_basename( __FILE__ ) );
define( 'SourceTheme\TEXTDOMAIN', 'source-theme' );

/**
 * Path to the plugin directory or phar package
 * @since 1.0.0
 */
if ( file_exists( plugin_dir_path( SourceTheme\PLUGIN_FILE ) . 'source-framework.phar' ) ) {
  define( 'SourceTheme\ABSPATH', 'phar://' . plugin_dir_path( SourceTheme\PLUGIN_FILE ) . 'source-framework.phar' );
} else {
  define( 'SourceTheme\ABSPATH', plugin_dir_path( SourceTheme\PLUGIN_FILE ) );
}

/**
 * Registering an autoload implementation
 * @since 1.0.0
 */
spl_autoload_register( function($class_name) {

  $namespace = explode( '\\', $class_name );

  if ( $namespace[0] != 'SourceTheme' ) {
    return false;
  }

  $namespace[0] = SourceTheme\ABSPATH;
  $filename     = implode( DIRECTORY_SEPARATOR, $namespace ) . '.php';

  if ( file_exists( $filename ) ) {
    include $filename;
  }
} );

/**
 * Initialize SourceTheme
 * @since 1.0.0
 */
SourceTheme\Core\Init::get_instance();

/**
 * Initialize Script API
 * @since 1.0.0
 */
SourceTheme\Core\Script::get_instance();

/**
 * Initialize Style API
 * @since 1.0.0
 */
SourceTheme\Core\Style::get_instance();

/**
 * Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues.
 */
