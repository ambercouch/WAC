<?php
/*
Template Name: Attractions
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


          <div class="map-instructions">
            <!-- ACF Fields -->
            <?php if( have_rows('item') ): ?>
            <?php while( have_rows('item') ): the_row();

            // vars
            $image = get_sub_field('image');
            $text = get_sub_field('text');

            ?>
              <div class="item">
                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />
                <p><?php echo $text; ?></p>
              </div>
              <?php endwhile; ?>
            <?php endif; ?>
          </div>

          <div class="">
            <a href="#" data-micromodal-trigger="modal-the-estate"  class="modal">
            <img src="<?php echo get_template_directory_uri() ?>/img/elements/attractions-map/map-attractions-960.jpg"  alt="The estate">
            </a>
          </div>

          <div id="modal-the-estate" class="modal micromodal-slide" aria-hidden="true">
            <div tabindex="-1" class="modal__overlay">
              <div class="modal__container modal__container--flush" role="dialog" aria-modal="true">
                <header class="modal__header">
                  <button class="modal__button" aria-label="Close modal" data-modal-book-close>close x</button>
                </header>
                <div class="modal__content">
                  <img class="c-image-zoom__img-large" src="<?php echo get_template_directory_uri() ?>/img/elements/attractions-map/map-attractions-1800.jpg"  alt="The estate">
                </div>
              </div>
            </div>
          </div>

          <div class="map-key">
            <!-- ACF Fields -->

            <?php if( have_rows('attractions-history') ): ?>

              <h2 class="h1">History and Heritage</h2>

              <ul class="attractions">
                <?php while( have_rows('attractions-history') ): the_row();

                  // vars
                  $thumb = get_sub_field('thumb');
                  $title = get_sub_field('title');
                  $description = get_sub_field('description');
                  $url = get_sub_field('url');
                ?>

                  <li class="attraction">
                    <img src="<?php echo $thumb['url']; ?>" alt="<?php echo $thumb['alt'] ?>" />

                    <div>
                      <h2><?php echo $title; ?></h2>

                      <p><?php echo $description; ?></p>

                      <?php if( $url ): ?>
                        <a href="<?php echo $url; ?>">Visit <?php echo $title; ?></a>
                      <?php endif; ?>
                    </div>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>

            <?php if( have_rows('attractions-entertainment') ): ?>

              <h2 class="h1">Entertainment and Activities</h2>

              <ul class="attractions">
                <?php while( have_rows('attractions-entertainment') ): the_row();

                  // vars
                  $thumb = get_sub_field('thumb');
                  $title = get_sub_field('title');
                  $description = get_sub_field('description');
                  $url = get_sub_field('url');
                  ?>

                  <li class="attraction">
                    <img src="<?php echo $thumb['url']; ?>" alt="<?php echo $thumb['alt'] ?>" />

                    <div>
                      <h2><?php echo $title; ?></h2>

                      <p><?php echo $description; ?></p>

                      <?php if( $url ): ?>
                        <a href="<?php echo $url; ?>">Visit <?php echo $title; ?></a>
                      <?php endif; ?>
                    </div>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>

            <?php if( have_rows('attractions-forests') ): ?>

              <h2 class="h1">Caves and Waterfalls</h2>

              <ul class="attractions">
                <?php while( have_rows('attractions-forests') ): the_row();

                  // vars
                  $thumb = get_sub_field('thumb');
                  $title = get_sub_field('title');
                  $description = get_sub_field('description');
                  $url = get_sub_field('url');
                  ?>

                  <li class="attraction">
                    <img src="<?php echo $thumb['url']; ?>" alt="<?php echo $thumb['alt'] ?>" />

                    <div>
                      <h2><?php echo $title; ?></h2>

                      <p><?php echo $description; ?></p>

                      <?php if( $url ): ?>
                        <a href="<?php echo $url; ?>">Visit <?php echo $title; ?></a>
                      <?php endif; ?>
                    </div>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>

            <?php if( have_rows('attractions-beaches') ): ?>

              <h2 class="h1">Beaches and Coastline</h2>

              <ul class="attractions">
                <?php while( have_rows('attractions-beaches') ): the_row();

                  // vars
                  $thumb = get_sub_field('thumb');
                  $title = get_sub_field('title');
                  $description = get_sub_field('description');
                  $url = get_sub_field('url');
                  ?>

                  <li class="attraction">
                    <img src="<?php echo $thumb['url']; ?>" alt="<?php echo $thumb['alt'] ?>" />

                    <div>
                      <h2><?php echo $title; ?></h2>

                      <p><?php echo $description; ?></p>

                      <?php if( $url ): ?>
                        <a href="<?php echo $url; ?>">Visit <?php echo $title; ?></a>
                      <?php endif; ?>
                    </div>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>

            <?php if( have_rows('attractions-parks') ): ?>

              <h2 class="h1">Countryside and Gardens</h2>

              <ul class="attractions">
                <?php while( have_rows('attractions-parks') ): the_row();

                  // vars
                  $thumb = get_sub_field('thumb');
                  $title = get_sub_field('title');
                  $description = get_sub_field('description');
                  $url = get_sub_field('url');
                  ?>

                  <li class="attraction">
                    <img src="<?php echo $thumb['url']; ?>" alt="<?php echo $thumb['alt'] ?>" />

                    <div>
                      <h2><?php echo $title; ?></h2>

                      <p><?php echo $description; ?></p>

                      <?php if( $url ): ?>
                        <a href="<?php echo $url; ?>">Visit <?php echo $title; ?></a>
                      <?php endif; ?>
                    </div>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>

            <?php if( have_rows('attractions-towns') ): ?>

              <h2 class="h1">Towns and Cities</h2>

              <ul class="attractions">
                <?php while( have_rows('attractions-towns') ): the_row();

                  // vars
                  $thumb = get_sub_field('thumb');
                  $title = get_sub_field('title');
                  $description = get_sub_field('description');
                  $url = get_sub_field('url');
                  ?>

                  <li class="attraction">
                    <img src="<?php echo $thumb['url']; ?>" alt="<?php echo $thumb['alt'] ?>" />

                    <div>
                      <h2><?php echo $title; ?></h2>

                      <p><?php echo $description; ?></p>

                      <?php if( $url ): ?>
                        <a href="<?php echo $url; ?>">Visit <?php echo $title; ?></a>
                      <?php endif; ?>
                    </div>
                  </li>
                <?php endwhile; ?>
              </ul>
            <?php endif; ?>


          </div><!-- .map-key-->
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
