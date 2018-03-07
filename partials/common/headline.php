<?php
global $authordata;
if ( !is_object( $authordata ) ) {
  return;
}

use SourceFramework\Template\Html;

get_the_author_posts_link();

$author_url   = esc_url( get_author_posts_url( $authordata->ID, $authordata->user_nicename ) );
$author_title = esc_attr( sprintf( __( 'Posts by %s' ), get_the_author() ) );
$author_link  = sprintf( '<a href="%1$s" title="%2$s" rel="author" itemprop="author">%3$s</a>', $author_url, $author_title, get_the_author() );

$publish_date  = get_the_date( 'c' );
$modified_date = get_the_modified_date( 'c' );


if ( $modified_date == $publish_date ) {
  $time_title = sprintf( _x( 'Published %s ago', '%s = human-readable time difference', ST_TEXTDOMAIN ), human_time_diff( get_the_time( 'U' ), current_time( 'timestamp' ) ) );
  $time_attr  = [
      'itemprop' => 'datePublished',
      'content'  => $publish_date,
  ];
} else {
  $time_title = sprintf( _x( 'Updated %s ago', '%s = human-readable time difference', ST_TEXTDOMAIN ), human_time_diff( get_the_modified_time( 'U' ), current_time( 'timestamp' ) ) );
  $time_attr  = [
      'itemprop' => 'dateModified',
      'content'  => $modified_date,
  ];
}
?>
<div class="headline">
  <h2 itemprop="headline name"><a href="<?php the_permalink() ?>"><?php the_title() ?></a></h2>
  <time <?php echo Html::parse_attributes( $time_attr ) ?>>
    <?php echo $time_title ?>
  </time>
  <?php printf( _x( 'by %s', '%s = author name', ST_TEXTDOMAIN ), get_the_author_posts_link() ) ?>
</div>


