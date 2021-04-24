# This is my package LivewireAutocomplete

[![Latest Version on Packagist](https://img.shields.io/packagist/v/chrisdicarlo/livewire_autocomplete.svg?style=flat-square)](https://packagist.org/packages/chrisdicarlo/livewire_autocomplete)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/chrisdicarlo/livewire_autocomplete/run-tests?label=tests)](https://github.com/chrisdicarlo/livewire_autocomplete/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/chrisdicarlo/livewire_autocomplete/Check%20&%20fix%20styling?label=code%20style)](https://github.com/chrisdicarlo/livewire_autocomplete/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/chrisdicarlo/livewire_autocomplete.svg?style=flat-square)](https://packagist.org/packages/chrisdicarlo/livewire_autocomplete)

[](delete) 1) manually replace `Chris Di Carlo, chrisdicarlo, auhor@domain.com, chrisdicarlo, chrisdicarlo, Vendor Name, livewire-autocomplete, livewire_autocomplete, livewire_autocomplete, LivewireAutocomplete, This is my package LivewireAutocomplete` with their correct values
[](delete) in `CHANGELOG.md, LICENSE.md, README.md, ExampleTest.php, ModelFactory.php, LivewireAutocomplete.php, LivewireAutocompleteCommand.php, LivewireAutocompleteFacade.php, LivewireAutocompleteServiceProvider.php, TestCase.php, composer.json, create_livewire_autocomplete_table.php.stub`
[](delete) and delete `configure-livewire_autocomplete.sh`

[](delete) 2) You can also run `./configure-livewire_autocomplete.sh` to do this automatically.

This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-livewire_autocomplete-laravel.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-livewire_autocomplete-laravel)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

## Installation

You can install the package via composer:

```bash
composer require chrisdicarlo/livewire_autocomplete
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --provider="Chrisdicarlo\LivewireAutocomplete\LivewireAutocompleteServiceProvider" --tag="livewire_autocomplete-migrations"
php artisan migrate
```

You can publish the config file with:
```bash
php artisan vendor:publish --provider="Chrisdicarlo\LivewireAutocomplete\LivewireAutocompleteServiceProvider" --tag="livewire_autocomplete-config"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$livewire_autocomplete = new Chrisdicarlo\LivewireAutocomplete();
echo $livewire_autocomplete->echoPhrase('Hello, Spatie!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Chris Di Carlo](https://github.com/chrisdicarlo)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
