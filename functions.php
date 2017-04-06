<?php

/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

/**
 * Define plugin constants
 */
define( 'SourceTheme\ABSPATH', file_exists( __DIR__ . '/source-theme.phar' ) ? 'phar://' . __DIR__ . '/source-theme.phar' : __DIR__  );
define( 'SourceTheme\VERSION', '1.0.0' );
define( 'SourceTheme\TEXDOMAIN', 'source-theme' );

require_once SourceTheme\ABSPATH . '/core/init.php';
