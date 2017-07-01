<?php
/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

use SourceFramework\Template\Microdata;

/**
 * This is the template that displays all of the <head> section and everything before main content
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package     WordPress
 * @subpackage  SourceTheme
 * @since       1.0.0
 * @version     1.0.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

  <head>

    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <?php wp_head() ?>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <noscript>
        <strong>Warning !</strong>
        Because your browser does not support HTML5, some elements are simulated using javascript.
        Unfortunately your browser has disabled scripting. Please enable it in order to display correctly this page.
      </noscript>
    <![endif]-->

    <!--[if gte IE 9]>
      <style type="text/css">
        .gradient {
           filter: none;
        }
      </style>
    <![endif]-->

  </head>

  <body <?php body_class() ?> <?php echo Microdata::web_page() ?>>

    <?php
    /**
     * This hook is called before the main content is rendered
     * @since 1.0.0
     */
    do_action( 'before_main_content' );
    ?>
