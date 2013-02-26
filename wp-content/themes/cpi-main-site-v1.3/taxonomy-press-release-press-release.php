<?php
/*
 * The template for displaying a news items in the CPI INNOVATOR THEME
 */

get_header(); ?>

<div id="titleArea" class="">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/press-room/">Press Room</a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Press Room', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>

<div id="titleArchive" class="titleAreaArchive">	
	<span class="section-title"><h1>Press Releases</h1></span>
</div>


</div>


<?php include 'reuse/archive-news-loop.php'; ?>	

    	
<?php get_footer(); ?>
	
