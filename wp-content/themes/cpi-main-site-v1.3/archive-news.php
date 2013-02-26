<?php
/*
 * The template for displaying a news items in the CPI INNOVATOR THEME
 */

get_header(); ?>
	
<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h1>News</h1></span>
	<?php include 'reuse/news-filter.php'; ?>
</div>

	<?php include 'reuse/archive-news-loop.php'; ?>
    	
<?php get_footer(); ?>
	
