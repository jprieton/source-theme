<?php

namespace SourceTheme\Template;

/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

use SourceFramework\Template\Tag;

/**
 * Description of Button
 *
 * @package        Template
 * @since          1.0.0
 * @author         Javier Prieto <jprieton@gmail.com>
 */
class Alert {

  public static function alert( $type, $content, $attributes = [] ) {
    $defaults = [
        'class' => "alert alert-{$type}",
        'role'  => 'alert',
    ];

    if ( !empty( $attributes['class'] ) ) {
      $attributes['class'] = $defaults['class'] . ' ' . trim( $attributes['class'] );
    }

    $attributes = wp_parse_args( $attributes, $defaults );

    if ( strpos( $attributes['class'], 'alert-dismissible' ) ) {
      $content = static::_dimissible() . $content;
    }

    return Tag::html( 'div', $content, $attributes );
  }

  public static function alert_success( $content, $attributes = [] ) {
    return static::alert( 'success', $content, $attributes );
  }

  public static function alert_info( $content, $attributes = [] ) {
    return static::alert( 'info', $content, $attributes );
  }

  public static function alert_warning( $content, $attributes = [] ) {
    return static::alert( 'warning', $content, $attributes );
  }

  public static function alert_danger( $content, $attributes = [] ) {
    return static::alert( 'danger', $content, $attributes );
  }

  private static function _dimissible() {
    $span   = Tag::html( 'span', '&times;', [ 'aria-hidden' => 'true' ] );
    $button = Tag::html( 'button', $span, [
                'type'         => 'button',
                'class'        => 'close',
                'data-dismiss' => 'alert',
                'aria-label'   => 'Close'
            ] );
    return $button;
  }

}
