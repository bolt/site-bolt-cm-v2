module.exports = function(grunt) {

  var mozjpeg = require('imagemin-mozjpeg');

  
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    sass: {
      options: {
        includePaths: ['bower_components/foundation/scss']
      },
      dist: {
        options: {
          outputStyle: 'compressed'
        },
        files: {
          'styles/bolt-v20.css': 'scss/bolt-v20.scss'
        }        
      }
    },

    watch: {
      grunt: { files: ['Gruntfile.js'] },

      sass: {
        files: 'scss/**/*.scss',
        tasks: ['sass']
      }
    },

    imagemin: {
      static: {
        options: {
          optimizationLevel: 3,
          svgoPlugins: [{ removeViewBox: false }],
          use: [ mozjpeg()]
        },
      },
      dynamic: {                         
        files: [{
          expand: true,
          cwd: 'images/src/',
          src: ['**/*.{png,jpg,gif}'],
          dest: 'images/optimized/'
        }]
      }
    }


  });

  grunt.loadNpmTasks('grunt-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-imagemin');

  grunt.registerTask('build', ['sass']);
  grunt.registerTask('default', ['build','watch']);
  // optimize images
  grunt.registerTask('images', ['imagemin']);
}
