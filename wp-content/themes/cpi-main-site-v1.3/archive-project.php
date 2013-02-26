<?php
/*
 * The template for displaying project items in the CPI INNOVATOR THEME
 */

get_header(); ?>
		
<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h1>Projects</h1></span>

	<?php include 'reuse/project-filter.php'; ?>
	
</div>
		
<?php include 'reuse/archive-project-loop.php'; ?>
    	
<?php get_footer(); ?>
	
