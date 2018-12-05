module.exports = function (gulp, $, browserSync) {
	gulp.task('concat-css', function () {
		return gulp.src([
				'node_modules/@fortawesome/fontawesome-free/css/all.min.css',
				'bower_components/animate.css/animate.min.css',
				// OWL
				'bower_components/owl.carousel/dist/assets/owl.carousel.min.css',
				'bower_components/owl.carousel/dist/assets/owl.theme.default.min.css',
				'node_modules/mdbootstrap/css/mdb.lite.min.css',
				'node_modules/mdbootstrap/css/mdb.min.css',
				'node_modules/mdbootstrap/css/style.min.css',
				'bower_components/bootstrap-fileinput/css/fileinput-rtl.min.css',
				'bower_components/bootstrap-fileinput/css/fileinput.min.css',
				'bower_components/rangeslider.js/dist/rangeslider.css'
			])
			.pipe($.concat('thuvien.css'))
			.pipe(gulp.dest('./dist/css'));
	});
};
