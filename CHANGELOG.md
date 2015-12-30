# Change Log

All notable changes to this project will be documented in this file.
This project adheres to [Semantic Versioning](http://semver.org/).

## [Unreleased](https://github.com/FriendsOfCake/app-template/compare/1.7.0...master)

### Added

### Changed

### Fixed

## [1.7.0](https://github.com/FriendsOfCake/app-template/releases/tag/1.7.0) - 2015-12-30

### Added

- This change log
- Added a note on using redis on heroku for caching

### Changed

- Allow installing any version of CakePHP
- Allow installing any version of php-dotenv

## [1.6.0](https://github.com/FriendsOfCake/app-template/releases/tag/1.6.0) - 2015-08-15

### Added

- Add editorconfig entry for json
- Add support for official heroku buildpack
- Add instructions for using cleardb heroku addon

### Changed

- Require PHPunit 3.7.38
- Upgrade dotenv requirement

### Fixed

- Fix phpunit global require in travis tests
- Fix WWW_ROOT path in console
- Fix TMP path in console

## [1.5.0](https://github.com/FriendsOfCake/app-template/releases/tag/1.5.0) - 2014-06-29

### Added

- Add travis testing to app template

### Changed

- Use HTML5 Blueprint .htaccess
- Add PHP 5.4 Requirement
- Match 3.x app template directory structure
- Set cache configuration for debug_kit
- Require proper PHPUnit for CakePHP 2.x
- Switch to packagist version of CakePHP
- Use CakePHP 2.5 everywhere

## [1.4.0](https://github.com/FriendsOfCake/app-template/releases/tag/1.4.0) - 2014-02-12

### Added

- Add Config files that are present by default in a cakephp app
- add the tmp folder structure

### Changed

- Move configuration to be environment-variable based
- Ensure that the default timezone is set to UTC
- Ensure that database connections default to utf8
- Models use recursive -1 and containable by default
- Install CakePHP from pear to have the latest 2.4.x release
- Drop in or delete heroku support

## [1.3.0](https://github.com/FriendsOfCake/app-template/releases/tag/1.3.0) - 2013-12-27

### Added

- Include composer's class loader
- Add tmp and schema files from the standard app folder

### Changed

- Set default timezone to UTC by default
- Use Pear for CakePHP lib, this ensures the latest 2.4 release
- Permit subfolder installs
- Use Containable by default

## [1.2.0](https://github.com/FriendsOfCake/app-template/releases/tag/1.2.0) - 2013-11-21

### Changed
- Update CakePHP version to 2.4.2
- Update CRUD repo to friendsofcake/crud

## [1.1.0](https://github.com/FriendsOfCake/app-template/releases/tag/1.1.0) - 2013-09-09

### Added
- jippi/cakephp-crud 3.* as dependency

## [1.0.0](https://github.com/FriendsOfCake/app-template/releases/tag/release%2F1.0.0) - 2013-08-20
- Initial release
