<?php
/*
Template Name: about-catapult

 * The template for displaying about pages in the CPI INNOVATOR THEME Printable Electronics Section
 */

get_header(); ?>


    <section id="aboutCatapult">
	<p id="techHeaderBlurb"></p>
	</section>

<?php include 'reuse/aside-about.php'; ?>

	<div id="page">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
			<h1><?php the_title(); ?></h1>
		
			<?php the_content(); ?>
		
	<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>
    </div> 


	<?php include 'newsletter.php'; ?>
<?php get_footer(); ?>
	

