<?php

/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

use SourceTheme\Core\PublicInit;

require_once SourceTheme\ABSPATH . '/public/class-public-init.php';
require_once SourceTheme\ABSPATH . '/includes/general-template.php';

/**
 * Add Bootstrap scripts
 *
 * @since 1.0.0
 */
add_filter( 'source_framework_public_enqueue_scripts', function($scripts) {
  $init    = PublicInit::get_instance();
  $scripts = $init->enqueue_scripts( $scripts );
  return $scripts;
} );

/**
 * Add Bootstrap styles
 *
 * @since 1.0.0
 */
add_filter( 'source_framework_public_enqueue_styles', function($styles) {
  $init   = PublicInit::get_instance();
  $styles = $init->enqueue_styles( $styles );
  return $styles;
} );

