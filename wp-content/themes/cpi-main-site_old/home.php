<?php
/*
 * The template for displaying the Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>


<div id="homePage">

<div id="homeSlider">

<div id="homeAbout">
<div id="homeDescription">
	<h1>The Centre for Process Innovation</h1>
	<p>CPI helps companies to prove and scale up processes to manufacture new products and create more sustainable, efficient and economic industries of the future.</p>
</div>
	<div id="about-links"><a href="<?php bloginfo('url'); ?>/about/" class="btn">More about CPI &raquo;</a>
	<br/><small>
	or <a id="watchVideo" href="<?php bloginfo('url'); ?>/case-studies/">view case studies</a>
	</small>
	</div>
</div>	

</div>


<div class="clear"></div> 
       	    	
    	<section class="gap zz-recent-news-box">
       		<h2>Recent News</h2>
       		<a class="all" href="<?php bloginfo('url'); ?>/news">View All News &#187;</a>
    		<?php
			$news = new WP_Query(array('showposts' => '2', 'post_type' => 'news'));
			while ($news->have_posts()) : $news->the_post();
			?>
			<div class="recent-news-item">
			<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); } ?></a>
  			<strong><?php the_time('jS F Y') ?></strong>
			<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></h4>
			</div>
				
			<?php endwhile; wp_reset_query(); ?>
       	</section>


    	<section class="gap zz-img-list-box home-tech">
    	    <h2>CPI Technologies</h2>
    		<ul>
    		<li class="ib-icon-small"><a href="<?php bloginfo('url'); ?>/industrial-biotechnology/">Industrial Biotechnology</a></li>
    		<li class="pe-icon-small"><a href="<?php bloginfo('url'); ?>/printable-electronics/">Printable Electronics</a></li>
    		<li class="sc-icon-small"><a href="<?php bloginfo('url'); ?>/smart-chemistry/">Smart Chemistry</a></li>
    		<li class="ad-icon-small"><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/">Anaerobic Digestion</a></li>
    		<li class="tt-icon-small"><a href="<?php bloginfo('url'); ?>/thermal-technologies/">Thermal Technologies</a></li>
    		<li class="se-icon-small"><a href="<?php bloginfo('url'); ?>/sustainable-engineering/">Sustainable Engineering</a></li>
    		</ul>
    	</section>
    	
    	
       	<section class="gap zz-list-box">	
    		<h2>CPI Markets</h2>
    		<a class="all" href="<?php bloginfo('url'); ?>/markets">View All Markets &#187;</a>
    		<ul>
    		<li><a href="<?php bloginfo('url'); ?>/markets/personal-care/">Personal Care</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/markets/energy-lighting/">Energy & Lighting</a></li>    		
    		<li><a href="<?php bloginfo('url'); ?>/markets/aerospace/">Aerospace</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/markets/speciality-chemicals/">Speciality Chemicals</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/markets/automotive/">Automotive</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/markets/materials/">Materials</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/markets/personal-care/">Personal Care</a></li>
    		</ul>
    	</section>
    	
    	

    	
    	<section class="gap zz-link-box catapult">
    		<a href="<?php bloginfo('url'); ?>/about/high-value-manufacturing-catapult/"><h2>High Value Manufacturing Catapult</h2></a>
    	</section>
    	
		<section class="gap zz-link-box business-support">
       		<a href="<?php bloginfo('url'); ?>/business-support/"><h2>Business Support</h2></a>
       	</section>
       	
       	<section class="gap zz-recent-news-box">
       		<h2>Events</h2>
       		<a class="all" href="<?php bloginfo('url'); ?>/events">View All Events &#187;</a>
    		<?php
			$news = new WP_Query(array('showposts' => '2', 'post_type' => 'events'));
			while ($news->have_posts()) : $news->the_post();
			?>
			
			<?php setup_postdata($post); 
    $custom = get_post_custom(get_the_ID());
    $sd = $custom["wpcf-event-start-date"][0];
   
    $longdate = date("D jS, M, Y", $sd);
    ?>
			
			<div class="recent-news-item">
			<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); } ?></a>
  			<strong>On <?php echo $longdate ; ?></strong>
			<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></h4>
			</div>
				
			<?php endwhile; wp_reset_query(); ?>
       	</section>
    	

    	
    	
</div>   

	<?php get_footer(); ?>
	
