<div class="apply">
  <div class="row">
    <div class="large-12 medium-12 columns">
      <h3>What our clients say</h3>
    </div>
  </div>
  <div class="row">
    <div class="slider">
      <?php $query = new WP_Query( 'order=asc&post_type=testimonial&post_status=publish&paged='. get_query_var('paged')); ?>
      <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
      <div class="large-12 medium-12 columns">
        <h3 class="tsheading"><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h3>
        <br />
        <p><?php the_content(); ?></p>
        <p class="small text-right"><?php the_excerpt(); ?></p>
      </div>
    <?php endwhile;  wp_reset_postdata(); else : ?>
    <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
  <?php endif; ?>
</div>
</div>
</div>