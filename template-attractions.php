<?php
/*
Template Name: Attractions Template
*/
get_header(); ?>
  <?php roots_content_before(); ?>

<?php if (types_render_field( 'slider-display', array(  ) )) : ?>
  <div id="presentation">
      <?php echo(types_render_field( 'slider-display', array(  ) )); ?>
  </div>
<?php else : ?>
  <!-- No slider found -->
<?php endif ?>
    <div id="content" class="<?php echo $roots_options['container_class']; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo $roots_options['fullwidth_class']; ?>" role="main">
        <div class="container">
          <?php roots_loop_before(); ?>
          <?php get_template_part('loop', 'page'); ?>
          <?php roots_loop_after(); ?>

        </div><!-- .container -->
      </div><!-- #main -->

      <aside id="sidebar" role="complementary">
        <div class="container">
            <?php get_sidebar('attractions'); ?>
        </div>
      </aside><!-- /#sidebar -->

      <script type="text/javascript">
        $(document).ready(function() {

          $("#magnify-lens").elevateZoom({
            zoomType    : "lens",
            lensShape   : "round",
            lensSize    : 200
          });

        });
      </script>
    <?php roots_main_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>
