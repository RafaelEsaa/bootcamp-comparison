var gulp = require('gulp');
var sass = require('gulp-sass');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');

gulp.task('build', function () {
    gulp.src('./scss/style.scss')
        .pipe(sass())
        .pipe(cssmin())
        .pipe(rename({suffix: '.min'}))
        .pipe(gulp.dest('./assets/css/'));
});

gulp.task('dev', function () {
    gulp.src('./scss/style.scss')
        .pipe(sass())
        .pipe(gulp.dest('./assets/css/'));
});

gulp.task('watch', ['sass'], function(){
    gulp.watch('./scss/style.scss', ['sass']);
});

gulp.task('default', ['sass']);