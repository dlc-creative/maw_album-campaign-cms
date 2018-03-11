var gulp = require('gulp');
var sass = require('gulp-sass');
var watch = require('gulp-watch');
var browserSync = require('browser-sync').create();
var autoprefixer = require('gulp-autoprefixer');
var autoprefixerOptions = {
	browsers: ['last 2 versions', '> 5%', 'Firefox ESR']
};

gulp.task('styles', function() {
	gulp.src('sass/main.scss')
	.pipe(watch('sass/main.scss'))
	.pipe(sass())
	.pipe(autoprefixer(autoprefixerOptions))
	.pipe(gulp.dest('css/'))
	.pipe(browserSync.reload({stream: true}))
});

gulp.task('watch:styles', function() {
	gulp.watch('sass/**/*.scss', ['styles'])
});

gulp.task('watch', ['watch:styles']);

gulp.task('build', ['styles']);

gulp.task('default', ['build', 'watch']);
