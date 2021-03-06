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

namespace UnitConverter\Tests\Integration\Unit\Area;

use PHPUnit\Framework\TestCase;
use UnitConverter\UnitConverter;
use UnitConverter\Calculator\SimpleCalculator;
use UnitConverter\Registry\UnitRegistry;
use UnitConverter\Unit\Area\SquareMetre;
use UnitConverter\Unit\Area\SquareMile;

/**
 * Ensure that a square mile is a square mile.
 *
 * @covers UnitConverter\Unit\Area\SquareMile
 * @uses UnitConverter\Unit\Area\SquareMetre
 * @uses UnitConverter\Unit\AbstractUnit
 * @uses UnitConverter\UnitConverter
 * @uses UnitConverter\Calculator\SimpleCalculator
 * @uses UnitConverter\Calculator\AbstractCalculator
 * @uses UnitConverter\Registry\UnitRegistry
 */
class SquareMileSpec extends TestCase
{
    protected function setUp ()
    {
        $this->converter = new UnitConverter(
            new UnitRegistry(array(
                new SquareMetre,
                new SquareMile,
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
    public function assert1SquareMileIs2589988decimal11SquareMetres ()
    {
        $expected = 2589988.11;
        $actual = $this->converter
            ->convert(1)
            ->from("mi2")
            ->to("m2")
            ;

        $this->assertEquals($expected, $actual);
    }
}
