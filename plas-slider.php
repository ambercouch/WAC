<?php // This is effectively redundant with the implementation of the Views slider ?>
<?php global $slides; ?>
<div class="flexslider">
  <ul class="slides">			
    <?php foreach ($slides as $path => $alt) { ?> 
    <li><img src="<?php echo $path ?>" alt="Slideshow image of <?php echo $alt ?>" width="960" height="330" /></li>
    <?php } ?>
  </ul>
</div><!-- flexslider -->

<div class="info-band">
	<span class="slide-quote">&ldquo;We couldn't have come across a nicer place to stay in Wales&rdquo;</span>
	<span class="cono">call us on 01792 864 611</span>
</div>
