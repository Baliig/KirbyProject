const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync');
const plumber = require('gulp-plumber');

gulp.task('sass',function(){
   return gulp.src('assets/css/style.scss')
       .pipe(sass())
       .pipe(autoprefixer('>1%', 'ios_saf 8', 'ie 11'))
       .pipe(gulp.dest('assets/css/'))
        .pipe(reload({stream:true}))
        .pipe(notify({ message: 'scss'}));
});

gulp.task('browser-sync', function(){
    browserSync({
        proxy: "localhost:8888",
        browser: "google chrome"
    });
});

gulp.task('watch',function(){
    gulp.watch('assets/css/style.scss', ['sass'])
    gulp.watch('assets/css/**/*.scss', ['sass'])
})


gulp.task('default',['sass','browser-sync','watch'] );