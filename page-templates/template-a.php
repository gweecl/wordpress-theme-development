<?php
/*
Template Name: Page Template A
Template Post Type: page
*/


$context = Timber::context();
$timber_post = Timber::query_post();
$context['post'] = $timber_post;

if ( post_password_required( $timber_post->ID ) ) {
	Timber::render( 'single-password.twig', $context );
} else {
	Timber::render( array( 'page-' . $timber_post->ID . '-template-a.twig', 'page-template-a.twig', 'page.twig' ), $context );
}
