<?php
/*
Template Name: about-sub-section-profile

 * The template for displaying about staff profile pages in the CPI INNOVATOR THEME Printable Electronics Section
 */

get_header(); ?>

    <aside>

    <nav>
			<ul> 
    		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'About CPI', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 
    </nav>
    
	

<div class="aside-box"><h3><a href="#info" rel="prettyPhoto[inline]">Sign up for our Newsletter &#187;</a></h3></div>
<div class="aside-box"><h3>For more information call:<br />+44 (0)1642 455 340</h3></div>
    </aside>

<section class="box-container about-profile-section-header" id="postPage">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<h1><?php the_title(); ?></h1>
		
			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( '', array('class' => '')); } ?>
		
			<?php the_content(); ?>
		
	<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>
    </section>
      	  


	<?php include 'newsletter.php'; ?>
<?php get_footer(); ?>
	

