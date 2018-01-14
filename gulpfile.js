var gulp = require('gulp');
var sassruby = require('gulp-ruby-sass');

gulp.task('default', () => {
    return sassruby('./sass/**/*.scss', {
        style: 'comporessed',
        loadPath: [
            './node_modules/bootstrap-sass/assets/stylesheets'
        ]
    })
    .pipe(gulp.dest('./web/dist/css'));
});