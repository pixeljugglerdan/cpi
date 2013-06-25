<?php
/*
Template Name: bi-home

 * The template for displaying the PE Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>

<script type="text/javascript">
mixpanel.track("Visited Printable Electronics Page");
</script>

<div id="titleArea">	
<span class="section-title"><h2><?php the_title(); ?></h2></span>

<nav>
	<ul>
	<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Biologics Nav', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>

<div id="biologicsHeader">
	<h1 id="techHeaderTitle"><?php the_title(); ?></h1>
	<p id="techHeaderBlurb">The UK's National Biologics Industry Innovation Centre</p>
</div>

	<div id="zz-tech-page"><div id="page">

	<div class="biologics-box">
	<h3>A New National facility for Biologics</h3>
	<p>As part of the UK governments Strategy for Life Sciences CPI has been selected as the home of the new National Biologics Industry Innovation Centre. The investment will help UK companies to develop a competitive foothold in the growing biopharmaceutical market.</p>
<p>The new centre will support the development of new innovative manufacturing techniques that reduce the costs of production and provide small companies with facilities to prove and scale up their process whilst delivering small amounts of product for pre-clinical testing.  Companies can develop new products offline, encouraging innovation within the industry without impacting existing production.</p> 
<p>The new facility will be specified to help customers to scale up their process from bench to industrial scale ensuring that a robust and economically viable manufacturing process can be delivered before investing substantial amounts of money in capital equipment and training.</p>
<p>The centre will support the commercialisation of research by promoting collaboration between academia, the National Health Service and industry.</p>

<div id="share-box">
					<div class="share-box-container" id="twitterPress"><h4>Twitter</h4>Your can <a href="http://twitter.com/ukCPI">follow @ukCPI on Twitter</a> for Biologics updates.</div>
					<div class="share-box-container" id="newsletterPress" style="border-right:none; width: 280px;"><h4>Newsletter</h4>You can <a  href="<?php bloginfo('url'); ?>/cpi-newsletter/">sign up for our newsletter</a> to receive Biologics news.</div>
</div>

	</div>
		<div class="list-box fact-list">
    		<h3>The Biologics Opportunity</h3>
    		<ul class="link-list">
				<li>The global Biopharmaceutical market is worth $92bn and has seen significant growth over the past five years. Forecasted revenues for 2015 are $200bn.</li>
				<li>16% of all pharmaceuticals are biologics. This is projected to increase by 7% annually.</li>
		 <li>Biologics enable stratified and personalised medicines of the future.</li>
		 <li>Pharmaceutical R&D is moving from in house to external collaborative projects which include a growing amount of innovative SMEs</li>
		 <li>Embracing biopharmaceuticals in the UK could boost the UK economy. Potential investment could help place the UK in a leading position globally and accumulate growth in positive GDP of £10-50 billion over 10 years.</li>
			</ul> 		
    	</div>

<div class="clear"></div>   	

    </div>
    
    <div class="clear"></div>  	
      	
    	<?php include 'reuse/boxes/bi-tech-news-box.php'; ?>
    	<?php include 'reuse/bi-panel-images.php'; ?>

</div>

<?php get_footer(); ?>