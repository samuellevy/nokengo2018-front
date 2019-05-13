var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var del = require('del');
var requireDir = require('require-dir');
var runSequence = require('run-sequence');
var cache = require('gulp-cache');
var imagemin = require('gulp-imagemin');
var browserSync = require('browser-sync');
var tinypng = require('gulp-tinypng');

var source = './source/';
var target = './webroot/';

gulp.task('serve', ['sass', 'pages','images', 'js', 'fonts'], function() {
	browserSync.init({
		server: target
	});
	gulp.watch(source + "/scss/**/*.scss", ['sass']);
	gulp.watch(source + '/**/*.html', ['pages']);
	// gulp.watch(source + '/images/', ['images']);
	gulp.watch(source + '/js/**.js', ['js']);
});

gulp.task('default', ['serve']);

gulp.task('build', function(callback) {
  runSequence(
    'clean:dist',
    ['sass', 'images', 'pages', 'js', 'fonts'],
    callback
  )
});

/* TASKS */
gulp.task('sass', function () {
  return gulp.src(source + 'scss/*.scss')
  .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  .pipe(sourcemaps.write())
  .pipe(gulp.dest(target + 'css'))
  .pipe(browserSync.reload({ // Reloading with Browser Sync
    stream: true
  }));
});

gulp.task('pages', function() {
  return gulp.src(source + '/*.html')
	  .pipe(gulp.dest(target))
	  .pipe(browserSync.stream());
});

gulp.task('images', function() {
  return gulp.src(source + 'images/**/*.+(png|jpg|jpeg|svg)')
  .pipe(imagemin({
    interlaced: true,
    progressive: true,
    optimizationLevel: 5,
    svgoPlugins: [{removeViewBox: false}]
  }))
  .pipe(gulp.dest(target + 'images'))
});

gulp.task('js', function() {
  return gulp.src(source + 'js/**/*.js')
  .pipe(gulp.dest(target + 'js/'))
  .pipe(browserSync.reload({ // Reloading with Browser Sync
    stream: true
  }));
});

gulp.task('fonts', function() {
  return gulp.src(source + 'fonts/**/*')
  .pipe(gulp.dest(target + 'fonts'))
});


gulp.task('gif', function() {
  return gulp.src(source + 'images/**/*.+(gif)')
  .pipe(gulp.dest(target + 'images'))
});

gulp.task('compress', function() {
  return gulp.src(target + 'images/**/*.+(png|jpg|jpeg)')
  .pipe(tinypng('OL3Y5eFrYwhFEg2jrWa6Ijk9P_Enbgie'))
  .pipe(gulp.dest(target + 'images'))
});

gulp.task('clean:dist', function() {
  return del.sync([target+'/**/*', '!'+target+'/images', '!'+target+'/images/**/*', '!'+target+'index.php']);
});
