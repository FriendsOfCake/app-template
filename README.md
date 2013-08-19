# App Template

An empty CakePHP project for use with composer

##Installation

	composer -sdev create-project friendsofcake/app-template ProjectName

This will create a new project, with dependencies, based on this repository. Be sure to point
the webserver at the `App/webroot` folder (a [production install][1]), ensure that [url rewriting][2]
is configured correctly.

##Tmp folders?

This repository does not include the tmp folder structure, if the version of CakePHP in use does
not auto-create them, they can be created manually like so:

	cd app
	mkdir -p tmp/cache/models
	mkdir tmp/cache/persistent
	mkdir tmp/cache/views
	mkdir tmp/logs
	mkdir tmp/sessions
	mkdir tmp/tests

  [1]: http://book.cakephp.org/2.0/en/installation.html#production
  [2]: http://book.cakephp.org/2.0/en/installation/url-rewriting.html
