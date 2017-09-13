<div class="courses">
  <div class="row" >
    <div class="large-12 columns text-center">
      <h2>Choose your <?php echo get_cat_name(9);?></h2>
    </div></div>
    <div class="row">
      <?php query_posts('order=asc&post_type=package&post_status=publish&posts_per_page=9&paged='. get_query_var('paged')); ?>
      <?php if( have_posts() ):  while( have_posts() ): the_post(); ?>
      <div class="small-12 medium-4 large-4  columns"><a href="<?php the_permalink(); ?>">
        <?php the_post_thumbnail( array(350,200, true) ); ?>
      </a>
      <div class="panel p">
        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
        <?php the_excerpt(); ?>
      </div>
    </div>
  <?php endwhile; ?>
<?php else: ?>
  <div id="post-404" class="noposts">
    <p>
      <?php _e('None found.','example'); ?>
    </p>
  </div>
<?php endif; wp_reset_query(); ?>
</div> 
</div>