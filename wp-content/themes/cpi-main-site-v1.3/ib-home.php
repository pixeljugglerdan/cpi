<?php
/*
Template Name: ib-home

 * The template for displaying the industrial biotechnology Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>

<script type="text/javascript">
mixpanel.track("Visited Industrial Biotechnology Page");
</script>

<div id="titleArea">	
<span class="section-title"><h2><?php the_title(); ?></h2></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Industrial Biotechnology Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

<div id="ibHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb">The National Industrial Biotechnology Facility.</p>
</div>

	<div id="zz-tech-page"><div id="page">
	
	<p>CPI’s National Industrial Biotechnology Facility is designed to assist companies of all sizes develop bioprocesses quickly and cost-effectively. Using state-of-the-art facilities and scientific expertise we are able to deliver a gram to tonne service for the production of bio-derived products. These capabilities allow CPI to offer a unique set of services from feedstock treatment and process optimisation, through to the development and testing of robust processes at scale.</br> 
›› <a href="http://www.uk-cpi.com/wp-content/uploads/2011/09/CPI-Industrial-Biotechnology.pdf">Download Flyer</a></p>


	
	<div>
	
	    <div class="list-box">
    		<h3>Markets</h3>
			<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'IB Markets', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
    	</div>
	
		<div class="list-box">
    		<h3>Facilities</h3>
    		<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'IB Tech Focus', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 		
    	</div>
    	
    	
    	<div class="list-box">
    		<h3>How we can help</h3>
			<ul class="link-list">
				<li>
					<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/process-development-and-optimisation/">
					Process Development and Optimisation
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/prototyping-and-scale-up/">
					Prototyping and Scale Up
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/pilot-production/">
					Pilot Production
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/process-modelling-and-consultancy/">
					Process Modelling and Consultancy
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/industrial-biotechnology-services-home/">
					More services
					</a>
				</li>
			</ul>
			</div>
		</div>
    	
    </div>
    
	<div class="clear"></div>
	
    	    	<?php include 'reuse/boxes/ib-tech-news-box.php'; ?>
    	   		<?php include 'reuse/ib-panel-images.php'; ?>
</div>

<?php get_footer(); ?>
	
