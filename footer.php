<div class="promo">
 <?php get_sidebar( 'footertop' ); ?>
 <?php get_sidebar( 'footermenu' ); ?>
</div>
<?php get_sidebar( 'footerlocation' ); ?>
<copyright>
  <div class="row">
    <p>&copy; 2015 All Rights Reserved.</p>
  </div>
</copyright>
</section>
<a class="exit-off-canvas"></a> </div>
</div>
<script>
jQuery(document).foundation();
jQuery(document).ready(function() {jQuery('.hover').bind('touchstart touchend', function(e) {  e.preventDefault();  jQuery(this).toggleClass('hover_effect'); });});
</script> 
<?php if ( is_front_page() ) { ?>
<script type="text/javascript" src="//cdn.jsdelivr.net/jquery.slick/1.5.5/slick.min.js"></script>
<script>jQuery(document).ready(function(){ jQuery('.slider').slick({lazyLoad: 'progressive', dots: true,autoplay: true,adaptiveHeight: true});});</script><?php } ?>
<?php wp_footer(); ?>
</body>
</html>