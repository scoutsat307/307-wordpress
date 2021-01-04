<?php
/**
 * Template Name: Page with Hero
 * Description: A Page Template with a large hero proceeding the content.
 */

$context = Timber::context();

$timber_post     = new Timber\Post();
$context['post'] = $timber_post;
Timber::render( array( 'template-hero.twig' ), $context );
