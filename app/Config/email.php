<?php

use AD7six\Dsn\Wrapper\CakePHP\V2\EmailDsn;

class EmailConfig {

/**
 * Define connections using environment variables
 *
 * @return void
 */
	public function __construct() {
		$this->default = EmailDsn::parse(env('EMAIL_URL'));
		$this->smtp = EmailDsn::parse(env('EMAIL_SMTP_URL'));
		$this->fast = EmailDsn::parse(env('EMAIL_FAST_URL'));
	}

}
