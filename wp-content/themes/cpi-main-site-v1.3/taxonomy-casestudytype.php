<?php
/*
 * The template for displaying a case study items in the CPI INNOVATOR THEME
 */

get_header(); ?>
	<div id="titleArea" class="titleAreaArchive">
<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>
		<h1><?php printf( $term->name ); ?></h1>
	
	<div id="titleArchive" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/case-studies/">Case Studies</a></h1></span>

	<?php include 'reuse/casestudy-filter.php'; ?>

</div>
	
	</div>
	
		
<?php include 'reuse/archive-casestudy-loop.php'; ?>	

    	
<?php get_footer(); ?>
	
