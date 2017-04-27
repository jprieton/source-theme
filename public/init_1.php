<?php

/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

if ( !get_bool_option( 'bootstrap_enabled' ) ) {
  return;
}

use SourceFramework\Bootstrap\Public_Init;

require_once SourceTheme\ABSPATH . '/bootstrap/class-public-init.php';
require_once SourceTheme\ABSPATH . '/bootstrap/general-template.php';

/**
 * Add Bootstrap scripts
 *
 * @since 1.0.0
 */
add_filter( 'source_framework_public_enqueue_scripts', [ Public_Init::get_instance(), 'enqueue_scripts' ] );

/**
 * Add Bootstrap styles
 *
 * @since 1.0.0
 */
add_filter( 'source_framework_public_enqueue_styles', [ Public_Init::get_instance(), 'enqueue_styles' ] );
