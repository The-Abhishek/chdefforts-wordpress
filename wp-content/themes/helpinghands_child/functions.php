<?php
/**
 * Child Theme Functions
 *
 * @package	HelpingHands
 * @author Skat
 * @copyright 2015, Skat Design
 * @link http://www.skat.tf
 * @since HelpingHands 1.0
 */
 
// Enqueue Styles

function sd_child_enqueue_styles() {
    wp_enqueue_style( 'stylesheet', get_template_directory_uri() . '/style.css', array( 'sd-bootstrap' ), '3', 'all' ); // Main Parent Stylesheet
	wp_enqueue_style( 'sd-custom-css', get_template_directory_uri() . '/framework/admin/sd-admin-options/custom-styles.css', array( 'sd-child-style' ), '4', 'all' );
	wp_enqueue_style( 'sd-child-style', get_stylesheet_directory_uri() . '/style.css', array( 'stylesheet' ) );

}

add_action( 'wp_enqueue_scripts', 'sd_child_enqueue_styles' );