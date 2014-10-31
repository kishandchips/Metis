<?php get_header(); ?>

	<div id="single">

		<?php if(have_posts()): while(have_posts()): the_post(); ?>

			<article class="post">
				<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id(), 'blog-wide'); ?>
				<figure class="post-image" style="background-image: url(<?php echo $image[0]; ?>)">
					<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>">
				</figure>
				<div class="container wide">
					<div class="post-content">
						<header class="row">
							<div class="col-2-3">
								<h2 class="post-title"><?php the_title(); ?></h2>
								<p class="post-date"><?php the_date(); ?></p>							
							</div>
							<div class="col-1-3">
								<ul class="social-links">
									<li>
										<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" title="Share on Facebook" target="_blank">
											<i class="icon-facebook"></i>
										</a>							
									</li>
									<li>
										<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="Share on Google" target="_blank">
											<i class="icon-google"></i>
										</a>
									</li>
									<li>
										<a href="http://twitter.com/share?text=<?php the_title(); ?>" title="Share on Twitter" target="_blank">
											<i class="icon-twitter"></i>
										</a>
									</li>
									<li>
										<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode( get_permalink() ); ?>&title=<?php echo urlencode( get_the_title() ); ?>" title="Share on Linkedin" target="_blank">
											<i class="icon-linkedin"></i>
										</a>
									</li>
									<li>
										<a href="mailto:?&subject=<?php the_title(); ?> by Metis&body=<?php the_permalink(); ?>" title="Share by Email">
											<i class="icon-mail"></i>
										</a>
									</li>
								</ul>
							</div>
						</header>
						
						<div class="inner">
							<?php the_content(); ?>	
						</div>

						<footer>
							<ul class="social-links">
								<span>Share this Story</span>

								<li>
									<a href="http://www.facebook.com/share.php?u=<?php the_permalink(); ?>" title="Share on Facebook" target="_blank">
										<i class="icon-facebook"></i>
									</a>							
								</li>
								<li>
									<a href="https://plus.google.com/share?url=<?php the_permalink(); ?>" title="Share on Google" target="_blank">
										<i class="icon-google"></i>
									</a>
								</li>
								<li>
									<a href="http://twitter.com/share?text=<?php the_title(); ?>" title="Share on Twitter" target="_blank">
										<i class="icon-twitter"></i>
									</a>
								</li>
								<li>
									<a href="http://www.linkedin.com/shareArticle?mini=true&url=<?php echo urlencode( get_permalink() ); ?>&title=<?php echo urlencode( get_the_title() ); ?>" title="Share on Linkedin" target="_blank">
										<i class="icon-linkedin"></i>
									</a>
								</li>
								<li>
									<a href="mailto:?&subject=<?php the_title(); ?> by Metis&body=<?php the_permalink(); ?>" title="Share by Email">
										<i class="icon-mail"></i>
									</a>
								</li>
							</ul>
							<div class="navigation clearfix">
								<?php 
									$previousPost = get_previous_post('true');
									$nextPost = get_next_post('true');
								?>

								<?php if(!empty($previousPost)): ?>
									<div class="previous equal-height left">
										<a href="<?php echo get_permalink($previousPost->ID);?>">
											<i class="icon-arrowleft"></i>
											<div class="navigation-meta">
												<span>Previous Story</span>
												<h3 class="title"><?php echo get_the_title($previousPost) ?></h3>												
											</div>
										</a>
									</div>
								<?php endif; ?>
								<!-- end previouspost -->

								<?php if(!empty($nextPost)): ?>
									<div class="next equal-height right">
										<a href="<?php echo get_permalink($nextPost->ID);?>">
											<div class="navigation-meta">
												<span>Next Story</span>
												<h3 class="title"><?php echo get_the_title($nextPost->ID) ?></h3>
											</div>
											<i class="icon-arrowright"></i>
										</a>
									</div>
								<?php endif; ?>
								<!-- end nextpost -->
							</div> <!-- navigation -->
						</footer>
					</div><!-- .post-content -->
				</div><!-- .container -->
			</article><!-- .post -->

		<?php endwhile;endif; ?>

	</div><!-- #single -->

<?php get_footer(); ?>