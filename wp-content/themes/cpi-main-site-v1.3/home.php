<?php
/*
 * The template for displaying the Home Page in the CPI INNOVATOR THEME
 */

get_header(); ?>




<!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide carousel-fade">
      <div class="carousel-inner">
        <div class="item active slide1">
          <div class="cpibox">
          <div class="container">
            <div class="carousel-caption">
              	
              	<div class="home-header">
				<div id="homeDescription">
					<h1>The Centre for <br/>Process Innovation</h1>
					<p>CPI helps companies to prove and scale up processes to manufacture new products and create more sustainable, efficient and economic industries of the future.
					</p> 
					<a class="home-link" href="<?php bloginfo('url'); ?>/about/">More about CPI ››</a>
				</div>
				</div> 

            </div>
          </div>
          </div>
        </div>
        
        <div class="item slide2">
          <div class="cpibox">
          <div class="container">
            <div class="carousel-caption">
              
              
              	<div class="home-header">
			  	<div id="homeDescription">
					<a href="<?php bloginfo('url'); ?>/about/high-value-manufacturing-catapult/"><img src="<?php bloginfo( 'template_url' ); ?>/-/images/content/home/catapult.png" alt="catapult" width="260" height="82" class="asset" /></a>

				<p>CPI is the process industry element of the government’s elite network of Catapult centres. 
				</p>
				<a class="home-link" href="<?php bloginfo('url'); ?>/about/high-value-manufacturing-catapult/">Read more ››</a>
			  	</div>
			  	</div>
              
              
            </div>
          </div>
          </div>
        </div>
        <div class="item slide3">
          <div class="cpibox">
          <div class="container">
            <div class="carousel-caption">
            
            
              	<div class="home-header">
				<div id="homeDescription">
					<h1>Did You Know?</h1>
					<p>To date we have successfully completed over 200 public and private projects with a value in excess of £298m. 80% of these projects were for SMEs.
					</p>
					<a class="home-link" href="<?php bloginfo('url'); ?>/about/cpi-facts-and-figures/">More CPI facts ››</a>
				</div>
				</div>

            </div>
          </div>
          </div>
        </div>
       
        
      </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lsaquo;</a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next">&rsaquo;</a>
    </div><!-- /.carousel -->


     

<div class="cpibox">
<div id="homePage" class="homePage">

<!-- Show if on Mobile -->
<div class="home-hide">
			
				<h1>The Centre for <br/>Process Innovation</h1>
				<p>CPI helps companies to prove and scale up processes to manufacture new products and create more sustainable, efficient and economic industries of the future.
				</p> 
			<a class="home-link home-link-slider" href="<?php bloginfo('url'); ?>/about/">More about CPI ››</a>

</div>


<!-- 1st Tier -->
    	<section class="gap zz-img-list-box">
    	    <h2>Technologies</h2>
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
    		<h2>Markets</h2>
    		<a class="all" href="<?php bloginfo('url'); ?>/markets">View all &#187;</a>
    		<ul>
    		<li><a href="<?php bloginfo('url'); ?>/markets/personal-care/">Personal Care</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/markets/energy/">Energy</a></li>    		
    		<li><a href="<?php bloginfo('url'); ?>/markets/aerospace-defence-security/">Aerospace, Defence & Security</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/markets/automotive-transport/">Automotive & Transport</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/markets/materials-chemicals/">Materials & Chemicals</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/markets/pharmaceuticals/">Pharmaceuticals</a></li>
    		</ul>
    	</section>
    	
		<section class="gap zz-list-box">	
    		<h2>Services</h2>
    		<a class="all" href="<?php bloginfo('url'); ?>/services/">View all &#187;</a>
    		<ul>
    		<li><a href="<?php bloginfo('url'); ?>/services/product-and-process-development/">Product & Process Development</a></li>
			<li><a href="<?php bloginfo('url'); ?>/services/prototyping-demonstration-and-scale-up/">Prototyping, Demonstration & Scale up</a></li>
			<li><a href="<?php bloginfo('url'); ?>/services/pilot-production/">Pilot Production</a></li>
			
			<li><a href="<?php bloginfo('url'); ?>/services/fuel-feedstock-and-materials-investigation/">Fuel, Feedstock & Materials Investigation</a></li>
			<li><a href="<?php bloginfo('url'); ?>/services/manufacturability-and-process-assessment/">Manufacturability & Process Assessment</a></li>
			</ul>
    	</section>    	


