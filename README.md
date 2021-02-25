# alfabank-laravel

[![Latest Stable Version](https://poser.pugx.org/davidnadejdin/alfabank-laravel/v/stable?format=plastic)](https://packagist.org/packages/davidnadejdin/alfabank-laravel)
[![Total Downloads](https://poser.pugx.org/davidnadejdin/alfabank-laravel/downloads?format=plastic)](https://packagist.org/packages/davidnadejdin/alfabank-laravel)
[![Latest Unstable Version](https://poser.pugx.org/davidnadejdin/alfabank-laravel/v/unstable?format=plastic)](https://packagist.org/packages/davidnadejdin/alfabank-laravel)
[![License](https://poser.pugx.org/davidnadejdin/alfabank-laravel/license?format=plastic)](https://packagist.org/packages/davidnadejdin/alfabank-laravel)

Laravel facade for Alfabank api client

## Installation

Install package through Composer

``` bash
$ composer require davidnadejdin/alfabank-laravel
```

Publish config

``` bash
$ php artisan vendor:publish --provider="Davidnadejdin\LaravelAlfabank\AlfabankServiceProvider" --tag=config
```

### Example
```php
<?php

use Davidnadejdin\LaravelAlfabank\Alfabank;

Alfabank::register([]);

```

## Credits

- [David Nadejdin][link-author]
- [All Contributors][link-contributors]

## License

license. Please see the [license file](LICENSE) for more information.

## Related packages
- [davidnadejdin/alfabank-php-client](https://github.com/Davidnadejdin/alfabank-php-client) Api client for Alfabank.

[link-author]: https://github.com/davidnadejdin
[link-contributors]: ../../contributors
