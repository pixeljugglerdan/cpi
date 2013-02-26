<?php
/*
Template Name: sc-home

<<<<<<< HEAD
 * The template for displaying the SC Home Page in the CPI INNOVATOR THEME
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
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Smart Chemistry Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

<<<<<<< HEAD
<div id="scHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb"></p>
</div>


<div id="zz-tech-page"><div id="page">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
	<?php the_content(); ?>

	<?php endwhile; // end of the loop. ?>
	
	<div class="clear"></div>
	
	<div class="double-trouble">
    	<h3>Facilities</h3>
    	<div class="list-box">
    		
    		<ul class="link-list">
				<li>
					<a href="<?php bloginfo('url'); ?>/smart-chemistry/corning-advanced-flow-reactor/">
					Corning Advanced Flow Reactor
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/smart-chemistry/continuous-oscillatory-baffle-reactors-cobr/">
					Continuous Oscillatory Baffle
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/smart-chemistry/spinning-disk-reactor/">
					Reactors (COBR)
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/smart-chemistry/particulates-processing-reactor/">
					Spinning Disc Reactor
					</a>
				</li>
				</ul>
		</div>
				
		<div class="list-box">
				<ul class="link-list">
				<li>
					<a href="<?php bloginfo('url'); ?>/smart-chemistry/particulates-processing-reactor/">
					Particulates Processing Reactor
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/smart-chemistry/pilot-scale-solvent-and-distillation-facility/">
					Pilot Scale Solvent and Distillation Facility
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/smart-chemistry/emulsification-intensification-technology-emint/">
					Emulsification Intensification Technology
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/smart-chemistry/the-high-shear-mixer/">
					The High Shear Mixer
					</a>
				</li>
			</ul>
		</div>
		</div>	
			
		<div class="list-box">
    		<h3>Technology focus</h3>
=======
<section id="scHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb"></p>
</section>

	<section id="postPageLeft-tech">
		<div class="aboutlinks">
			<?php the_content(); ?>
		</div>
	<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
	<?php endwhile; // end of the loop. ?>
	
	
		<div class="list-box">
    		<h3>Technology Focus</h3>
>>>>>>> refs/heads/master
    		<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'SC Tech Focus', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 		
    	</div>
<<<<<<< HEAD
			
    </div>
    
    <div class="clear"></div>  	
      	
    	<?php include 'reuse/boxes/sc-tech-news-box.php'; ?>
    	<?php include 'reuse/sc-panel-images.php'; ?>

</div>

=======

    </section>
    
    <div class="three-box menu-box box-right">
	<img src="<?php bloginfo('template_url'); ?>/-/images/icon/sc-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Smart <br/>Chemistry</h2>
			<ul>
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'SC Services', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</div> 
      	
    	
    	<div class="three-box news-petec news-sc">
    		<h2>Recent News</h2>
			
			<br/>
			
			<?php
				$yell = new WP_Query(array('post_type' => 'news', 'technology-news' => 'smart-chemistry-news', 'showposts' => '1'));
				while ($yell->have_posts()) : $yell->the_post();
			?>


			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></h3>

			<?php endwhile; wp_reset_query(); ?>
			
			
			
			<br/>
			<ul class="link-list">
			<li><a href="<?php bloginfo('url'); ?>/technology-news/smart-chemistry-news/">View smart chemistry news</a></li>
			</ul>
    	</div>
    	
    	<?php include 'reuse/sc-panel-images.php'; ?>
	
>>>>>>> refs/heads/master
<?php get_footer(); ?>
	
