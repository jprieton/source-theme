<?php

if ( !function_exists( 'body_microdata' ) ) {

  function body_microdata() {
    $tag  = \SourceFramework\Template\Tag::get_instance();
    $microdata = $tag->parse_attributes( [ 'itemscope', 'itemtype' => "http://schema.org/SearchResultsPage" ] );
    echo apply_filters( 'body_microdata', $microdata );
  }

}