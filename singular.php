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
    the_post();
    $publish_date  = get_the_date( 'c' );
    $modified_date = get_the_modified_date( 'c' );
    ?>
    <div class="col-lg-7" itemprop="itemListElement" itemscope itemtype="http://schema.org/BlogPosting">
      <div <?php post_class() ?>>
        <h2 itemprop="headline"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
        <div>
          <time itemprop="datePublished" content="<?php echo $publish_date ?>">
            <?php printf( _x( 'Published %s ago', '%s = human-readable time difference', ST_TEXTDOMAIN ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?>
          </time>

          <div itemprop="articleBody">
            <?php the_content() ?>
          </div>

          <?php if ( $modified_date != $publish_date ) { ?>
            <time itemprop="dateModified" content="<?php echo $modified_date ?>">
              <?php printf( _x( 'Updated %s ago', '%s = human-readable time difference', ST_TEXTDOMAIN ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?>
            </time>
          <?php } ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?php
get_footer();
