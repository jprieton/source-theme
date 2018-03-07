<?php
// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

get_header();
?>
<div class="container">
  <div class="row justify-content-md-center"  itemscope itemtype="http://schema.org/ItemList">
    <?php
    while ( have_posts() ) {
      the_post();
      $template = get_post_format() ?: get_post_type();
      get_template_part( 'partials/excerpt/content', $template );
    }
    ?>
  </div>
</div>
<?php
get_footer();
