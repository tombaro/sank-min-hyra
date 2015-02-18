module.exports = function(grunt) {
	require('jit-grunt')(grunt);

	grunt.initConfig({
	less: {
		development: {
			options: {
			  compress: false,
			  yuicompress: true,
			  optimization: 2
			},
			files: {
			  "library/css/style.css": "library/less/style.less" // destination file and source file
			}
		}
	},
	watch: {
		styles: {
			files: ['library/less/**/*.less'], // which files to watch
			tasks: ['less'],
			options: {
				nospawn: true
			}
		}
	}
	});

	grunt.registerTask('default', ['less', 'watch']);
};