<?php
/*
Template Name: ib-services-home

 * The template for displaying the industrial biotechnology Services Page in the CPI INNOVATOR THEME
 */

get_header(); ?>


<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/industrial-biotechnology/">Industrial Biotechnology</a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Industrial Biotechnology Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>

</div>

    	    	
    	<section class="archive-gap zz-link-box service-ib-01">
       		<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/process-development-and-optimisation/"><h2>Process Development and Optimisation</h2></a>
       	</section>
       	
       	<section class="archive-gap zz-link-box service-ib-02">
       		<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/prototyping-and-scale-up/"><h2>Prototyping and <br>Scale Up</h2></a>
       	</section>
       	
       	<section class="archive-gap zz-link-box service-ib-03">
       		<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/pilot-production/"><h2>Pilot <br>Production</h2></a>
       	</section>
       	
       	
       	<section class="archive-gap zz-link-box service-ib-04">
       		<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/fuel-and-feedstock-investigation/"><h2>Fuel and Feedstock Investigation</h2></a>
       	</section>
       	
       	<section class="archive-gap zz-link-box service-ib-05">
       		<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/manufacturability-and-process-assessment/"><h2>Manufacturability and Process Assessment</h2></a>
       	</section>
       	
       	<section class="archive-gap zz-link-box service-ib-06">
       		<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/process-modelling-and-consultancy/"><h2>Process Modelling and Consultancy</h2></a>
       	</section>


<?php get_footer(); ?>
	
