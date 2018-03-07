<?php
// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

/**
 * Default excerpt template to showed in singular entries
 *
 * @package     SourceTheme
 * @since       1.0.0
 * @version     1.0.0
 */
?>
<div class="col-lg-7" itemscope itemtype="http://schema.org/Article">
  <div <?php post_class() ?>>
    <?php get_template_part( 'partials/common/headline' ) ?>
    <hr>
    <div itemprop="articleBody" class="clearfix article-body">
      <?php the_content() ?>
    </div>
  </div>
</div>
