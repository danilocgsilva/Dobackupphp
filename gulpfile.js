var gulp = require('gulp');
var concat = require('gulp-concat');
var sassruby = require('gulp-ruby-sass');
var del = require('del');

var configs = {
    destSass: './web/dist/css',
    destScripts: './web/dist/js'
}

gulp.task('styles', () => {
    return sassruby('./assets/sass/**/*.scss', {
            style: 'comporessed',
            loadPath: [
                './node_modules/bootstrap-sass/assets/stylesheets'
            ]
        })
        .pipe(gulp.dest(configs.destSass));
});

gulp.task('scripts', () => {
    return gulp.src([
            './node_modules/jquery/dist/jquery.js',
            './assets/js/Components/**/*.js'
        ])
        .pipe(concat('scripts.js'))
        .pipe(gulp.dest(configs.destScripts));
})

gulp.task('watch', () => {
    gulp.watch(
        [
            './assets/**/*'
        ], [
            'default'
        ]
    );
})

gulp.task('del', () => {
    del(configs.destSass);
    del(configs.destScripts);
})

gulp.task('default', ['scripts', 'styles']);