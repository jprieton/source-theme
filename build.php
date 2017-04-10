<?php

if ( file_exists( 'source-theme.phar' ) ) {
  unlink( 'source-framework.phar' );
}

$phar = new Phar( 'source-theme.phar' );
$phar->setStub( '<?php __HALT_COMPILER();' );

$folders = [ 'admin', 'core' ];

foreach ( $folders as $folder ) {
  $files = new RecursiveIteratorIterator( new RecursiveDirectoryIterator( $folder ), RecursiveIteratorIterator::SELF_FIRST );

  foreach ( $files as $file ) {
    if ( preg_match( '/\.php$/', $file ) ) {
      $file instanceof SplFileInfo;
      $phar->addFromString( $file->getPathname(), php_strip_whitespace( $file->getPathname() ) );
    }
  }
}
$phar->compressFiles( Phar::GZ );
