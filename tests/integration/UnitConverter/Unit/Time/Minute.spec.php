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

namespace UnitConverter\Tests\Integration\Unit\Time;

use PHPUnit\Framework\TestCase;
use UnitConverter\UnitConverter;
use UnitConverter\Calculator\SimpleCalculator;
use UnitConverter\Registry\UnitRegistry;
use UnitConverter\Unit\Time\Second;
use UnitConverter\Unit\Time\Minute;

/**
 * Ensure that a minute is infact, a minute.
 *
 * @covers UnitConverter\Unit\Time\Minute
 * @uses UnitConverter\Unit\Time\Second
 * @uses UnitConverter\Unit\AbstractUnit
 * @uses UnitConverter\UnitConverter
 * @uses UnitConverter\Calculator\SimpleCalculator
 * @uses UnitConverter\Calculator\AbstractCalculator
 * @uses UnitConverter\Registry\UnitRegistry
 */
class MinuteSpec extends TestCase
{
    protected function setUp ()
    {
        $this->converter = new UnitConverter(
            new UnitRegistry(array(
                new Second,
                new Minute,
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
    public function assert1MinuteIs60Seconds ()
    {
        $expected = 60;
        $actual = $this->converter
            ->convert(1)
            ->from("min")
            ->to("s")
            ;

        $this->assertEquals($expected, $actual);
    }
}
