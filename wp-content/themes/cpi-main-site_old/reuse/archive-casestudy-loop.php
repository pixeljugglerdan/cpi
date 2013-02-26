<?php if ( have_posts() ) : ?>	
	<?php while ( have_posts() ) : the_post(); ?>
<section class="archive-gap zz-archive-box">
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
		<?php echo ShortenText(get_the_title()); ?>
		</a></h2>
		
		<div class="archive-image-case-study">
			<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  				the_post_thumbnail( 'archive-thumb', array('class' => '')); } ?>
  			</a>
		</div>
		
		<div class="archive-item">
			<?php the_excerpt(); ?>	
		</div>
    	
    </section>

<?php endwhile; // end of the loop. ?>


<div id="navbox">
<div id="previousePage"><?php previous_posts_link( '&#171; Previouse Page' , 0 ); ?></div> 
<div id="nextPage"><?php next_posts_link('Next Page &raquo;', 0); ?></div>
</div>

<?php else : ?>

<section class="" id="searchSection">
	<h1 class="gigantic"><?php _e( 'Filter returned no results', 'twentyeleven' ); ?></h1>

	<div class="entry-content">
	<h3><?php _e( 'Sorry, no case studies matched your filter. You could try again or try searching for a case study with some keywords.', 'cpi' ); ?></h3>
</section>

<?php endif; ?>
