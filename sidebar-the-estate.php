	<div class="cottage-selector attractions-selector">
    <h4>The Estate</h4>
      <?php
      // Display the "Activities" menu
      wp_nav_menu(array(
          'theme_location' => 'estate_menu', // Replace with the actual menu location name
          'menu_class' => 'c-nav-menu--estate', // CSS class for the menu
          // You can add more parameters here if needed
      ));
      ?>
	</div>

	<?php wp_reset_query(); ?>


