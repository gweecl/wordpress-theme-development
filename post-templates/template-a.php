<?php
/*
Template Name: Post Template A
Template Post Type: post, st
*/


$context = Timber::context();
$timber_post = Timber::query_post();
$context['post'] = $timber_post;

if ( post_password_required( $timber_post->ID ) ) {
	Timber::render( 'single-password.twig', $context );
} else {
	Timber::render( array( 'single-' . $timber_post->ID . '-template-a.twig', 'single-' . $timber_post->post_type . '-template-a.twig', 'single.twig' ), $context );
}
