<section class="zz-recent-news-box" style="margin-left:0;margin-bottom:0;">
       		<h2>Recent News</h2>
    		<?php
			$news = new WP_Query(array('showposts' => '2', 'post_type' => 'news'));
			while ($news->have_posts()) : $news->the_post();
			?>
			<div class="recent-news-item">
			<a href="<?php the_permalink(); ?>"><?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
  			the_post_thumbnail( 'single-thumb', array('class' => 'alignleft')); } ?></a>
  			<strong><?php the_time('jS F Y') ?></strong>
			<h4><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></h4>
			</div>
				
			<?php endwhile; wp_reset_query(); ?>
</section>
