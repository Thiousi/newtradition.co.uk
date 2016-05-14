var gulp = require('gulp');

gulp.task('build', ['lint','images','styles','scripts','fonts']);
gulp.task('default', ['build','watch','connect']);
