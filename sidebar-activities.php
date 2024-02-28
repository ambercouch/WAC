
<a class="cta button-booknow" href="#" data-micromodal-trigger="modal-book" onclick="_gaq.push(['_link', 'https://secure.supercontrol.co.uk/availability/availability_grid.asp?ownerID=2599&siteID=12637']); return false;">
  <div>
    <span>book now</span><br>
    or check availability
  </div>
</a>

<div class="cottage-selector attractions-selector">
		<h4>Activities</h4>
    <?php
    // Display the "Activities" menu
    wp_nav_menu(array(
        'theme_location' => 'activities_menu', // Replace with the actual menu location name
        'menu_class' => 'c-nav-menu--activities', // CSS class for the menu
        // You can add more parameters here if needed
    ));
    ?>
</div>

	<?php wp_reset_query(); ?>

<?php // Trip Advisor Widgets ?>
<div id="TA_cdsratingsonlynarrow229" class="TA_widget TA_cdsratingsonlynarrow">
  <ul id="BExcRynbB95P" class="TA_links 5scDi4OEy7x">
    <li id="Ds6Md8TgC7" class="tv7qA9G">
      <a id="CDSLOCINNER" target="_blank" href="https://www.tripadvisor.co.uk/Hotel_Review-g1644097-d2056930-Reviews-Swansea_Valley_Holiday_Cottages-Pontardawe_Vale_of_Glamorgan_Southern_Wales_Wales.html" onclick="ta.cds.handleTALink($cdsConfig.getMcid()); return true;">Swansea Valley Holiday Cottages</a>
    </li>
  </ul>
</div>
<script src="https://www.jscache.com/wejs?wtype=cdsratingsonlynarrow&amp;uniq=229&amp;locationId=2056930&amp;lang=en_UK&amp;border=false&amp;shadow=false&amp;backgroundColor=white"></script>


<a href="/holiday-attractions-swansea/">
  <div class="cta location">
    discover<br><span>places to visit</span>
  </div>
</a>

<!--  <a href="/index.php?p=3224">-->
<!--    <div class="cta plan">-->
<!--    	<span>plan your trip</span><br>with our handy guide-->
<!--    </div>-->
<!--  </a>-->

<a href="/unique-holiday-cottages/">
  <div class="cta tour">
    choose your<br><span>holiday cottage</span>
  </div>
</a>


<div class="badges">
  <img alt="Good to go" src="<?php bloginfo('template_url'); ?>/img/logos/wales-gold-100x100.png" />
  <a href="http://www.tourismswanseabay.co.uk"><img src="<?php bloginfo('template_url'); ?>/wp-content/themes/roots-shep/img/logos/winner-en-2019.png" alt="Swansea Bay Tourism Award - 2017 Winner"></a>
  <a title="Visit Wales 4 and 5 Star Rating" href="http://www.visitwales.com"><img src="<?php bloginfo('template_url'); ?>/img/logos/5-star-100x100.png" alt="Visit Wales"></a>
  <a href="#"><img src="<?php bloginfo('template_url'); ?>/img/logos/logo-wifi.png" alt="Free WiFi in all our cottages"></a>
</div>

<div class="social">
    <?php dynamic_sidebar('roots-sidebar'); ?>
</div>


