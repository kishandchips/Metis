<?php 
/*
	Template Name: Team
*/
?>
<?php get_header(); ?>

	<div id="team">
		
		<div class="members">
			<div class="container wide">
				<header class="page-header">
					<h2><?php the_field('section_header'); ?></h2>
				</header>
				
				<?php if(have_rows('members_list')): ?>
				<ul class="members-list row">
					<?php while(have_rows('members_list')): the_row(); ?>
					<li class="member match-height col-1-3">
						<?php $image = get_sub_field('member_image') ?>
						<figure>
							<img src="<?php echo $image['sizes']['member-image']; ?>" alt="">	
						</figure>
						<h3><?php the_sub_field('member_name'); ?></h3>
						<h4 data-mh="title"><?php the_sub_field('member_title'); ?></h4>
						<p><?php the_sub_field('member_bio'); ?></p>
					</li>
					<?php endwhile; ?>
				</ul>
				<?php endif; ?>
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