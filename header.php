<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <?php roots_stylesheets(); ?>
  <link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> Feed" href="<?php echo home_url(); ?>/feed/">

  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/responsive-tables.css" type="text/css" media="screen" />

  <!--  Modernizr-->
  <script src="<?php echo get_template_directory_uri(); ?>/js/libs/modernizr-2.0.6.min.js"></script>

  <?php // roots_head(); ?>
  <?php wp_head(); ?>

  <?php if (is_page(3863)) { ?>
    <?php // Interactive farm map page ?>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/libs/jquery.rwdImageMaps.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/libs/magnific/magnific.min.js"></script>
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/libs/magnific/magnific.min.css">
  <?php } ?>
  <script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/libs/responsive-tables.js"></script>
  <script type="text/javascript" src="http://use.typekit.com/xxr1gfe.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <?php // analytics - now added via consent plugin ?>
  <!-- <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');    ga('create', 'UA-341586-3', 'walescottages.com', {'allowLinker': true});    ga('require', 'linker');    ga('linker:autoLink', ['secure.supercontrol.co.uk']);    ga('send', 'pageview');
  </script> -->

  <script type='application/ld+json'>
{
  "@context": "http://www.schema.org",
  "@type": "LodgingBusiness",
  "name": "Swansea Vallery Holiday Cottages",
  "url": "http://www.walescottages.com",
  "logo": "http://www.walescottages.com/img/logos/logo-walescottages.png",
  "image": "http://www.walescottages.com/assets/2017/10/cottage-cluster-map-1.jpg",
  "description": "Family-run self catering holiday cottages in Wales.",
  "priceRange" : "£64 - £374 (Based on Average Rates for a Standard Room)",
  "aggregateRating" : {
  "@type" : "AggregateRating",
  "ratingValue" : "4.8",
  "reviewCount" : "14"
  },
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "Plas Farm Cilybebyll",
    "addressLocality" : "Pontardawe",
    "addressRegion" : "Southern Wales",
    "postalCode" : "SA8 3JQ",
    "addressCountry" : {
      "@type" : "Country",
      "name" : "United Kingdom"
    }
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": "51.721673",
    "longitude": "-3.812892"
  },
  "contactPoint": {
    "@type": "ContactPoint",
    "telephone": "+44 (0) 1792 864611",
    "contactType": "Customer service"
  }
}
 </script>
</head>

