// Main module
import gulp from "gulp";
// Paths
import { path } from "./gulp/config/path.js";
// Common plugins
    import { plugins } from "./gulp/config/plugins.js";

// Global variables
global.app = {
    isBuild: process.argv.includes('--build'),
    isDev: !process.argv.includes('--build'),
    path: path,
    gulp: gulp,
    plugins: plugins
}

// Tasks import
import { reset } from "./gulp/tasks/reset.js";
import { scss } from "./gulp/tasks/scss.js";
import { js } from "./gulp/tasks/js.js";
import { images } from "./gulp/tasks/images.js";
import { otfToTtf, ttfToWoff, fontsStyle } from "./gulp/tasks/fonts.js";

// Watchers
function watcher() {
    gulp.watch(path.watch.scss, gulp.series(scss));
    gulp.watch(path.watch.js, js);
    gulp.watch(path.watch.images, images);
}

// Sequential font processing
const fonts = gulp.series(otfToTtf, ttfToWoff, fontsStyle);

// Main tasks
const mainTasks = gulp.series(fonts, gulp.parallel(scss, js, images));

// Building scenarios for executing tasks
const dev = gulp.series(reset, mainTasks, gulp.parallel(watcher));
const build = gulp.series(reset, mainTasks);

// Export scenarios
export { dev }
export { build }

// Executing the Default Script
gulp.task('default', dev);