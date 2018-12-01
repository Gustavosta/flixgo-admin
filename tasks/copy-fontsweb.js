module.exports = function (gulp, $, browserSync) {
	gulp.task('copy-webfonts', function () {
		return gulp.src([
				'./src/webfonts/**.*',
			])
			.pipe(gulp.dest('./dist/webfonts'));
	});
};
