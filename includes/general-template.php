<?php

/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

use SourceFramework\Template\Tag;

/**
 * Returns a Bootstrap pagination links
 *
 * @since  1.0.0
 * @see    https://codex.wordpress.org/Function_Reference/paginate_links
 *
 * @global  type          $wp_query
 * @param   array         $args
 * @return  string
 */
function bootstrap_paginate_links( $args = [] ) {
  $defaults = [
      'type' => 'list',
  ];
  $args     = wp_parse_args( $args, $defaults );

  $paginate = paginate_links( $args );
  $search   = [
      "<ul class='page-numbers'>",
      "<li><span class='page-numbers current'>"
  ];
  $replace  = [
      "<ul class='page-numbers pagination'>",
      "<li class='active'><span class='page-numbers current'>"
  ];
  $paginate = str_replace( $search, $replace, $paginate );

  $attributes = [
      'itemscope',
      'itemtype' => 'http://schema.org/SiteNavigationElement'
  ];

  $tag        = Tag::get_instance();
  $pagination = $tag->html( 'nav', $paginate, $attributes );

  return $pagination;
}
