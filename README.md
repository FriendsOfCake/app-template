# App Template

An empty CakePHP project for use with CakePHP 3.x

## Installation

	composer -sdev create-project friendsofcake/app-template ProjectName dev-cake3

This will create a new project, with dependencies, based on this repository. Be sure to point
the webserver at the `webroot` folder (a [production install][1]), ensure that [url rewriting][2]
is configured correctly.

## Application Configuration

This template supports - but does not require - configuration of the application via [environment variables](http://en.wikipedia.org/wiki/Environment_variable). This is not required for application configuration - and can be ignored - but is useful on Cloud Platforms and for those requiring extra security around sharing of application secrets and tokens.

To reduce complexity around using the use of this methodology locally, we have also included the [josegonzalez/php-dotenv](https://github.com/josegonzalez/php-dotenv) library to load environment variables within your `app/Config/core.php`. You can create a `app/Config/.env` file with your configuration and have it autoloaded by the `php-dotenv` project. A sample `app/Config/.env.default` has been included for your convenience.

## Heroku Compatibility

This application template is compatible with the [CHH/heroku-buildpack-php](https://github.com/CHH/heroku-buildpack-php) project. To use, simply configure your buildpack:

    heroku config:set BUILDPACK_URL=https://github.com/CHH/heroku-buildpack-php
    heroku config:set LOG_PATH=/app/vendor/php/var/log/
    heroku config:set SECURITY_SALT=SOME_ALPHANUMERIC_SALT_HERE
    heroku config:set SECURITY_CIPHER_SEED=SOME_NUMERIC_SEED_HERE

## Note about dependencies

FriendsOfCake encourages the use of composer and it's best not to mix composer with git submodules for
dependency management. If you need to use submodules you might notice `/vendor` and `/Plugin` folders are
ignored by git. Composer creates those directories when installing vendors and plugins.

There a few ways to solve this:
- edit the `.gitignore` file
- use the `-f` param with `git add Plugin/SomePlugin -f`
- use `app/Plugin` and `app/Vendor` for your submodules.

 [1]: http://book.cakephp.org/2.0/en/installation.html#production
 [2]: http://book.cakephp.org/2.0/en/installation/url-rewriting.html
