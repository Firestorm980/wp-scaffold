<?php
/**
 * Template part for displaying post archives and search results
 *
 * @package TenUpTheme
 */

?>
<article id="post-<?php the_ID(); ?>" class="border border-solid border-gray-300 rounded-md shadow-md flex flex-col w-full p-5">

	<h2 class="text-3xl mt-0">
		<a href="<?php the_permalink(); ?>" class="no-underline hover:underline">
			<?php the_title(); ?>
		</a>
	</h2>

	<div>
		<?php the_excerpt(); ?>
	</div>

</article><!-- #post-${ID} -->
