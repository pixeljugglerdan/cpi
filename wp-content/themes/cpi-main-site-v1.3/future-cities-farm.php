<?php
/*
   Template Name: Future Cities - Farm

 * The template for displaying the Future Cities - Farm
 */

get_header(); ?>


<div id="homePage">


<div class="future-header future-header-small">
	<h1 class="fadein">Sustainable Agriculture</h1>
	<p class="fadein">Farms built to reclaim city waste and utilise enhanced biological growing.</p>
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
	<h2>Efficient agriculture</h2>
	<p class="intro">Future agricultural outlets will utilise enhanced biological growing systems with natural fertilisers reclaimed through anaerobic digestion (AD) and technologies such as aeroponics to improve efficiency.</p>

<div class="future-feature">
	<img class="future-img" src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/big-farm.png" alt="Farming" width="310" height="310" />
</div>

<div class="future-feature future-middle" style="border:none;">
<p>
Algae growth may become a staple crop alongside traditional food production. Algae is an ideal biomass feedstock for energy production in future power stations. It is also a natural source of carbon capture so government grants and subsidies may be provided to farmers.
<br/><br/>
Growing systems are likely to become more efficient using technologies such as hydroponics, aeroponics, carbon dioxide addition and organic LED (OLED) lighting.
</p>
</div>

<div class="future-feature">
<p>
Wastes from animals will be processed through AD systems giving fertiliser and energy. Larger farms have their own integrated water and energy complexes to maximise efficiency and minimise import of energy.
</p>

<br/>
<p>
<h3>CPI technologies utilised</h3>

<ul class="future-tech-list">
    		<li class="ib-icon-small"><a href="<?php bloginfo('url'); ?>/industrial-biotechnology/">Industrial Biotechnology</a></li>
    		<li class="ad-icon-small"><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/">Anaerobic Digestion</a></li>
    		</ul>

</p>
</div>

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section future-border">
	<h2>Part of the process</h2>
	<p class="intro">A process that reuses wastes from external sources combined with fossil fuels and renewable energy produces an ultra-efficient loop system. The reuse and reprocessing of wastes occurs on a local level but can also be integrated into a larger system offering a city wide closed loop reducing reliance of fossil fuels and producing very little waste.</p>

	<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/process-farm.png" alt="Agriculture Process" width="976" height="270" />

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section">
	<h2>Activities & projects</h2>

<div class="future-feature future-bottom">
<p>
<ul>
<li>Anaerobic digestion development centre to improve yields and assess feedstocks.</li>
<li>Algae growing programmes from laboratory to demonstration using the industrial biotechnology facility services.</li>
<li>Frequency and intensity specific organic LEDs (OLEDs) to enhance photosynthesis.</li>
</ul>
</p>
</div>

<div class="future-feature future-bottom future-projects">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/pigs.png" alt="famr pigs" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/farm-sun.png" alt="farm at sunset" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/farm-harvest.png" alt="harvest time" width="120" height="120" />
</div>

</div><!-- End Future Section -->




<!-- Start Future Section -->
<div class="future-section">
	<h2>Join the conversation on sustainable agriculture…</h2>
<?php include 'reuse/future/future-footer.php'; ?>
<!-- End Future Section in Include -->

<!-- Start Future Section -->
<div class="future-section">
<?php include 'reuse/future/browse-buildings.php'; ?>
</div><!-- End Future Section --> 

    	
</div>   
	<?php get_footer(); ?>
