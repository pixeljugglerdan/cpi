<?php
/*
Template Name: services-home

 * The template for displaying the Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>
	
<<<<<<< HEAD
<h1>Technologies</h1>

	
		<section class="archive-gap zz-link-box service-tech-ib">
    		<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/">
    		<div class="tech-title">
				<h2>
				<img src="<?php bloginfo('template_url'); ?>/-/images/icon/ib-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon tech-icon-services" />
				Industrial<br />Biotechnology</h2>
			</div>
    		</a>
    	</section>
    	
		<section class="archive-gap zz-link-box service-tech-pe">
    		<a href="<?php bloginfo('url'); ?>/printable-electronics/">
    		<div class="tech-title">
				<h2>
				<img src="<?php bloginfo('template_url'); ?>/-/images/icon/pe-icon.png" alt="pe-icon" width="41" height="41" class="tech-icon" />
				Printable<br />Electronics</h2>
			</div>
    		</a>
    	</section>
    	
		<section class="archive-gap zz-link-box service-tech-sc">
    		<a href="<?php bloginfo('url'); ?>/smart-chemistry/">
    		<div class="tech-title">
				<h2>
				<img src="<?php bloginfo('template_url'); ?>/-/images/icon/sc-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
				Smart<br />Chemistry</h2>
			</div>
    		</a>
    	</section>
    	
		<section class="archive-gap zz-link-box service-tech-ad">
    		<a href="<?php bloginfo('url'); ?>/anaerobic-digestion/">
    		<div class="tech-title">
				<h2>
				<img src="<?php bloginfo('template_url'); ?>/-/images/icon/ad-icon.png" alt="ad-icon" width="41" height="41" class="tech-icon" />
				Anaerobic<br />Digestion</h2>
			</div>
    		</a>
    	</section>
    	
		<section class="archive-gap zz-link-box service-tech-tt">
    		<a href="<?php bloginfo('url'); ?>/thermal-technologies/">
    		<div class="tech-title">
				<h2>
				<img src="<?php bloginfo('template_url'); ?>/-/images/icon/tt-icon.png" alt="tt-icon" width="41" height="41" class="tech-icon" />
				Thermal<br />Technologies</h2>
			</div>
    		</a>
    	</section>

		<section class="archive-gap zz-link-box service-tech-se">
    		<a href="<?php bloginfo('url'); ?>/sustainable-engineering/">
    		<div class="tech-title">
				<h2>
				<img src="<?php bloginfo('template_url'); ?>/-/images/icon/se-icon.png" alt="se-icon" width="41" height="41" class="tech-icon" />
				Sustainable<br />Engineering</h2>
			</div>
    		</a>
    	</section>
		

					
	<?php include 'footer.php'; ?>
	
=======
				<h1>Services</h1>
	
		<section class="box-container" id="services">
		
		<div class="menu-box b-bottom b-right">
		<a href="<?php bloginfo('url'); ?>/industrial-biotechnology/"><img src="<?php bloginfo('template_url'); ?>/-/images/icon/ib-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Industrial <br /> Biotechnology</h2></a>
			<ul>
				<li><a href="#">Prototyping and scale up</a></li>
				<li><a href="#">Process development and optimisation</a></li>
				<li><a href="#">Fabrication and pilot production</a></li>
				<li><a href="#">Fuel and feedstock investigation</a></li>
				<li><a href="#">Technology consultancy and partnerships</a></li>
				<li><a href="#">Commercialisation support</a></li>
				<li><a href="#">Programme development and management</a></li>
				<li><a href="#">Incubator</a></li>
			</ul>
		</div>
		
		<div class="menu-box b-bottom b-right">
		<a href="<?php bloginfo('url'); ?>/printable-electronics/"><img src="<?php bloginfo('template_url'); ?>/-/images/icon/pe-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Printable <br /> Electronics</h2></a>
			<ul> 
    		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'PE Services', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 
		</div>
		
		<div class="menu-box b-bottom no-margin">
		<a href="<?php bloginfo('url'); ?>/smart-chemistry/"><img src="<?php bloginfo('template_url'); ?>/-/images/icon/sc-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Smart <br /> Chemistry</h2></a>
			<ul>
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'PE Services', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</div>
		
		<div class="menu-box b-right">
		<a href="<?php bloginfo('url'); ?>/anaerobic-digestion/"><img src="<?php bloginfo('template_url'); ?>/-/images/icon/ad-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Anaerobic <br /> Digestion</h2></a>
			<ul>
				<li><a href="#">Prototyping and scale up</a></li>
				<li><a href="#">Process development and optimisation</a></li>
				
				<li><a href="#">Fuel and feedstock investigation</a></li>
				<li><a href="#">Technology consultancy and partnerships</a></li>
				<li><a href="#">Commercialisation support</a></li>
				<li><a href="#">Programme development and management</a></li>
				<li><a href="#">Incubator</a></li>
			</ul>
		</div>
		
		<div class="menu-box b-right">
		<a href="<?php bloginfo('url'); ?>/thermal-technologies/"><img src="<?php bloginfo('template_url'); ?>/-/images/icon/tt-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Thermal <br /> Technologies</h2></a>
			<ul>
				<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'TT Services', 'items_wrap' => '%3$s' ) ); ?>
			</ul>
		</div>
		
		<div class="menu-box">
		<a href="<?php bloginfo('url'); ?>/sustainable-engineering/"><img src="<?php bloginfo('template_url'); ?>/-/images/icon/se-icon.png" alt="ib-icon" width="41" height="41" class="tech-icon" />
		<h2 class="serviceHeader">Sustainable <br /> Engineering</h2></a>
			<ul>
				<li><a href="#">Prototyping and scale up</a></li>
				<li><a href="#">Process development and optimisation</a></li>
				<li><a href="#">Technology consultancy and partnerships</a></li>
				<li><a href="#">Commercialisation support</a></li>
				<li><a href="#">Programme development and management</a></li>
				<li><a href="#">Incubator</a></li>
			</ul>
		</div>
		
		</section>
	
<?php get_footer(); ?>
>>>>>>> refs/heads/master
	
