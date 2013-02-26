<?php
/*
Template Name: pe-services-home

 * The template for displaying the Printable Electronics Services Page in the CPI INNOVATOR THEME
 */

get_header(); ?>


<div id="titleArea" class="titleAreaArchive">	
<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/printable-electronics/">Printable Electronics</a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Printable Electronics Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>

</div>

 	    	
    	<section class="archive-gap zz-link-box service-pe-01">
       		<a href="<?php bloginfo('url'); ?>/printable-electronics/prototyping-demonstration-scale-up/"><h2>Prototyping, Demonstration and Scale Up</h2></a>
       	</section>
       	
       	<section class="archive-gap zz-link-box service-pe-02">
       		<a href="<?php bloginfo('url'); ?>/printable-electronics/materials-investigation/"><h2>Materials<br/> Investigation</h2></a>
       	</section>       	
       	<section class="archive-gap zz-link-box service-pe-03">
       		<a href="<?php bloginfo('url'); ?>/printable-electronics/product-and-process-development/"><h2>Product and Process Development</h2></a>
       	</section>
       	
       	
       	<section class="archive-gap zz-link-box service-pe-04">
       		<a href="<?php bloginfo('url'); ?>/printable-electronics/incubator-space/"><h2>Consultancy</h2></a>
       	</section>
       	
       	<section class="archive-gap zz-link-box service-pe-05">
       		<a href="<?php bloginfo('url'); ?>/printable-electronics/business-and-funding-support/"><h2>Business and Funding Support</h2></a>
       	</section>
       	
       	<section class="archive-gap zz-link-box service-pe-06">
       		<a href="<?php bloginfo('url'); ?>/printable-electronics/incubator-space-2/"><h2>Incubator Space</h2></a>
       	</section>


<?php get_footer(); ?>
	
