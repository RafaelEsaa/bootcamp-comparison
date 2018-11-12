var gulp = require('gulp');
var sass = require('gulp-sass');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
const minify = require('gulp-minify');

gulp.task('build-css', function () {
    gulp.src('./scss/style.scss')
        .pipe(sass())
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./assets/css/'));
});

gulp.task('build-js', function () {
    gulp.src(['./assets/js/*.js', './assets/js/*.mjs'])
        .pipe(minify())
        .pipe(gulp.dest('./assets/js/'));
});

gulp.task('dev', function () {
    gulp.src('./scss/style.scss')
        .pipe(sass())
        .pipe(gulp.dest('./assets/css/'));
});

gulp.task('sass', function () {
    gulp.src('./scss/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('./assets/css'));
});

gulp.task('watch', ['sass'], function(){
    gulp.watch('./scss/style.scss', ['sass']);
});

gulp.task('default', ['sass']);