<!-- 2nd Tier -->	
		<section class="gap zz-recent-news-box">
       		<h2>Recent news</h2>
       		<a class="all" href="<?php bloginfo('url'); ?>/news">View all &#187;</a>
    		<?php
			$news = new WP_Query(array('showposts' => '2', 'post_type' => 'news'));
			while ($news->have_posts()) : $news->the_post();
			?>
			<div class="recent-news-item">
			<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); } ?></a>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a><br/>
			<strong><?php the_time('jS F Y') ?></strong>
			</div>
				
			<?php endwhile; wp_reset_query(); ?>
       	</section>


		<section class="gap zz-recent-news-box">
       		<h2>Case studies</h2>
       		<a class="all" href="<?php bloginfo('url'); ?>/case-studies">View all &#187;</a>
    		<?php
			$news = new WP_Query(array('showposts' => '2', 'post_type' => 'casestudy'));
			while ($news->have_posts()) : $news->the_post();
			?>
						
			<div class="recent-news-item">
			<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); } ?></a>
			<strong><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></strong></br>

			</div>
				
			<?php endwhile; wp_reset_query(); ?>
       	</section>


		<section class="gap zz-recent-news-box">
       		<h2>Upcoming Events</h2>
       		<a class="all" href="<?php bloginfo('url'); ?>/events">View all &#187;</a>
    		<?php
			$news = new WP_Query(array('showposts' => '2', 'post_type' => 'tribe_events'));
			while ($news->have_posts()) : $news->the_post();
			?>
		
			
			<div class="recent-news-item">
			<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); } ?></a>
  			
  			<?php if ( tribe_is_new_event_day() && !tribe_is_day() && !tribe_is_multiday() ) : ?>
				<strong><?php echo tribe_get_start_date( null, false ); ?></strong>
			<?php endif; ?>
			<?php if( !tribe_is_day() && tribe_is_multiday() ) : ?>
				<strong><?php echo tribe_get_start_date( null, false ); ?> – <?php echo tribe_get_end_date( null, false ); ?></strong>
			<?php endif; ?>
			<?php if ( tribe_is_day() && $first ) : $first = false; ?>
				<strong><?php echo tribe_event_format_date(strtotime(get_query_var('eventDate')), false); ?></strong>
			<?php endif; ?>
  			</br>
  			
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a>
			</div>
				
			<?php endwhile; wp_reset_query(); ?>
       	</section>
<!-- 3rd Tier -->
    	
    	

    		<section class="gap zz-link-box careers-ad">
    			<a href="<?php bloginfo('url'); ?>/careers/"><h2>Careers</h2></a>
    		</section>
       	
			<section class="gap zz-link-box automotive-bg">
       			<a href="<?php bloginfo('url'); ?>/the-future-of-automotive/"><h2>The future of automotive</h2></a>
       		</section>
       		
       		<section class="gap zz-link-box catapult">
    			<a href="<?php bloginfo('url'); ?>/about/high-value-manufacturing-catapult/"><h2>High Value Manufacturing</h2></a>
    		</section>          	

    	    <!--
    	    <section class="gap zz-link-box innovation-gap">
    			<a href="<?php bloginfo('url'); ?>/about/the-innovation-phase/"><h2>Bridging the innovation gap</h2></a>
    		</section> -->
    		
    		<section class="gap zz-link-box incubator">
       			<a href="<?php bloginfo('url'); ?>/about/why-companies-work-with-us/"><h2>Why companies work with us</h2></a>
       		</section>
    		
			<section class="gap zz-link-box values">
       			<a href="<?php bloginfo('url'); ?>/about/values/"><h2>Our values</h2></a>
       		</section>
       	
			<section class="gap zz-link-box peratech">
       			<a href="<?php bloginfo('url'); ?>/case-studies/peratech/"><h2>Client focus</h2></a>
       		</section>          	


    
        	
</div>   
	<?php get_footer(); ?>
	
