var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;

// not needed since we're serving up styling from cdn
// elixir.config.assetsPath = 'source/_assets';
elixir.config.publicPath = 'source';

elixir(function(mix) {
    var env = argv.e || argv.env || 'local';
    var port = argv.p || argv.port || 3000;

    // original commands
    // mix.sass('main.scss')
    // mix.exec('jigsaw build ' + env, ['./source/*', './source/**/*', '!./source/_assets/**/*'])
    mix.exec('jigsaw build --pretty=false ' + env, ['./source/*', './source/**/*'])
        .browserSync({
            port: port,
            server: { baseDir: 'build_' + env },
            proxy: null,
            files: [ 'build_' + env + '/**/*' ]
        });
});
