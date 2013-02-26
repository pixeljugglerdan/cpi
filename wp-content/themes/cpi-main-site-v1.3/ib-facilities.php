<?php
/*
Template Name: ib-tour

 * The template for displaying a standard about pages in the CPI INNOVATOR THEME Printable Electronics Section
 */

get_header(); ?>

<div id="titleArea">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/industrial-biotechnology/">Industrial Biotechnology</a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Industrial Biotechnology Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

    <aside>

    <nav>
     <img src="<?php bloginfo('template_url'); ?>/-/images/icon/ib-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">About Industrial<br/> Biotechnology</h2>
			<ul> 
    		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'IB Facilities', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 
    </nav>
    
    <?php include 'reuse/ib-panel-images.php'; ?>
    
	<div class="aside-box contact-box"><h3>For more information:<br /><i class="icon-phone"></i> +44 (0)1642 455 340<br /> <i class="icon-envelope"></i> <a href="mailto:info@uk-cpi.com">info@uk-cpi.com</a></h3></div>

    </aside>





<section id="page-header"> 

	<?php $bg_image = wpgym_extract_post_thumb( get_the_post_thumbnail() ); ?>


	<div id="page-header-title" class="ib-section-header">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	</div>
	

	<div id="page">
		<?php the_content(); ?>
		
<iframe name="virtualtour" src="http://www.uk-cpi.com/virtual_tours/ib_virtual_tour/index.html" width="609" height="600" frameborder="0" scrolling="no">
  <p>Your browser does not support iframes.</p>
</iframe>


		<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    	<?php endwhile; // end of the loop. ?>
	</div>

</section>   



<?php get_footer(); ?>
	
