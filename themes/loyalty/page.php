<?php 
/**
Filename: index.php
Purpose: Page content controller
Last update: 2019-11-19 12:48 
Version: 1.0
Last updated by: Eli
**/


$context = Timber::context();

$context['current_user'] = new Timber\User();
$context['post']    = new Timber\Post();
Timber::render( array( 'page-' . $timber_post->post_name . '.twig', 'page.twig' ), $context );


?>