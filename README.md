# m4-website
Metaphor Documentation

## Development Dependencies

- [npm](https://www.npmjs.com/)
- [gulp-cli](http://gulpjs.com/)

## Getting Started

Make a copy of `example.config.php` and rename it to `config.php`. Add any site specific variables that you'd want to keep private. To access these variables simply use the Blade syntax `{{ $variable_name }}`. More information can be found on the [Jigsaw docs](http://jigsaw.tighten.co/docs/environments/). Once that is done simply issue the following commands:

```
$ npm install
$ gulp watch
```