<div <?php body_class(roots_body_class()); ?>>

  <div id="wrap" class="container WF" role="document">
  	<header id="banner" class="<?php global $roots_options; echo $roots_options['container_class']; ?>" role="banner">
      <div class="container">
        <a class="header-segment" id="logo" href="<?php echo home_url(); ?>/">
          <img src="<?php bloginfo('template_url'); ?>/img/logos/logo-walescottages.png" height="101" alt="<?php bloginfo('name'); ?>">
        </a>

        <a href="#" class="nav-reveal">Menu</a>

        <nav id="nav-mobile" role="navigation">
          <ul>
            <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'items_wrap' => '%3$s')); ?>
            <li>
              <a href="http://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637" onclick="_gaq.push(['_link', 'http://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637']); return false;">book your cottage</a>
            </li>
          </ul>
        </nav>

        <div class="header-segment">
          <nav class="nav-social">
            <ul>
              <li>
                <a target="_blank" href="https://www.twitter.com/holidayinwales">
                  <svg aria-labelledby="simpleicons-twitter-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-twitter-icon">Twitter icon</title><path d="M23.954 4.569c-.885.389-1.83.654-2.825.775 1.014-.611 1.794-1.574 2.163-2.723-.951.555-2.005.959-3.127 1.184-.896-.959-2.173-1.559-3.591-1.559-2.717 0-4.92 2.203-4.92 4.917 0 .39.045.765.127 1.124C7.691 8.094 4.066 6.13 1.64 3.161c-.427.722-.666 1.561-.666 2.475 0 1.71.87 3.213 2.188 4.096-.807-.026-1.566-.248-2.228-.616v.061c0 2.385 1.693 4.374 3.946 4.827-.413.111-.849.171-1.296.171-.314 0-.615-.03-.916-.086.631 1.953 2.445 3.377 4.604 3.417-1.68 1.319-3.809 2.105-6.102 2.105-.39 0-.779-.023-1.17-.067 2.189 1.394 4.768 2.209 7.557 2.209 9.054 0 13.999-7.496 13.999-13.986 0-.209 0-.42-.015-.63.961-.689 1.8-1.56 2.46-2.548l-.047-.02z"/></svg>
                </a>
              </li>
              <li>
                <a target="_blank" href="https://www.instagram.com/walescottages">
                  <svg aria-labelledby="simpleicons-instagram-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-instagram-icon">Instagram icon</title><path d="M12 0C8.74 0 8.333.015 7.053.072 5.775.132 4.905.333 4.14.63c-.789.306-1.459.717-2.126 1.384S.935 3.35.63 4.14C.333 4.905.131 5.775.072 7.053.012 8.333 0 8.74 0 12s.015 3.667.072 4.947c.06 1.277.261 2.148.558 2.913.306.788.717 1.459 1.384 2.126.667.666 1.336 1.079 2.126 1.384.766.296 1.636.499 2.913.558C8.333 23.988 8.74 24 12 24s3.667-.015 4.947-.072c1.277-.06 2.148-.262 2.913-.558.788-.306 1.459-.718 2.126-1.384.666-.667 1.079-1.335 1.384-2.126.296-.765.499-1.636.558-2.913.06-1.28.072-1.687.072-4.947s-.015-3.667-.072-4.947c-.06-1.277-.262-2.149-.558-2.913-.306-.789-.718-1.459-1.384-2.126C21.319 1.347 20.651.935 19.86.63c-.765-.297-1.636-.499-2.913-.558C15.667.012 15.26 0 12 0zm0 2.16c3.203 0 3.585.016 4.85.071 1.17.055 1.805.249 2.227.415.562.217.96.477 1.382.896.419.42.679.819.896 1.381.164.422.36 1.057.413 2.227.057 1.266.07 1.646.07 4.85s-.015 3.585-.074 4.85c-.061 1.17-.256 1.805-.421 2.227-.224.562-.479.96-.899 1.382-.419.419-.824.679-1.38.896-.42.164-1.065.36-2.235.413-1.274.057-1.649.07-4.859.07-3.211 0-3.586-.015-4.859-.074-1.171-.061-1.816-.256-2.236-.421-.569-.224-.96-.479-1.379-.899-.421-.419-.69-.824-.9-1.38-.165-.42-.359-1.065-.42-2.235-.045-1.26-.061-1.649-.061-4.844 0-3.196.016-3.586.061-4.861.061-1.17.255-1.814.42-2.234.21-.57.479-.96.9-1.381.419-.419.81-.689 1.379-.898.42-.166 1.051-.361 2.221-.421 1.275-.045 1.65-.06 4.859-.06l.045.03zm0 3.678c-3.405 0-6.162 2.76-6.162 6.162 0 3.405 2.76 6.162 6.162 6.162 3.405 0 6.162-2.76 6.162-6.162 0-3.405-2.76-6.162-6.162-6.162zM12 16c-2.21 0-4-1.79-4-4s1.79-4 4-4 4 1.79 4 4-1.79 4-4 4zm7.846-10.405c0 .795-.646 1.44-1.44 1.44-.795 0-1.44-.646-1.44-1.44 0-.794.646-1.439 1.44-1.439.793-.001 1.44.645 1.44 1.439z"/></svg>
                </a>
              </li>
              <li>
                <a target="_blank" href="https://www.facebook.com/walescottages">
                  <svg aria-labelledby="simpleicons-facebook-icon" role="img" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><title id="simpleicons-facebook-icon">Facebook icon</title><path d="M22.676 0H1.324C.593 0 0 .593 0 1.324v21.352C0 23.408.593 24 1.324 24h11.494v-9.294H9.689v-3.621h3.129V8.41c0-3.099 1.894-4.785 4.659-4.785 1.325 0 2.464.097 2.796.141v3.24h-1.921c-1.5 0-1.792.721-1.792 1.771v2.311h3.584l-.465 3.63H16.56V24h6.115c.733 0 1.325-.592 1.325-1.324V1.324C24 .593 23.408 0 22.676 0"/></svg>
                </a>
              </li>
            </ul>
          </nav>

          <nav id="nav-main" role="navigation">
            <ul>
              <?php wp_nav_menu(array('theme_location' => 'primary_navigation', 'items_wrap' => '%3$s')); ?>
              <li><a class="book-button" id="menu-book-your-cottage" href="http://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637" onclick="_gaq.push(['_link', 'http://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637']); return false;">book your cottage</a></li>
            </ul>
          </nav>
        </div>

        <?php if (wp_get_nav_menu_items('Utility Navigation')) { ?>
        <nav id="nav-utility">
          <?php wp_nav_menu(array('theme_location' => 'utility_navigation')); ?>
        </nav>
        <?php } ?>
      </div><!-- .container -->
    </header>