<?php
/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

/**
 * This is the template that for displaying 404 pages (not found)
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 * @link https://github.com/h5bp/html5-boilerplate/blob/master/src/404.html
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
    <title>Page Not Found</title>
    <style>

      * {
        line-height: 1.2;
        margin: 0;
      }

      html {
        color: #888;
        display: table;
        font-family: sans-serif;
        height: 100%;
        text-align: center;
        width: 100%;
      }

      body {
        display: table-cell;
        vertical-align: middle;
        margin: 2em auto;
      }

      h1 {
        color: #555;
        font-size: 2em;
        font-weight: 400;
      }

      p {
        margin: 0 auto;
        width: 280px;
      }

      @media only screen and (max-width: 280px) {

        body, p {
          width: 95%;
        }

        h1 {
          font-size: 1.5em;
          margin: 0 0 0.3em;
        }

      }

    </style>
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

  </head>

  <body <?php body_class() ?>>

    <?php
    /**
     * This hook is called before the main content is rendered
     * @since 1.0.0
     */
    do_action( 'before_main_content' );
    ?>

    <h1><?php _e( 'Page Not Found', SourceTheme\TEXTDOMAIN ) ?></h1>
    <p><?php _e( 'Sorry, but the page you were trying to view does not exist.', SourceTheme\TEXTDOMAIN ) ?></p>
  </body>
</html>
<!-- IE needs 512+ bytes: https://blogs.msdn.microsoft.com/ieinternals/2010/08/18/friendly-http-error-pages/ -->
