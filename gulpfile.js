var gulp = require('gulp');
var less = require('gulp-less');
var cleancss = require('gulp-clean-css');
var csscomb = require('gulp-csscomb');
var rename = require('gulp-rename');
var LessPluginAutoPrefix = require('less-plugin-autoprefix');
var autoprefix= new LessPluginAutoPrefix({ browsers: ["last 5 versions"] });

livereload = require('gulp-livereload');
gulp.task('watch', function() {
    gulp.watch([
    './assets/css/src/*.less',
    './assets/slick/*.less',
    './components/focus/focus.less',
    './components/block/block.less',
    './components/contact/contact.less',
    './components/divider/divider.less',
    './components/text/text.less',
    './components/testimonials/testimonials.less',
    './components/slider/slider.less',
    './components/header/header.less',
    './components/footer/footer.less',
    './components/map/map.less',
    './components/side/side.less'  
    ], ['build']);
    livereload.listen();
});
gulp.task('build', function() {
    gulp.src('./assets/css/src/main.less')
        .pipe(less({
            plugins: [autoprefix]
        }))
        .pipe(csscomb())
        .pipe(gulp.dest('./assets/css/dist'))
        .pipe(cleancss())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./assets/css/dist'))
        .pipe(livereload());
});
gulp.task('default', ['build']);