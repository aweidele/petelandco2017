var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');

var sassOptions = {
  errLogToConsole: true,
  outputStyle: 'expanded'
};

var autoprefixerOptions = {
  browsers: ['last 2 versions']
};

gulp.task('sass', function(){
  return gulp
    .src('src/css/main.scss')
    .pipe(sourcemaps.init())
    .pipe(sass(sassOptions).on('error', sass.logError))
    .pipe(sourcemaps.write())
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(gulp.dest('css/'))
});

gulp.task('hello', function() {
  console.log('Hello Aaron');
});

gulp.task('watch', function(){
  gulp.watch('src/css/**/*.scss', ['sass']);
});
