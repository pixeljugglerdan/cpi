<?php
/*
 * The template for displaying a case studies in the CPI INNOVATOR THEME
 */

get_header(); ?>
		
<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h1>Case Studies</h1></span>
	<?php include 'reuse/casestudy-filter.php'; ?>
</div>
	
	<?php include 'reuse/archive-casestudy-loop.php'; ?>	

<?php get_footer(); ?>
	
