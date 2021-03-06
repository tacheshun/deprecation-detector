<?php

namespace SensioLabs\DeprecationDetector\Tests\RuleSet\Loader\Composer\Exception;

use SensioLabs\DeprecationDetector\RuleSet\Loader\Composer\Exception\ComposerFileIsInvalidException;

class ComposerFileIsInvalidExceptionTest extends \PHPUnit_Framework_TestCase
{
    public function testClassIsInitializable()
    {
        $exception = new ComposerFileIsInvalidException('path/to/lock');
        $this->assertInstanceOf('SensioLabs\DeprecationDetector\RuleSet\Loader\Composer\Exception\ComposerException', $exception);
        $this->assertEquals('composer.lock file "path/to/lock" is invalid.', $exception->getMessage());
    }
}
