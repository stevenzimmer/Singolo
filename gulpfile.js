require('es6-promise').polyfill();
var gulp 		     = require('gulp');
var browserSync  = require('browser-sync');
var reload       = browserSync.reload;
var sass 		     = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var rtlcss       = require('gulp-rtlcss');
var rename       = require('gulp-rename');
var plumber		   = require('gulp-plumber');
var gutil 		   = require('gulp-util');
var concat 		   = require('gulp-concat');
var uglify 		   = require('gulp-uglify');
var uglifycss    = require('gulp-uglifycss');
var imagemin     = require('gulp-imagemin');
var onError 	   = function (err) {
  console.log('An error occurred:', gutil.colors.magenta(err.message));
  gutil.beep();
  this.emit('end');
};


// SASS to CSS compiler

gulp.task('sass', function() {
	return gulp.src('./sass/**/*.scss')
	.pipe(plumber({ errorHandler: onError }))
	.pipe(sass())
	.pipe(autoprefixer())
  .pipe(uglifycss({
      "maxLineLen": 80,
      "uglyComments": true
    }))
	.pipe(gulp.dest('./')) // Output LTR stylesheets
  .pipe(reload({stream:true}));
});


// JS Task
gulp.task('js', function() {
  gulp.src(['js/*.js', '!js/*.min.js'])
  .pipe(plumber())
  .pipe(rename({suffix: '.min'}))
  .pipe(uglify())
  .pipe(gulp.dest('./js'))
  .pipe(reload({stream:true}));
});

/* 

PHP task 

*/

gulp.task('php', function() {
  gulp.src('*.php')
  .pipe(reload({stream:true}));
});



/* 

Browser sync

*/

gulp.task('browser-sync', function() {
    var files = [
    './style.css',
    './*.php'
    ];
  browserSync.init(files, {

    // Read here http://www.browsersync.io/docs/options/
    proxy: 'http://localhost/homework/',

    // port: 8080,

    // Tunnel the Browsersync server through a random Public URL
    // tunnel: true,

    // Attempt to use the URL "http://my-private-site.localtunnel.me"
    // tunnel: "ppress",

    // Inject CSS changes
    injectChanges: true

  });
});


/* 

Image optimization

*/


gulp.task('images', function() {
  return gulp.src('./images/src/*')
    .pipe(plumber({errorHandler: onError}))
    .pipe(imagemin({optimizationLevel: 7, progressive: true}))
    .pipe(gulp.dest('./images/dest'))
    .pipe(reload({stream:true}));
});



// default task
gulp.task('default', ['sass', 'php', 'js', 'images', 'browser-sync'], function() {
  gulp.watch('./sass/**/*.scss', ['sass']);
  gulp.watch('js/*.js', ['js']);
  gulp.watch('*.php', ['php']);
  gulp.watch('images/src/*', ['images']);
});