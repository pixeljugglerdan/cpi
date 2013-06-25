<?php
/*
   Template Name: Future Cities - Office

 * The template for displaying the Future Cities - Office
 */

get_header(); ?>


<div id="homePage">


<?php if(function_exists('genki_announcement')) { genki_announcement(); } ?>



<div class="future-header future-header-small">
	<h1 class="fadein">Sustainable Offices</h1>
	<p class="fadein">Office spaces built to offer efficient working environments.</p>
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
	<h2>Efficient work spaces</h2>
	<p class="intro">Future offices will be built to preserve the quality of the working environment while increasing the efficiency of the buildings.</p>

<div class="future-feature">
	<img class="future-img" src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/big-office.png" alt="Office" width="310" height="310" />
</div>

<div class="future-feature future-middle" style="border:none;">
<p>
This is likely to include the integration of energy management systems, focusing on the use of energy and recycling of waste.<br/><br/>
Buildings will feature transparent, flexible organic photovoltaic cells integrated into glass and roofing materials to generate energy. These will be coupled with high efficiency organic light emitting diodes for solid state lighting, information displays and work screens. Low cost printed sensors and monitors (RFID) will be used to create low cost integrated interior systems for the future where the building matches the needs of its occupants day and night. 

</p>
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
    		</ul>

</p>
</div>

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section future-border">
	<h2>Part of the process</h2>
	<p class="intro">A process that reuses wastes from external sources combined with fossil fuels and renewable energy produces an ultra-efficient loop system. The reuse and reprocessing of wastes occurs on a local level but can also be integrated into a larger system offering a city wide closed loop reducing reliance of fossil fuels and producing very little waste.</p>

	<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/process-office.gif" alt="Office Process" width="713" height="328" />

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section">
	<h2>Activities & projects</h2>

<div class="future-feature future-bottom">
<p>
<ul>

<li>Printable electronic materials development</li>
<li>Printable electronics demonstration and pilot manufacturing including vacuum coating, atomic layer deposition, fabrication and manufacture of devices.</li>
<li>Integration of printed electronic components with conventional components.</li>
<li>Anaerobic digestion development centre to improve yields and assess feedstocks.</li>
<li>Thermal Technologies Centre on gasification of residual wastes</li>
<li>Algae growing programmes from laboratory to demonstration using the industrial biotechnology facility.</li>
<li>European Algae carbon capture and storage program.</li>

</ul>
</p>
</div>

<div class="future-feature future-bottom future-projects">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/office-01.png" alt="Industial Biotechnology facility" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/office-03.png" alt="lab" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/office-02.png" alt="Microlense" width="120" height="120" />

<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/small-purp.png" alt="Industial Biotechnology Tank" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/small-purp2.png" alt="Reactor" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/small-ib3.png" alt="Industial Biotechnology Equipment" width="120" height="120" />
</div>

</div><!-- End Future Section -->


<!-- Start Future Section -->
<div class="future-section">
	<h2>Join the conversation on sustainable work space…</h2>
<?php include 'reuse/future/future-footer.php'; ?>
<!-- End Future Section in Include -->

<!-- Start Future Section -->
<div class="future-section">
<?php include 'reuse/future/browse-buildings.php'; ?>
</div><!-- End Future Section -->    	
    	
</div>   
	<?php get_footer(); ?>
