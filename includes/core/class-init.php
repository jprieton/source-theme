<?php

namespace SourceTheme\Core;

/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

use SourceFramework\Abstracts\Singleton;

/**
 * Init class
 *
 * @package     SourceTheme
 * @subpackage  Core
 *
 * @author      Javier Prieto
 * @copyright	  Copyright (c) 2017, Javier Prieto
 * @since       1.0.0
 * @license     http://www.gnu.org/licenses/gpl-3.0.txt
 */
final class Init extends Singleton {

  /**
   * Static instance of this class
   *
   * @since         1.0.0
   * @var           Init
   */
  protected static $instance;

  /**
   * Declared as protected to prevent creating a new instance outside of the class via the new operator.
   *
   * @since         1.0.0
   */
  protected function __construct() {
    parent::__construct();

    /**
     * Enable theme suports
     * @since 1.0.0
     */
    add_action( 'init', [ $this, 'add_theme_supports' ] );
  }

  /**
   * Enable theme suports
   *
   * @since 1.0.0
   */
  public function add_theme_supports() {
    /**
     * Enables Post Formats support for a theme.
     * @since 1.0.0
     */
    add_theme_support( 'post-formats' );

    /**
     * Enables Automatic Feed Links for post and comment in the head.
     * @since 1.0.0
     */
    add_theme_support( 'automatic-feed-links' );
  }

}
