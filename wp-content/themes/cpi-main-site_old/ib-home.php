<?php
/*
Template Name: ib-home

 * The template for displaying the industrial biotechnology Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>
<<<<<<< HEAD

=======
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
>>>>>>> refs/heads/master
<div id="titleArea">	
<span class="section-title"><h2><?php the_title(); ?></h2></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Industrial Biotechnology Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

<<<<<<< HEAD
<div id="ibHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb">The National Industrial Biotechnology Facility.</p>
</div>

	<div id="zz-tech-page"><div id="page">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<?php the_content(); ?>

	<?php endwhile; // end of the loop. ?>
	
	<div class="clear"></div>
	
	    <div class="list-box">
    		<h3>Markets</h3>
=======
<section id="ibHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb">The National Industrial Biotechnology Facility.</p>
</section>

	<section id="postPageLeft-tech">
	<?php the_content(); ?>

	<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
	<?php endwhile; // end of the loop. ?>
	
	<div class="list-box">
    		<h3>Facilities and Equipment</h3>
    		<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'IB Tech Focus', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 		
    	</div>
    	<!--
    	<div class="list-box">
    		<h3>Markets</h3>
    		
>>>>>>> refs/heads/master
			<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'IB Markets', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
    	</div>
<<<<<<< HEAD
	
		<div class="list-box">
    		<h3>Facilities</h3>
    		<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'IB Tech Focus', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 		
    	</div>
    	
    	
    	<div class="list-box">
    		<h3>How we can help</h3>
			<ul class="link-list">
				<li>
					<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/process-development-and-optimisation/">
					Process development and optimisation
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/prototyping-and-scale-up/">
					Prototyping and scale up
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/pilot-production/">
					Pilot production
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/process-modelling-and-consultancy/">
					Process Modelling and Consultancy
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/industrial-biotechnology-services-home/">
					More services
					</a>
				</li>
			</ul>
			</div>

    	
    </div>
    
	<div class="clear"></div>
	
    	    	<?php include 'reuse/boxes/ib-tech-news-box.php'; ?>
    	   		<?php include 'reuse/ib-panel-images.php'; ?>
</div>

=======
		-->
	
    </section>
    
    <div class="three-box menu-box box-right">
	<img src="<?php bloginfo('template_url'); ?>/-/images/icon/ib-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Industrial Biotechnology <br/> Services</h2>
			<ul>
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'IB Services', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</div> 
      	
    	
    	<div class="three-box news-petec news-ib">
    		<h2>Recent News</h2>
			
			<br/>
			
			<?php
				$yell = new WP_Query(array('post_type' => 'news', 'technology-news' => 'industrial-biotechnology-news', 'showposts' => '1'));
				while ($yell->have_posts()) : $yell->the_post();
			?>

			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></h3>

			<?php endwhile; wp_reset_query(); ?>
			
			<br/>
			<ul class="link-list">
			<li><a href="<?php bloginfo('url'); ?>/technology-news/industrial-biotechnology-news/">View industrial biotechnology news</a></li>
			</ul>
    	</div>
		<?php include 'reuse/ib-panel-images.php'; ?>
	
>>>>>>> refs/heads/master
<?php get_footer(); ?>
	
