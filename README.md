# Curriculum

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Latest Stable Version](https://poser.pugx.org/pdavila13/curriculum/v/stable.png)](https://packagist.org/packages/pdavila13/curriculum)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://travis-ci.org/pdavila13/curriculum.svg?branch=master)](https://travis-ci.org/pdavila13/curriculum)
[![Code Coverage](https://scrutinizer-ci.com/g/pdavila13/curriculum/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/pdavila13/curriculum/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/pdavila13/curriculum/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/pdavila13/curriculum/?branch=master)
[![Total Downloads](https://poser.pugx.org/pdavila13/curriculum/downloads.png)](https://packagist.org/packages/pdavila13/curriculum)

**Note:** ```Paolo Davila``` ```pdavila13``` ```https://github.com/pdavila13``` ```pdavila@iesebre.com``` ```scool``` ```curriculum``` ```Package scool/curriculum``` with their correct values in [README.md](README.md), [CHANGELOG.md](CHANGELOG.md), [CONTRIBUTING.md](CONTRIBUTING.md), [LICENSE.md](LICENSE.md) and [composer.json](composer.json) files, then delete this line. You can run `$ php prefill.php` in the command line to make all replacements at once. Delete the file prefill.php as well.

This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Installation

### Composer

Execute the following command to get the latest version of the package:

```bash
$ composer require scool/curriculum
```

### Laravel

In your `config/app.php` add `CurriculumServiceProvider::class` to the end of the `providers` array:

```php
...
'providers` => [
 ...
 Scool\Curriculum\Providers\CurriculumServiceProvider::class,
],
```

Publish configuration

```bash
php artisan vendor:publish --tag=scool_curriculum
```

## Database ##

Use:

```bash
$ php artisan migrate:status
```

To see curriculum migrations and run migrations with:

```bash
$ php artisan migrate
```

Factories for all models are installed in **database/factories**.

To use Curriculum Seeders modify file **database/seeds/DatabaseSeeder**:

```php
public function run()
{
    $this->call(CurriculumSeeder::class);
}
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email pdavila@iesebre.com instead of using the issue tracker.

## Credits

- [Paolo Davila][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/scool/curriculum.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/scool/curriculum/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/scool/curriculum.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/scool/curriculum.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/scool/curriculum.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/scool/curriculum
[link-travis]: https://travis-ci.org/scool/curriculum
[link-scrutinizer]: https://scrutinizer-ci.com/g/scool/curriculum/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/scool/curriculum
[link-downloads]: https://packagist.org/packages/scool/curriculum
[link-author]: https://github.com/pdavila13
[link-contributors]: ../../contributors