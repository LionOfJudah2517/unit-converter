<?php

/**
 * This file is part of the jordanbrauer/unit-converter PHP package.
 *
 * @copyright 2017 Jordan Brauer <jbrauer.inc@gmail.com>
 * @license MIT
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare (strict_types = 1);

namespace UnitConverter\Tests\Integration\Unit\Temperature;

use PHPUnit\Framework\TestCase;
use UnitConverter\UnitConverter;
use UnitConverter\Calculator\SimpleCalculator;
use UnitConverter\Registry\UnitRegistry;
use UnitConverter\Unit\Temperature\Kelvin;
use UnitConverter\Unit\Temperature\Fahrenheit;
use UnitConverter\Unit\Temperature\Celsius;

/**
 * Ensure that Fahrenheit is Fahrenheit.
 *
 * @covers UnitConverter\Unit\Temperature\Fahrenheit
 * @uses UnitConverter\Unit\Temperature\Kelvin
 * @uses UnitConverter\Unit\Temperature\Celsius
 * @uses UnitConverter\Unit\AbstractUnit
 * @uses UnitConverter\UnitConverter
 * @uses UnitConverter\Calculator\SimpleCalculator
 * @uses UnitConverter\Calculator\AbstractCalculator
 * @uses UnitConverter\Registry\UnitRegistry
 */
class FahrenheitSpec extends TestCase
{
    protected function setUp ()
    {
        $this->converter = new UnitConverter(
            new UnitRegistry(array(
                new Fahrenheit,
                new Kelvin,
                new Celsius,
            )),
            new SimpleCalculator
        );
    }

    protected function tearDown ()
    {
        unset($this->converter);
    }

    /**
     * @test
     */
    public function assert0FahrenheitIs255decimal37Kelvin ()
    {
        $expected = 255.37;
        $actual = $this->converter
            ->convert(0)
            ->from("F")
            ->to("K")
            ;

        $this->assertEquals($expected, $actual);
    }

    /**
     * @test
     */
    public function assert0FahrenheitIsNegative17decimal7778Celsius ()
    {
        $expected = -17.7778;
        $actual = $this->converter
            ->convert(0, 4)
            ->from("F")
            ->to("C")
            ;

        $this->assertEquals($expected, $actual);
    }
}
