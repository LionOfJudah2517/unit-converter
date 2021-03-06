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

namespace UnitConverter\Tests\Unit;

use PHPUnit\Framework\TestCase;
use UnitConverter\UnitConverter;
use UnitConverter\Calculator\SimpleCalculator;
use UnitConverter\Registry\UnitRegistry;
use UnitConverter\Unit\Length\Centimetre;
use UnitConverter\Unit\Length\Inch;

/**
 * @coversDefaultClass UnitConverter\UnitConverter
 * @uses UnitConverter\UnitConverter
 * @uses UnitConverter\Calculator\AbstractCalculator
 * @uses UnitConverter\Calculator\SimpleCalculator
 * @uses UnitConverter\Registry\UnitRegistry
 * @uses UnitConverter\Unit\AbstractUnit
 * @uses UnitConverter\Unit\Length\Centimetre
 * @uses UnitConverter\Unit\Length\Inch
 */
class UnitConverterSpec extends TestCase
{
    protected function setUp ()
    {
        $this->converter = new UnitConverter(
            new UnitRegistry(array(
                new Centimetre,
                new Inch,
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
     * @covers ::convert
     * @covers ::from
     * @covers ::to
     * @covers ::calculate
     */
    public function assertCalculateMethodReturnsCorrectCalculation ()
    {
        $expected = 2.54; # = (1 * 0.0254) / 0.01
        $actual = $this->converter
            ->convert(1)
            ->from("in")
            ->to("cm")
            ;

        $this->assertEquals($expected, $actual);
        $this->assertInternalType("float", $actual);
    }

    /**
     * @test
     * @coversNothing
     */
    public function assertConversionThrowsErrorExceptionAtUnknownUnits ()
    {
        $this->expectException("UnitConverter\\Exception\\UnknownUnitOfMeasureException");
        $this->converter
            ->convert(1)
            ->from("yd") # any unregistered unit
            ->to("in")
            ;
    }
}
