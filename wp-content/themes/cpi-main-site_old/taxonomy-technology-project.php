<?php
/*
 * The template for displaying project items in the CPI INNOVATOR THEME
 */

get_header(); ?>
	
<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>


<!-- IF IB -->
<?php if (is_tax( 'technology-project', 'industrial-biotechnology-projects')) {?>
<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/industrial-biotechnology/"><?php printf( $term->name ); ?></a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Industrial Biotechnology Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>


<div id="titleArchive" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/projects/">Projects</a></h1></span>

<?php include 'reuse/project-filter.php'; ?>

</div>
</div>


<!-- IF PE -->
<?php } else if (is_tax( 'technology-project', 'printable-electronics-projects')) {?>

<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/printable-electronics/"><?php printf( $term->name ); ?></a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Printable Electronics Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>

<div id="titleArchive" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/projects/">Projects</a></h1></span>

<?php include 'reuse/project-filter.php'; ?>

</div>
</div>



<!-- IF AD -->
<?php } else if (is_tax( 'technology-project', 'anaerobic-digestion-projects')) {?>

<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/"><?php printf( $term->name ); ?></a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Anaerobic Digestion Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>

<div id="titleArchive" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/projects/">Projects</a></h1></span>

<?php include 'reuse/project-filter.php'; ?>

</div>
</div>



<!-- IF SC -->
<?php } else if (is_tax( 'technology-project', 'smart-chemistry-projects')) {?>

<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/smart-chemistry/"><?php printf( $term->name ); ?></a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Smart Chemistry Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>


<div id="titleArchive" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/projects/">Projects</a></h1></span>

<?php include 'reuse/project-filter.php'; ?>

</div>
</div>




<!-- IF SE -->
<?php } else if (is_tax( 'technology-project', 'sustainable-engineering-projects')) {?>

<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/sustainable-engineering/"><?php printf( $term->name ); ?></a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Sustainable Engineering Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>


<div id="titleArchive" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/projects/">Projects</a></h1></span>

<?php include 'reuse/project-filter.php'; ?>

</div>
</div>



<!-- IF TT -->
<?php } else if (is_tax( 'technology-project', 'thermal-technologies-projects')) {?>

<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/thermal-technologies/"><?php printf( $term->name ); ?></a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Thermal Technologies Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>

<div id="titleArchive" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/projects/">Projects</a></h1></span>

<?php include 'reuse/project-filter.php'; ?>

</div>
</div>

<!-- IF SPIN OUT -->
<?php } else if (is_tax( 'technology-project', 'spin-out')) {?>
	

<div id="titleArchive" class="titleAreaArchive">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/projects/">Projects</a></h1></span>

<?php include 'reuse/project-filter.php'; ?>

</div>

<?php } ?>

		
<?php include 'reuse/archive-project-loop.php'; ?>	
    	
<?php get_footer(); ?>
	
