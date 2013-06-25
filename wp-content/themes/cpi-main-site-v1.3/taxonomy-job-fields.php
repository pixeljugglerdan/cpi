<?php

get_header(); ?>
<div id="careers">
<div id="titleArea">	
	<h1><a href="<?php bloginfo('url'); ?>/careers/">Careers</a></h1>

<nav>
	<ul>
		<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'menu' => 'Careers', 'items_wrap' => '%3$s' ) ); ?>
	</ul>
</nav>
</div>


<!-- IF All Jobs -->
<?php if (is_tax( 'job-fields', 'all-jobs')) { ?>

	<div id="careersHeader" class="careersHeader-all">
		<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

			<h1 id="techHeaderTitle"><?php printf( $term->name ); ?></h1>
		<p id="techHeaderBlurb">Browse all open vacancies at CPI…</p>
	</div>

	<section id="page-full">
	<?php include 'reuse/vacancies-loop.php'; ?>
	
	
		<div id="page">

		<h2>Working for CPI</h2>
		<p>The Centre for Process Innovation is a UK-based technology innovation centre and part of the High Value Manufacturing Catapult. We use applied knowledge in science and engineering combined with state of the art development facilities to enable our clients to develop, prove, prototype and scale up the next generation of products and processes. Our open innovation model enables clients to develop products and prove processes with minimal risk. We provide assets and expertise so our customers can demonstrate the process before investing substantial amounts of money in capital equipment and training. New products and processes can be shown to be feasible; on paper, in the lab and in the plant before being manufactured at an industrial scale. By utilising our proven assets and expertise companies can take their products and processes to market faster. There is no down time in production as all of the process development is completed offsite and our technology transfer and engineering teams can help you to transfer the product or process into full scale production at speed.</p><br/>
		
    	</div>

    </section>

<!-- IF Science & Engineering -->
<?php } else if (is_tax( 'job-fields', 'science-and-engineering')) { ?>


	<div id="careersHeader" class="careersHeader-science">
		<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

			<h1 id="techHeaderTitle"><?php printf( $term->name ); ?></h1>
		<p id="techHeaderBlurb">Help develop products and processes with CPI's customers…</p>
	</div>

	<section id="page-full">
	<?php include 'reuse/vacancies-loop.php'; ?>
	
	
		<div id="page">

<h2>Working for CPI</h2>
		<p>The Centre for Process Innovation is a UK-based technology innovation centre and part of the High Value Manufacturing Catapult. We use applied knowledge in science and engineering combined with state of the art development facilities to enable our clients to develop, prove, prototype and scale up the next generation of products and processes. Our open innovation model enables clients to develop products and prove processes with minimal risk. We provide assets and expertise so our customers can demonstrate the process before investing substantial amounts of money in capital equipment and training. New products and processes can be shown to be feasible; on paper, in the lab and in the plant before being manufactured at an industrial scale. By utilising our proven assets and expertise companies can take their products and processes to market faster. There is no down time in production as all of the process development is completed offsite and our technology transfer and engineering teams can help you to transfer the product or process into full scale production at speed.</p><br/>

    </section>

<!-- IF Admin & Finance -->
<?php } else if (is_tax( 'job-fields', 'admin-and-finance')) { ?>


	<div id="careersHeader" class="careersHeader-admin">
		<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

			<h1 id="techHeaderTitle"><?php printf( $term->name ); ?></h1>
		<p id="techHeaderBlurb">Help ensure operations run smoothly at CPI.</p>
	</div>

	<section id="page-full">
	<?php include 'reuse/vacancies-loop.php'; ?>
	
	
		<div id="page">

<h2>Working for CPI</h2>
		<p>The Centre for Process Innovation is a UK-based technology innovation centre and part of the High Value Manufacturing Catapult. We use applied knowledge in science and engineering combined with state of the art development facilities to enable our clients to develop, prove, prototype and scale up the next generation of products and processes. Our open innovation model enables clients to develop products and prove processes with minimal risk. We provide assets and expertise so our customers can demonstrate the process before investing substantial amounts of money in capital equipment and training. New products and processes can be shown to be feasible; on paper, in the lab and in the plant before being manufactured at an industrial scale. By utilising our proven assets and expertise companies can take their products and processes to market faster. There is no down time in production as all of the process development is completed offsite and our technology transfer and engineering teams can help you to transfer the product or process into full scale production at speed.</p><br/>

    </section>


<!-- IF Health & Safety -->
<?php } else if (is_tax( 'job-fields', 'health-and-safety')) { ?>


	<div id="careersHeader" class="careersHeader-health">
		<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

			<h1 id="techHeaderTitle"><?php printf( $term->name ); ?></h1>
		<p id="techHeaderBlurb">Help provide leadership and strategy to CPI…</p>
	</div>

	<section id="page-full">
	<?php include 'reuse/vacancies-loop.php'; ?>
	
	
		<div id="page">

<h2>Working for CPI</h2>
		<p>The Centre for Process Innovation is a UK-based technology innovation centre and part of the High Value Manufacturing Catapult. We use applied knowledge in science and engineering combined with state of the art development facilities to enable our clients to develop, prove, prototype and scale up the next generation of products and processes. Our open innovation model enables clients to develop products and prove processes with minimal risk. We provide assets and expertise so our customers can demonstrate the process before investing substantial amounts of money in capital equipment and training. New products and processes can be shown to be feasible; on paper, in the lab and in the plant before being manufactured at an industrial scale. By utilising our proven assets and expertise companies can take their products and processes to market faster. There is no down time in production as all of the process development is completed offsite and our technology transfer and engineering teams can help you to transfer the product or process into full scale production at speed.</p><br/>

    </section>


<!-- IF HR -->
<?php } else if (is_tax( 'job-fields', 'hr-and-recruitment')) { ?>


	<div id="careersHeader" class="careersHeader-hr">
		<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

			<h1 id="techHeaderTitle"><?php printf( $term->name ); ?></h1>
		<p id="techHeaderBlurb">Join the people behind the people at CPI…</p>
	</div>

	<section id="page-full">
	<?php include 'reuse/vacancies-loop.php'; ?>
	
	
		<div id="page">

<h2>Working for CPI</h2>
		<p>The Centre for Process Innovation is a UK-based technology innovation centre and part of the High Value Manufacturing Catapult. We use applied knowledge in science and engineering combined with state of the art development facilities to enable our clients to develop, prove, prototype and scale up the next generation of products and processes. Our open innovation model enables clients to develop products and prove processes with minimal risk. We provide assets and expertise so our customers can demonstrate the process before investing substantial amounts of money in capital equipment and training. New products and processes can be shown to be feasible; on paper, in the lab and in the plant before being manufactured at an industrial scale. By utilising our proven assets and expertise companies can take their products and processes to market faster. There is no down time in production as all of the process development is completed offsite and our technology transfer and engineering teams can help you to transfer the product or process into full scale production at speed.</p><br/>

    </section>


<!-- IF IT Services -->
<?php } else if (is_tax( 'job-fields', 'it-and-communications')) { ?>


	<div id="careersHeader" class="careersHeader-it">
		<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

			<h1 id="techHeaderTitle"><?php printf( $term->name ); ?></h1>
		<p id="techHeaderBlurb">Help keep computer systems and CPI employees connected…</p>
	</div>

	<section id="page-full">
	<?php include 'reuse/vacancies-loop.php'; ?>
	
	
		<div id="page">

<h2>Working for CPI</h2>
		<p>The Centre for Process Innovation is a UK-based technology innovation centre and part of the High Value Manufacturing Catapult. We use applied knowledge in science and engineering combined with state of the art development facilities to enable our clients to develop, prove, prototype and scale up the next generation of products and processes. Our open innovation model enables clients to develop products and prove processes with minimal risk. We provide assets and expertise so our customers can demonstrate the process before investing substantial amounts of money in capital equipment and training. New products and processes can be shown to be feasible; on paper, in the lab and in the plant before being manufactured at an industrial scale. By utilising our proven assets and expertise companies can take their products and processes to market faster. There is no down time in production as all of the process development is completed offsite and our technology transfer and engineering teams can help you to transfer the product or process into full scale production at speed.</p><br/>

    </section>


<!-- IF Management & Executive -->
<?php } else if (is_tax( 'job-fields', 'management-and-executive')) { ?>


	<div id="careersHeader" class="careersHeader-managment">
		<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

			<h1 id="techHeaderTitle"><?php printf( $term->name ); ?></h1>
		<p id="techHeaderBlurb">Help provide leadership and strategy to CPI…</p>
	</div>

	<section id="page-full">
	<?php include 'reuse/vacancies-loop.php'; ?>
	
	
		<div id="page">
		

<h2>Working for CPI</h2>
		<p>The Centre for Process Innovation is a UK-based technology innovation centre and part of the High Value Manufacturing Catapult. We use applied knowledge in science and engineering combined with state of the art development facilities to enable our clients to develop, prove, prototype and scale up the next generation of products and processes. Our open innovation model enables clients to develop products and prove processes with minimal risk. We provide assets and expertise so our customers can demonstrate the process before investing substantial amounts of money in capital equipment and training. New products and processes can be shown to be feasible; on paper, in the lab and in the plant before being manufactured at an industrial scale. By utilising our proven assets and expertise companies can take their products and processes to market faster. There is no down time in production as all of the process development is completed offsite and our technology transfer and engineering teams can help you to transfer the product or process into full scale production at speed.</p><br/>

    </section>


<!-- IF Marketing & Sales -->
<?php } else if (is_tax( 'job-fields', 'marketing-media-sales')) { ?>


	<div id="careersHeader" class="careersHeader-marketing">
		<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) ); ?>

			<h1 id="techHeaderTitle"><?php printf( $term->name ); ?></h1>
		<p id="techHeaderBlurb">Help locate and engage CPI customers…</p>
	</div>

	<section id="page-full">
	<?php include 'reuse/vacancies-loop.php'; ?>
	
	
		<div id="page">

<h2>Working for CPI</h2>
		<p>The Centre for Process Innovation is a UK-based technology innovation centre and part of the High Value Manufacturing Catapult. We use applied knowledge in science and engineering combined with state of the art development facilities to enable our clients to develop, prove, prototype and scale up the next generation of products and processes. Our open innovation model enables clients to develop products and prove processes with minimal risk. We provide assets and expertise so our customers can demonstrate the process before investing substantial amounts of money in capital equipment and training. New products and processes can be shown to be feasible; on paper, in the lab and in the plant before being manufactured at an industrial scale. By utilising our proven assets and expertise companies can take their products and processes to market faster. There is no down time in production as all of the process development is completed offsite and our technology transfer and engineering teams can help you to transfer the product or process into full scale production at speed.</p><br/>

    </section>


<?php } ?>
		
    	</div>
<?php get_footer(); ?>
	
