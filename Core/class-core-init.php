<?php

namespace SourceTheme\Core;

/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

/**
 * CoreInit class
 *
 * @package        Core
 * @subpackage     Init
 * @since          1.0.0
 * @author         Javier Prieto <jprieton@gmail.com>
 */
final class Core_Init {

  /**
   * Static instance of this class
   *
   * @since         1.0.0
   * @var           Public_Init
   */
  protected static $instance;

  /**
   * @since         1.0.0
   * @return  static
   */
  public static function &get_instance() {
    if ( !isset( static::$instance ) ) {
      static::$instance = new static;
    }
    return static::$instance;
  }

  /**
   * Declared as protected to prevent creating a new instance outside of the class via the new operator.
   *
   * @since         1.0.0
   */
  protected function __construct() {

  }

  /**
   * Declared as private to prevent cloning of an instance of the class via the clone operator.
   *
   * @since         1.0.0
   */
  private function __clone() {

  }

  /**
   * declared as private to prevent unserializing of an instance of the class via the global function unserialize().
   *
   * @since         1.0.0
   */
  private function __wakeup() {

  }

  /**
   * Declared as protected to prevent serializg of an instance of the class via the global function serialize().
   *
   * @since         1.0.0
   */
  protected function __sleep() {

  }

  /**
   * Triggered when the wordpress theme is changed.
   *
   * @since         1.0.0
   */
  public function switch_theme() {

  }

  /**
   * Triggered on the request immediately following a theme switch.
   *
   * @since         1.0.0
   */
  public function after_switch_theme() {

  }

  /**
   * This hook is called during each page load, after the theme is initialized.
   *
   * @since         1.0.0
   */
  public function after_setup_theme() {

    // Make theme available for translation
    load_theme_textdomain( \SourceTheme\TEXDOMAIN, get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head
    add_theme_support( 'automatic-feed-links' );

    // Allows the use of the post thumbnails
    add_theme_support( 'post-thumbnails' );

    // Enables plugins and themes to manage the document title tag.
    add_theme_support( 'title-tag' );

    // Allows the use of HTML5 markup for the search forms, comment forms, comment lists, gallery, and caption.
    add_theme_support( 'html5', array( 'comment-list', 'comment-form', 'search-form', 'gallery', 'caption' ) );
  }

}
