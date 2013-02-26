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
<div id="mc_embed_signup">
<form action="http://uk-cpi.us2.list-manage1.com/subscribe/post?u=80755c5ba85732e9dc02c9888&amp;id=d2326f9e90" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank">
	<fieldset>
	
<div class="mc-field-group textfield-facebox">
<label for="mce-EMAIL2">Email Address:</label>
<input type="text" value="" name="EMAIL" class="required email" id="mce-EMAIL2">
</div>

	<div class="mc-field-group textfield-facebox">
		<label for="mce-FNAME">First Name:</label>
		<input type="text" value="" name="FNAME" class="required" id="mce-FNAME">
	</div>
	<div class="mc-field-group textfield-facebox">
		<label for="mce-LNAME">Last Name:</label>
		<input type="text" value="" name="LNAME" class="required" id="mce-LNAME">
	</div>
	<div class="mc-field-group textfield-facebox">
		<label for="mce-COMPANY">Company Name:</label>
		<input type="text" value="" name="COMPANY" class="required" id="mce-COMPANY">
		<br />
	</div>

	<div class="mc-field-group">
    	<label class="input-group-label">Which technologies are you interested in? </label>
    	<div class="input-group">
    	<ul style="list-style: none; margin-left: 0;">
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
	
	
	<div class="mc-field-group">
    <span class="input-group-label">Which markets are you interested in? </span>
    <div class="input-group">
    <ul style="list-style: none; margin-left: 0;">
<li><input type="checkbox" value="64" name="group[9525][64]" id="mce-group[9525]-9525-0"><label for="mce-group[9525]-9525-0">Healthcare</label></li>
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
	
	
		<br/>
		<div class="clear"><button type="submit" name="subscribe" class="btn">Subscribe</button></div>
		<div id="mce-responses">
			<div class="response" id="mce-error-response" style="display:none"></div>
			<div class="response" id="mce-success-response" style="display:none"></div>
		</div>

</fieldset>	
	
</form>
</div>

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
	

