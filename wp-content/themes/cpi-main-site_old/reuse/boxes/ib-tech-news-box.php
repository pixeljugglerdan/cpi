		<section class="gap zz-tech-news-box news-ib">
    		<h2>Recent News</h2>
			<br/>
			<?php
				$yell = new WP_Query(array('post_type' => 'news', 'technology-news' => 'industrial-biotechnology-news', 'showposts' => '1'));
				while ($yell->have_posts()) : $yell->the_post();
			?>
			<h3><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php echo ShortenText(get_the_title()); ?></a></h3>
			<?php endwhile; wp_reset_query(); ?>
			<br/>
			<ul>
			<li><a href="<?php bloginfo('url'); ?>/technology-news/industrial-biotechnology-news/">&#187; View industrial biotechnology news</a></li>
			</ul>
    	</section>