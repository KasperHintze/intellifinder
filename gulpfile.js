// DISABLE NOTIFICATIONS
process.env.DISABLE_NOTIFIER = true;
var sassInput = './resources/scss/public/**/*.scss',
	sassOutput = './assets/css/',
	scriptsInputFolder = './resources/js/',
	scriptsInput = scriptsInputFolder + '**/*.js',
	scriptsOutput = './assets/js/';
var gulp = require('gulp'),
	sass = require('gulp-sass'),
	sourcemaps = require('gulp-sourcemaps'),
	autoprefixer = require('gulp-autoprefixer'),
	elixir = require('laravel-elixir'),
	fs = require('fs'),
	path = require('path');
function getScripts(dir) {
	var dirContent = fs.readdirSync(dir);
	dirContent.forEach(function (file, index) {
		dirContent[index] = path.join(dir, file).split('\\').join('/');
	});
	var files = dirContent
		.filter(function (file) {
			return fs.statSync(file).isFile() && file.endsWith('.js') && !file.split('/').pop().startsWith('_');
		});
	var folders = dirContent
		.filter(function (file) {
			return fs.statSync(file).isDirectory() && !file.split('/').pop().startsWith('_');
		});
	folders.forEach(function (folder) {
		files = files.concat(getScripts(folder));
	});
	return files;
}
elixir.extend('sass', function (input, output) {
	new elixir.Task('sass', function () {
		return gulp
			.src(input)
			.pipe(sourcemaps.init())
			.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
			.pipe(sourcemaps.write({includeContent: false}))
			.pipe(sourcemaps.init({loadMaps: true}))
			.pipe(autoprefixer())
			.pipe(sourcemaps.write('.'))
			.pipe(gulp.dest(output));
	}).watch(input);
});
elixir.extend('scripts', function (mix, input, output) {
	new elixir.Task('scripts', function (test, test2) {
		var dir = input.slice(0, -7);
		var scripts = getScripts(dir);
		scripts.forEach(function (script) {
			console.log(output);
			console.log(script);
			var filename = script.split('\\').pop().split('/').pop();
			mix.browserify('./' + script, output + filename);
		});
	}).watch(input);
});
elixir(function (mix) {
	mix.sass(sassInput, sassOutput);
	var scripts = getScripts(scriptsInputFolder);
	scripts.forEach(function (script) {
		console.log(scriptsOutput);
		console.log(script);
		var filename = script.replace(scriptsInputFolder.replace('./', ''), '');
		mix.browserify('./' + script, scriptsOutput + filename);

		console.log('');
		console.log('-----------------------------');
		console.log('### Beginning gulp watch ###');
		console.log('-----------------------------');
		console.log('');

	});
});