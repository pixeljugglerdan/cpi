<?php
/*
Template Name: ad-home

 * The template for displaying the Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>

<script type="text/javascript">
mixpanel.track("Visited Anaerobic Digestion Page");
</script>


<div id="titleArea">	
<span class="section-title"><h2><?php the_title(); ?></h2></span>

<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Anaerobic Digestion Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>


<div id="adHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb">The National Anaerobic Digestion Development Centre</p>
</div>


<div id="zz-tech-page">
	<div id="page" style="padding-bottom: 35px;">

			CPI’s Anaerobic Digestion Development Centre is an open access facility designed to help organisations of all sizes to develop anaerobic digestion (AD) processes quickly, sustainably and cost effectively.</br> 
›› <a href="http://www.uk-cpi.com/wp-content/uploads/2011/09/Anaerobic-Digestion-at-CPI.pdf">Download Flyer</a>		

	
	
<div>	
	
<div class="list-box">
    		<h3>Markets</h3>
    		
			<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'AD Markets', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
    </div>	
    
    
    		<div class="list-box">
    		<h3>Why work with us?</h3>
    		<ul class="link-list">
				<li>Reduce cost, reduce waste</li>
				<li>Be first to market</li>
				<li>Reduce risk</li>
				<li>Access services under one roof</li>
				<li>Develop and test novel AD technology</li>
			</ul>
			</div>
	
	<div class="list-box">
	<h3>How we can help</h3>
    		<ul class="link-list">
				<li><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/product-and-process-development/">Product and Process Development</a></li>
				<li><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/prototyping-demonstration-scale-up/">Prototyping, Demonstration & Scale Up</li>
				<li><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/pilot-scale-testing/">Pilot scale testing</li>
				<li><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/feedstock-investigation/">Feedstock Investigation</li>
				
				<li><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/manufacturability-and-process-assessment/">Manufacturability and Process Assessment</li>
				<li><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/process-modelling-and-consultancy/">Process Modelling and Consultancy</li>
				<li><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/business-and-funding-support/">Business and Funding Support</li>
				<li><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/incubator-space/">Incubator Space</li>
			</ul>
			</div>

</div>

</div>
  
      	
    	
    	<?php include 'reuse/boxes/ad-tech-news-box.php'; ?>
    	
    	<?php include 'reuse/ad-panel-images.php'; ?>
</div>
 	
<?php get_footer(); ?>
	
