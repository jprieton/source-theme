module.exports = function (grunt) {
  // Project configuration.
  grunt.initConfig({
    copy: {

      lib: {
        files: [
          {
            expand: true,
            cwd: 'node_modules/animate.css/',
            src: ['*.css'],
            dest: 'assets/lib/animate.css/'
          },
          {
            expand: true,
            cwd: 'node_modules/bootstrap/dist/',
            src: ['css/*.css', 'js/*.js'],
            dest: 'assets/lib/bootstrap/'
          },
          {
            expand: true,
            cwd: 'node_modules/hover.css/css/',
            src: ['hover.css', 'hover-min.css'],
            dest: 'assets/lib/hover.css/'
          },
          {
            expand: true,
            cwd: 'node_modules/popper.js/dist/',
            src: ['*.js', 'esm/*.js', 'umd/*.js'],
            dest: 'assets/lib/popper.js/'
          },
        ]
      }
    },

    cssmin: {
      options: {
        level: 2
      },
      target: {
        files: {
          'style.min.css': ['style.css']
        }
      }
    },

    uglify: {
      options: {
        mangle: {
          reserved: ['jQuery', '$']
        }
      },
      target: {
        files: {
          'assets/js/public.min.js': ['assets/js/public.js'],
          'assets/js/admin.min.js': ['assets/js/admin.js'],
        }
      }
    }

  });

  grunt.loadNpmTasks('grunt-contrib-copy');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.registerTask( 'default', [ 'cssmin', 'uglify', 'copy:lib' ] );
};
