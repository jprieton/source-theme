<?php

// If this file is called directly, abort.
if ( !defined( 'ABSPATH' ) ) {
  die( 'Direct access is forbidden.' );
}

/**
 * Default excerpt template to showed in archive/entry pages
 *
 * @package     SourceTheme
 * @since       1.0.0
 * @version     1.0.0
 */
?>
<div class="col-lg-7" itemprop="itemListElement" itemscope itemtype="http://schema.org/BlogPosting">
  <div <?php post_class() ?>>
    <h2 itemprop="headline name"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
    <div>
      <time itemprop="datePublished" content="<?php echo get_the_date( 'c' ) ?>">
        <?php printf( __( 'Published %s ago', ST_TEXTDOMAIN ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?>
      </time>
      <div itemprop="articleBody">
        <?php the_excerpt() ?>
      </div>
      <div class="text-right"><a href="<?php the_permalink() ?>"><?php _e( 'Read more &raquo;', ST_TEXTDOMAIN ) ?></a></div>
    </div>
  </div>
</div>
