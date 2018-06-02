![laravel-ide](https://user-images.githubusercontent.com/11269635/39960173-33d80798-561e-11e8-9dcb-f6ee9cc55dd5.jpg)

# Laravel IDE

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Total Downloads][ico-downloads]][link-downloads]
[![Software License][ico-license]](LICENSE.md)
[![StyleCI][ico-styleci]][link-styleci]

This package provides a single command to quickly generate IDE helper files. I
grew tired of remembering the 3 or 4 commands it took me to generate the helper
files with Barry van den Heuvel's [`laravel-ide-helper` package](https://github.com/barryvdh/laravel-ide-helper),
so I wrote my own command. Eventually though, I kept copying and pasting
that same command in all my projects. And thus, this package was born.

## Index
- [Installation](#installation)
  - [Downloading](#downloading)
  - [Registering the service provider](#registering-the-service-provider)
- [Usage](#usage)
- [Configuration](#configuration)
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
    "require-dev": {
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

## Configuration
To publish the configuration file for this package, run the following command:

```bash
$ php artisan vendor:publish --provider="Sven\LaravelIde\ServiceProvider"
```

This will create a new file at `config/ide.php`, where you can configure the following
values:

### `write_to_model_files`
This option is to determine whether to write the generated docblocks for models
directly to the model files or to create a seperate file for them.

### `commands.*`
The keys here stand for the `ide-helper` command to execute. If you want to disable one
of them, set its value to `false`.

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
[ico-styleci]: https://styleci.io/repos/133169046/shield

[link-packagist]: https://packagist.org/packages/sven/laravel-ide
[link-downloads]: https://packagist.org/packages/sven/laravel-ide
[link-styleci]: https://styleci.io/repos/133169046
