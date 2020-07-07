<?php
/*
Template Name: Full Width
*/
get_header(); ?>
  <?php roots_content_before(); ?>
    <div id="content" class="<?php echo $roots_options['container_class']; ?>">
    <?php roots_main_before(); ?>
      <div id="main-full" class="<?php echo $roots_options['fullwidth_class']; ?>" role="main">
        <div class="container">
          <?php roots_loop_before(); ?>
          <?php get_template_part('loop', 'page'); ?>
          <?php roots_loop_after(); ?>

          <?php if (is_page(3863)) { // Interactive Map Page ?>
            <div class="ill-map">
              <img src="<?php get_template_directory_uri() ?>/img/elements/farm-map/illustrated-farm-map-pins.jpg" height="1358" width="960" alt="Plas Farm illustrated map" usemap="#farm-map">

              <?php // load popup imagemaps ?>
              <?php get_template_part('part', 'farm_map_imagemaps'); ?>

              <?php // load popup content ?>
              <?php get_template_part('part', 'farm_map_content'); ?>
            </div>

            <?php echo(types_render_field("additional-content", array("id"=>"post-id"))); ?>
          <?php } ?>
        </div>
      </div><!-- /#main -->

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
