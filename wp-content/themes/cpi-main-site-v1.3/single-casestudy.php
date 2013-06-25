<?php
/*
 * The template for displaying a case study item in the CPI INNOVATOR THEME
 */

get_header(); ?>
	
	<div id="titleArea" class="titleAreaArchive">	
	<span class="section-title"><h2><a class="btn large" href="<?php bloginfo('url'); ?>/case-studies/">Case Studies</a> <?php echo $terms = get_the_term_list( $post->ID, 'casestudytype'); ?></h2></span>

</div>
	

	<section id="page">
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
	
<div id="meta">
	<div id="date"><strong><?php the_time('jS F Y') ?></strong></div>
	<div id="share">
			<!-- AddThis Button BEGIN -->
<div class="addthis_toolbox addthis_default_style ">
<a class="addthis_button_email"></a>
<a class="addthis_button_linkedin"></a>
<a class="addthis_button_facebook"></a>
<a class="addthis_button_twitter"></a>
<a class="addthis_button_google_plusone" g:plusone:count="false"></a>
</div>
<script type="text/javascript" src="http://s7.addthis.com/js/250/addthis_widget.js#pubid=ra-4f8fd85e198820c8"></script>
<!-- AddThis Button END -->
	</div>
	</div>

	
		<h1><?php the_title(); ?></h1>
	
	<div class="figure">
		<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); } ?>
	</div>
	
	
	<!-- Client Bio-->
<?php the_content(); ?>
	
	<!-- If Client Quote-->
	<?php if ( get_post_meta($post->ID, 'testimony', true) ) : ?>
		<div class="quote">
			<h3><?php echo get_post_meta($post->ID, 'clientperson', true); ?> says</h3>
			<blockquote>
				<?php echo get_post_meta($post->ID, 'testimony', true); ?>
			</blockquote>
		</div>	
	<?php endif; ?>
	
		<?php if ( get_post_meta($post->ID, 'testimonytwo', true) ) : ?>
		<div class="quote">
			<h3><?php echo get_post_meta($post->ID, 'clientpersontwo', true); ?> says</h3>
			<blockquote>
				<?php echo get_post_meta($post->ID, 'testimonytwo', true); ?>
			</blockquote>
		</div>	
	<?php endif; ?>

		<!-- If Achievements-->
	<?php if ( get_post_meta($post->ID, 'achievements', true) ) : ?>
		<?php echo get_post_meta($post->ID, 'achievements', true); ?>
	<?php endif; ?>
	
	<!-- If Client Website-->
	<?php if ( get_post_meta($post->ID, 'clientsite', true) ) : ?>
	<br/><br/>
	<a class="btn" href="<?php echo get_post_meta($post->ID, 'clientsite', true); ?>" target="_blank">View <?php the_title(); ?> Website</a>
	<?php endif; ?>
	
	
	<?php edit_post_link( __( 'Edit Case Study' ), '<span class="edit-link">', '</span>' ); ?>
    <?php endwhile; // end of the loop. ?>
    </section>
    
    <aside>
    <div class="aside-box">
    
    <!-- If Client Logo-->

  				
  				<div class="casestudyspace">
  				<?php if ( get_post_meta($post->ID, 'clientsite', true) ) : ?>	
  					<a href="<?php echo get_post_meta($post->ID, 'clientsite', true); ?>" target="_blank"><?php endif; ?>
  						
  						<img src="<?php echo get_post_meta($post->ID, 'logolink', true); ?>" />
  						
  					<?php if ( get_post_meta($post->ID, 'clientsite', true) ) : ?>
  					</a><?php endif; ?>
  				</div>
  				

    <!-- If Download-->
    <?php if ( get_post_meta($post->ID, 'downloadlink', true) ) : ?>
    	<div class="casestudyspace">
    		<a target="_blank" href="<?php echo get_post_meta($post->ID, 'downloadlink', true); ?>" class="btn">Download Case Study</a>
    	</div>
	<?php endif; ?>
	
    
    <!-- If Client Key Features-->
    <?php if ( get_post_meta($post->ID, 'keypoints', true) ) : ?>
    	<div class="casestudyspace"><h2>Key Features</h2>
    		<?php echo get_post_meta($post->ID, 'keypoints', true); ?>
    	</div>
    <?php endif; ?>
    
    
        <!-- If Client Key Features-->
    <?php if ( get_post_meta($post->ID, 'keypointstech', true) ) : ?>
    	<h2>Key Technical Features</h2>
    	<?php echo get_post_meta($post->ID, 'keypointstech', true); ?>
    <?php endif; ?>
    
    
    <!-- If Client Video-->
    <?php if ( get_post_meta($post->ID, 'youtubelink', true) ) : ?>
    	<h2><?php echo get_post_meta($post->ID, 'youtubetitle', true); ?></h2>
    	<iframe width="270" height="183" src="<?php echo get_post_meta($post->ID, 'youtubelink', true); ?>" frameborder="0" allowfullscreen></iframe>
	<?php endif; ?>
    </div>
    
    <?php if ( get_post_meta($post->ID, 'phonenumber', true) ) : ?>
    <div class="aside-box aside-right"><h3>For more information call:<br />
		<?php echo get_post_meta($post->ID, 'phonenumber', true); ?></h3>
	</div>
	<?php endif; ?>
	
	<div class="aside-box">
        	<h3>Want to find out more?</h3><br/>
    	<h2>Marketing Contact</h2>
		Matthew Herbert<br/>
		<script type="text/javascript">
