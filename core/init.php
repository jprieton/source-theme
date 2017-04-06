<?php

/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

require_once SourceTheme\ABSPATH . 'class-core-init.php';

use SourceTheme\Core\Core_Init;

/**
 * Triggered when the theme is changed.
 * @since         1.0.0
 */
add_action( 'after_switch_theme', array( Core_Init::get_instance(), 'after_switch_theme' ) );

/**
 * Triggered on the request immediately following a theme switch.
 * @since         1.0.0
 */
add_action( 'switch_theme', array( Core_Init::get_instance(), 'switch_theme' ) );

/**
 * This hook is called during each page load, after the theme is initialized.
 * @since         1.0.0
 */
add_action( 'after_setup_theme', array( Core_Init::get_instance(), 'after_setup_theme' ) );
