var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

var cssDest = 'style';
var cssInputFile = 'source/style.scss';
var watchedFiles = 'source/**/*.scss';

gulp.task('buildcss', function(){
    return gulp.src(cssInputFile)
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .pipe(sourcemaps.write())
        .pipe(gulp.dest(cssDest));
});

gulp.task('watch', function(){
    gulp.watch(watchedFiles, ['buildcss']);
});