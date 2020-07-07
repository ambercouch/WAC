<?php /* Start loop */ ?>
<?php while (have_posts()) : the_post(); ?>
  <?php roots_post_before(); ?>
    <?php roots_post_inside_before(); ?>
    <div class="related">
    	
    	<?php 
			if ( has_post_thumbnail() ) { ?>
			  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
			<?php }	?>
			
      <h4><a href="<?php the_permalink(); ?>" title="Read more on <?php the_title(); ?>"><?php the_title(); ?></a></h4>
	      <?php the_excerpt(); ?>
      </div><!-- .related -->
    <?php roots_post_inside_after(); ?>
  <?php roots_post_after(); ?>
<?php endwhile; /* End loop */ ?>
