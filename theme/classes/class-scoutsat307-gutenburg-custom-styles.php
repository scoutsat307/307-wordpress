<?php
/**
 * Custom Editor Styles
 *
 * @package Wordpress
 * @subpackage ScoutsAt307
 * @since ScoutsAt307 1.0
 */

class ScoutsAt307_Gutenburg_Custom_Styles {
  // Instantiate the object
  public function __construct() {
    add_action( 'enqueue_block_editor_assets', array( $this, 'custom_editor_styles' ) );
  }

  // Add custom styles
  public function custom_editor_styles() {
    wp_enqueue_style(
      'scoutsat307-admin-css',
      get_stylesheet_directory_uri() . '/gutenburg-custom.css'
    );
  }
}