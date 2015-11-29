'use strict';

import gulp from 'gulp';
import del from 'del';
import runSequence from 'run-sequence';
import browserSync from 'browser-sync';
import gulpLoadPlugins from 'gulp-load-plugins';

const $ = gulpLoadPlugins();
const reload = browserSync.reload;

gulp.task('styles', () => {
  const AUTOPREFIXER_BROWSERS = [
    'ie >= 10',
    'ie_mob >= 10',
    'ff >= 30',
    'chrome >= 34',
    'safari >= 7',
    'opera >= 23',
    'ios >= 7',
    'android >= 4.4',
    'bb >= 10'
  ];

  return gulp.src([
    'resources/assets/sass/**/*.scss',
    'resources/assets/sass/**/*.css'
  ])
    .pipe($.newer('.tmp/styles'))
    .pipe($.sourcemaps.init())
    .pipe($.sass({
      precision: 10
    }).on('error', $.sass.logError))
    .pipe($.autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(gulp.dest('.tmp/styles'))
    // Concatenate and minify styles
    .pipe($.if('*.css', $.minifyCss()))
    .pipe($.size({title: 'styles'}))
    .pipe($.sourcemaps.write('./'))
    .pipe(gulp.dest('public/styles'));
});

gulp.task('scripts', () =>
    gulp.src([
      // Explicitly list scripts in the right
      // order to be correctly concatenated !
      './vendor/components/jquery/jquery.js',
      './vendor/zurb/foundation/js/foundation/foundation.js',
      './vendor/zurb/foundation/js/foundation.abide.js',
      './vendor/zurb/foundation/js/foundation.accordion.js',
      './vendor/zurb/foundation/js/foundation.alert.js',
      './vendor/zurb/foundation/js/foundation.clearing.js',
      './vendor/zurb/foundation/js/foundation.dropdown.js',
      './vendor/zurb/foundation/js/foundation.equalizer.js',
      './vendor/zurb/foundation/js/foundation.interchange.js',
      './vendor/zurb/foundation/js/foundation.joyride.js',
      './vendor/zurb/foundation/js/foundation.magellan.js',
      './vendor/zurb/foundation/js/foundation.offcanvas.js',
      './vendor/zurb/foundation/js/foundation.orbit.js',
      './vendor/zurb/foundation/js/foundation.reveal.js',
      './vendor/zurb/foundation/js/foundation.slider.js',
      './vendor/zurb/foundation/js/foundation.tab.js',
      './vendor/zurb/foundation/js/foundation.tooltip.js',
      './vendor/zurb/foundation/js/foundation.topbar.js',
      './resources/assets/js/app.js'
    ])
      .pipe($.newer('.tmp/scripts'))
      .pipe($.sourcemaps.init())
      .pipe($.babel())
      .pipe($.sourcemaps.write())
      .pipe(gulp.dest('.tmp/scripts'))
      .pipe($.concat('app.min.js'))
      .pipe($.uglify({preserveComments: 'some'}))
      .pipe($.size({title: 'scripts'}))
      .pipe($.sourcemaps.write('.'))
      .pipe(gulp.dest('public/js'))
);

gulp.task('clean', cb => del(['.tmp'], {dot: true}));
