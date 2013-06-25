<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8" />

  <!-- Set the viewport width to device width for mobile -->
  <meta name="viewport" content="width=device-width" />

  <title>The Centre for Process Innovation | Annual Report 2013</title>
  
  <!-- Type Kit -->
  <script type="text/javascript" src="http://use.typekit.com/yam6klg.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>
  
    <!-- Included JS Files (Compressed) -->
  <script src="javascripts/modernizr.foundation.js"></script>
  <script src="javascripts/jquery.js"></script>

  <script src="javascripts/skrollr.min.js"></script>
  <script src="javascripts/jquery.scrollorama.js"></script>
  
  <!-- Included CSS Files (Uncompressed) -->
  <link rel="stylesheet" href="stylesheets/foundation.css">

	
	<style>
		html, body {
		font-family:"proxima-nova", Arial, sans-serif;
		height:100%;
	}

	body {
		background: #004277;
		height:100%;
	}

  #progress, #progress-gray {
  	height: 0.3em;
  	background: #444;
  	top: 3.6em;
  	z-index: 300;
  	position: fixed;		
  }
  #progress-gray {
  	width: 100%;
  	background: #444;
  	z-index: 299;		
  }

	#nav {
		display:block;
		padding:0;
		margin:0;
		width:100%;
		background: #333;
		color:#EEE;
		position:fixed;
		top:0;
		z-index: 250;
		text-align: center;
	}
	#nav a { color: #EEE; text-decoration: none;}

	#nav > li {
		display:inline-block;
		padding:1em;
		margin:0;
	}

	section {
		width:100%;
		min-height: 100%;
		text-align: center;
		
	}
	h1 {
		margin-top:1em;
		padding:0;
		padding-top:1.5em;
		color:#EEE;
		font-weight: 300;
		font-size: 3.5em;
	}
	.page {
		text-align: left;
		height: auto;
		padding: 40px 0;
		display: block;
		color: #44484A;
	}
	.page h2, .page h4 {
		font-size: 3.2em;
		color: #005695;
		padding: 0 0 30px 0;
		display: block;
		font-weight: 300;
	}
	.page h4 {
		font-size: 1.8em;
		padding-bottom: 0px;
		padding-top: 10px;
	}
	.page ul {
		list-style-position: inside;
	}
	.page p, .page li { font-size: 1.2em; }

	p.intro {
		font-size: 1.8em;
		line-height: 1.4em;
	}
	
	.page .full-image {
		margin: 0.5em 0 1.5em 0;
	}
	
	#a h2 {
		font-size: 1.6em;
		text-transform: uppercase;
		color: #EEE;
		background: #003A5F;
		padding: 20px 20px 15px 20px;
		display: block;
		font-weight: 300;
		position: absolute;
		top: 100px;
		left: 0;
	}
	
	.bio { padding-left: 10px; border-left: 2px solid #005695; margin-left: 10px;}
	.bio h4 { color: #005695; font-weight: 300; margin-bottom: 0px;}
	.bio p { font-size: 1.3em;}
	
	div.highlight { 
	background: #008DBD; 
	border-radius: 50%; 
	-moz-border-radius: 50%; 
	-webkit-border-radius: 50%; 
	position: relative;
	width: 100%;
	padding-bottom: 100%;
	display: table;
	}
	
	div.highlight > div {
	position: absolute;
	padding: 17%;
	width: 100%;
	color: #FFF; 
	font-style: italic; 
	text-align: center;
	font-family: Times;
	display: table-cell;
    vertical-align: middle;
	}
	
	
	.odd {
		background:#FFF;
	}
	.even h2, .even p, .even li, .even h4, .even .bio h4 {
		color: #EEE;
	}
	.even .bio { border-left: 2px solid #FFF;}	
		
	.blue {	background: #005695 }
	
	.page .whitetext { color: #FFFFFF }
	.page .bluetext { color: #005695 }
	.page .pinktext { color: #EB5191 }
	
	
	.orange { background: #F9A351}	
	.green { background: #51B948 }
	.lightblue { background: #0096D7 }
	
	.inspired {
		background: #005695 url("img/inspired-bg.png") no-repeat bottom right;
		background-attachment: fixed;
		background-size: 100% auto;
	}
	.inspired h2 {
		color: #fff;
		font-size: 8em;
	}
	.future {color: #008DBD;}
	
	.action {
		background: #005695 url("img/fermentation-bg.png") no-repeat bottom right;
		background-attachment: fixed;
		background-size: 100% auto;
	}
	.innovation {
		background: #005695 url("img/laceline-bg.png") no-repeat bottom right;
		background-attachment: fixed;
		background-size: 100% auto;
	}
	.innovation-iss {
		background: #005695 url("img/issline-bg.png") no-repeat bottom right;
		background-attachment: fixed;
		background-size: 100% auto;
	}
	.manufact {
		background: #005695 url("img/manufact-bg.png") no-repeat bottom right;
		background-attachment: fixed;
		background-size: 100% auto;
	}
	.manufact-reactor {
		background: #005695 url("img/reactor-bg.png") no-repeat bottom right;
		background-attachment: fixed;
		background-size: 100% auto;
	}
	.newbusiness {
		background: #005695 url("img/new-business-bg.png") no-repeat bottom right;
		background-attachment: fixed;
		background-size: 100% auto;
	}
	.world {
		background: #005695 url("img/world.png") no-repeat center right;
		background-attachment: fixed;
		background-size: 100% auto;
		width: 100%;
		height: 100%;
		display: block;
		position: absolute;
		top: 0;
	}
	.world-work {
		background: #005695 url("img/world-we-work.png") no-repeat top right;
		background-size: 100% auto;
	}
	
	.end { 
		height: 300px;
		background: #004277;
		min-height: 10%;
		color: #FFFFFF;
	}
	
	

	
	</style>
</head>

<body>