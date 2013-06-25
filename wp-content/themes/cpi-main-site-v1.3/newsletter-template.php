<?php
/*
Template Name: newsletter
 * The template for displaying about pages in the CPI INNOVATOR THEME Printable Electronics Section
 */

get_header(); ?>


<aside>

    <nav>
			<ul> 
    		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'About CPI', 'items_wrap' => '%3$s' ) ); ?>
			</ul> 
    </nav>

		
		<div class="aside-box contact-box"><h3>For more information:<br /><i class="icon-phone"></i> +44 (0)1642 455 340<br /> <i class="icon-envelope"></i> <a href="mailto:info@uk-cpi.com">info@uk-cpi.com</a></h3></div>
    </aside>


<section id="page-header"> 

	<?php $bg_image = wpgym_extract_post_thumb( get_the_post_thumbnail() ); ?>

	<div id="page-header-title" style="background: url( <?php echo $bg_image;?> )">
		<h1><?php the_title(); ?></h1>
	</div>


	<div id="page">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
		
			CPI helps its customers to develop, prove, prototype and scale up the next generation of products and processes. Sign up for our newsletter, the Oracle, for specialist updates.</br> <a href="#archive">View Previous Issues ››</a> </br></br>
			

<!-- Begin MailChimp Signup Form -->
<link href="http://cdn-images.mailchimp.com/embedcode/classic-081711.css" rel="stylesheet" type="text/css">
<style type="text/css">
	#mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
	/* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
	   We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
</style>
<div id="mc_embed_signup">
<form action="http://uk-cpi.us2.list-manage1.com/subscribe/post?u=80755c5ba85732e9dc02c9888&amp;id=d2326f9e90" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
	<h2>Subscribe to our mailing list</h2>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
<div class="mc-field-group">
	<label for="mce-FNAME">First Name  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
</div>
<div class="mc-field-group">
	<label for="mce-LNAME">Last Name  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
</div>
<div class="mc-field-group">
	<label for="mce-COMPANY">Company Name  <span class="asterisk">*</span>
</label>
	<input type="text" value="" name="COMPANY" class="required" id="mce-COMPANY">
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
</label>
	<input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group input-group">
    <strong>Which technologies are you interested in? </strong>
    <ul><li><input type="checkbox" value="1" name="group[1][1]" id="mce-group[1]-1-0"><label for="mce-group[1]-1-0">Printable Electronics</label></li>
<li><input type="checkbox" value="8" name="group[1][8]" id="mce-group[1]-1-1"><label for="mce-group[1]-1-1">Smart Chemistry</label></li>
<li><input type="checkbox" value="16" name="group[1][16]" id="mce-group[1]-1-2"><label for="mce-group[1]-1-2">Sustainable Engineering</label></li>
<li><input type="checkbox" value="2" name="group[1][2]" id="mce-group[1]-1-3"><label for="mce-group[1]-1-3">Industrial Biotechnology</label></li>
<li><input type="checkbox" value="4" name="group[1][4]" id="mce-group[1]-1-4"><label for="mce-group[1]-1-4">Anaerobic Digestion</label></li>
<li><input type="checkbox" value="32" name="group[1][32]" id="mce-group[1]-1-5"><label for="mce-group[1]-1-5">Thermal Technologies</label></li>
<li><input type="checkbox" value="32768" name="group[1][32768]" id="mce-group[1]-1-6"><label for="mce-group[1]-1-6">Biologics</label></li>
</ul>
</div>
<div class="mc-field-group input-group">
    <strong>Which markets are you interested in? </strong>
    <ul><li><input type="checkbox" value="262144" name="group[9525][262144]" id="mce-group[9525]-9525-0"><label for="mce-group[9525]-9525-0">Aerospace, Defence &amp; Security</label></li>
<li><input type="checkbox" value="16384" name="group[9525][16384]" id="mce-group[9525]-9525-1"><label for="mce-group[9525]-9525-1">Automotive &amp; Transport</label></li>
<li><input type="checkbox" value="2048" name="group[9525][2048]" id="mce-group[9525]-9525-2"><label for="mce-group[9525]-9525-2">Built Environment</label></li>
<li><input type="checkbox" value="256" name="group[9525][256]" id="mce-group[9525]-9525-3"><label for="mce-group[9525]-9525-3">Retail &amp; Consumer Goods</label></li>
<li><input type="checkbox" value="8192" name="group[9525][8192]" id="mce-group[9525]-9525-4"><label for="mce-group[9525]-9525-4">Energy</label></li>
<li><input type="checkbox" value="512" name="group[9525][512]" id="mce-group[9525]-9525-5"><label for="mce-group[9525]-9525-5">Food &amp;amp; Drink</label></li>
<li><input type="checkbox" value="1024" name="group[9525][1024]" id="mce-group[9525]-9525-6"><label for="mce-group[9525]-9525-6">Materials &amp;amp; Chemicals</label></li>
<li><input type="checkbox" value="128" name="group[9525][128]" id="mce-group[9525]-9525-7"><label for="mce-group[9525]-9525-7">Personal Care</label></li>
<li><input type="checkbox" value="65536" name="group[9525][65536]" id="mce-group[9525]-9525-8"><label for="mce-group[9525]-9525-8">Pharmaceuticals</label></li>
<li><input type="checkbox" value="4096" name="group[9525][4096]" id="mce-group[9525]-9525-9"><label for="mce-group[9525]-9525-9">Electronics &amp; IT</label></li>
<li><input type="checkbox" value="64" name="group[9525][64]" id="mce-group[9525]-9525-10"><label for="mce-group[9525]-9525-10">Healthcare &amp; Lifesciences</label></li>
<li><input type="checkbox" value="131072" name="group[9525][131072]" id="mce-group[9525]-9525-11"><label for="mce-group[9525]-9525-11">Environment &amp; Water</label></li>
</ul>
</div>
	<div id="mce-responses" class="clear">
		<div class="response" id="mce-error-response" style="display:none"></div>
		<div class="response" id="mce-success-response" style="display:none"></div>
	</div>	<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
</form>
</div>

<!--End mc_embed_signup-->			


</br></br><a name="archive"></a>		
	<h2>Previous Issues</h2>
	
<style type="text/css">
<!--
.display_archive {background: #EEE; padding: 10px;}
.campaign {}
//-->
</style>
<script language="javascript" src="http://us2.campaign-archive2.com/generate-js/?u=80755c5ba85732e9dc02c9888&fid=28957&show=10" type="text/javascript"></script>
		
		
	<?php edit_post_link( __( 'Edit Page' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>
    </div> 

</section> 

	<?php include 'newsletter.php'; ?>
<?php get_footer(); ?>
	

