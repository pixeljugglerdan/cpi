<?php
/*
   Template Name: Future Cities - Residential

 * The template for displaying the Future Cities - Residential
 */

get_header(); ?>


<div id="homePage">


<?php if(function_exists('genki_announcement')) { genki_announcement(); } ?>



<div class="future-header future-header-small">
	<h1 class="fadein">Sustainable Homes</h1>
	<p class="fadein">Efficient homes built to preserve the quality of life.</p>
	<a data-toggle="modal" href="#newsModal" class="btn btn-large btn-future fadein hide"><i class="icon-envelope"></i> Receive email updates</a>
	
	
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
	<h2>Efficient housing</h2>
	<p class="intro">Future homes will be built to preserve the quality of life while increasing the efficiency of the building.
</p>

<div class="future-feature">
	<img class="future-img" src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/big-residential.png" alt="Residential homes" width="310" height="310" />
</div>

<div class="future-feature future-middle" style="border:none;">
<p>
This is likely to include the integration of building structure with energy management, generation, use of energy and recycling of waste. Homes may feature transparent, flexible organic photovoltaic cells integrated into glass and roofing materials to generate energy. These will be coupled with high efficiency organic light emitting diodes (OLED) for solid state lighting (SSL), TV, computer and home entertainment screens. Printed sensors and monitors (RFID) will be used to create low cost integrated interior systems for the future where the building matches the needs of its occupants day and night. 
</div>

<div class="future-feature">
<p>
A new dimension in building, work environment and building comfort could be created. Facades and roofs may also be used to hold algae growth units to capture light for energy generation. These features may be combined with small scale gasifiers and anaerobic digestion plants to process wastes into power and heat for the building.
</p>

<br/>
<p>
<h3>CPI technologies utilised</h3>

<ul class="future-tech-list">
    		<li class="ib-icon-small"><a href="<?php bloginfo('url'); ?>/industrial-biotechnology/">Industrial Biotechnology</a></li>
    		<li class="pe-icon-small"><a href="<?php bloginfo('url'); ?>/printable-electronics/">Printable Electronics</a></li>
    		<li class="ad-icon-small"><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/">Anaerobic Digestion</a></li>
    		<li class="se-icon-small"><a href="<?php bloginfo('url'); ?>/sustainable-engineering/">Sustainable Engineering</a></li>
    		</ul>

</p>
</div>

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section future-border">
	<h2>Part of the process</h2>
	<p class="intro">A process that reuses wastes from external sources combined with fossil fuels and renewable energy produces an ultra-efficient loop system. The reuse and reprocessing of wastes occurs on a local level but can also be integrated into a larger system offering a city wide closed loop reducing reliance of fossil fuels and producing very little waste.</p>

<div id="future-slide-show">
	<div id="slideNow">    		
    	<ul id="future-slide">
    		<li><img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/process-residential.png" width="737" height="425" /></li>
			<li><img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/process-residential-construction.png" width="737" height="425" /></li>
		</ul>
		<a href="#" id="prev2" class="prev"><i class="icon-chevron-left"></i></a>
		<a href="#" id="next2" class="next"><i class="icon-chevron-right"></i></a>
	</div>
</div>


</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section">
	<h2>Activities & projects</h2>

<div class="future-feature future-bottom">
<p>
<ul>

<li>Printable electronic materials development.</li>

<li>Demonstration manufacturing including vacuum coating, atomic layer deposition, fabrication and manufacture of devices.</li>

<li>Integration of printed electronic components with conventional components.</li>

<li>Anaerobic digestion development centre to improve yields and assess feedstocks.</li>

<li>Algae growing programmes from laboratory to demonstration using the industrial biotechnology facility services.</li>

<li>Sustainable engineering infrastructure.</li>

<li>Printed sensors, photovoltaics, lights and displays.</li>

</ul>
</p>
</div>

<div class="future-feature future-bottom future-projects">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/residential-pe.png" alt="printable electronics worker" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/residential-plant.png" alt="Plants with city" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/residential-pe2.png" alt="Vaccum coating" width="120" height="120" />

<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/small-pe.png" alt="printable electronics screens" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/small-ib.png" alt="Industrial Biotechnology" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/small-ib2.png" alt="Industrial Biotechnology" width="120" height="120" />
</div>

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section">
	<h2>Join the conversation on sustainable housing…</h2>
<?php include 'reuse/future/future-footer.php'; ?>
<!-- End Future Section in Include -->


<!-- Start Future Section -->
<div class="future-section">
<?php include 'reuse/future/browse-buildings.php'; ?>
</div><!-- End Future Section -->




    	
</div>   
	<?php include 'newsletter.php'; ?>
	<?php get_footer(); ?>
