<?php
/*
Template Name: ad-home

 * The template for displaying the Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id="titleArea">	
<span class="section-title"><h2><?php the_title(); ?></h2></span>

<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Anaerobic Digestion Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

<<<<<<< HEAD
<div id="adHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb">The National Anaerobic Digestion Development Centre</p>
</div>


<div id="zz-tech-page">
	<div id="page" style="padding-bottom: 35px;">
		<div class="aboutlinks">
			<?php the_content(); ?>
		</div>
	
<?php endwhile; // end of the loop. ?>
	
<div class="clear"></div>	
	
<div class="list-box">
    		<h3>Markets</h3>
    		
			<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'AD Markets', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
    </div>	
    
    
    		<div class="list-box">
    		<h3>Why work with us?</h3>
    		<ul class="link-list">
				<li>Reduce cost, reduce waste</li>
				<li>Be first to market</li>
				<li>Reduce risk</li>
				<li>Access services under one roof</li>
				<li>Develop and test novel AD technology</li>
			</ul>
			</div>
	
	<div class="list-box">
	<h3>How we can help</h3>
    		<ul class="link-list">
				<li><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/quantification-of-biogas-and-digestate-quality/">Quantification of biogas and digestate quality</a></li>
				<li><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/optimisation-of-pre-and-post-treatment-processes/">Optimisation of pre and post-treatment processes</li>
				<li><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/improved-process-integration-and-control/">Improved process integration and control</li>
				<li><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/evaluation-of-process-economics/">Evaluation of process economics</li>
			</ul>
			</div>

</div>
  
      	
    	
    	<?php include 'reuse/boxes/ad-tech-news-box.php'; ?>
    	
    	<?php include 'reuse/ad-panel-images.php'; ?>
</div>
 	
=======
<section id="adHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb">The National Anaerobic Digestion Development Centre</p>
</section>

<div id="ad-home-page">
	<section id="postPageLeft">
		<div class="aboutlinks">
			<?php the_content(); ?>
		</div>
	<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
	<?php endwhile; // end of the loop. ?>
    </section>
  
    <div class="three-box menu-box box-right">
	<img src="<?php bloginfo('template_url'); ?>/-/images/icon/ad-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Anaerobic Digestion <br/> Services</h2>
			<ul>
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'AD Services', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</div> 
      	
    	
    	<div class="three-box news-petec news-ad">
    		<h2>Recent News</h2>
			
			<br/>
			
			<?php
				$yell = new WP_Query(array('post_type' => 'news', 'technology-news' => 'anaerobic-digestion-news', 'showposts' => '1'));
				while ($yell->have_posts()) : $yell->the_post();
			?>


			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></h3>

			<?php endwhile; wp_reset_query(); ?>
			
			
			
			<br/>
			<ul class="link-list">
			<li><a href="<?php bloginfo('url'); ?>/technology-news/anaerobic-digestion-news/">View anaerobic digestion news</a></li>
			</ul>
    	</div>
    	
    	<?php include 'reuse/ad-panel-images.php'; ?>
</div>  	
>>>>>>> refs/heads/master
<?php get_footer(); ?>
	
