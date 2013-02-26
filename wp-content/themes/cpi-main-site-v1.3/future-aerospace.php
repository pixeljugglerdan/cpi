<?php
/*
   Template Name: Future Aerospace

 * The template for displaying the Future Aerospace
 */

get_header(); ?>



<?php if(function_exists('genki_announcement')) { genki_announcement(); } ?>



<div class="future-header">
	<h1 class="fadein">The future of flight</h1>
	<p class="fadein">Discover how our technologies will change the future of aerospace.</p>
	<a data-toggle="modal" href="#newsModal" class="btn btn-large btn-future-flight fadein hide"><i class="icon-envelope"></i> Receive email updates</a>
	<div id="future-header-hand"><img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/header-aviation-hand.png" /></div>
	<div class="future-all-markets"><a href="<?php bloginfo('url'); ?>/markets/">
		<i class="icon-share-alt"></i> View All Markets</a>
	</div>
</div>
			

<div class="clear"></div> 


<div id="future-page">
<!-- Start Future Section -->
<div class="future-section future-border">
	<h2>Lightweight aviation</h2>
	<p class="intro">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed egestas interdum fermentum. Vestibulum molestie mollis scelerisque. Fusce feugiat tempor suscipit.</p>

<div class="future-feature">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/future-low-energy.png" alt="future-low-energy" width="120" height="120" />
<h3>Low Energy</h3>
<p>
Nullam non lectus at erat tempor iaculis. Morbi vitae lacus est, eu ultricies mauris. 
</p>
</div>

<div class="future-feature">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/future-low-energy.png" alt="future-low-energy" width="120" height="120" />
<h3>Low Energy</h3>
<p>
Nullam non lectus at erat tempor iaculis. Morbi vitae lacus est, eu ultricies mauris. 
</p>
</div>

<div class="future-feature">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/future-low-energy.png" alt="future-low-energy" width="120" height="120" />
<h3>Low Energy</h3>
<p>
Nullam non lectus at erat tempor iaculis. Morbi vitae lacus est, eu ultricies mauris. 
</p>
</div>
</div><!-- End Future Section -->


<!-- Start Future Section -->
<div class="future-section">
	<h2>Efficient organic lighting systems</h2>
	<p class="intro">Donec tristique sapien malesuada dui dignissim sed tincidunt orci tempor. Duis risus odio, vehicula in semper at, ultrices sagittis dui. Nam lorem turpis, porttitor id facilisis at, consequat.</p>

<div class="future-feature">
<h3>Low Energy</h3>
<p>
Sed pretium odio ac mauris interdum rhoncus. Etiam sed justo eget nulla mollis suscipit. Maecenas scelerisque risus ut ipsum feugiat id ultricies sem fermentum.
</p>
</div>

<div class="future-feature future-middle">
<h3>Low Energy</h3>
<p>
Sed pretium odio ac mauris interdum rhoncus. Etiam sed justo eget nulla mollis suscipit. Maecenas scelerisque risus ut ipsum feugiat id ultricies sem fermentum.
</p>
</div>

<div class="future-feature">
<h3>Low Energy</h3>
<p>
Sed pretium odio ac mauris interdum rhoncus. Etiam sed justo eget nulla mollis suscipit. Maecenas scelerisque risus ut ipsum feugiat id ultricies sem fermentum. 
</p>
</div>

<div class="future-image-flow">
	<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/future-cabin.png" alt="Cabin" width="980" height="253" />
</div>

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section ">
	<h2>Enhanced safety systems</h2>
	<p class="intro">Donec tristique sapien malesuada dui dignissim sed tincidunt orci tempor. Duis risus odio, vehicula in semper at, ultrices sagittis dui. Nam lorem turpis, porttitor id facilisis at, consequat.</p>

<div class="future-feature future-bottom">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/future-safety.png" alt="future-low-energy" width="200" height="200" />
<h3>Passenger responsive environment</h3>
<p>
Sed pretium odio ac mauris interdum rhoncus. Etiam sed justo eget nulla mollis suscipit. Maecenas scelerisque risus ut ipsum feugiat id ultricies sem fermentum.
</p>
</div>

<div class="future-feature future-bottom">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/future-safety.png" alt="future-low-energy" width="200" height="200" />
<h3>Interactive technologies & design</h3>
<p>
Sed pretium odio ac mauris interdum rhoncus. Etiam sed justo eget nulla mollis suscipit. Maecenas scelerisque risus ut ipsum feugiat id ultricies sem fermentum. 
</p>
</div>

</div><!-- End Future Section -->

<div class="future-contact">
	<div class="future-contact-btn">
		<a href="<?php bloginfo( 'url' ); ?>/contact/" class="btn btn-large btn-future-flight hide future-large" onClick="javascript: pageTracker._trackPageview('green-contact');">Work with us</a>
	</div>
</div>





</div>

  
	<?php include 'newsletter.php'; ?>
	<?php get_footer(); ?>
	
