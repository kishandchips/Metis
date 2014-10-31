<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="fohohfoh">
		<div class='section'>
			<div class="container">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'This is somewhat embarrassing, isn&rsquo;t it?', 'twentytwelve' ); ?></h1>
						<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for.', 'twentytwelve' ); ?></p>
						<p><a href="<?php bloginfo('home' ); ?>" class="btn primary large"> Back Home</a></p>
					</header>		
			</div>
		</div><!-- #content -->
	</div><!-- #fohohfoh-->

<?php get_footer(); ?>