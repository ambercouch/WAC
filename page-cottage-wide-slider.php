<?php
/*
Template Name: Cottages Page - Wide Slider
*/
?>

<?php get_header(); ?>

  <?php
  	// Extract page slug and assign it to a variable
    $pageSlug = $post->post_name;

    // Target the appropriate slide folder for the page and assign the path to a variable
 	$filename = 'img/slides/'.$pageSlug;
  ?>

    <div id="content" class="<?php echo $roots_options['container_class']; ?> no-slides">
      <div class="l-wide-slider">
        <?php $slider_id = get_field('royal_slider_id') ?>
        <?php  echo get_new_royalslider($slider_id) ?>
      </div>

      <div id="main" class="<?php echo $roots_options['fullwidth_class']; ?>" role="main">
        <div class="container">
          <?php get_template_part('loop', 'page'); ?>
        </div>
        <!--Can you see me ?-->
        <div id="connect">
    	<?php
    		// Featured Post
    		// Retrieve featured posts with category that match page slug
    		$args = array(
				'tag'				=> $pageSlug,
				'cat'				=> 3,
				'posts_per_page'	=> 1
			);

    		// Run query
    		query_posts( $args );

    		// Start loop
    		get_template_part('loop', 'featured');


    		// Related Posts
    		// Retrieve featured posts with category that match page slug
    		$args = array(
				'tag'				=> $pageSlug,
				'cat'				=> 4,
				'posts_per_page'	=> 8
			);

    		// Run query
    		query_posts( $args );

    		// Start loop
    		get_template_part('loop', 'related');
    	?>
    	</div><!--	connect -->
      </div><!-- /#main -->

      <aside id="sidebar" role="complementary">
        <div class="container">
          <?php get_sidebar('cottage'); ?>
        </div>
      </aside><!-- /#sidebar -->

    </div><!-- /#content -->
<?php get_footer(); ?>
