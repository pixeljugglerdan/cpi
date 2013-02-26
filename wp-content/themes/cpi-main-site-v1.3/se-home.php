<?php
/*
Template Name: se-home

 * The template for displaying the Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id="titleArea">	
<span class="section-title"><h2><?php the_title(); ?></h2></span>

<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Sustainable Engineering Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

<div id="seHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb"></p>
</div>

<div id="zz-tech-page">
	<div id="page">

			<?php the_content(); ?>

	<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
	<?php endwhile; // end of the loop. ?>
    </div>    
    
    </div>
      	
    	
    	<?php include 'reuse/boxes/se-tech-news-box.php'; ?>
    	
    	<?php include 'reuse/se-panel-images.php'; ?>
    	
    	    <section class="zz-tech-aside" id="se-tech-aside">
		<img src="<?php bloginfo('template_url'); ?>/-/images/icon/se-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Sustainable Engineering <br/> Services</h2>
			<ul>
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'SE Services', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
	</section> 


<?php get_footer(); ?>
	
