<?php
/**
 * The archive template file
 *
 * @package TenUpTheme
 */

get_header();

$description = get_the_archive_description();

?>

<main>
	<div class="container mx-auto">
		<?php if ( have_posts() ) : ?>
			<h1><?php the_archive_title(); ?></h1>
			<?php if ( $description ) : ?>
				<div>
					<?php echo wp_kses_post( wpautop( $description ) ); ?>
				</div>
			<?php endif; ?>

			<div>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part( 'partials/content-excerpt' ); ?>
				<?php endwhile; ?>
			</div>
		<?php endif; ?>
	</div>
</main>

<?php
get_footer();
