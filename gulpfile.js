const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync');
const reload = browserSync.reload;
const plumber = require('gulp-plumber');
const autoprefixer = require('gulp-autoprefixer');
const sourcemaps = require('gulp-sourcemaps');
const babel = require('gulp-babel');
const concat = require('gulp-concat');

gulp.task('sass',function(){
        gulp.src('assets/css/style.scss')
       .pipe(plumber())
       .pipe(sass())
       .pipe(autoprefixer('>1%', 'ios_saf 8', 'ie 11'))
       .pipe(gulp.dest('assets/css/min'))
       .pipe(reload({stream:true}));
});

gulp.task('browser-sync', function(){
    browserSync({
        proxy: "localhost:80"
    });
});

gulp.task('watch',function(){
    gulp.watch('assets/css/**/*.scss', ['sass'])
    gulp.watch(['site/templates/*.php', 'site/snippets/*.php'], ['php']);
});

gulp.task('php', function(){
    gulp.src(['site/templates/*.php', 'site/snippets/*.php'])
        .pipe(reload({stream:true}));
});

gulp.task('javascript',function(){
    gulp.src('assets/js/*.js')
        .pipe(plumber())
        .pipe(sourcemaps.init())
        .pipe(concat('script.js'))
        .pipe(babel({
            presets: ['es2015']
        }))
        .pipe(sourcemaps.write('.'))
        .pipe(gulp.dest('assets/min'))
        .pipe(reload({stream:true}))
});

gulp.task('default',['sass','browser-sync','watch', 'php','javascript'] );