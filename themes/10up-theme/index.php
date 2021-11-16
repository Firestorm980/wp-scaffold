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
			<?php while ( have_posts() ) : the_post(); ?>
				<h2><?php the_title(); ?></h2>
				<?php the_content(); ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
