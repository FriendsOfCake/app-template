<?php

use AD7six\Dsn\Wrapper\CakePHP\EmailDsn;

class EmailConfig {

/**
 * Define connections using environment variables
 *
 * @return void
 */
	public function __construct() {
		$this->default = DbDsn::parse(env('EMAIL_URL'));
		$this->smtp = DbDsn::parse(env('EMAIL_SMTP_URL'));
		$this->fast = DbDsn::parse(env('EMAIL_FAST_URL'));
	}

}
