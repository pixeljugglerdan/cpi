<?php
/*
Template Name: tt-home

 * The template for displaying the Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>
<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
<div id="titleArea">	
<span class="section-title"><h2><?php the_title(); ?></h2></span>

<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Thermal Technologies Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

<<<<<<< HEAD
<div id="ttHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb"></p>
</div>

<div id="zz-tech-page">
	<div id="page">
	
	<div class="tata-video-box" id="ie-video-box">
    		
    			<img src="<?php bloginfo('template_url'); ?>/-/images/content/thermal-technology/Tata Steel.png" alt="Tata Steel" width="250" height="34" />
    			<br/>
    			<a href="https://www.youtube.com/watch?v=zXscUitXHPc&feature=player_embedded" target="_blank" class="video-btn"><img src="<?php bloginfo('template_url'); ?>/-/images/content/thermal-technology/video-thum-one.jpg" alt="About the of the Thermal Technologies Centre (Video)" width="125" height="83" /></a>
				<a href="http://youtu.be/MjXAo2qxMlA" target="_blank" class="video-btn"><img src="<?php bloginfo('template_url'); ?>/-/images/content/thermal-technology/video-thum-two.jpg" alt="The Launch of the Thermal Technologies Centre Event 31st May 2012 (Video)" width="125" height="83" /></a>
				<br>Play a video to learn more about the<br> Thermal Technologies Centre.
		</div>

=======
<section id="ttHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb"></p>
</section>

	<section id="postPageLeft-tech">
>>>>>>> refs/heads/master
	<?php the_content(); ?>

	<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
	<?php endwhile; // end of the loop. ?>
	
<<<<<<< HEAD
	

		

	<div class="clear"></div>
	
	
	
	<div class="list-box">
=======
	<div class="list-box">
    		<h3>Technology Focus</h3>
    		<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'TT Tech Focus', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 		
    	</div>
    	<div class="list-box">
>>>>>>> refs/heads/master
    		<h3>Markets</h3>
    		
			<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'TT Markets', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
<<<<<<< HEAD
    </div>	
	
	<div class="list-box">
    		<h3>Technology focus</h3>
    		<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'TT Tech Focus', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 		
    </div>
    
   
    	
    	<div class="list-box">
    		<h3>How we can help</h3>
			<ul class="link-list">
				<li>
					<a href="<?php bloginfo('url'); ?>/thermal-technologies/process-investigation/">
					Process investigation
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/thermal-technologies/product-or-process-optimisation/">
					Product or process optimisation
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/thermal-technologies/product-or-process-development/">
					Product or process development
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/thermal-technologies/fuels-and-feedstock-optimisation/">
					Fuels and feedstock optimisation
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/thermal-technologies/manufacturing-technology/">
					Manufacturing technology
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/thermal-technologies/programme-development-and-management/">
					Programme development and management
					</a>
				</li>
			</ul>
			</div>


	
    </div>
	<div class="clear"></div>
    	
    	<?php include 'reuse/boxes/tt-tech-news-box.php'; ?>
    	
    	<?php include 'reuse/tt-panel-images.php'; ?>

</div>



<!-- Video Box -->

<div class="modal hide" id="ttvideoModalOne">
  <div class="modal-header">
    <h3>Thermal Technologies Centre</h3>
  </div>
  <div class="modal-body">

<object style="height: 298px; width: 530px">
<param name="movie" value="https://www.youtube.com/v/zXscUitXHPc?rel=0?version=3&feature=player_embedded&feature=player_embedded">
<param name="allowFullScreen" value="true">
<param name="allowScriptAccess" value="always">
<embed src="https://www.youtube.com/v/zXscUitXHPc?rel=0?version=3&feature=player_embedded&feature=player_embedded" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="530" height="298">
</object>

</div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a>
  </div>
</div>


<div class="modal hide" id="ttvideoModalTwo">
  <div class="modal-header">
    <h3>Thermal Technologies Centre Launch</h3>
  </div>
  <div class="modal-body">

<object style="height: 298px; width: 530px">
<param name="movie" value="https://www.youtube.com/v/MjXAo2qxMlA?rel=0?version=3&feature=player_embedded&feature=player_embedded">
<param name="allowFullScreen" value="true">
<param name="allowScriptAccess" value="always">
<embed src="https://www.youtube.com/v/MjXAo2qxMlA?rel=0?version=3&feature=player_embedded&feature=player_embedded" type="application/x-shockwave-flash" allowfullscreen="true" allowScriptAccess="always" width="530" height="298">
</object>

</div>
  <div class="modal-footer">
    <a href="#" class="btn" data-dismiss="modal">Close</a>
  </div>
</div>



=======
    	</div>

	
    </section>
    
    <div class="three-box menu-box box-right">
    
        
		<img src="<?php bloginfo('template_url'); ?>/-/images/content/thermal-technology/Tata Steel.png" alt="Tata Steel" width="300" height="37" />
	<br/><br/>
    
	<img src="<?php bloginfo('template_url'); ?>/-/images/icon/tt-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Thermal Technology <br/> Services</h2>
			<ul>
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'TT Services', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</div> 
      	
    	
    	<div class="three-box news-petec news-tt">
    		<h2>Recent News</h2>
			
			<br/>
			
			
			<?php
				$yell = new WP_Query(array('post_type' => 'news', 'technology-news' => 'thermal-technologies-news', 'showposts' => '1'));
				while ($yell->have_posts()) : $yell->the_post();
			?>


			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></h3>

			<?php endwhile; wp_reset_query(); ?>
			
			
			
			<br/>
			<ul class="link-list">
			<li><a href="<?php bloginfo('url'); ?>/technology-news/thermal-technologies-news/">View thermal technology news</a></li>
			</ul>
    	</div>
    	
    	<?php include 'reuse/tt-panel-images.php'; ?>
>>>>>>> refs/heads/master
	
<?php get_footer(); ?>
	
