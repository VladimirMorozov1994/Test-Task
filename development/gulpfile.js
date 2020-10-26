const
    {series, src, dest, watch} = require('gulp'),
    sass = require('gulp-sass'),
    cleanCss = require('gulp-clean-css'),
    autoprefixer = require('gulp-autoprefixer'),
    changed = require('gulp-changed'),
    gcmq = require('gulp-group-css-media-queries'),
    cssnano = require('gulp-cssnano'),
    env = require('gulp-env');

// load variables
env(".env");

const
    SRC = process.env.SRC,
    DEST = process.env.DEST;

function getError(error) {
    console.log(error.toString());
    this.emit('end');
}

function scss() {
    let stream = src(SRC);
    stream = stream.pipe(changed(DEST))
        .pipe(sass().on('error', getError))
        .pipe(autoprefixer(['last 5 versions'], {cascade: true}))
        .pipe(gcmq())
        // .pipe(cssnano())
        .pipe(cleanCss())
        .pipe(dest(DEST));

    return stream;
}

function scsslive() {
    return scss();
}

function watcher() {
    return watch(SRC, series(scsslive));
}

exports.scss = scss;
exports.watch = series(scsslive, watcher);
