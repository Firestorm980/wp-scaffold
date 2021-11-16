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
	},
	theme: {
		extend: {},
	},
	variants: {
		extend: {},
	},
	plugins: [],
};
