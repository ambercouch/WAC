<?php get_header(); ?>
  <?php roots_content_before(); ?>
  
  <?php 
  	// Extract page slug and assign it to a variable
    $pageSlug = $post->post_name;
    
    // Target the appropriate slide folder for the page and assign the path to a variable
 		$filename = 'img/slides/'.$pageSlug;
  ?>
		
		<?php if($filename != '') { ?>
			<div id="presentation">
				<?php  		
					$slides = get_slides($filename); get_template_part('plas', 'slider');
				?>  		
			</div>			
		<?php } ?>
  	
    <div id="content" class="single-template">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo $roots_options['fullwidth_class']; ?>" role="main">
        <div class="container">
          <?php roots_loop_before(); ?>
          <?php get_template_part('loop', 'page'); ?>
          <?php roots_loop_after(); ?>
        </div>
        
        <div id="connect">
    	<?php   		
    		
    		// Featured Post
    		// Retrieve featured posts with category that match page slug
    		$args = array(
					'tag'      				=> $pageSlug,
					'cat'							=> 3,
					'posts_per_page'	=> 1						
				);
    		
    		// Run query
    		query_posts( $args );
    		
    		// Start loop
    		get_template_part('loop', 'featured');    		
    		
    		// Related Posts    		
    		// Retrieve featured posts with category that match page slug
    		$args = array(
					'tag'      				=> $pageSlug,
					'cat'							=> 4,
					'posts_per_page'	=> 8						
				);
    		
    		// Run query
    		query_posts( $args );
    		
    		// Start loop
    		get_template_part('loop', 'related');
    	?>
    </div>
      </div><!-- /#main -->
    <?php roots_main_after(); ?>
    	
    <?php roots_sidebar_before(); ?>
      <aside id="sidebar" class="<?php echo $roots_options['sidebar_class']; ?>" role="complementary">
      <?php roots_sidebar_inside_before(); ?>
        <div class="container">
          <?php get_sidebar(); ?>
        </div>
      <?php roots_sidebar_inside_after(); ?>
      </aside><!-- /#sidebar -->
    <?php roots_sidebar_after(); ?>
    
    </div><!-- /#content -->    
  <?php roots_content_after(); ?>
<?php get_footer(); ?>

