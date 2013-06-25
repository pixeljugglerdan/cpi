<?php
/*
   Template Name: Future Cities - Transport

 * The template for displaying the Future Cities - Transport
 */

get_header(); ?>


<div id="homePage">


<?php if(function_exists('genki_announcement')) { genki_announcement(); } ?>



<div class="future-header future-header-small">
	<h1 class="fadein">Sustainable Transport</h1>
	<p class="fadein">Economic transport systems designed to be environmentally friendly.</p>
	<a target="_blank"  href="<?php bloginfo('url'); ?>/cpi-newsletter/" class="btn btn-large btn-future fadein hide"><i class="icon-envelope"></i> Receive email updates</a>
	
	<?php include 'reuse/future/future-share.php'; ?>
	
	<div class="future-all-markets"><a href="<?php bloginfo( 'url' ); ?>/sustainable-cities/">
		<i class="icon-share-alt"></i> Back to City</a>
	</div>
</div>

<div class="clear"></div> 

<div id="future-page">

<!-- Start Future Section -->
<div class="future-section future-border">
	<h2>Efficient transport</h2>
	<p class="intro">Printed lighting, sensors, displays, entertainment systems and circuits will replace traditional bulky units enabling manufacturers to reduce size and weight whilst improving internal and external ambiances.</p>

<div class="future-feature">
	<img class="future-img" src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/big-transport.png" alt="Transport" width="310" height="310" />
</div>

<div class="future-feature future-middle" style="border:none;">
<p>
The flexible, thin and light weight nature of printable electronics means that greater design freedom and functionality can be embraced whilst reducing overall costs of manufacture and travel. 
<br/><br/>

Integration of printed sensors into components will lead to additional functionality within vehicles including touch and gesture controls. Low cost sensor technologies will also be used for rail tracks and aerospace components to monitor stress and efficiencies.
</p>
</div>

<div class="future-feature">
<p>
Future transport systems will utilise biofuels and blends for reducing fossil fuel use leading to more efficient, economic and environmentally friendly fuel solutions. Costs and emissions of jet fuels can be substantially reduced by utilising specialised blends 
with biofuels – something already being trialled by most major 
airlines today.
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

	<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/process-transport.png" alt="Transport Process" width="720" height="349" />

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section">
	<h2>Activities & projects</h2>

<div class="future-feature future-bottom">
<p>
<ul>
<li>Printable electronic materials development</li>
<li>Demonstration manufacturing including vacuum coating, atomic layer deposition, fabrication and manufacture of devices.</li>
<li>Integration of printed electronic components with conventional components.</li>
<li>Industrial biotechnology and algae growing for the production of fuels etc.</li>
<li>Smart chemistry for the development of formulations for coatings, fuels, oils processing fluids, coolants.</li>
</ul>
</p>
</div>

<div class="future-feature future-bottom future-projects">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/trans-ind2.png" alt="industrial biotechnology" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/trans-ind5.png" alt="Arrivals in airport" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/trans-ind4.png" alt="Industial biotechnology pipes" width="120" height="120" />
</div>

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section">
	<h2>Join the conversation on sustainable transport…</h2>
<?php include 'reuse/future/future-footer.php'; ?>
<!-- End Future Section in Include -->

<!-- Start Future Section -->
<div class="future-section">
<?php include 'reuse/future/browse-buildings.php'; ?>
</div><!-- End Future Section --> 


    	
</div>   
	<?php get_footer(); ?>
