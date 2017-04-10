<?php

/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

/**
 * Load core dependencies
 */
require_once SourceTheme\ABSPATH . '/admin/class-admin-init.php';

/**
 * Enqueue admin script & styles
 * @since 1.0.0
 */
add_action( 'admin_enqueue_scripts', function() {

  $init = SourceTheme\Core\Admin_Init::get_instance();

  /**
   * Register and enqueue plugin scripts
   * @since 1.0.0
   */
  $init->enqueue_scripts();

  /**
   * Register and enqueue plugin styles
   * @since 1.0.0
   */
  $init->enqueue_styles();
} );
