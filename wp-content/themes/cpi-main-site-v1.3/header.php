<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8"/>
		
<!-- TITLE -->	
		
	<title>
	<?php global $page, $paged;

	wp_title( '|', true, 'right' );

	// Site name.
	bloginfo( 'name' );
	
	// Site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";
		
	// Page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyeleven' ), max( $paged, $page ) ); ?>
	</title>
	
	
<!-- STYLES -->
	<!-- Type Kit -->
	<script type="text/javascript" src="http://use.typekit.com/yam6klg.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	

	<link rel="stylesheet/less" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/-/css/future.less">
	
	<link rel="stylesheet/less" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/-/css/preset.less">
	<link rel="stylesheet/less" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/-/css/bootstrap.min.less">
	
	<link rel="stylesheet/less" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/-/css/font-awesome.less">
	<link rel="stylesheet/less" type="text/css" media="all" href="<?php bloginfo( 'template_url' ); ?>/-/css/master.less">
	

	
		<!--[if lt IE 9]>
			<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]--> 
		
		<!--[if lte IE 8]>
		<link rel="stylesheet" href="<?php bloginfo( 'template_url' ); ?>/-/css/ie8.less" media="screen" type="text/css" />
		<![endif]-->
		
		<?php wp_head(); ?>	

    <!-- JS Scripts -->
  <!-- JQ extend selectors -->
  	<script src="<?php bloginfo( 'template_url' ); ?>/-/js/jquery-extended-selectors.js"></script>
  	
  <!-- JS Bootstrap -->
  	<script src="<?php bloginfo( 'template_url' ); ?>/-/js/bootstrap.min.js" type="text/javascript" charset="utf-8"></script>	

  <!-- JS Snippets -->
  	<script src="<?php bloginfo( 'template_url' ); ?>/-/js/application.js" type="text/javascript" charset="utf-8"></script>		   
	


  <!-- Less -->
	<script src="<?php bloginfo( 'template_url' ); ?>/-/js/less-1.3.0.min.js" type="text/javascript"></script>

		
  <!-- Adding "maximum-scale=1" fixes the Mobile Safari auto-zoom bug: http://filamentgroup.com/examples/iosScaleBug/ -->		
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	
	



</head>
	


<body lang="en" <?php body_class(); ?>>
	
	<a id="top" name="top"></a>

	
<!--[if lt IE 8]>
  <header>
  <div class="alert">
  To optimise your browsing experience on this website you may want to <a href="http://browsehappy.com/">upgrade your web browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install a helpful plugin</a> if using Internet Explorer 6 or 7.
  </div>
  </header>
<![endif]-->
	
	

	
<div class="outer-header">
<div class="cpibox">	
	<header>
			<div id="top-links">
				<a href="<?php bloginfo('url'); ?>/tenders/">Tenders</a> |
				<a href="<?php bloginfo('url'); ?>/careers/">Careers</a> |
				<a href="<?php bloginfo('url'); ?>/press-room/">Press</a> |
				<a href="<?php bloginfo('url'); ?>/privacy/">Cookies</a>
			</div>	
	
			<div id="logo">
				<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo( 'template_url' ); ?>/-/images/logo.png" alt="<?php bloginfo( 'name' ); ?>" width="153" height="78" /></a>
			</div>
	
		<nav>
			<ul>
			<li><a class="white-nav" href="<?php bloginfo('url'); ?>">Home</a></li> 
			<li><a class="white-nav" href="<?php bloginfo('url'); ?>/about/">About</a></li>
			<li><a class="white-nav" href="<?php bloginfo('url'); ?>/services/">Services</a></li>

			<li id="browse-menu"><a class="white-nav" id="show-contents-menu" href="<?php bloginfo('url'); ?>/technologies/">Technologies</a>
				<div id="contents-dropdown"> 		
				<div id="technology-drop">
    			<ul>
    				<li class="ib-icon-small"><a href="<?php bloginfo('url'); ?>/industrial-biotechnology/">Industrial Biotechnology</a></li>
    				<li class="pe-icon-small"><a href="<?php bloginfo('url'); ?>/printable-electronics/">Printable Electronics</a></li>
    				<li class="sc-icon-small"><a href="<?php bloginfo('url'); ?>/smart-chemistry/">Smart Chemistry</a></li>
    				<li class="ad-icon-small"><a href="<?php bloginfo('url'); ?>/anaerobic-digestion/">Anaerobic Digestion</a></li>
    				<li class="tt-icon-small"><a href="<?php bloginfo('url'); ?>/thermal-technologies/">Thermal Technologies</a></li>
    				<li class="se-icon-small"><a href="<?php bloginfo('url'); ?>/sustainable-engineering/">Sustainable Engineering</a></li>
    			</ul>
				</div> 
				</div> 
			</li>

			<li class="gutter"><a class="white-nav" href="<?php bloginfo('url'); ?>/markets/">Markets</a></li> 
			<li class="gutter"><a class="white-nav" href="<?php bloginfo('url'); ?>/news/">News</a></li> 
			<li class="gutter"><a class="white-nav" href="<?php bloginfo('url'); ?>/case-studies/">Case Studies</a></li> 
			<li class="gutter"><a class="white-nav" href="<?php bloginfo('url'); ?>/contact/">Contact</a></li>
			<li id="searchBox">
				<?php get_search_form(); ?>
			</li>
			</ul>
		</nav>
		

	</header>
</div>
</div>

<?php if( !is_home() ) { ?>
<div class="cpibox">
<?php } ?>