var gulp = require('gulp'),
    sass = require('gulp-ruby-sass');

gulp.task('default', function () {
    console.log('Gulp is ready: use "gulp styles" or "gulp watch" (CTRL+C to exit watch).');
});

gulp.task('styles', function () {
    return sass('sass/*.scss')
        .pipe(gulp.dest('./'));
});

gulp.task('watch', function () {
    gulp.watch('sass/*scss', ['styles']).on('change', function (event) {
        console.log('Modification sur le fichier: ' + event.path);
    })
});