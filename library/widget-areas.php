<?php
if ( ! function_exists( 'bordingweb_sidebar_widgets' ) ) :
function bordingweb_sidebar_widgets() {
	register_sidebar(array(
	  'id' => 'sidebar-widgets',
	  'name' => __( 'Sidebar widgets', 'bordingweb' ),
	  'description' => __( 'Drag widgets to this sidebar container.', 'bordingweb' ),
	  'before_widget' => '<article id="%1$s" class="row widget %2$s"><div class="small-12 columns">',
	  'after_widget' => '</div></article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footertop-widgets',
	  'name' => __( 'Footer Top widgets', 'bordingweb' ),
	  'description' => __( 'Drag widgets to this footer top container', 'bordingweb' ),
	  'before_widget' => '<article id="%1$s" class="small-12 medium-3 large-3 columns widget %2$s">',
	  'after_widget' => '<hr></article>',
	  'before_title' => '<h6 class="f1">',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footermenu-widgets',
	  'name' => __( 'Footer Menu widgets', 'bordingweb' ),
	  'description' => __( 'Drag widgets to this footer menu container', 'bordingweb' ),
	  'before_widget' => '<article id="%1$s" class="small-12 medium-3 large-3 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

	register_sidebar(array(
	  'id' => 'footerlocation-widgets',
	  'name' => __( 'Location widgets', 'bordingweb' ),
	  'description' => __( 'Drag widgets to this footer container', 'bordingweb' ),
	  'before_widget' => '<hr><article id="%1$s" class="large-12 columns widget %2$s">',
	  'after_widget' => '</article>',
	  'before_title' => '<h6>',
	  'after_title' => '</h6>',
	));

}

add_action( 'widgets_init', 'bordingweb_sidebar_widgets' );
endif;
?>
