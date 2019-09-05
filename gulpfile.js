"use strict";

// Load plugins
const gulp = require("gulp");
const sass = require("gulp-sass");
const cleanCSS = require("gulp-clean-css");
const rename = require("gulp-rename");

// Compile SCSS files and minify CSS files
gulp.task('sass', function () {
    return gulp.src('data/ui/src/scss/base.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(gulp.dest('public/css'))
    .pipe(cleanCSS())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('public/css'))
});

function css() {
  return gulp.src('data/ui/src/scss/base.scss')
    .pipe(sass({outputStyle: 'expanded'}))
    .pipe(gulp.dest('public/css'))
    .pipe(cleanCSS())
    .pipe(rename({suffix: '.min'}))
    .pipe(gulp.dest('public/css'))
}


// Export tasks
exports.css = css;
