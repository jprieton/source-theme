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
 * PublicInit class
 *
 * @package        Core
 * @subpackage     Init
 * @since          1.0.0
 * @author         Javier Prieto <jprieton@gmail.com>
 */
class PublicInit extends Singleton {

  /**
   * Static instance of this class
   *
   * @since 1.0.0
   * @var   PublicInit
   */
  protected static $instance;

  /**
   * Register & enqueue plugin scripts
   *
   * @since 1.0.0
   */
  public function enqueue_scripts( $scripts ) {
    $scripts['bootstrap'] = [
        'local'     => plugins_url( 'assets/js/bootstrap.min.js', \SourceFramework\PLUGIN_FILE ),
        'remote'    => '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js',
        'deps'      => [ 'jquery' ],
        'ver'       => '3.3.7',
        'in_footer' => true,
        'autoload'  => true,
    ];
    return $scripts;
  }

  /**
   * Register & enqueue plugin styles
   *
   * @since 1.0.0
   */
  public function enqueue_styles( $styles ) {
    $styles['bootstrap'] = [
        'remote'   => '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css',
        'ver'      => '3.3.7',
        'autoload' => true,
    ];
    $styles['bootstrap-theme'] = [
        'remote'   => '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css',
        'ver'      => '3.3.7',
    ];
    return $styles;
  }

}
