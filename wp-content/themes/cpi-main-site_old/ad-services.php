<?php
/*
Template Name: ad-services

 * The template for displaying the about pages in the CPI INNOVATOR THEME Thermal Technologies Section
 */

get_header(); ?>

<div id="titleArea">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/">Anaerobic Digestion</a></h1></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Anaerobic Digestion Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>


    <aside>

    <nav>
    <img src="<?php bloginfo('template_url'); ?>/-/images/icon/ad-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Anaerobic Digestion<br/> Services</h2>
			<ul> 
    		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'AD Services', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 
    </nav>
<<<<<<< HEAD
    
    
    <div class="aside-box contact-box"><h3>For more information:<br /><i class="icon-phone"></i> +44 (0)1642 455 340<br /> <i class="icon-envelope"></i> <a href="mailto:info@uk-cpi.com">info@uk-cpi.com</a></h3></div>
=======
>>>>>>> refs/heads/master

    </aside>



<<<<<<< HEAD



<section id="page-header">  

	<?php $bg_image = wpgym_extract_post_thumb( get_the_post_thumbnail() ); ?>

<div id="page-header-title" class="ad-section-header">
=======
<section class="box-container" id="postPageHeader"> 

	<?php $bg_image = wpgym_extract_post_thumb( get_the_post_thumbnail() ); ?>

<div id="postPageHeader-Title" class="ad-section-header">
>>>>>>> refs/heads/master
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
</div>

<<<<<<< HEAD
<div id="page">
=======
<div id="postPage">
>>>>>>> refs/heads/master

			<?php the_content(); ?>

			<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>

</div>
    </section>   

<<<<<<< HEAD
=======
      	  	
    	<div id="sticky-box">
			<?php include 'reuse/ad-panel-images.php'; ?>
    	</div>
 
 <aside>

    <div class="aside-box"><h3>For more information call:<br />
+44 (0)1642 455 340</h3></div>
<div class="aside-box aside-right"><h3><a href="#info" rel="prettyPhoto[inline]">Sign up for our Newsletter &#187;</a></h3></div>

    </aside>  
>>>>>>> refs/heads/master


	<?php include 'newsletter.php'; ?>
<?php get_footer(); ?>
	