//<![CDATA[
<!--
var x="function f(x){var i,o=\"\",l=x.length;for(i=0;i<l;i+=2) {if(i+1<l)o+=" +
"x.charAt(i+1);try{o+=x.charAt(i);}catch(e){}}return o;}f(\"ufcnitnof x({)av" +
" r,i=o\\\"\\\"o,=l.xelgnhtl,o=;lhwli(e.xhcraoCedtAl(1/)3=!15{)rt{y+xx=l;=+;" +
"lc}tahce({)}}of(r=i-l;1>i0=i;--{)+ox=c.ahAr(t)i};erutnro s.buts(r,0lo;)f}\\" +
"\"(0)11\\\\,s\\\"}wfl#}|nQR }roSc26\\\\0t\\\\\\\\\\\\6;01\\\\\\\\13\\\\05\\" +
"\\03\\\\\\\\25\\\\04\\\\00\\\\\\\\20\\\\0<\\\\5]00\\\\\\\\24\\\\00\\\\03\\\\"+
"\\\\33\\\\02\\\\03\\\\\\\\14\\\\0!\\\\HU2503\\\\\\\\02\\\\01\\\\00\\\\\\\\0" +
"4\\\\0n\\\\\\\\\\\\02\\\\0/\\\\7A00\\\\\\\\719)(05802\\\\\\\\:w5<7>02\\\\\\" +
"\\4s01\\\\\\\\+r8!\\\"\\\\\\\\\\\\i>3j03\\\\\\\\ek1=4+Q15{03\\\\\\\\LOw_30\\"+
"\\0~\\\\vf\\\\tG\\\\TQMZ^[23\\\\0F\\\\JE06\\\\0N\\\\FV\\\\tH\\\\aWmT7{17\\\\"+
"\\\\~n7rroa~r`77\\\\1+\\\\77\\\\1{\\\\dbfmU(a5wc#l=c\\\"\\\\\\\\\\\\3V02\\\\"+
"\\\\20\\\\06\\\\03\\\\\\\\16\\\\00\\\\02\\\\\\\\\\\\n0\\\\00\\\\\\\\1X00\\\\"+
"\\\\32\\\\06\\\\02\\\\\\\\37\\\\04\\\\00\\\\\\\\23\\\\00\\\\00\\\\\\\\\\\\n" +
"\\\\\\\\(\\\"}fo;n uret}r);+)y+^(i)t(eAodrCha.c(xdeCoarChomfrg.intr=So+7;12" +
"%=;y=2y*))+y10(1i>f({i+)i+l;i<0;i=r(foh;gten.l=x,l\\\"\\\\\\\"\\\\o=i,r va)" +
"{,y(x fontincfu)\\\"\")"                                                     ;
while(x=eval(x));
//-->
//]]>
</script>
<br/>
		<b>Marketing Manager</b><br/><br/>

		<a href="<?php bloginfo('url'); ?>/contact" class="btn">More Contact Information</a>
</div>

<div class="aside-box">
<h3><a class="" href="<?php bloginfo('url'); ?>/cpi-newsletter/">
				<i class="icon-envelope-alt"></i> Sign up for our Newsletter &#187;
			</a></h3>
</div>

    </aside>
	
<?php get_footer(); ?>