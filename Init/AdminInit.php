<?php

namespace SourceTheme\Init;

/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

use SourceFramework\Abstracts\Singleton;

/**
 * AdminInit class
 *
 * @package        Core
 * @subpackage     Init
 * @since          1.0.0
 * @author         Javier Prieto <jprieton@gmail.com>
 */
final class AdminInit extends Singleton {

  /**
   * Static instance of this class
   *
   * @since         1.0.0
   * @var           AdminInit
   */
  protected static $instance;

}
