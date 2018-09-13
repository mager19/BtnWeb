const gulp = require('gulp'),
	  sass = require('gulp-sass');
	  
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

gulp.task('sass', function (){
	gulp.src('./scss/*style.scss')
		.pipe(sass({
			outputStyle: 'compact'
		})) 
		.pipe(gulp.dest('./'))
		.pipe(browserSync.stream());
})

// Watch scss AND html files, doing different things with each.
gulp.task('serve', function () {

	//Variables para que sepa que archivos refrescar 
	 var files = [
    	'./style.css',
    	'./*.php',
        './template-parts/*.php',
                '**/*.js',
                // include specific files and folders
                'screenshot.png',
    	];

    // Serve files from the root of this project
    browserSync.init(files, {
      
             proxy: "batana.dev.cc/",
       
    });

   
});


gulp.task('default', ['sass', 'serve'], function(){
    gulp.watch("scss/*.scss", ['sass']);
});