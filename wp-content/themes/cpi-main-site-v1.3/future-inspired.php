<?php
/*
   Template Name: Future Inspired

 * The template for displaying the Future Inspired Landing Page
 */

get_header(); ?>





<?php if(function_exists('genki_announcement')) { genki_announcement(); } ?>



<div class="future-landing" class="fadein">
	<h1 class="fadein">The future inspired</h1>
	<p class="fadein">Explore how our technologies will change the way we live.</p>
</div>
			

<div class="clear"></div> 


<div id="future-page">
<!-- Start Future Section -->
<div class="future-section">
	
<div class="future-feature">
<a href="http://twitter.com/dabblet" class="circle">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city-landing.jpg" alt="Sustainable Cities" width="296" height="296" />
<div class="future-badge-title">
<div class="future-badge-centre">	
	<h3>Sustainable Cities</h3>
</div>
</div>
</a>
</div>

<div class="future-feature">
<a href="http://twitter.com/dabblet" class="circle">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/air-landing.jpg" alt="Aerospace" width="296" height="296" />
<div class="future-badge-centre">
<div class="future-badge-title"><h3>Aerospace</h3></div>
</div>
</a>
</div>

<div class="future-feature">
<a href="http://twitter.com/dabblet" class="circle">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/auto-landing.jpg" alt="Automotive" width="296" height="296" />
<div class="future-badge-centre">
<div class="future-badge-title"><h3>Automotive</h3></div>
</div>
</a>
</div>
</div><!-- End Future Section -->


</div><!-- End Future Page -->
  
	<?php include 'newsletter.php'; ?>
	<?php get_footer(); ?>
	
