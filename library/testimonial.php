<?php
/**
 * Custom template tags for Twenty Fifteen
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package WordPress
 * @subpackage BordingWeb
 * @since BordingWeb 1.0
 */

/**
 * Proper way to enqueue scripts and styles
 */
function testimonial_scripts() {
	if ( is_front_page() || is_home()) {
		wp_enqueue_style( 'slick-stylesheet', get_template_directory_uri() .'/css/slick.css' );
    wp_enqueue_style( 'slick-theme-stylesheet', get_template_directory_uri() .'/css/slick-theme.css' );
		//wp_enqueue_script( 'slick-script', get_template_directory_uri() . '/js/slick.min.js', array(), '1.0.0', true );
  }
}

add_action( 'wp_enqueue_scripts', 'testimonial_scripts' );

add_action( 'init', 'create_custom_testimonial_post_type' );
/**
 * Register a Testimonial post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_testimonial_post_type() {

  /* Register our stylesheet. */
  $labels = array(
    'name'               => _x( 'Testimonials', 'post type general name', 'your-plugin-textdomain' ),
    'singular_name'      => _x( 'Testimonial', 'post type singular name', 'your-plugin-textdomain' ),
    'menu_name'          => _x( 'Testimonials', 'admin menu', 'your-plugin-textdomain' ),
    'name_admin_bar'     => _x( 'Testimonial', 'add new on admin bar', 'your-plugin-textdomain' ),
    'add_new'            => _x( 'Add New', 'Testimonial', 'your-plugin-textdomain' ),
    'add_new_item'       => __( 'Add New Testimonial', 'your-plugin-textdomain' ),
    'new_item'           => __( 'New Testimonial', 'your-plugin-textdomain' ),
    'edit_item'          => __( 'Edit Testimonial', 'your-plugin-textdomain' ),
    'view_item'          => __( 'View Testimonial', 'your-plugin-textdomain' ),
    'all_items'          => __( 'All Testimonials', 'your-plugin-textdomain' ),
    'search_items'       => __( 'Search Testimonials', 'your-plugin-textdomain' ),
    'parent_item_colon'  => __( 'Parent Testimonials:', 'your-plugin-textdomain' ),
    'not_found'          => __( 'No Testimonials found.', 'your-plugin-textdomain' ),
    'not_found_in_trash' => __( 'No Testimonials found in Trash.', 'your-plugin-textdomain' )
    );

$args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'testimonial' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt')
  );

register_post_type( 'testimonial', $args );
}