<?php if ( ! is_home() ) {?>
<div id="fatFooter">
	
		<div id="breadCrumb">
			<ul>
				<li><a href="<?php bloginfo('url'); ?>"><i class="icon-home"></i></a></li>
				<?php if (function_exists('cpi_breadcrumbs')) cpi_breadcrumbs(); ?>
				<li id="scrollToTop"><a href="#top" class="scrollToTop">Top <i class="icon-arrow-up"></i></a></li>
			</ul>	
		</div>
		
		
				
		<div class="connect">
		<div class="newsletterBox fatBox">
			<h4>Newsletter</h4>
			<p>Sign up for our newsletter for specialist updates.</p>
			<a class="btn" href="<?php bloginfo('url'); ?>/cpi-newsletter/">Subscribe to Newsletter</a>
		</div>	
			<!--<div class="twitterBox fatBox">
				<h4>Twitter</h4>
				<div class="tweet"></div>
				<a class="btn" href="http://twitter.com/ukcpi">Follow CPI on Twitter</a>
			</div>-->
			<div class="rssBox fatBox">
				<h4>RSS Feeds</h4>
				<ul>
					<li><a href="<?php bloginfo('url'); ?>/feed/?post_type=news">News Feed</a></li>
					<li><a href="<?php bloginfo('url'); ?>/feed/?post_type=casestudy">Case Study Feed</a></li>
				</ul>
			</div>
		</div>
		<div class="categories">
			<div class="catTechnologies fatBox">
						
				<h4>Technologies</h4>
				<ul>
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'All Technologies', 'items_wrap' => '%3$s' ) ); ?>
				</ul>

			</div>
			
			<div class="catServices fatBox">
    		<h4>Quick Links</h4>
    		
    		<ul>
    		<li><a href="<?php bloginfo('url'); ?>/press-room/publications/">View CPI Brochures</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/careers/">CPI Careers</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/tenders/">CPI Tenders</a></li>
    		<li><a href="<?php bloginfo('url'); ?>/press-room/">CPI Press Room</a></li>
    		</ul>
			</div>
			
		</div>
		<div class="categories">
			<div class="catMarkets fatBox">
				<h4>Markets</h4>
				<ul>
					<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'CPI Markets', 'items_wrap' => '%3$s' ) ); ?>
				</ul>
			</div>
		</div>
	</div> 
	<?php }?>
	<!-- END SECTION -->
	
	<footer>
		<nav>
			<ul id="footerLegal">
				<li id="copyright"><a href="<?php bloginfo('url'); ?>/terms-of-use/#copyright/">Copyright</a> &#169; Centre for Process Innovation Limited <?php echo date("Y"); ?>, All rights reserved</li> 
				<li id="privacy"><a href="<?php bloginfo('url'); ?>/privacy/">Privacy & Cookies</a> |</li>    
				<li><a href="<?php bloginfo('url'); ?>/terms-of-use/">Website Legals</a></li>     
				
				<?php if ( is_home() ) {?><li id="scrollToTop"><a href="#top" class="quickLink scrollToTop">Top <i class="icon-arrow-up"></i></a></li><?php }?>
				<li class="quickLink"><a href="<?php bloginfo('url'); ?>/press-room/">Press</a><?php if ( is_home() ) {?>|<?php }?></li>
				<li class="quickLink"><a href="<?php bloginfo('url'); ?>/careers/">Careers</a>|</li>
				<li class="quickLink"><a href="<?php bloginfo('url'); ?>/tenders/">Tenders</a>|</li>
			</ul>
		</nav>
		
		<div class="funding">
		
				<a href="https://catapult.innovateuk.org/centre-for-process-innovation" target="_blank"><img class="funding-left" src="<?php bloginfo('template_url'); ?>/-/images/catapult.png" alt="tsb" height="30"/></a>
		
		
		<a href="http://www.iso.org/iso/home.html" target="_blank"><img class="funding-right" src="<?php bloginfo('template_url'); ?>/-/images/iso.png" alt="iso" width="52" height="30" /></a>		

<a href="http://www.investorsinpeople.co.uk/" target="_blank"><img class="funding-right" src="<?php bloginfo('template_url'); ?>/-/images/investorsinpeople.png" alt="investorsinpeople"  width="98" height="30" /></a>

		<a href="http://www.innovateuk.org/" target="_blank"><img class="funding-right" src="<?php bloginfo('template_url'); ?>/-/images/tsb.png" alt="tsb" width="182" height="30"/></a>	
			
		<img class="funding-right" src="<?php bloginfo('template_url'); ?>/-/images/erdf.png" alt="ERDF" width="123" height="30"/>
		
		<?php if (is_front_page()) { ?> 
		
		<a href="https://collaborate.cenamps.com/portal/server.pt" onclick="_gaq.push(['_trackEvent','Outgoing links','Collab Server','https://collaborate.cenamps.com/portal/server.pt')" target="_blank">
		<img class="funding-right" src="<?php bloginfo('template_url'); ?>/-/images/collab.png" alt="collab" width="142" height="30" />
		</a>	
		<?php } ?>
		
		
		</div>

	</footer>
	
	<!--<div id="feedback-button"><a href="<?php bloginfo('url'); ?>/feedback/"><i class="icon-comments"></i> Give Feedback</a></div>-->
	
		</div>
		   
		  	   
		
  <!-- Asynchronous Google Analytics snippet. Change UA-XXXXX-X to be your site's ID.
  mathiasbynens.be/notes/async-analytics-snippet -->
  <script>
    var _gaq=[['_setAccount','UA-2415452-6'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>


	<script>
      !function ($) {
        $(function(){
          // carousel demo
          $('#myCarousel').carousel()
        })
      }(window.jQuery)
    </script>
		
		
<!-- Mail Chimp -->
	<img style="display:none;" id="mc_tracking_pixel" src="http://gooo.al/tracking_image.gif"/>

	
	<?php wp_footer(); ?>
	</body>
	
</html>