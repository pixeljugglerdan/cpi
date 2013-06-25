<div id="post-sidebar">
   <?php if ( have_posts() ) : ?>
	<h2>Current Vacancies</h2>
	<nav>
    	<ul id="careersMenu">
				<?php while ( have_posts() ) : the_post(); ?>
			<li><a href="<?php the_permalink() ?>" rel="<?php the_ID(); ?>" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></li>
			    <?php endwhile; // end of the loop. ?>
    	</ul>
    </nav>
	<?php else : ?>
 
		<h3 class="center">No Current Vacancies</h3>
		<p class="center">Sorry, there are no vacancies at this time. Please check back at a later date.</p>
 
	<?php endif; ?>
</div>