<?php 
/*
	Template Name: Contact
*/
?>
<?php get_header(); ?>

	<div id="contact">
		
		<div class="form container">
			<?php echo do_shortcode('[gravityform id=1 title=true description=true ajax=true ]' ); ?>
		</div>

		<div class="section lightblue-bg">
			<div class="container">
				<?php if(have_rows('contact_details')): ?>
					<ul class="contact-details">
						<?php while(have_rows('contact_details')): the_row(); ?>
						<li class="contact-detail">
							<div class="location-title">
								<?php the_sub_field('location_title'); ?>
							</div>
							<div class="location-info">
								<?php the_sub_field('location_info'); ?>
							</div>
						</li>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div>
		
	</div><!-- #opportunity -->

<?php get_footer(); ?>