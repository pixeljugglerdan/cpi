<?php
/*
Template Name: careers-application

 * The template for Jobs applications in the CPI INNOVATOR THEME
 */

get_header(); ?>
<div id="careers">
<div id="titleArea">	
	<h1>Careers</h1>

<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Careers', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

<div id="careersHeader" class="careersHeader-home">
	<h1 id="techHeaderTitle">How to apply</h1>
	<p id="techHeaderBlurb">Our employees apply innovative thinking to help companies develop products and processes. Join us to inspire the future...</p>
</div>
	
<div class="careers-section" id="page-full">

<div id="careerPallet">
	
</div>
    
    	<section class="gap zz-link-box benefits">
    		<a href="<?php bloginfo('url'); ?>/benefits/"><h2>Benefits</h2></a>
    	</section>
    	<section class="gap zz-link-box cpi-life">
    		<a href="<?php bloginfo('url'); ?>/life-at-cpi/"><h2>Life at CPI</h2></a>
    	</section>
    	<section class="gap zz-link-box student-support">
    		<a href="<?php bloginfo('url'); ?>/apprenticeships-and-students/"><h2>Apprenticeships & Students</h2></a>
    	</section>	
    	
</div>
</div>
<?php get_footer(); ?>
	
