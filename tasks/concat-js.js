module.exports = function (gulp, $, browserSync) {
	gulp.task('concat-js', function () {
		return gulp.src([
				'node_modules/mdbootstrap/js/jquery-3.3.1.min.js',
				'bower_components/popper.js/dist/umd/popper.min.js',
				'bower_components/bootstrap/dist/js/bootstrap.min.js',
				// Phần Plugins
				'bower_components/owl.carousel/dist/owl.carousel.min.js',
				'node_modules/mdbootstrap/js/mdb.min.js',
				'bower_components/bootstrap-fileinput/js/fileinput.min.js',
				'bower_components/rangeslider.js/dist/rangeslider.min.js'
			])
			.pipe($.concat('thuvien.js'))
			.pipe(gulp.dest('./dist/js'));
	});
};
