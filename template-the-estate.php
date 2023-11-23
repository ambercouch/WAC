<?php
/*
Template Name: The Estate Map
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo $roots_options['container_class']; ?>">
    <?php roots_main_before(); ?>
      <div id="main" class="<?php echo $roots_options['fullwidth_class']; ?>" role="main">
        <div class="container">
          <?php roots_loop_before(); ?>
          <?php get_template_part('loop', 'page'); ?>
          <?php roots_loop_after(); ?>


            <div class="ill-map c-svg-map">

                <?php // load svg and image ?>
                <?php get_template_part('part', 'farm_map_svg'); ?>

              <?php // load popup imagemaps ?>
              <?php //get_template_part('part', 'farm_map_imagemaps'); ?>

              <?php // load popup content ?>
              <?php get_template_part('part', 'farm_map_content'); ?>
            </div>

            <?php echo(types_render_field("additional-content", array("id"=>"post-id"))); ?>

        </div>
      </div><!-- /#main -->

      <aside id="sidebar" role="complementary">
        <div class="container">
            <?php get_sidebar('the-estate'); ?>
        </div>
      </aside><!-- /#sidebar -->

      <script type="text/javascript">
        $(document).ready(function() {
          // Magnific Popup: http://dimsemenov.com/plugins/magnific-popup/documentation.html
          $('.open-popup-link').magnificPopup({
            type: 'inline',
            midClick: true,
            closeBtnInside:true,

            // Delay in milliseconds before popup is removed
            removalDelay: 300,

            // Class that is added to popup wrapper and background
            // make it unique to apply your CSS animations just to this exact popup
            mainClass: 'mfp-fade',

            callbacks: {

            }
          });

        });
      </script>
    <?php roots_main_after(); ?>
    </div><!-- /#content -->
  <?php roots_content_after(); ?>
<?php get_footer(); ?>
