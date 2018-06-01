"use strict";

var autoprefixer = require('gulp-autoprefixer');
var gulp = require('gulp');
var sass = require('gulp-sass');
var changed = require('gulp-changed');
var plumber = require('gulp-plumber');
var uglify = require('gulp-uglify');
var browserSync = require('browser-sync');
var concat = require('gulp-concat');
var minifyCSS = require('gulp-clean-css');
var rename = require('gulp-rename');
var Icons = require('gulp-svg-icons');
// var emailBuilder = require('gulp-email-builder');
//var del = require('del');

var ROOT_DIR = 'resources/assets';
var DIST_DIR = 'public/assets';
var SCSS_DIR = ROOT_DIR+'/sass';
var CSS_DIR = DIST_DIR+'/css';
var JS_SRC_DIR = ROOT_DIR+'/js';
var JS_DIST_DIR = DIST_DIR+'/js';
var SASS_PATHS = [];

gulp.task('styles', function() {
    return gulp
        .src([SCSS_DIR + '/**/*.scss'])
        .pipe(changed(CSS_DIR))
        .pipe(plumber())
        .pipe(sass({
            includePaths: SASS_PATHS,            
            sourcemap: true,
        }).on('error', sass.logError))
        .pipe(autoprefixer())
        .pipe(minifyCSS())
        .pipe(gulp.dest(CSS_DIR))
        .pipe(browserSync.reload({
            stream: true
        }));
    ;
});

gulp.task('browser-sync', function() {
    browserSync({        
        proxy: 'localhost:8000',
        port: 3000        
    });
        // browserSync.init({
        //     server: "./"
        // });
});

gulp.task('script',function() {
    gulp.src([JS_SRC_DIR+'/*.js'])
    .pipe(plumber())
    .pipe(rename(function(path){
        path.basename += '.min';
        path.extname = '.js';
    }))
    //.pipe(uglify())
    .pipe(gulp.dest(JS_DIST_DIR))
    .pipe(browserSync.reload({
            stream: true
        }));
});

// gulp.task('replace',function(){
//     gulp.src(['html/src/*.php'])
//     .pipe(icons.replace())
//     .pipe(gulp.dest('html/dist/'));
// });
// gulp.task('emailBuilder', function() {
//     return gulp.src(['email_template.php'])
//       .pipe(emailBuilder())
//       .pipe(rename('edm.php'))
//       .pipe(gulp.dest('app/'));
// });

// gulp.task('inject',['replace'], function(){
//     gulp.src(['html/dist/_svg.php'])
//     .pipe(icons.inject())
//     .pipe(rename('_icons.php'))
//     .pipe(gulp.dest('html/dist/'))
//     .pipe(browserSync.reload({
//         stream: true
//     }));
// })

gulp.task('watch', [
    'styles',
    'script',        
    'browser-sync'    
], function() {
    gulp.watch(JS_SRC_DIR+'/**/*.js',['script']);
    gulp.watch(SCSS_DIR + '/**/*.scss', ['styles']);        
    gulp.watch('resources/view/**/*.php',browserSync.reload);
});

