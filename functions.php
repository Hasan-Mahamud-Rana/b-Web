<?php
/*
Author: Hasan Mahamud Rana
URL: rana_imagine@yahoo.com
*/

// Various clean up functions
require_once('library/cleanup.php');

// Required for Foundation to work properly
require_once('library/foundation.php');

// Register all navigation menus
require_once('library/navigation.php');

// Add menu walkers
require_once('library/menu-walker.php');
require_once('library/offcanvas-walker.php');

// Create widget areas in sidebar and footer
require_once('library/widget-areas.php');

// Return entry meta information for posts
require_once('library/entry-meta.php');

// Enqueue scripts
require_once('library/enqueue-scripts.php');

// Add theme support
require_once('library/theme-support.php');

// Add Header image
require_once('library/custom-header.php');

// Add slider
require_once('library/slider.php');

// Add testimonial
require_once('library/testimonial.php');

// Add package
require_once('library/package.php');

// Add package
require_once('library/faq.php');

// Add single
require_once('library/single.php');

function register_footer_menu() {
  register_nav_menu('footer-menu',__( 'Footer Menu' ));
}
add_action( 'init', 'register_footer_menu' );

?>