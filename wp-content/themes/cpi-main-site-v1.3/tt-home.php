<?php
/*
Template Name: tt-home

 * The template for displaying the Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>

<script type="text/javascript">
mixpanel.track("Visited Thermal Technologies Page");
</script>


<div id="titleArea">	
<span class="section-title"><h2><?php the_title(); ?></h2></span>

<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Thermal Technologies Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

<div id="ttHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb"></p>
</div>



<div id="zz-tech-page">
	<div id="page">
	
	
	<div class="list-box ie-line">
	<img src="<?php bloginfo('template_url'); ?>/-/images/content/thermal-technology/Tata Steel.png" alt="Tata Steel" width="150" /><br/>
	A collaboration between CPI and Tata Steel, the Thermal Technologies Centre provides expertise, capabilities and demonstration scale assets that enable thermal processing businesses to develop and improve new products and processes.
	<ul>
	<li><a href="http://www.uk-cpi.com/wp-content/uploads/2012/12/CPI-Thermal-Technologies-Flyer.pdf">Download Flyer</a></li>
	</ul>
	</div>
	
	<div class="list-box">
	    		<h3>Thermal Technologies Centre Overview Video</h3>
		<a href="https://www.youtube.com/watch?v=zXscUitXHPc&feature=player_embedded" target="_blank" class="video-btn"><img src="<?php bloginfo('template_url'); ?>/-/images/content/thermal-technology/video-thum-one.png" alt="Tata Steel" width="286" height="124" /></a>
	</div>
	
	<div class="list-box">
	    		<h3>Thermal Technologies Centre Launch Video</h3>
		<a href="http://youtu.be/MjXAo2qxMlA" target="_blank" class="video-btn"><img src="<?php bloginfo('template_url'); ?>/-/images/content/thermal-technology/video-thum-two.png" alt="Tata Steel" width="286" height="124" /></a>
	</div>
	
	
	<div class="list-box">
    		<h3>Markets</h3>
    		
			<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'TT Markets', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
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
					<a href="<?php bloginfo('url'); ?>/thermal-technologies/product-and-process-development/">
					Product and Process Development
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/thermal-technologies/prototyping-demonstration-scale-up/">
					Prototyping, Demonstration & Scale Up
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/thermal-technologies/fuel-feedstock-investigation/">
					Fuel & Feedstock Investigation
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/thermal-technologies/manufacturability-and-process-assessment/">
					Manufacturability and Process Assessment
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/thermal-technologies/process-modelling-and-consultancy/">
					Process Modelling and Consultancy
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/thermal-technologies/business-and-funding-support/">
					Business and Funding Support
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



	
<?php get_footer(); ?>
	
