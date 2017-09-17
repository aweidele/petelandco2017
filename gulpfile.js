var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');

var autoprefixerOptions = {
  browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

gulp.task('sass', function(){
  return gulp.src('src/css/main.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(autoprefixer(autoprefixerOptions))
    .pipe(gulp.dest('css/'))
});

gulp.task('hello', function() {
  console.log('Hello Aaron');
});

gulp.task('watch', function(){
  gulp.watch('src/css/**/*.scss', ['sass']);
});
