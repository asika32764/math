<?php

namespace Brick\Math\Tests;

use Brick\Math\Internal\Calculator;

/**
 * Tests for Calculator implementation detection.
 */
class CalculatorDetectTest extends \PHPUnit_Framework_TestCase
{
    public function testGetWithNoCalculatorSetDetectsCalculator()
    {
        $currentCalculator = Calculator::get();

        Calculator::set(null);
        $this->assertInstanceOf(Calculator::getNamespace(), Calculator::get());

        Calculator::set($currentCalculator);
    }
}
