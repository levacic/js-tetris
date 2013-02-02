module.exports = function(grunt) {

	grunt.initConfig({
		concat: {
			options: {
				separator: ";"
			},
			front: {
				src: [ "assets/js/front/*.js" ],
				dest: "public/js/front/merged.js"
			}
		},
		uglify: {
			front: {
				src: [ "public/js/front/merged.js" ],
				dest: "public/js/front/compiled.js"
			}
		},
		watch: {
			jsFront: {
				files: [ "<%= concat.front.src %>" ],
				tasks: [ "concat:front", "uglify:front" ]
			}
		}
	});

	grunt.loadNpmTasks( "grunt-contrib-concat" );
	grunt.loadNpmTasks( "grunt-contrib-uglify" );
	grunt.loadNpmTasks( "grunt-contrib-watch" );

	grunt.registerTask( "default", "watch" );
	grunt.registerTask( "update", [ "concat", "uglify" ] );

};
