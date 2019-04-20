<?php
/**
 * The template for displaying Voiture
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */
	//Vérifier l'activation du plugin ACF
	if ( !function_exists("get_field")) return;
?>

	<h1><?php the_field('marqueModeleVersion'); ?></h1>

	<ul>
		<li><strong>Marque : </strong><?php the_field('marque'); ?></li>
		<li><strong>Modèle : </strong><?php the_field('modele'); ?></li>
		<li><strong>Version : </strong><?php the_field('version'); ?></li>
	</ul>

	<p><?php the_content(); ?></p>