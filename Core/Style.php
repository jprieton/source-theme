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
 * @author      Javier Prieto <jprieton@gmail.com>
 * @copyright	  Copyright (c) 2017, Javier Prieto
 * @since       1.0.0
 * @license     http://www.gnu.org/licenses/gpl-3.0.txt
 */
final class Style extends Singleton {

  /**
   * Static instance of this class
   *
   * @since         1.0.0
   * @var           Style
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
     * Register and enqueue scripts
     * @since   1.0.0
     */
    add_filter( 'source_framework_styles', [ $this, 'register_public_styles' ] );
  }

  /**
   * Register styles
   *
   * @since 1.0.0
   */
  public function register_public_styles( $styles ) {
    $styles['bootstrap'] = [
        'remote'   => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        'ver'      => '3.3.7',
        'autoload' => true,
    ];
    return $styles;
  }

}
