<?php
/**
 * If this file is called directly, abort.
 */
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

use SourceFramework\Template\Microdata;

/**
 * This is the template that displays all of the <footer> section and everything after main content
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package     WordPress
 * @subpackage  SourceTheme
 * @since       1.0.0
 * @version     1.0.0
 */
?>

    <footer id="site-footer" <?php Microdata::web_page_footer() ?>>

    </footer>

    <?php
    wp_footer();

    /**
    * This hook is called after the main content is rendered
    * @since 1.0.0
    */
    do_action( 'after_main_content' );
    ?>

  </body>
</html>