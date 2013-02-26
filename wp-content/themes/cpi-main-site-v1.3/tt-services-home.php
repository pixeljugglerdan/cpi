<?php
/*
Template Name: tt-services-home

 * The template for displaying the thermal technologies Services Page in the CPI INNOVATOR THEME
 */

get_header(); ?>


<div id="titleArea" class="titleAreaArchive">	
<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/thermal-technologies/">Thermal Technologies</a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Thermal Technologies Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>

</div>

 	    	
    	<section class="archive-gap zz-link-box service-tt-01">
       		<a href="<?php bloginfo('url'); ?>/thermal-technologies/product-and-process-development/"><h2>Product and Process Development</h2></a>
       	</section>
       	
       	<section class="archive-gap zz-link-box service-tt-02">
       		<a href="<?php bloginfo('url'); ?>/thermal-technologies/prototyping-demonstration-scale-up/"><h2>Prototyping, Demonstration and Scale Up</h2></a>
       	</section>
       	
       	<section class="archive-gap zz-link-box service-tt-03">
       		<a href="<?php bloginfo('url'); ?>/thermal-technologies/fuel-feedstock-investigation/"><h2>Fuel and Feedstock Investigation</h2></a>
       	</section>
       	
       	
       	<section class="archive-gap zz-link-box service-tt-04">
       		<a href="<?php bloginfo('url'); ?>/thermal-technologies/manufacturability-and-process-assessment/"><h2>Manufacturability and Process Assessment</h2></a>
       	</section>
       	
       	<section class="archive-gap zz-link-box service-tt-05">
       		<a href="<?php bloginfo('url'); ?>/thermal-technologies/process-modelling-and-consultancy/"><h2>Process Modelling and Consultancy</h2></a>
       	</section>
       	
       	<section class="archive-gap zz-link-box service-tt-06">
       		<a href="<?php bloginfo('url'); ?>/thermal-technologies/business-and-funding-support/"><h2>Business and Funding<br/> Support</h2></a>
       	</section>


<?php get_footer(); ?>
	
