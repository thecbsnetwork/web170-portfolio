<?php
/*Template Name: About Page*/

get_header(); ?>
<!-- wrapper -->
<!-- section -->
<section>
	<main class="page-main">

			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php the_content(); ?>
			</article>
			<!-- /article -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>

	</main>
	<aside>
		<?php
		if(is_active_sidebar('sidebar-about')){
			dynamic_sidebar('sidebar-about');
		} ?>
	</aside>
</section>
<!-- /section -->
	<!-- /wrapper -->

<?php get_footer(); ?>
