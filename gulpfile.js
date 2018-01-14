var gulp = require('gulp');
var concat = require('gulp-concat');
var sassruby = require('gulp-ruby-sass');

gulp.task('styles', () => {
    return sassruby('./assets/sass/**/*.scss', {
        style: 'comporessed',
        loadPath: [
            './node_modules/bootstrap-sass/assets/stylesheets'
        ]
    })
    .pipe(gulp.dest('./web/dist/css'));
});

gulp.task('scripts', () => {
    return gulp.src([
        './node_modules/jquery/dist/jquery.js',
        './assets/js/api_button.js'
    ])
    .pipe(concat('scripts.js'))
    .pipe(gulp.dest('./web/dist/js'));
})

gulp.task('watch', () => {
    gulp.watch(
        [
            './assets/**/*'
        ],
        [
            'default'
        ]
    );
})

gulp.task('default', ['scripts', 'styles']);