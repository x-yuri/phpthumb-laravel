# phpThumb() - The PHP thumbnail generator

## Installation

Install the package:

    $ composer require x-yuri/phpthumb-laravel dev-master

Register `phpThumb`'s provider (`config/app.php`):

    'providers' => [
        ...
        PhpThumb\PhpThumbProvider::class,
    ],

Publish config:

    $ ./artisan vendor:publish --provider=PhpThumb\\PhpThumbProvider

Set `high_security_password` in `config/phpthumb.php`, and possibly other options:

    $overrides = [
        'config' => [
            'high_security_password' => 'PiD9jUdAn2ONE679jCaGFBUl4C9sLWHuOufLKVXOUeKWF9K8wfikBiurTWH7dCH',
            'document_root' => __DIR__ . '/../public',
            'cache_directory' => __DIR__ . '/../storage/app/phpthumb',
            # 'disable_debug' => FALSE,
            ...
        ],
        ...

`nginx` settings:

    location = /phpthumb {
        include fastcgi.conf;
        fastcgi_param  SCRIPT_FILENAME  /srv/http/example.com/vendor/x-yuri/phpthumb-laravel/phpthumb-github/phpThumb.php;
        fastcgi_pass  unix:/run/php-fpm/php-fpm.sock;
    }

    # to check configuration (for development only)
    location = /phpthumb-check {
        include fastcgi.conf;
        fastcgi_param  SCRIPT_FILENAME  /srv/http/example.com/vendor/x-yuri/phpthumb-laravel/phpthumb-github/demo/phpThumb.demo.check.php;
        fastcgi_pass  unix:/run/php-fpm/php-fpm.sock;
    }

Give `php` permissions to create and write to cache directory.

Check the configuration. Comment out line 17 in `vendor/x-yuri/phpthumb-laravel/phpthumb-github/demo/phpThumb.demo.check.php`, and open your browser at `/phpThumb.demo.check.php`.

Ignore `"phpThumb.config.php" version does not match phpThumb version` error. It's the way it is in this release.

## Usage

	Route::get('test', function () {
        return '<img src="' . htmlspecialchars(phpthumb('src=/path/to/image/relative/to/doc/root.png&w=50')) . '">';
    });

For more information see [the readme](phpthumb-github/docs/phpthumb.readme.txt).

## Links

[Home page](http://phpthumb.sourceforge.net/)
