<div id="connect">
  <?php
  // Featured Post
  // Retrieve featured posts with category that match page slug
  $args = array(
    'tag'             => $pageSlug,
    'cat'             => 3,
    'posts_per_page'  => 1
  );

  // Run query
  query_posts( $args );

  // Start loop
  get_template_part('loop', 'featured');

  // Related Posts
  // Retrieve featured posts with category that match page slug
  $args = array(
    'tag'             => $pageSlug,
    'cat'             => 4,
    'posts_per_page'  => 8
  );

  // Run query
  query_posts( $args );

  // Start loop
  get_template_part('loop', 'related');

  ?>
</div><!-- connect -->