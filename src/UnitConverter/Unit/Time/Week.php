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

namespace UnitConverter\Unit\Time;

/**
 * Week unit data class.
 *
 * @version 2.0.0
 * @since 0.3.9
 * @author Teun Willems
 */
class Week extends TimeUnit
{
    protected function configure (): void
    {
        $this
            ->setName("week")

            ->setSymbol("wk")

            ->setUnits(604800)
            ;
    }
}
