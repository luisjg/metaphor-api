# Metaphor Website

Metaphor Documentation

## Development Dependencies

- [php](https://secure.php.net)
- [composer](https://www.getcomposer.org)
- [node](https://nodejs.org/en/) / [npm](https://www.npmjs.com/)

## Installation

```$ npm install```

## Serving the Site

Once you have the dependencies installed, simply issue one of the following commands in your terminal:

...to serve the application with the built-in PHP server:

```
$ jigsaw build --pretty=false
$ jigsaw serve
```

...to avoid typing the commands above over and over, simply type the following commands:

```
$ jigsaw build --pretty=false
$ gulp watch
```

**Note:** If the config file is updated and you're not seeing your changes, killing gulp and re-running ```$ jigsaw build --pretty=false``` and ```$ gulp watch``` fixes this issue.
