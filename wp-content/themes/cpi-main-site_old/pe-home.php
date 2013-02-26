<?php
/*
Template Name: pe-home

<<<<<<< HEAD
 * The template for displaying the PE Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>

=======
 * The template for displaying the Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
>>>>>>> refs/heads/master
<div id="titleArea">	
<span class="section-title"><h2><?php the_title(); ?></h2></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Printable Electronics Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

<<<<<<< HEAD
<div id="petecHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb">The UK's National Centre for Printable Electronics</p>
</div>

	<div id="zz-tech-page"><div id="page">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<?php the_content(); ?>

=======
<section id="petecHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb">The UK's National Centre for Printable Electronics</p>
</section>

	<section id="postPageLeft-tech">
	<?php the_content(); ?>

	<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
>>>>>>> refs/heads/master
	<?php endwhile; // end of the loop. ?>
	
		<div class="list-box">
    		<h3>Technology Focus</h3>
    		<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'PE Tech Focus', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 		
    	</div>
<<<<<<< HEAD
    	
    	<div class="list-box">
    		<h3>Markets</h3>
=======
    	<div class="list-box">
    		<h3>Markets</h3>
    		
>>>>>>> refs/heads/master
			<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'PE Markets', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
    	</div>
<<<<<<< HEAD
    	
    	<div class="list-box">
    		<h3>How we can help</h3>
			<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'PE Services', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
    	</div>

    </div>
    
    <div class="clear"></div>  	
      	
    	<?php include 'reuse/boxes/pe-tech-news-box.php'; ?>
    	<?php include 'reuse/pe-panel-images.php'; ?>

</div>

<?php get_footer(); ?>
=======

	
    </section>
    
    <div class="three-box menu-box box-right">
	<img src="<?php bloginfo('template_url'); ?>/-/images/icon/pe-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Printable Electronics <br/> Services</h2>
			<ul>
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'PE Services', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</div> 
      	
    	
    	<div class="three-box news-petec">
    		<h2>Recent News</h2>
			
			<br/>
			
			<?php
				$yell = new WP_Query(array('post_type' => 'news', 'technology-news' => 'printable-electronics-news', 'showposts' => '1'));
				while ($yell->have_posts()) : $yell->the_post();
			?>

			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></h3>

			<?php endwhile; wp_reset_query(); ?>
			
			<br/>
			<ul class="link-list">
			<li><a href="<?php bloginfo('url'); ?>/technology-news/printable-electronics-news/">View printable electronics news</a></li>
			</ul>
    	</div>
		<?php include 'reuse/pe-panel-images.php'; ?>
	
<?php get_footer(); ?>
	
>>>>>>> refs/heads/master
