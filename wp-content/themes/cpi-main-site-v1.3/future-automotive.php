<?php
/*
   Template Name: Future Automotive

 * The template for displaying the Future Aerospace
 */

get_header(); ?>


<?php if(function_exists('genki_announcement')) { genki_announcement(); } ?>


<div class="future-header">
	<h1 class="fadein">Automotive</h1>
	<p class="fadein">Discover how our technologies will change the way you drive.</p>
	<a target="_blank"  href="<?php bloginfo('url'); ?>/cpi-newsletter/" class="btn btn-large btn-future-flight fadein hide"><i class="icon-envelope"></i> Receive email updates</a>
	
		<?php include 'reuse/future/future-share.php'; ?>
	
</div>
			

<div class="clear"></div> 


<div id="future-page">
<!-- Start Future Section -->
<div class="future-section future-border">
	<h2>Printable Electronics for Automotive</h2>
	<p class="intro"></p>

	<div class="video-container">
		<iframe width="980" height="551" src="http://www.youtube.com/embed/BAjVtucSAlQ?rel=0" frameborder="0" allowfullscreen></iframe>
	</div>

</div><!-- End Future Section -->


<!-- Start Future Section -->
<div class="future-section future-border">
	<h2>Advancing automotive transport</h2>
	<p class="intro">As societal and economical expectations move the consumer automotive market towards improved safety, interactivity and enhanced driver experience coupled with low-energy, low-carbon and high efficiency vehicles, printable electronics can help
to address these market needs in a non-obtrusive, visually satisfying way.</p>

<div class="future-image-flow">
	<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/auto/car-park.jpg" alt="Cars" width="980" height="253" />
</div>

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section future-border">
	<h2>Improving your driving experience</h2>
	<p class="intro">With the potential for improved control and operation through printed sensors, conformable, integrated displays and ambient organic internal and external lighting, printable electronics will provide users with a new and improved driving experience.</p>

<div class="future-feature future-bottom">
<h2>Lighting</h2>
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/auto/auto-lighting.jpg" style="margin-bottom: 20px;">
<p>
Utilising Organic LED technologies for lighting reduces potential weight and production costs and increases useable interior space by integrating electronics within internal and external panelling. The flexible and conformable nature of the technology means that previously unachievable design elements can become a reality. Lighting is switchable and responsive enabling each light to have a wider range of functionality.
</p>
</div>

<div class="future-feature future-bottom">
<h2>Sensing</h2>
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/auto/auto-sensing.jpg" style="margin-bottom: 20px;">

<p>
Printed sensors integrated into the vehicle can be used to measure pressure, movement and monitor structural integrity, as well as activating entertainment systems. Embedded touch and ‘touch less’ sensing will open the opportunity to a number of new design features and adapt the cabin environment to driver and passenger needs. Intelligent mobility will be achieved through external sensing for parking, monitoring of pedestrian presence and lane management.
</p>
</div>

<div class="future-feature future-bottom">
<h2>Power</h2>
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/auto/auto-power.jpg" style="margin-bottom: 20px;">

<p>
Organic photovoltaics (solar cells) are a flexible, conformable and transparent future power source for the automotive industry. The cells harness power from the sun to supplement the car’s on board supply without hindering the design and look of the vehicle.
</p>
</div>

<div class="future-feature future-bottom">
<h2>Entertainment</h2>
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/auto/auto-entertainment.jpg" style="margin-bottom: 20px;">

<p>
Organic LED (OLED) technologies will increase use of in-cabin displays for entertainment and information. Their conformable nature means that entire dashboards may become interactive displays. Coupled with sensor technologies, these developments could lead to exciting new opportunities for the premium automotive market.
</p>
</div>

</div><!-- End Future Section -->


<div class="future-section future-border" style="padding-bottom:40px;">
	<a class="btn btn-large btn-future-flight" href="<?php bloginfo('url'); ?>/contact" target="_blank">Work with us</a>
</div>

	<!-- Start Future Section -->
<div class="future-section">
	<h2>Join the conversation on automotive…</h2>
<?php include 'reuse/future/future-footer.php'; ?>
<!-- End Future Section in Include -->



</div>
	<?php get_footer(); ?>
