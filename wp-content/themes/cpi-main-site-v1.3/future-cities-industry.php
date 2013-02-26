<?php
/*
   Template Name: Future Cities - Industry

 * The template for displaying the Future Cities - Industry
 */

get_header(); ?>


<div id="homePage">


<?php if(function_exists('genki_announcement')) { genki_announcement(); } ?>



<div class="future-header future-header-small">
	<h1 class="fadein">Sustainable Industry</h1>
	<p class="fadein">Industry built to make use of bio derived feedstocks.</p>
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
	<h2>Efficient industry</h2>
	<p class="intro">Products will be increasingly produced using bio derived feedstocks to reduce<br/> reliance on fossil fuels.</p>

<div class="future-feature">
	<img class="future-img" src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/big-industry.png" alt="Industry" width="310" height="310" />
</div>

<div class="future-feature future-middle" style="border:none;">
<p>
Efficiency will be paramount reducing costs, emissions and waste whilst increasing profit will lead to sustainable businesses of the future.
<br/><br/>
Efforts will also be focused on the production of more personalised products. Moving from batch to continuous processing will enable companies to produce bespoke formulations at speed. 
</p>
</div>

<div class="future-feature">
<p>
Distributed manufacturing will encourage the development of flexible, local industrial units, able to produce a variety of products using a flexible toolset. This approach enables efficiencies and sustainability, while creating a valuable local talent pool.
</p>

<br/>
<p>
<h3>CPI technologies utilised</h3>

<ul class="future-tech-list">
    		<li class="ib-icon-small"><a href="<?php bloginfo('url'); ?>/industrial-biotechnology/">Industrial Biotechnology</a></li>
    		<li class="pe-icon-small"><a href="<?php bloginfo('url'); ?>/printable-electronics/">Printable Electronics</a></li>
    		<li class="sc-icon-small"><a href="<?php bloginfo('url'); ?>/smart-chemistry/">Smart Chemistry</a></li>
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

	<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/process-industry.png" alt="Industry Process" width="946" height="351" />

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section">
	<h2>Activities & projects</h2>

<div class="future-feature future-bottom">
<p>
<ul>
<li><strong>Better</strong> – Improved product design, quality and performance with 
increased functionality and embedded intelligence, ideally at no extra cost of raw material or feed to product.</li> 

<li><strong>Faster</strong> – Higher process yields, reduced manufacturing time and faster conversion of raw material or feed to product with shorter time to market.</li>

<li><strong>Cheaper</strong> – Lower capital cost, manufacturing design and process cost - e.g. in process industries by moving batch processes to continuous processes, increased digital prototyping and automation in manufacture, reduced manufacturing and lower capital requirements.</li>

<li><strong>Greener</strong> – increased use of natural materials, materials based on waste, reuse or recycling with lower carbon footprint processes and products. Reduced manufacturing time, reduced waste, near net shape production. Preferably with design for reuse and recycling addressed.</li>
</ul>
</p>
</div>

<div class="future-feature future-bottom future-projects">
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/industry-01.png" alt="indurial building" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/industry-02.png" alt="grass" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/industry-03.png" alt="thermal technologies" width="120" height="120" />

<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/small-pe.png" alt="printable electronics screens" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/small-ib.png" alt="Industrial Biotechnology" width="120" height="120" />
<img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/future/city/small-ib4.png" alt="Industrial Biotechnology" width="120" height="120" />
</div>

</div><!-- End Future Section -->



<!-- Start Future Section -->
<div class="future-section">
	<h2>Join the conversation on sustainable industry…</h2>
<?php include 'reuse/future/future-footer.php'; ?>
<!-- End Future Section in Include -->

<!-- Start Future Section -->
<div class="future-section">
<?php include 'reuse/future/browse-buildings.php'; ?>
</div><!-- End Future Section --> 





    	
</div>   
	<?php include 'newsletter.php'; ?>
	<?php get_footer(); ?>
