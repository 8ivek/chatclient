gulp.task('css', function () {
    const postcss = require('gulp-postcss')
  
    return gulp.src('src/tstyles.css')
      // ...
      .pipe(postcss([
        // ...
        require('tailwindcss'),
        require('autoprefixer'),
        // ...
      ]))
      // ...
      .pipe(gulp.dest('build/'))
  })