<?php
/*
Template Name: careers-sub-section

 * The template for displaying a standard careers pages in the CPI INNOVATOR THEME Printable Electronics Section
 */

get_header(); ?>

<div id="titleArea">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/careers/">Careers</a></h1></span>
	<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Careers', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

    <aside class="hideaside">
<<<<<<< HEAD

<div class="aside-box"><h3>For more information:<br />Call: +44 (0)1642 455 340<br /> Email: <a href="mailto:info@uk-cpi.com">info@uk-cpi.com</a></h3></div>


<?php if (is_page( 'benefits' )) { ?>
    	<section class="zz-link-box cpi-life">
    		<a href="<?php bloginfo('url'); ?>/life-at-cpi/"><h2>Life at CPI</h2></a>
    	</section>
<?php } else if (is_page( 'life-at-cpi' )) { ?>
		<section class="zz-link-box benefits" style="background-position: top;">
    		<a href="<?php bloginfo('url'); ?>/benefits/"><h2>Benefits</h2></a>
    	</section>
<?php } else if (is_page('apprenticeships-and-students')) { ?> 
		<section class="zz-link-box cpi-life">
    		<a href="<?php bloginfo('url'); ?>/life-at-cpi/"><h2>Life at CPI</h2></a>
    	</section>
    	<section class="zz-link-box benefits" style="background-position: top;">
    		<a href="<?php bloginfo('url'); ?>/benefits/"><h2>Benefits</h2></a>
    	</section>
<?php } ?>

    </aside>

<section id="page-header"> 

	<?php $bg_image = wpgym_extract_post_thumb( get_the_post_thumbnail() ); ?>


	<div id="page-header-title" class="about-section-header">
		<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		<h1><?php the_title(); ?></h1>
	</div>
	

	<div id="page">
		<?php the_content(); ?>

		<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    	<?php endwhile; // end of the loop. ?>
	</div>

</section>      	  

=======
<div class="aside-box"><h3><a href="#info" rel="prettyPhoto[inline]">Sign up for our Newsletter &#187;</a></h3></div>
<div class="aside-box"><h3>For more information:<br />Call: +44 (0)1642 455 340<br /> Email: <a href="mailto:info@uk-cpi.com">info@uk-cpi.com</a></h3></div>

    </aside>

<section class="box-container" id="postPageHeader"> 

	<?php $bg_image = wpgym_extract_post_thumb( get_the_post_thumbnail() ); ?>

<div id="postPageHeader-Title" style="background: url( <?php echo $bg_image;?> )">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	<h1><?php the_title(); ?></h1>
</div>

<div id="postPage">

			<?php the_content(); ?>

			<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>

</div>
    </section>
      	  


	<?php include 'newsletter.php'; ?>
>>>>>>> refs/heads/master
<?php get_footer(); ?>