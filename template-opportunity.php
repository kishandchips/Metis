<?php 
/*
	Template Name: Opportunity
*/
?>
<?php get_header(); ?>

	<div id="opportunity">
		<?php $image = get_field('page_header_image') ?>
		<figure class="page-image" style="background-image: url(<?php echo $image['sizes']['slider-image']; ?>)">
			<img src="<<?php echo $image['sizes']['slider-image']; ?>" alt="">
		</figure>
		
		<div class="section">
			<div class="container">
				<?php the_field('opp_one'); ?>
			</div>
		</div>

		<div class="highlight blue-bg section">
			<div class="container">
				<blockquote class="highlight-text">
					<?php the_field('opp_quote_one') ?>
				</blockquote>					
			</div>
		</div>

		<?php $imagetwo = get_field('points_header_image_two') ?>
		<figure class="page-image" style="background-image: url(<?php echo $imagetwo['sizes']['slider-image']; ?>)">
			<img src="<?php echo $imagetwo['sizes']['slider-image']; ?>" alt="">
		</figure>

		<?php if(have_rows('points')): ?>
		<div class="section">
			<div class="container">
				<header>
					<h2 class="section-title"><?php the_field('points_title'); ?></h2>
				</header>
				<ul class="points">
					<?php while(have_rows('points')): the_row(); ?>
					<li class="point">
						<i class="icon-tick"></i>
						<p><?php the_sub_field('point_text') ?></p>
					</li>
					<?php endwhile; ?>

				</ul>
			</div>
		</div>
		<?php endif; ?>

		<div class="highlight grey-bg section">
			<div class="container">
				<blockquote class="highlight-text">
					<?php the_field('opp_quote_two') ?>
				</blockquote>					
			</div>
		</div>
		
		<?php if(have_rows('propositions')): ?>
		<div class="propositions">
			<header>
				<h2 class="section-title"><?php the_field('proposition_title'); ?></h2>
			</header>

			<div class="row">
			<?php while(have_rows('propositions')): the_row();  ?>
				<div class="proposition-item col-1-3 match-height">
					<i class="icon-<?php the_sub_field('prop_icon') ?>"></i>
					<h3><?php the_sub_field('prop_title'); ?></h3>
					<p><?php the_sub_field('prop_text') ?></p>
				</div>
			<?php endwhile; ?>
			</div>
		</div>
		<?php endif; ?>

		<div class="highlight blue-bg  section">
			<div class="container">
				<blockquote class="highlight-text">
					<?php the_field('opp_quote_three') ?>
				</blockquote>					
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
		
	</div><!-- #opportunity -->

<?php get_footer(); ?>