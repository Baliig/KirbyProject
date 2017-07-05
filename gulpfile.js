const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync');
const reload = browserSync.reload;
const plumber = require('gulp-plumber');
const autoprefixer = require('gulp-autoprefixer');

gulp.task('sass',function(){
   return gulp.src('assets/css/style.scss')
       .pipe(sass())
       .pipe(plumber())
       .pipe(autoprefixer('>1%', 'ios_saf 8', 'ie 11'))
       .pipe(gulp.dest('assets/css/min'))
       .pipe(reload({stream:true}));
});

gulp.task('browser-sync', function(){
    browserSync({
        proxy: "localhost:80/kirby-project"
    });
});

gulp.task('watch',function(){
    gulp.watch('assets/css/**/*.scss', ['sass'])
})

gulp.task('php', function(){
    gulp.src(['site/templates/*.php', 'site/snippets/*.php'])
        .pipe(reload({stream:true}));
});

gulp.task('default',['sass','browser-sync','watch', 'php'] );