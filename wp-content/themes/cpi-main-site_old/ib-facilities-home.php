<?php
/*
Template Name: ib-facilities-home

 * The template for displaying the industrial biotechnology Home Page in the CPI INNOVATOR THEME
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


    	    	
    	<section class="archive-gap zz-link-box fac-ib-01">
       		<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/development/"><h2>Development Laboratory</h2></a>
       	</section>
       	
       	<section class="archive-gap zz-link-box fac-ib-02">
       		<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/pilot/"><h2>Pilot Facility</h2></a>
       	</section>
       	
       	<section class="archive-gap zz-link-box fac-ib-03">
       		<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/demonstrator/"><h2>Demonstrator Facility</h2></a>
       	</section>
    	    	


<?php get_footer(); ?>
	
