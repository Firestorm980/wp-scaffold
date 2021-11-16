const purgecssWordpress = require('purgecss-with-wordpress');

// tailwind.config.js
module.exports = {
	purge: {
		content: [
			'./*.php',
			'./assets/js/**/*.js',
			'./includes/**/*.php',
			'./partials/**/*.php',
			'./templates/**/*.php',
		],
		safelist: [...purgecssWordpress.safelist],
	},
	corePlugins: {
		preflight: false,
	},
};
