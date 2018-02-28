<?php

namespace SourceTheme\Template;

/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

/**
 * Button class
 *
 * @package        Template
 * @since          1.0.0
 * @author         Javier Prieto
 */
class Button {

  public static function btn( $type, $content, $attributes = [] ) {
    $defaults = [
        'class' => "btn btn-{$type}",
        'role'  => 'button',
    ];

    if ( !empty( $attributes['class'] ) ) {
      $attributes['class'] = $defaults['class'] . ' ' . trim( $attributes['class'] );
    }

    $attributes = wp_parse_args( $attributes, $defaults );

    if ( strpos( $attributes['class'], 'alert-dismissible' ) ) {
      $content = static::_dimissible() . $content;
    }

    if ( !empty( $attributes['href'] ) ) {
      return Tag::html( 'a', $content, $attributes );
    } else {
      return Tag::html( 'button', $content, $attributes );
    }
  }

  public static function btn_default( $content, $attributes = [] ) {
    return static::alert( 'default', $content, $attributes );
  }

  public static function btn_primary( $content, $attributes = [] ) {
    return static::alert( 'primary', $content, $attributes );
  }

  public static function btn_success( $content, $attributes = [] ) {
    return static::alert( 'success', $content, $attributes );
  }

  public static function btn_info( $content, $attributes = [] ) {
    return static::alert( 'info', $content, $attributes );
  }

  public static function btn_warning( $content, $attributes = [] ) {
    return static::alert( 'warning', $content, $attributes );
  }

  public static function btn_danger( $content, $attributes = [] ) {
    return static::alert( 'danger', $content, $attributes );
  }

  public static function btn_link( $content, $attributes = [] ) {
    return static::alert( 'link', $content, $attributes );
  }

}
