<?php if ( ! is_home() ) {?>
<div id="fatFooter">
	
		<div id="breadCrumb">
			<ul>
				<li><a href="<?php bloginfo('url'); ?>"><i class="icon-home"></i></a></li>
				<?php if (function_exists('cpi_breadcrumbs')) cpi_breadcrumbs(); ?>
				<li id="scrollToTop"><a href="#top" class="scrollToTop">Fly to top <i class="icon-arrow-up"></i></a></li>
			</ul>	
		</div>
		
		
				
		<div class="connect">
		<div class="newsletterBox fatBox">
			<h4>Newsletter</h4>
			<p>Sign up for our newsletter for specialist updates.</p>
			<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="http://uk-cpi.us2.list-manage1.com/subscribe/post?u=80755c5ba85732e9dc02c9888&amp;id=d2326f9e90" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
	<fieldset>
	
<div class="mc-field-group textfield">
<label for="mce-EMAIL">Email Address:</label>
<input type="text" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="newsletterExtend newsletterDropDown">
	<div class="mc-field-group textfield">
		<label for="mce-FNAME">First Name:</label>
		<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
	</div>
	<div class="mc-field-group textfield">
		<label for="mce-LNAME">Last Name:</label>
		<input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
	</div>

	<div class="mc-field-group news-lttr">
    	<span class="input-group-label">Which technologies are you interested in? </span>
    	<div class="input-group">
    	<ul>
			<li><input type="checkbox" value="1" name="group[1][1]" id="mce-group[1]-1-0"><label for="mce-group[1]-1-0">Printable Electronics</label></li>
			<li><input type="checkbox" value="8" name="group[1][8]" id="mce-group[1]-1-1"><label for="mce-group[1]-1-1">Smart Chemistry</label></li>
			<li><input type="checkbox" value="16" name="group[1][16]" id="mce-group[1]-1-2"><label for="mce-group[1]-1-2">Sustainable Engineering</label></li>
			<li><input type="checkbox" value="2" name="group[1][2]" id="mce-group[1]-1-3"><label for="mce-group[1]-1-3">Industrial Biotechnology</label></li>
			<li><input type="checkbox" value="4" name="group[1][4]" id="mce-group[1]-1-4"><label for="mce-group[1]-1-4">Anaerobic Digestion</label></li>
			<li><input type="checkbox" value="32" name="group[1][32]" id="mce-group[1]-1-5"><label for="mce-group[1]-1-5">Thermal Technologies</label></li
></ul>
		<br />
    	</div>
	</div>
	
	
<div class="mc-field-group news-lttr">
    <span class="input-group-label">Which markets are you interested in? </span>
    <div class="input-group">
    <ul><li><input type="checkbox" value="64" name="group[9525][64]" id="mce-group[9525]-9525-0"><label for="mce-group[9525]-9525-0">Healthcare</label></li>
<li><input type="checkbox" value="128" name="group[9525][128]" id="mce-group[9525]-9525-1"><label for="mce-group[9525]-9525-1">Personal Care</label></li>
<li><input type="checkbox" value="256" name="group[9525][256]" id="mce-group[9525]-9525-2"><label for="mce-group[9525]-9525-2">Consumer Goods</label></li>
<li><input type="checkbox" value="512" name="group[9525][512]" id="mce-group[9525]-9525-3"><label for="mce-group[9525]-9525-3">Food &amp; Drink</label></li>
<li><input type="checkbox" value="1024" name="group[9525][1024]" id="mce-group[9525]-9525-4"><label for="mce-group[9525]-9525-4">Materials &amp; Chemicals</label></li>
<li><input type="checkbox" value="2048" name="group[9525][2048]" id="mce-group[9525]-9525-5"><label for="mce-group[9525]-9525-5">Built Environment</label></li>
<li><input type="checkbox" value="4096" name="group[9525][4096]" id="mce-group[9525]-9525-6"><label for="mce-group[9525]-9525-6">Printable Electronics</label></li>
<li><input type="checkbox" value="8192" name="group[9525][8192]" id="mce-group[9525]-9525-7"><label for="mce-group[9525]-9525-7">Energy</label></li>
<li><input type="checkbox" value="16384" name="group[9525][16384]" id="mce-group[9525]-9525-8"><label for="mce-group[9525]-9525-8">Transportation</label></li>
</ul>
</div>
</div>

		<div><button type="submit" name="subscribe" class="btn">Subscribe</button></div>
		<div id="mce-responses">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>
</div>	
</fieldset>	
	
</form>
</div>

<!--End mc_embed_signup-->
			
		</div>	
			<div class="twitterBox fatBox">
				<h4>Twitter</h4>
				<div class="tweet"></div>
				<a class="btn" href="http://twitter.com/ukcpi">Follow CPI on Twitter</a>
			</div>
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
				
				<?php if ( is_home() ) {?><li id="scrollToTop"><a href="#top" class="quickLink scrollToTop">Fly to top <i class="icon-arrow-up"></i></a></li><?php }?>
				<li class="quickLink"><a href="<?php bloginfo('url'); ?>/press-room/">Press Room</a><?php if ( is_home() ) {?>|<?php }?></li>
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

		
		
<!-- Mail Chimp -->
	<img style="display:none;" id="mc_tracking_pixel" src="http://gooo.al/tracking_image.gif"/>

	<script src="<?php bloginfo('template_url'); ?>/-/js/mailchimp.min.js" type="text/javascript" charset="utf-8"></script>
	<?php wp_footer(); ?>
	</body>
	
</html>