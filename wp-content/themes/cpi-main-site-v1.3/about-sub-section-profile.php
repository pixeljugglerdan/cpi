<?php
/*
Template Name: about-sub-section-profile

 * The template for displaying about staff profile pages in the CPI INNOVATOR THEME Printable Electronics Section
 */

get_header(); ?>

<?php include 'reuse/aside-about.php'; ?>



<section id="page-header"> 

	<?php $bg_image = wpgym_extract_post_thumb( get_the_post_thumbnail() ); ?>



	<div id="page">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

		<h1><?php the_title(); ?></h1>
		
			<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( '', array('class' => '')); } ?>
		
			<?php the_content(); ?>
		<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    	<?php endwhile; // end of the loop. ?>
	</div>

</section>

      	 

	<?php include 'newsletter.php'; ?>
<?php get_footer(); ?>
	

