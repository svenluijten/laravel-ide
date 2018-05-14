![laravel-ide](https://user-images.githubusercontent.com/11269635/39960173-33d80798-561e-11e8-9dcb-f6ee9cc55dd5.jpg)

# Laravel IDE

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-circleci]][link-circleci]
[![StyleCI][ico-styleci]][link-styleci]

This package provides a single command to quickly generate IDE helper files. It
is really a thin wrapper around Barry van den Heuvel's
[`laravel-ide-helper` package](https://github.com/barryvdh/laravel-ide-helper).

## Index
- [Installation](#installation)
  - [Downloading](#downloading)
  - [Registering the service provider](#registering-the-service-provider)
- [Usage](#usage)
- [Contributing](#contributing)
- [License](#license)

## Installation
You'll have to follow a couple of simple steps to install this package.

### Downloading
Via [composer](http://getcomposer.org):

```bash
$ composer require sven/laravel-ide --dev
```

Or add the package to your dependencies in `composer.json` and run
`composer update` on the command line to download the package:

```json
{
    "require": {
        "sven/laravel-ide": "^1.0"
    }
}
```


### Registering the service provider
Thanks to auto-discovery, the service provider is already registered. If you disabled
auto-discovery in your project, you must register `\Sven\LaravelIde\ServiceProvider`
while the app is in the `local` environment.

## Usage
To (re-)generate IDE helper files, execute the following command:

```bash
$ php artisan ide
```

### Configuration


## Contributing
All contributions (pull requests, issues and feature requests) are
welcome. Make sure to read through the [CONTRIBUTING.md](CONTRIBUTING.md) first,
though. See the [contributors page](../../graphs/contributors) for all contributors.

## License
`sven/laravel-ide` is licensed under the MIT License (MIT). Please see the
[license file](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/sven/laravel-ide.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-green.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/sven/laravel-ide.svg?style=flat-square
[ico-circleci]: https://img.shields.io/circleci/project/github/svenluijten/laravel-ide.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/133169046/shield

[link-packagist]: https://packagist.org/packages/sven/laravel-ide
[link-downloads]: https://packagist.org/packages/sven/laravel-ide
[link-circleci]: https://circleci.com/gh/svenluijten/laravel-ide
[link-styleci]: https://styleci.io/repos/133169046
