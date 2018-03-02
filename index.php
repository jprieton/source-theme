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
    global $post;
    var_dump($post);

    while ( have_posts() ) {
      the_post();
      ?>
      <div class="col-lg-7" itemprop="itemListElement" itemscope itemtype="http://schema.org/BlogPosting">
        <div <?php post_class() ?>>
          <h2 itemprop="headline"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
          <div>
            <time itemprop="datePublished" content="<?php echo get_the_date( 'c' ) ?>">
              <?php printf( _x( 'Published %s ago', '%s = human-readable time difference', ST_TEXTDOMAIN ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) ); ?>
            </time>
            <div itemprop="articleBody">
              <?php the_excerpt() ?>
            </div>
            <div class="text-right"><a href="<?php the_permalink() ?>"><?php _e( 'Read more &raquo;', ST_TEXTDOMAIN ) ?></a></div>
          </div>
        </div>
      </div>
    <?php } ?>
  </div>
</div>
<?php
get_footer();
