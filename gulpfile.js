var gulp = require('gulp');
var sass = require('gulp-sass');
var concat = require('gulp-concat');

gulp.task('sass', function() {
    return gulp.src('./assets/css/sass/style.scss')
    .pipe(sass())
    .pipe(concat('style.css'))
    .pipe(gulp.dest('./assets/css'))
})

gulp.task('watch',function() {
    gulp.watch('./assets/css/sass/*.scss',['sass']);
});