<?php
/**
 * Portable PHP password hashing framework.
 *
 * @package PHPass
 * @subpackage Tests
 * @category Cryptography
 * @author Solar Designer <solar at openwall.com>
 * @author Ryan Chouinard <rchouinard at gmail.com>
 * @license http://www.opensource.org/licenses/mit-license.html MIT License
 * @link http://www.openwall.com/phpass/ Original phpass project page.
 * @link https://github.com/rchouinard/phpass PHPass project at GitHub.
 */

/**
 * @namespace
 */
namespace Phpass\Exception;
use Phpass\Exception\RuntimeException;

/**
 * @see PHPUnit_Framework_TestCase
 */
require_once 'PHPUnit/Framework/TestCase.php';

/**
 * @see Phpass\Exception\RuntimeException
 */
require_once 'Phpass/Exception/RuntimeException.php';

/**
 * Portable PHP password hashing framework.
 *
 * @package PHPass
 * @subpackage Tests
 * @category Cryptography
 * @author Solar Designer <solar at openwall.com>
 * @author Ryan Chouinard <rchouinard at gmail.com>
 * @license http://www.opensource.org/licenses/mit-license.html MIT License
 * @link http://www.openwall.com/phpass/ Original phpass project page.
 * @link https://github.com/rchouinard/phpass PHPass project at GitHub.
 */
class RuntimeExceptionTest extends \PHPUnit_Framework_TestCase
{

    /**
     * @test
     * @return void
     */
    public function exceptionClassImplementsCorrectInterface()
    {
        $exception = new RuntimeException('Test exception');

        $this->assertInstanceOf(
            '\Phpass\Exception',
            $exception
        );

        $this->assertInstanceOf(
            '\RuntimeException',
            $exception
        );

    }

}