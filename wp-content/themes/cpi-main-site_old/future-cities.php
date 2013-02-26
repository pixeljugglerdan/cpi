<?php
/*
   Template Name: Future Cities

 * The template for displaying the Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>


<div id="homePage">


<?php if(function_exists('genki_announcement')) { genki_announcement(); } ?>



<div class="future-header">
	<h1 class="fadein">Sustainable cities</h1>
	<p class="fadein">Discover how our technologies will support sustainable cities.</p>
	<a data-toggle="modal" href="#newsModal" class="btn btn-large btn-future fadein hide"><i class="icon-envelope"></i> Receive email updates</a>
	<div id="future-header-hand"><img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/header-cities-hand.png" /></div>
	<div class="future-all-markets"><a href="<?php bloginfo('url'); ?>/markets/">
		<i class="icon-share-alt"></i> View All Markets</a>
	</div>
</div>
			

<div class="clear"></div> 

    	
</div>   
	<?php include 'newsletter.php'; ?>
	<?php get_footer(); ?>
	
