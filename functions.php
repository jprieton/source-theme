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
if ( file_exists( __DIR__ . DIRECTORY_SEPARATOR . 'source-theme.phar' ) ) {
  define( 'SourceTheme\ABSPATH', 'phar://' . __DIR__ . DIRECTORY_SEPARATOR . 'source-theme.phar' );
} else {
  define( 'SourceTheme\ABSPATH', __DIR__ . DIRECTORY_SEPARATOR );
}
define( 'SourceTheme\VERSION', '1.0.0' );
define( 'SourceTheme\TEXDOMAIN', 'source-theme' );

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


require_once SourceTheme\ABSPATH . '/core/init.php';
