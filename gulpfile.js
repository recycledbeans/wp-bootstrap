var gulp = require('gulp'),
    gulpif = require('gulp-if'),
    sprite = require('css-sprite').stream,
    sass = require('gulp-sass'),
    concat    = require('gulp-concat'),
    minifyCSS = require('gulp-minify-css'),
    sourcemaps = require('gulp-sourcemaps'),
    autoprefixer = require('gulp-autoprefixer'),
    notify = require('gulp-notify'),
    rename    = require('gulp-rename');

var THEME = 'THEME_NAME';

var BOWER = 'bower_components/';
var WPTHEME = 'wp-content/themes/'+THEME+"/";

// Generate sprite.png and _sprite.scss
gulp.task('sprites', function () {
    return gulp.src(WPTHEME + 'img/icons/*.png')
        .pipe(sprite({
            name: 'sprite',
            style: 'scss/_sprite.scss',
            cssPath: 'img/icons',
            processor: 'scss',
            prefix: 'icon'
        }))
        .pipe(gulpif('*.png', gulp.dest(WPTHEME + 'img/'), gulp.dest('scss/')));
});

// Generate CSS from SCSS
gulp.task('sass', function() {
    return gulp.src('scss/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(gulp.dest('css'))
        .pipe(autoprefixer())
        .pipe(sourcemaps.write())
        .pipe(concat('style.css'))
        .pipe(gulp.dest(WPTHEME+'css'))
        .pipe(concat('style.min.css'))
        .pipe(minifyCSS())
        .pipe(gulp.dest(WPTHEME + 'css'));
});

// @todo: We could add JS here for concat and minification

// Watch SCSS and JS for changes
gulp.task('watch', function () {
    gulp.watch(WPTHEME + 'img/icons/**/*.png', ['sprites']);
    gulp.watch('scss/*.scss', ['sass']);
    //gulp.watch('js/*.js', ['js']); // @todo: Future JS stuff
});

gulp.task('copy', function() {
   return gulp.src("bower_components/bootstrap-sass-official/assets/stylesheets/**/*")
       .pipe(gulp.dest('scss/bootstrap'));
});

gulp.task('default', ['sprites', 'sass']);