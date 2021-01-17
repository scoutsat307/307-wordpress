<?php
/**
 * Customizer settings for this theme.
 *
 * @package WordPress
 * @subpackage ScoutsAt307
 * @since ScoutsAt307 1.0
 */

if ( ! class_exists( 'ScoutsAt307_Customize' ) ) {
  class ScoutsAt307_Customize {

    /**
		 * Constructor. Instantiate the object.
		 *
		 * @access public
		 *
		 * @since ScoutsAt307 1.0
		 */
		public function __construct() {
      add_action( 'customize_register', array( $this, 'register' ) );
    }
    
    /**
		 * Register customizer options.
		 *
		 * @access public
		 *
		 * @since ScoutsAt307 1.0
		 *
		 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
		 *
		 * @return void
		 */
    public function register( $wp_customize ) {

      // Enqueue customizer javascript
      wp_enqueue_script(
        'cd_customizer',
        get_template_directory_uri() . '/customizer/customizer.js',
        array( 'jquery','customize-preview' ),
        '',
        true
      );

      // Change site-title & description to postMessage.
			$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
      $wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
      
      $wp_customize->add_section( 'theme_options' , array(
        'title'      => 'Theme Options',
        'priority'   => 30,
      ) );

      $wp_customize->add_setting( 'homepage_slideshow' , array(
        'default' => array(),
        'sanitize_callback' => 'wp_parse_id_list',
      ) );

      $wp_customize->add_control( new CustomizeImageGalleryControl\Control(
        $wp_customize,
        'featured_image_gallery',
        array(
          'label'    => __( 'Homepage Slideshow Images' ),
          'section'  => 'theme_options',
          'settings' => 'homepage_slideshow',
          'type'     => 'image_gallery',
        )
      ));
    }
  }
}