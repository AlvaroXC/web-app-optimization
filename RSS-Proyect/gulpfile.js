const {src , dest , watch , parallel} = require( "gulp" );

// src -> sirve para identificar un archivo
// dest -> para guardarlo
// watch -> registra cambios en tiempo real
// parallel -> todas las funciones las ejecuta al mismo tiempo


const sass = require('gulp-sass')(require('sass')); //conectar sass con gulp

const autoprefixer = require('autoprefixer');
const postcss = require('gulp-postcss')
const sourcemaps = require('gulp-sourcemaps')
const cssnano = require('cssnano');
const concat = require('gulp-concat');
const terser = require('gulp-terser-js');
const rename = require('gulp-rename');

const paths = {
    scss: 'src/scss/**/*.scss',
    js: 'src/js/**/*.js',
    imagenes: 'src/img/**/*'
}

function css() {
    return src(paths.scss)
        // .pipe(sourcemaps.init())
        .pipe(sass())
        // .pipe(postcss([autoprefixer(), cssnano()]))
        // // .pipe(postcss([autoprefixer()]))
        // .pipe(sourcemaps.write('.'))
        .pipe(dest('./public/build/css'));
}

function javascript() {
    return src(paths.js)
      .pipe(sourcemaps.init())
      .pipe(concat('bundle.js'))
      .pipe(terser())
      .pipe(sourcemaps.write('.'))
      .pipe(rename({ suffix: '.min' }))
      .pipe(dest('./public/build/js'))
}

function watchArchivos() {
    watch(paths.scss, css);
    watch(paths.js, javascript);
}


exports.css = css;
exports.watchArchivos = watchArchivos;
// exports.default = parallel(css, watchArchivos); 
exports.default = parallel(css, javascript, watchArchivos); 