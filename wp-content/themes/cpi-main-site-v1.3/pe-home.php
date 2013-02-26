<?php
/*
Template Name: pe-home

 * The template for displaying the PE Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>

<script type="text/javascript">
mixpanel.track("Visited Printable Electronics Page");
</script>

<div id="titleArea">	
<span class="section-title"><h2><?php the_title(); ?></h2></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Printable Electronics Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

<div id="petecHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb">The UK's National Centre for Printable Electronics</p>
</div>

	<div id="zz-tech-page"><div id="page">

	
	<p>CPI’s Printable Electronics Centre focuses on design, development and prototyping for the emerging printable electronics industry. Our mission is to work with clients to bring new printable electronics products and processes to market quickly and efficiently, by offering facilities and expertise that help reduce the level of R&D risk and capital investment, while speeding up time to market.</br> 
›› <a href="http://www.uk-cpi.com/wp-content/uploads/2011/09/Printable-Electronics-at-CPI.pdf">Download Flyer</a></p>

<div class="clear"></div>
<div>	
		<div class="list-box">
    		<h3>Technology Focus</h3>
    		<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'PE Tech Focus', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 		
    	</div>
    	
    	<div class="list-box">
    		<h3>Markets</h3>
			<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'PE Markets', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
    	</div>
    	
    	<div class="list-box">
    		<h3>How we can help</h3>
			<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'PE Services', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
    	</div>
</div>    	

    </div>
    
    <div class="clear"></div>  	
      	
    	<?php include 'reuse/boxes/pe-tech-news-box.php'; ?>
    	<?php include 'reuse/pe-panel-images.php'; ?>

</div>

<?php get_footer(); ?>