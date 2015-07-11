var autoprefixer = require('gulp-autoprefixer'),
    concat = require('gulp-concat'),
    gulp = require('gulp'),
    minifycss = require('gulp-minify-css'),
    notify = require('gulp-notify'),
    plumber = require('gulp-plumber'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass'),
    uglify = require('gulp-uglify');

gulp.task('sass', function () {
    compileSass('website', 'public/css/src')
});

gulp.task('js', function () {
    gulp.src('public/js/src/*.js')
        .pipe(concat('website.js'))
        .pipe(uglify())
        .pipe(gulp.dest('public/js'))
        .pipe(notify('JavaScript successfully compiled!'));
});

gulp.task('default', function () {
    gulp.watch('public/css/src/**/*.sass', ['sass']);
    gulp.watch('public/js/src/*.js', ['js']);
});

function compileSass(name, pathToSass) {
    gulp.src(pathToSass + '/' + name + '.sass')
        .pipe(plumber({
            errorHandler: onError
        }))
        .pipe(sass({
            loadPath: process.cwd() + pathToSass,
            style: 'nested',
            indentedSyntax: true,
            includePaths: pathToSass
        }))
        .pipe(autoprefixer({
            browsers: ['last 20 versions', '> 1%'],
            cascade: false
        }))
        .pipe(gulp.dest('public/css'))
        .pipe(rename({suffix: '.min'}))
        .pipe(minifycss())
        .pipe(gulp.dest('public/css'))
        .pipe(notify(name + ' successfully compiled!'));
}

function onError(err) {
    notify.onError({
        title: 'Gulp',
        subtitle: 'Failure!',
        message: 'Error: <%= error.message %>'
    })(err);

    this.emit('end');
}