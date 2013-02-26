<?php
/*
   Template Name: Future Cities - Power Station

 * The template for displaying the Future Cities - Power Station
 */

get_header(); ?>


<div id="homePage">


<?php if(function_exists('genki_announcement')) { genki_announcement(); } ?>



<div class="future-header future-header-small">
	<h1 class="fadein">Sustainable Power</h1>
	<p class="fadein">Power generation built to be more efficient and utilise waste.</p>
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
	<h2>Efficient energy</h2>
	<p class="intro">Future power stations are likely to use a combination of fuels that include both fossil and wastes from multiple sources. They are likely to be based on combined heat and power (CHP) principles.  </p>

<div class="future-feature">
	<img class="future-img" src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/big-power.png" alt="Power Station" width="310" height="310" />
</div>

<div class="future-feature future-middle" style="border:none;">
<p>
More power stations will be built to supply to local residential and industrial users as well as major national facilities. By integrating heat and power with locally arising wastes in system approaches, heat will be used more efficiently, waste production will be reduced and overall feed to heat and power efficiency will significantly increase in CHP production.
</br></br>
Gasification technologies will be widely used to convert wastes into power and fuels whilst there will be increased use of anaerobic digestion to process organic wastes, biomass and industrial by-products into methane gas for heat and power. These may be in local facilities that combine water treatment, energy
</p>
</div>

<div class="future-feature">
<p>
production and waste treatment in community scale integrated systems.</br></br>

Current challenges centre around balancing yield with capital and operating costs. Feedstock flexibility is paramount to economics in power stations of the future. Industrialised growth of biomass such as algae for energy production will likely increase the uptake of non-fossil fuels.

</p>

<br/>
<p>
<h3>CPI technologies utilised</h3>

<ul class="future-tech-list">
    		<li class="ib-icon-small"><a href="<?php bloginfo('url'); ?>/industrial-biotechnology/">Industrial Biotechnology</a></li>
    		<li class="pe-icon-small"><a href="<?php bloginfo('url'); ?>/printable-electronics/">Printable Electronics</a></li>
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
	<p class="intro">A process that reuses wastes from external sources combined with fossil fuels and renewable energy produces an ultra-efficient loop system. The reuse and reprocessing of wastes occurs on a local level but can also be integrated into a larger system offering a city wide closed loop reducing reliance of fossil fuels and producing very little waste.</p>

	<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/process-power.png" alt="Power Station Process" width="976" height="390" />

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section">
	<h2>Activities & projects</h2>

<div class="future-feature future-bottom">
<p>
<ul>
<li>Thermal Technologies centre for waste to energy development.</li>
<li>Anaerobic digestion development centre to improve yields and assess feedstocks.</li>
<li>Sustainable engineering team’s work on the next generation of integrated waste to energy plants.</li>
<li>Algae growing programmes from laboratory to demonstration using the industrial biotechnology facility services.</li>
<li>Low cost roll-to-roll photovoltaics.</li>
</ul>
</p>
</div>

<div class="future-feature future-bottom future-projects">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/power-night.png" alt="power station at night" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/power-alg.png" alt="power algie" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/power-abs.png" alt="Power sustainable" width="120" height="120" />
</div>

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section">
	<h2>Join the conversation on efficient energy…</h2>
<?php include 'reuse/future/future-footer.php'; ?>
<!-- End Future Section in Include -->

<!-- Start Future Section -->
<div class="future-section">
<?php include 'reuse/future/browse-buildings.php'; ?>
</div><!-- End Future Section --> 



    	
</div>   
	<?php include 'newsletter.php'; ?>
	<?php get_footer(); ?>
