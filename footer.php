    <?php
    /**
     * If this file is called directly, abort.
     */
    if ( !defined( 'ABSPATH' ) ) {
      die( 'Direct access is forbidden.' );
    }

    wp_footer();
    /**
     * This hook is called after the main content is rendered
     * @since 1.0.0
     */
    do_action( 'after_main_content' );
    ?>
  </body>
</html>