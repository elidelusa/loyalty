<?php 
/**
Filename: footer.php
Purpose: Footer end of the theme
Last update: 2019-11-19 12:48 
Version: 1.0
Last updated by: Eli
**/


$timberContext = $GLOBALS['timberContext']; // @codingStandardsIgnoreFile
if ( ! isset( $timberContext ) ) {
	throw new \Exception( 'Timber context not set in footer.' );
}
$timberContext['content'] = ob_get_contents();
ob_end_clean();

$templates = array( 'page-plugin.twig' );
Timber::render( $templates, $timberContext );


?>
