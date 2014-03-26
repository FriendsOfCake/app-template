<?php
/**
 * All app tests
 */
class AllAppTestsTest extends PHPUnit_Framework_TestSuite {

/**
 * Suite define the tests for this suite
 *
 * @return CakeTestSuite
 */
	public static function suite() {
		$suite = new CakeTestSuite('All app tests');
		$path = APP . 'Test' . DS . 'Case' . DS;
		$suite->addTestDirectoryRecursive($path);
		return $suite;
	}

}
