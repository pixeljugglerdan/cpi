<?php
/*
Template Name: tt-markets

 * The template for displaying a standard technologies pages in the CPI INNOVATOR THEME Thermal Technologies Section
 */

get_header(); ?>

<div id="titleArea">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/thermal-technologies/">Thermal Technologies</a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Thermal Technologies Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>


    <aside>
    
    <div class="aside-box">
		<img src="<?php bloginfo('template_url'); ?>/-/images/content/thermal-technology/Tata Steel.png" alt="Tata Steel" width="300" height="37" />
	</div>

    <nav>
    <img src="<?php bloginfo('template_url'); ?>/-/images/icon/tt-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Thermal Technologies <br/> Markets</h2>
			<ul> 
    		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'TT Markets', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 
    </nav>

	<?php include 'reuse/tt-panel-images.php'; ?>
	
	<div class="aside-box contact-box"><h3>For more information:<br /><i class="icon-phone"></i>+44 1642 455 340<br /> <i class="icon-envelope"></i> <a href="mailto:info@uk-cpi.com">info@uk-cpi.com</a></h3></div>

    </aside>


<section id="page-header"> 
<?php $bg_image = wpgym_extract_post_thumb( get_the_post_thumbnail() ); ?>

	<div id="page-header-title" style="background: url( <?php echo $bg_image;?> )">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	</div>
	

	<div id="page">
		<?php the_content(); ?>

		<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    	<?php endwhile; // end of the loop. ?>
	</div>

</section> 

<?php get_footer(); ?>
	
