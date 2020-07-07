<?php /* Start loop */ ?>
<?php
	while (have_posts()) : the_post();
		if (is_front_page()) : ?>
			<img class="alignright img-small-responsive" src="<?php bloginfo('template_url'); ?>/img/photos/butterfly-peacock-2.jpg" alt="peacock-butterfly" />
		<?php endif ?>
		<h1><?php the_title(); ?></h1>
		<?php the_content(); ?>
		<?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'roots'), 'after' => '</p></nav>')); ?>
	<?php endwhile; /* End loop */ ?>
