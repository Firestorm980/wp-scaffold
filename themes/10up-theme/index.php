<?php
/**
 * The main template file
 *
 * @package TenUpTheme
 */

get_header(); ?>

<main>
	<div class="container mx-auto">
		<?php if ( have_posts() ) : ?>
			<h1>Homepage</h1>
			<div class="flex items-stretch flex-wrap gap-5">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'partials/content-excerpt' ); ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
