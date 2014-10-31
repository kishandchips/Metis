<?php get_header(); ?>
	
	<div id="home">
			<div id="slider" class="owl-carousel">
				<?php if(have_rows('slides')):?>
					<?php while(have_rows('slides')): the_row(); ?>
					<?php $image = get_sub_field('slide_image'); ?>

					<div class="slide <?php if(get_sub_field('display_content')): ?>has-content<?php endif; ?>">
						<figure style="background-image:url(<?php echo $image['sizes']['slider-image'] ?>)">
							<img src="<?php bloginfo('stylesheet_directory');?>/img/temp/slider.jpg" alt="">

							<div class="slider-controls">
								<button class="button slider-prev">
									<i class="icon-arrowleft"></i>
								</button>
								<button class="button slider-next"> 
									<i class="icon-arrowright"></i>
								</button>
							</div>
						</figure>

						<?php if(get_sub_field('display_content')): ?>
							<div class="slide-content <?php if(get_sub_field('content_position')){ the_sub_field('content_position'); } ?>">
								<?php the_sub_field('slide_content'); ?>

								<div class="slider-controls">
									<button class="button slider-prev">
										<i class="icon-arrowleft"></i>
									</button>
									<button class="button slider-next"> 
										<i class="icon-arrowright"></i>
									</button>
								</div>
							</div>
						<?php endif; ?>

					</div>

					<?php endwhile; ?>
				<?php endif; ?>
			</div>

			<div class="section border-bottom">
				<div class="container">
					<?php the_field('home_one') ?>
				</div>
			</div>

			<div class="welcome section">
				<div class="container">
					<div class="hide-content">
						<?php the_field('home_two') ?>						
					</div>
					<p class="show-content">
						<button class=" btn primary small">
							Read more
						</button>						
					</p>
				</div>
			</div>

			<div class="highlight blue-bg section">
				<div class="container">
					<blockquote class="highlight-text">
						<?php the_field('home_quote') ?>
					</blockquote>					
				</div>
			</div>

			<div class="section home-three">
				<div class="container">
					<?php the_field('home_three') ?>
				</div>

				<div class="images row">
					<div class="col-3-5">
						<?php $image = get_field('home_three_image_one') ?>
						<img src="<?php echo $image['sizes']['home-square'] ?>" alt="">	
					</div>

					<div class="col-2-5">
						<?php $imagetwo = get_field('home_three_image_two') ?>
						<img src="<?php echo $imagetwo['sizes']['home-square'] ?>" alt="">	

						<blockquote>
							<?php the_field('home_three_image_quote') ?>
						</blockquote>
					</div>
				</div>
			</div>

			<div class="page-cta section">
				<div class="container">
					<div class="page-cta-text">
						<?php the_field('page_cta'); ?>					
					</div>

					<a href="<?php bloginfo('url' ); ?>/?page_id=11" title="Get in touch" class="btn primary large">
						Get in touch
					</a>				
				</div>
			</div>
	</div><!-- #home -->

<?php get_footer(); ?>