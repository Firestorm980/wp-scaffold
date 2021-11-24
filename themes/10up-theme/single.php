<?php
/**
 * The single template file
 *
 * @package TenUpTheme
 */

get_header(); ?>

<main>
		<?php if ( have_posts() ) : ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<header class="py-20 text-white bg-red-600">
					<div class="max-w-prose mx-auto ">
						<h1 class="m-0"><?php the_title(); ?></h1>
					</div>
				</header>
				<div class="max-w-prose mx-auto">
					<?php the_content(); ?>
				</div>
			<?php endwhile; ?>
		<?php endif; ?>
</main>

<?php
get_footer();
