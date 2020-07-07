<?php get_header(); ?>
  <?php roots_content_before(); ?>

  <?php // Extract page slug and assign it to a variable
    		$pageSlug = $post->post_name;
  ?>

  	<div id="presentation">
      <?php echo(types_render_field( 'slider-display', array(  ) )); ?>
		</div>

    <div id="content" class="<?php echo $roots_options['container_class']; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo $roots_options['fullwidth_class']; ?>" role="main">
        <div class="container">
          <?php roots_loop_before(); ?>
          <?php get_template_part('loop', 'page'); ?>
          <?php roots_loop_after(); ?>

          <?php if (is_page(2936)) {
	          // Supercontrol Demo Page
          ?>
	          <iframe src="https://secure.supercontrol.co.uk/availability/availability_weekly.asp?ownerID=2599&cottageID=cottageID_60693&siteID=12637&mode=iframe" frameborder="0" width="626" height="800"></iframe>
          <?php } elseif (is_page(2946)) {
	          // Tables Page
          } ?>
        </div>

        <?php // get_template_part('loop', 'connect'); ?>
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
