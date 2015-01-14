# App Template  [![Build Status](https://travis-ci.org/FriendsOfCake/app-template.svg)](https://travis-ci.org/FriendsOfCake/app-template)

An empty CakePHP project for use with composer

## Requirements

PHP 5.4 and above.

## Installation

	composer -sdev create-project friendsofcake/app-template ProjectName

This will create a new project, with dependencies, based on this repository. Be sure to point
the webserver at the `webroot` folder and ensure that [URL rewriting][1]
is configured correctly.

## Sane-default Configuration

By default, the following has been enabled:

- Composer Autoloading
- Setting Timezone to UTC
- Setting database connection encoding to utf8

You may change any of these at your leisure.

### Application Configuration

This template is setup to configure the application via [environment variables](http://en.wikipedia.org/wiki/Environment_variable) and [data source names](http://en.wikipedia.org/wiki/Data_source_name) (DSN).

#### What is an Environment variable?

Defining configuration settings via environment variables allows clear separation between the code, and the config it is running. To remove any complexity, this repository includes [josegonzalez/php-dotenv](https://github.com/josegonzalez/php-dotenv), which automatically configures the environment if it's not already defined.

#### What is a DSN?

A DSN is a string which defines how to connect to a service. Since it's a string, it's portable, not language or implementation dependent and anything capable of parsing it can know how to connect to the service it points at.

#### OK but why use Env variables and DSNs?

Using environment variables makes it very easy to separate install-specific config settings from the code itself; and possible to change the application config _without_ modifying the source files. 
There is only [one file](https://github.com/FriendsOfCake/app-template/blob/master/app/Config/.env.default) containing install-specific settings in the template and  that file is only used at all [if the environment isn't already configured](https://github.com/FriendsOfCake/app-template/blob/master/app/Config/core.php#L38-L57). 

The intention is that in a production system the _environment_ is configured not an application - and the application just reads that information.

#### Ok I'm sold, how do I use this?

In a development scenario, copy the file `Config/.env.default` to `Config/.env` and edit it.

In a production scenario - configure the environment however you wish (via webserver config for example) and remove the use of `php-dotenv`.

In neither case is it necessary/desirable to modify any php files to configure the application temporarily or permanently.

#### Yeah.. that's not for me.

If you don't want to use Env variables and DSNs - change it =). 

 * Use a standard `database.php` file 
 * Use a standard `email.php` file 
 * Define `debug` to an integer not an env variable
 * Remove the php-dotenv loading logic
 * It's also recommended to remove `database.php` (and `core.php` and `email.php`) from the repository as they need to be modified on each install

## Heroku Compatibility

This application template is compatible with the [official Heroku PHP buildpack](https://github.com/heroku/heroku-buildpack-php). To use, simply configure your buildpack:

    heroku config:set BUILDPACK_URL=https://github.com/heroku/heroku-buildpack-php
    heroku config:set LOG_PATH=/app/vendor/php/var/log/
    heroku config:set SECURITY_SALT=SOME_ALPHANUMERIC_SALT_HERE
    heroku config:set SECURITY_CIPHER_SEED=SOME_NUMERIC_SEED_HERE

To setup a production MySQL database setup a ClearDB MySQL add-on in Heroku.

    heroku addons:add cleardb

By default its config variable will be set under the key CLEARDB_DATABASE_URL. For our app-template we want this configured at DATABASE_URL.

    old_db_url=`heroku config:get CLEARDB_DATABASE_URL`
    heroku config:set DATABASE_URL="$old_db_url"
    heroku config:unset CLEARDB_DATABASE_URL

## Note about dependencies

FriendsOfCake encourages the use of composer and it's best not to mix composer with git submodules for
dependency management. If you need to use submodules you might notice `/vendor` and `/Plugin` folders are
ignored by git. Composer creates those directories when installing vendors and plugins.

There a few ways to solve this:
- edit the `.gitignore` file
- use the `-f` param with `git add Plugin/SomePlugin -f`
- use `app/Plugin` and `app/Vendor` for your submodules.

 [1]: http://book.cakephp.org/2.0/en/installation/url-rewriting.html

## Included packages
The application template comes with some dependencies already included in the composer file. These are designed to help you get up and running quickly.

* [friendsofcake/Crud](https://github.com/friendsofcake/crud)
* [josegonzalez/dotenv](https://github.com/josegonzalez/php-dotenv)
* [ad7six/dsn](https://github.com/AD7six/php-dsn)

To find out how to make the most of these packages, please read their respective readme files.
