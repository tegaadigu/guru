module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            min: {
                files: {
                    'public/js/min/guru.min.js': ['public/js/menu.js', 'public/js/script.js']
                }
            },
        },
        less: {
            dev: {
                files: {
                    "public/css/style.css": "public/less/style.less"
                }
            },
        },
        watch: {
            scripts: {
                files: ['public/less/*.less'],
                tasks: ['less'],
            },
        },
    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    // Default task(s).
    grunt.registerTask('default', ['uglify', 'less', 'watch']);

};
