const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));

gulp.task('default', ()=> {
    return(
        gulp.src('sass/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('css'))
    )
});

