<?php

namespace SourceTheme\Core;

/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

/**
 * Core_Setup class
 *
 * @package        Core
 * @subpackage     Init
 * @since          1.0.0
 * @author         Javier Prieto <jprieton@gmail.com>
 */
final class Setup {

  /**
   * The code that runs during plugin activation.
   *
   * @since         1.0.0
   */
  public static function after_switch_theme() {

  }

  /**
   * The code that runs during plugin deactivation.
   *
   * @since         1.0.0
   */
  public static function switch_theme() {

  }

  /**
   * The code that runs during plugin deactivation.
   *
   * @since         1.0.0
   */
  public static function uninstall() {
    $options = [];
    foreach ( $options as $option ) {
      delete_option( $option );
    }
  }

}
