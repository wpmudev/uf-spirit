/*global module, require */
module.exports = function(grunt) {
	require('load-grunt-tasks')(grunt);
	grunt.loadNpmTasks( 'grunt-wp-i18n' );

	grunt.initConfig({
		makepot: {
			target: {
				options: {
					domainPath: 'languages/',
					type: 'wp-theme'
				}
			}
		}
	});

	grunt.registerTask('default', ['makepot']);
};
