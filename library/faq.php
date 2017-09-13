<?php
/**
 * Custom template tags for Twenty Fifteen
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @Faq WordPress
 * @subFaq BordingWeb
 * @since BordingWeb 1.0
 */

add_action( 'init', 'create_custom_faq_post_type' );
/**
 * Register a Faq post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_faq_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Faq', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'Faq', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Faq', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'Faq', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'Faq', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New Faq', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New Faq', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit Faq', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View Faq', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All Faqs', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search Faqs', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent Faqs:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No Faqs found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No Faqs found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'faq' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'taxonomies'       => array('category'),
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' )
 );

 register_post_type( 'faq', $args );
}


