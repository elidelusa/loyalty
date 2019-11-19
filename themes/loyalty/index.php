<?php 
/**
Filename: index.php
Purpose: Default main content of the theme
Last update: 2019-11-19 12:48 
Version: 1.0
Last updated by: Eli
**/


$context = Timber::context();
$context['posts'] = new Timber\PostQuery();
$context['homebanner'] = Timber::get_post(5);
$context['createaccount'] = Timber::get_post(8);

$templates = array( 'index.twig' );
if ( is_home() ) {
	array_unshift( $templates, 'front-page.twig', 'home.twig' );
}
Timber::render($templates, $context);


/* 
	{{ homebanner|print_r }}
*/

?>
