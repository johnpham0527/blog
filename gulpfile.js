const {src, dest, series, parallel, watch} = require('gulp');
const del = require('del');
const browserSync = require('browser-sync').create();

const origin = 'src';
const destination = 'build';

async function clean(cb) {
  await del(destination);
  cb();
}

function html(cb) {
  src(`${origin}/**/*.html`).pipe(dest(`${destination}`));
  cb();
}

function php(cb) {
  src(`${origin}/**/*.php`).pipe(dest(`${destination}`));
  cb();
}

function css(cb) {
  src(`${origin}/**/*.css`)
  .pipe(dest(`${destination}`));
  cb();
}

function js(cb) {
  src([
    `${origin}/**/*.js`
  ])
  .pipe(dest(`${destination}`));
  cb();
}

function watcher(cb) {
  watch(`${origin}/*.html`).on('change', series(html, browserSync.reload));
  watch(`${origin}/*.css`).on('change', series(css, browserSync.reload));
  watch(`${origin}/*.js`).on('change', series(js, browserSync.reload));
  cb();
}

function server(cb) {
  browserSync.init({
    notify: false,
    open: false,
    server: {
      baseDir: destination
    }
  });
  cb();
}

//exports.default = series(clean, parallel(html, php, css, js), server, watcher);
exports.default = series(clean, parallel(html, php, css, js));