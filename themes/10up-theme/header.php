<?php
/**
 * The template for displaying the header.
 *
 * @package TenUpTheme
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<?php wp_body_open(); ?>
		<header class="fixed left-0 top-0">
			<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="h-14 w-14 rounded rounded-full flex items-center justify-center text-white bg-red-600 hover:bg-red-900 hover:text-white transition-colors">
				<svg class="w-7 h-7" xmlns="http://www.w3.org/2000/svg">
					<title><?php bloginfo( 'name' ); ?></title>
					<path class="fill-current" d="M13.5 0C6 0 0 6 0 13.5c0 2.1.5 4 1.3 5.7l.1.1L9.7 11 7.2 8.4h11.4v11.4L16 17.2l-8.4 8.4c1.8.9 3.8 1.4 5.9 1.4C21 27 27 21 27 13.5S21 0 13.5 0z"></path>
				</svg>
			</a>
		</header>
