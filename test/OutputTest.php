<?php

namespace GloatingCord26\Testing;

use GloatingCord26\Example;
use PHPUnit\Framework\TestCase;

/**
 * @internal
 * @coversNothing
 */
final class OutputTest extends TestCase
{
    public function testExpectWordActualWord(): void
    {
        $this->expectOutputString('Hello world');

        $incomingString = new Example();
        echo $incomingString->Example();
    }
}
