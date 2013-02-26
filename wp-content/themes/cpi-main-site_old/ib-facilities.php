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
<<<<<<< HEAD
    <img src="<?php bloginfo('template_url'); ?>/-/images/icon/ib-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Industrial Biotechnology<br/> Facilities & Equipment</h2>
			<ul> 
    		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'IB Tech Focus', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 
    </nav>
    
    <?php include 'reuse/ib-panel-images.php'; ?>
    
	<div class="aside-box contact-box"><h3>For more information:<br /><i class="icon-phone"></i> +44 (0)1642 455 340<br /> <i class="icon-envelope"></i> <a href="mailto:info@uk-cpi.com">info@uk-cpi.com</a></h3></div>
=======
     <img src="<?php bloginfo('template_url'); ?>/-/images/icon/ib-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">About Industrial<br/> Biotechnology</h2>
			<ul> 
    		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'IB About', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 
    </nav>
>>>>>>> refs/heads/master

    </aside>



<<<<<<< HEAD


<section id="page-header"> 

	<?php $bg_image = wpgym_extract_post_thumb( get_the_post_thumbnail() ); ?>


	<div id="page-header-title" class="ib-section-header">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	</div>
	

	<div id="page">
		<?php the_content(); ?>
=======
<section class="box-container" id="postPageHeader"> 

	<?php $bg_image = wpgym_extract_post_thumb( get_the_post_thumbnail() ); ?>

<div id="postPageHeader-Title" class="ib-section-header">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
</div>

<div id="postPage">
		
			<?php the_content(); ?>
>>>>>>> refs/heads/master
		
<iframe name="virtualtour" src="http://www.uk-cpi.com/virtual_tours/ib_virtual_tour/index.html" width="609" height="600" frameborder="0" scrolling="no">
  <p>Your browser does not support iframes.</p>
</iframe>
<<<<<<< HEAD


		<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    	<?php endwhile; // end of the loop. ?>
	</div>

</section>   



=======
		
	<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>
    </div>
    </section>
      	  	
    	<div id="sticky-box">
			<?php include 'reuse/ib-panel-images.php'; ?>
    	</div>
 
 <aside>

<div class="aside-box"><h3>For more information:<br />Call: +44 (0)1642 455 340<br /> Email: <a href="mailto:info@uk-cpi.com">info@uk-cpi.com</a></h3></div>
<div class="aside-box aside-right"><h3><a href="#info" rel="prettyPhoto[inline]">Sign up for our Newsletter &#187;</a></h3></div>

    </aside>  


	<?php include 'newsletter.php'; ?>
>>>>>>> refs/heads/master
<?php get_footer(); ?>
	