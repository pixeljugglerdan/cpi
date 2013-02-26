<?php
/*
Template Name: business-support-home

 * The template for displaying the Business Support services in the CPI INNOVATOR THEME
 */

get_header(); ?>

<div id="titleArea">	
	<span class="section-title"><h1><a href="<?php bloginfo('url'); ?>/services/">Services</a></h1></span>

</div>

    <aside>

    <nav>
			<ul> 
    		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'All Services', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 
    </nav>

<div class="aside-box">
		<h3>
			<a class="" data-toggle="modal" href="#newsModal">
				<i class="icon-envelope-alt"></i> Sign up for our Newsletter &#187;
			</a>
		</h3>
		</div>

			<div class="aside-box contact-box"><h3>For more information:<br /><i class="icon-phone"></i>+44 (0)1642 455 340<br /> <i class="icon-envelope"></i> <a href="mailto:info@uk-cpi.com">info@uk-cpi.com</a></h3></div>   

    </aside>
    
  
  
  <section id="page-header"> 

	<?php $bg_image = wpgym_extract_post_thumb( get_the_post_thumbnail() ); ?>


	<div id="page-header-title" style="background: url( <?php echo $bg_image;?> )">
	
	<h1><?php the_title(); ?></h1>
</div>

	

	<div id="page">
	
	<p>CPI can offer targeted business support services aimed at addressing specific issues faced by early-stage companies and SMEs wishing to develop new products and access new markets. These support services – delivered by highly-experienced specialists – provide clients with access to training, an international network of potential new business partners, European funding sources and new markets.</p>
	
<div id="">
<div class="tech-box-container business-box">
<a href="<?php bloginfo('url'); ?>/business-support/incubator-space/"><img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/business-support/incubator-space.png" alt="electronics" width="285" height="90" />
		<h3 class="serviceHeader">Incubator Space</h3></a>
		CPI is able to offer pilot plants, specialist laboratories, clean room and office space to enable fledgling companies to develop new products and processes.
</div>

<div class="tech-box-container business-box">
<a href="<?php bloginfo('url'); ?>/business-support/market-technology-intelligence/"><img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/business-support/market-intel.png" alt="electronics" width="285" height="90" />
				<h3 class="serviceHeader">Market & Technology Intelligence</h3></a>
				Market intelligence turns a great idea into a viable business. CPI will help determine the strength of your market position and find exploitable market opportunities.
</div>

<div class="tech-box-container business-box">
<a href="<?php bloginfo('url'); ?>/business-support/business-technology-partnering/"><img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/business-support/partnering.png" alt="electronics" width="285" height="90" />
		<h3 class="serviceHeader">Business & Technology Partnering</h3></a>
				CPI can help you to gain access to world class facilities and new technologies, strengthen your intellectual property and improve your R&D capabilities.
</div>

<div class="tech-box-container business-box">
<a href="<?php bloginfo('url'); ?>/business-support/technology-commercialisation/"><img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/business-support/scale-up.png" alt="electronics" width="285" height="90" />
		<h3 class="serviceHeader">Technology Commercialisation</h3></a>
				CPI can provide direct access to world-leading industrial scale up expertise in key technology sectors.
</div>

<div class="tech-box-container business-box">
<a href="<?php bloginfo('url'); ?>/business-support/intellectual-property/"><img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/business-support/intellectual-property.png" alt="electronics" width="285" height="90" />
		<h3 class="serviceHeader">Intellectual Property</h3></a>
				CPI can help you find ways to attract investment and secure your market position by assessing and protecting your IP.

</div>

<div class="tech-box-container business-box">
<a href="<?php bloginfo('url'); ?>/business-support/business-start-up-support/"><img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/business-support/start-up.png" alt="electronics" width="285" height="90" />
		<h3 class="serviceHeader">Business Start Up Support</h3></a>
				The CPI team can offer commercial guidance and source investment to grow your business idea.

</div>

<div class="tech-box-container business-box">
<a href="<?php bloginfo('url'); ?>/business-support/funding/"><img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/business-support/funding.png" alt="electronics" width="285" height="90" />
		<h3 class="serviceHeader">Funding</h3></a>
				CPI work closely with enterprises from all sectors to help identify sources of business finance.

</div>

		<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>

	</div>
		</div>

</section>


	<?php include 'newsletter.php'; ?>
<?php get_footer(); ?>
	

