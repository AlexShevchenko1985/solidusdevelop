import replace from "gulp-replace"; // Search and Replace
import plumber from "gulp-plumber"; // Error processing
import notify from "gulp-notify"; // Messages (tips)
import newer from "gulp-newer"; // Update check
import ifPlugin from "gulp-if"; // Conditional branching

// Object export
export const plugins = {
	replace: replace,
	plumber: plumber,
	notify: notify,
	newer: newer,
	if: ifPlugin
}