<?php 
/**
Filename: index.php
Purpose: Page content controller
Last update: 2019-11-19 12:48 
Version: 1.0
Last updated by: Eli
**/


$context = Timber::context();

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
Timber::render( array( 'page-' . $timber_post->post_name . '.twig', 'page.twig' ), $context );


?>