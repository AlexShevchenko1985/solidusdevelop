import webpack from "webpack-stream";
import concat from "gulp-concat";

export const js = () => {
	return app.gulp.src(app.path.src.js, { sourcemaps: app.isDev })
		.pipe(app.plugins.plumber(
			app.plugins.notify.onError({
				title: "JS",
				message: "Error: <%= error.message %>"
			}))
		)
		.pipe(webpack({
			mode: app.isBuild ? 'production' : 'development',
			entry: {
				app: app.path.src.js,
			},
			output: {
				filename: 'scripts.min.js',
			}
		}))
		.pipe(app.gulp.dest(app.path.build.js));
}

// Libs concat
export const libsScripts = () => {
	return app.gulp.src([
		"./src/js/libs/aos.js",
		"./src/js/libs/owl.carousel.min.js",
	])
		.pipe(concat('libs.min.js'))
		.pipe(app.gulp.dest(app.path.build.js));
}