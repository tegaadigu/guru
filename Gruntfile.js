module.exports = function(grunt) {

    // Project configuration.
    grunt.initConfig({
        pkg: grunt.file.readJSON('package.json'),
        uglify: {
            min: {
                files: {
                    'public/js/min/guru.min.js': ['public/js/menu.js', 'public/js/script.js'],
                    'public/js/chart.js': ['node_modules/Chart.js/dist/Chart.min.js']
                }
            },
        },
        less: {
            dev: {
                files: {
                    "public/css/style.css": "public/less/style.less",
                    "public/css/operator.css": "public/less/operator.less",
                    "public/css/dashboard.css": "public/less/dashboard.less",
                    "public/css/login.css": "public/less/login.less"
                }
            },
        },
        watch: {
            less: {
                files: ['public/less/*.less'],
                tasks: ['less'],
            },
            scripts: {
                files: ['public/js/*.js'],
                tasks: ['uglify']
            }
        },
    });

    // Load the plugin that provides the "uglify" task.
    grunt.loadNpmTasks('grunt-contrib-uglify');
    grunt.loadNpmTasks('grunt-contrib-less');
    grunt.loadNpmTasks('grunt-contrib-watch');
    // Default task(s).
    grunt.registerTask('default', ['uglify', 'less', 'watch']);

};
