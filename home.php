<?php get_header(); ?>

	<div id="blog">
		
		<div class="section">
			<div id="infinite" class="container wide">

				<?php if(have_posts()):?>
					<?php $i = 0; ?>
					<?php while(have_posts()): the_post(); ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'blog-wide'); ?>
						<?php if($i % 5 == 0): ?>

						<article class="post wide col-2-3">
							<a href="<?php the_permalink(); ?>">
								<figure style="background-image: url(<?php echo $image[0]; ?>)">
								</figure>
								<div class="article-meta match-height">
									<h3 class="article-title">
										<?php the_title(); ?>
									</h3>
									<p class="article-date">
										<?php the_time( get_option( 'date_format' ) ); ?>
									</p>
								</div>
							</a>
						</article>

						<?php else: ?>

						<article class="post normal col-1-3">
							<a href="<?php the_permalink(); ?>">
								<figure style="background-image: url(<?php echo $image[0]; ?>)">
								</figure>
								<div class="article-meta match-height">
									<h3 class="article-title">
										<?php the_title(); ?>
									</h3>
									<p class="article-date">
										<?php the_time( get_option( 'date_format' ) ); ?>
									</p>
								</div>
							</a>
						</article>

						<?php endif; ?>
						<?php $i++ ?>
					<?php endwhile; ?>
				<?php endif; ?>
			</div><!-- .infinite -->

			<div class="pagination container wide">
				<div class="next">
					<?php $next = get_next_posts_link(); ?>
					<?php echo $next; ?>
				</div>
			</div><!-- .pagination -->

		</div><!-- .section -->

	</div><!-- #blog -->

<?php get_footer(); ?>