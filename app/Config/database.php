<?php

use AD7six\Dsn\Wrapper\CakePHP\V2\DbDsn;

class DATABASE_CONFIG {

/**
 * Define connections using environment variables
 *
 * @return void
 */
	public function __construct() {
		$this->default = DbDsn::parse(env('DATABASE_URL'));
		$this->test = DbDsn::parse(env('DATABASE_TEST_URL'));
	}

}
