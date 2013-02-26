<?php
/*
   Template Name: Future Cities - Retail

 * The template for displaying the Future Cities - Retail
 */

get_header(); ?>


<div id="homePage">


<?php if(function_exists('genki_announcement')) { genki_announcement(); } ?>



<div class="future-header future-header-small">
	<h1 class="fadein">Sustainable Retail</h1>
	<p class="fadein">Retail centres built to reduce waste and generate power.</p>
	<a data-toggle="modal" href="#newsModal" class="btn btn-large btn-future fadein hide"><i class="icon-envelope"></i> Receive email updates</a>
	
	<?php include 'reuse/future/future-share.php'; ?>
	
	<div class="future-all-markets"><a href="<?php bloginfo( 'url' ); ?>/sustainable-cities/">
		<i class="icon-share-alt"></i> Back to City</a>
	</div>
</div>

<div class="clear"></div> 

<div id="future-page">

<!-- Start Future Section -->
<div class="future-section future-border">
	<h2>Efficient retail centres</h2>
	<p class="intro">Retail centres will feature many methods to reduce waste and generate power in order to create an efficient, environmentally friendly and visually attractive retail experience.</p>

<div class="future-feature">
	<img class="future-img" src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/big-retail.png" alt="Retail centre" width="310" height="310" />
</div>

<div class="future-feature future-middle" style="border:none;">
<p>
Large glass panelling will feature integrated transparent organic photovoltaic cells whilst printed OLED lighting and display systems offers a new dimension in user interaction. Printed solid state lighting offer many architectural properties with flexibility and conformability being the key attributes alongside reduced cost and energy usage.<br/><br/>

Flexible, low cost printed displays offer improved interactive and point of sale, advertising and smart packaging opportunities.
</p>
</div>

<div class="future-feature">
<p>
Stores will stock bio derived products such as pharmaceutical and personal care items alongside food products. In addition low cost printed RFID will help stock management and control for the store owner with self-ordering and automated stock management.
</p>

<br/>
<p>
<h3>CPI technologies utilised</h3>

<ul class="future-tech-list">
    		
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
    		<li><img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/process-retail.png" width="737" height="447" /></li>
			<li><img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/process-retail-construction.png" width="737" height="447" /></li>
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
<li>Printable electronic material development.</li>

<li>Demonstration manufacturing including vacuum coating, atomic layer deposition, fabrication and manufacture of devices.</li>

<li>Integration of printed electronic components with conventional components.</li>

<li>Anaerobic digestion development centre to improve yields and assess feedstocks.</li>

<li>Thermal Technologies Centre on gasification of residual wastes.</li>

<li>Algae growing programmes from laboratory to demonstration using the industrial biotechnology facility services.</li>
</ul>
</p>
</div>

<div class="future-feature future-bottom future-projects">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/retail-pe.png" alt="man at computer" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/retail-packet.png" alt="packaging" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/retail-pipes.png" alt="industrial biotechnology" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/small-pe.png" alt="printable electronics screens" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/small-ib3.png" alt="Industrial Biotechnology" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/small-ib4.png" alt="Industrial Biotechnology" width="120" height="120" />
</div>

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section">
	<h2>Join the conversation on sustainable retail…</h2>
<?php include 'reuse/future/future-footer.php'; ?>
<!-- End Future Section in Include -->

<!-- Start Future Section -->
<div class="future-section">
<?php include 'reuse/future/browse-buildings.php'; ?>
</div><!-- End Future Section --> 



    	
</div>   
	<?php include 'newsletter.php'; ?>
	<?php get_footer(); ?>
