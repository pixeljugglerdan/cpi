<?php
/*
Template Name: sc-home

 * The template for displaying the SC Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>

<div id="titleArea">	
<span class="section-title"><h2><?php the_title(); ?></h2></span>

<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Smart Chemistry Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

<div id="scHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb"></p>
</div>


<div id="zz-tech-page"><div id="page">
<p>CPI’s Smart Chemistry Platform helps companies of all sizes to develop novel chemical products and processes both quickly and cost effectively. We explore alternatives to traditional chemical processing techniques in order to create lower waste, cleaner, more efficient and more sustainable manufacturing processes.</p>
<p>CPI combines unique open access testing facilities with practical experience and applied knowledge of resource efficient processes, science and engineering. The extensive combination of equipment at our facility is supported by our team’s knowledge of whole process design and a fundamental understanding of continuous processing. </br> 
›› <a href="http://www.uk-cpi.com/wp-content/uploads/2011/09/Smart-Chemistry-at-CPI.pdf">Download Flyer</a></p>

	
	<div>
	
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
					Continuous Oscillatory Baffle Flow Reactors (COBR)
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/smart-chemistry/spinning-disk-reactor/">
					Spinning Disc Reactor
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/smart-chemistry/particulates-processing-reactor/">
					Particulates Processing Reactor
					</a>
				</li>
				</ul>
		</div>
				
		<div class="list-box">
				<ul class="link-list">
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
    		<ul class="link-list">
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'SC Tech Focus', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 		
    	</div>
    	
    	</div>
			
    </div>
    
    <div class="clear"></div>  	
      	
    	<?php include 'reuse/boxes/sc-tech-news-box.php'; ?>
    	<?php include 'reuse/sc-panel-images.php'; ?>

</div>

<?php get_footer(); ?>
	
