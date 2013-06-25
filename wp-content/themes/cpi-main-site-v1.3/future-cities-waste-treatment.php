<?php
/*
   Template Name: Future Cities - Waste Treatment

 * The template for displaying the Future Cities - Waste Treatment
 */

get_header(); ?>


<div id="homePage">


<?php if(function_exists('genki_announcement')) { genki_announcement(); } ?>



<div class="future-header future-header-small">
	<h1 class="fadein">Waste Treatment</h1>
	<p class="fadein">Waste treatment facilities built to integrate with energy production.</p>
	<a target="_blank"  href="<?php bloginfo('url'); ?>/cpi-newsletter/" class="btn btn-large btn-future fadein hide"><i class="icon-envelope"></i> Receive email updates</a>
	
	<?php include 'reuse/future/future-share.php'; ?>
	
	<div class="future-all-markets">
	<a href="<?php bloginfo( 'url' ); ?>/sustainable-cities/">
		<i class="icon-share-alt"></i> Back to City</a>
	</div>
</div>

<div class="clear"></div> 

<div id="future-page">

<!-- Start Future Section -->
<div class="future-section future-border">
	<h2>Efficient waste treatment</h2>
	<p class="intro">The treatment of organic wastes and water is vital to a sustainable society. Reducing and reusing raw materials as part of an integrated system offers an effective solution to much of today’s inefficiency.
</p>

<div class="future-feature">
	<img class="future-img" src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/big-water-treatment.png" alt="Water Treatment" width="310" height="310" />
</div>

<div class="future-feature future-middle" style="border:none;">
<p>
Future treatment systems are likely to integrate water treatment with energy production through the application of anaerobic digestion and gasification technologies that may be based on combined heat and power (CHP) principles. It is likely that more facilities will seek to create additional value for water companies and manufacturing sites by integrating locally arising wastes in system approaches that use wastes to generate heat and power as well as clean water.
</p>
</div>

<div class="future-feature">
<p>
It is likely that anaerobic digestion will increase in use and gasification may be more widely used to convert wastes into power and fuels as well as treating water.
</br></br>
Waste treatment plants may also use a wider range feedstock from industrial, agricultural and residential sources. Efforts will be made to convert wastes into energy and fertiliser.
</p>

<br/>
<p>
<h3>CPI technologies utilised</h3>

<ul class="future-tech-list">
    		<li class="ad-icon-small"><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/">Anaerobic Digestion</a></li>
    		<li class="tt-icon-small"><a href="<?php bloginfo('url'); ?>/thermal-technologies/">Thermal Technologies</a></li>
    		<li class="se-icon-small"><a href="<?php bloginfo('url'); ?>/sustainable-engineering/">Sustainable Engineering</a></li>
</ul>

</p>
</div>

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section future-border">
	<h2>Part of the process</h2>
	<p class="intro">A process that reuses wastes from external sources combined with fossil fuels and renewable energy produces an ultra-efficient loop system. The reuse and reprocessing of wastes occurs on a local level but can also be integrated into a larger system offering a city wide closed loop reducing reliance of fossil fuels and producing very little waste..</p>

	<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/process-waste-treatment.png" alt="Waste Treatment Process" width="976" height="319" />

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section">
	<h2>Activities & projects</h2>

<div class="future-feature future-bottom">
<p>
<ul>

<li>Anaerobic digestion development centre to improve yields and assess feedstocks.</li>
<li>Thermal Technologies Centre on gasification of residual wastes.</li>
<li>Sustainable engineering team’s work on the integration of facilities.</li>

</ul>
</p>
</div>

<div class="future-feature future-bottom future-projects">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/water-01.png" alt="Water Treatment" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/water-03.png" alt="Thermal Technologies" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/water-02.png" alt="Lady with helmet" width="120" height="120" />
</div>

</div><!-- End Future Section -->





<!-- Start Future Section -->
<div class="future-section">
	<h2>Join the conversation on efficient waste treatment…</h2>
<?php include 'reuse/future/future-footer.php'; ?>
<!-- End Future Section in Include -->

<!-- Start Future Section -->
<div class="future-section">
<?php include 'reuse/future/browse-buildings.php'; ?>
</div><!-- End Future Section --> 





    	
</div>   

	<?php get_footer(); ?>
