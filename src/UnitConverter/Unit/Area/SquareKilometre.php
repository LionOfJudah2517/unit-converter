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

namespace UnitConverter\Unit\Area;

/**
 * Square kilometre data class.
 *
 * @version 2.0.0
 * @since 0.0.1
 * @author Jordan Brauer <jbrauer.inc@gmail.com>
 */
class SquareKilometre extends AreaUnit
{
    protected function configure (): void
    {
        $this
            ->setName("square kilometre")

            ->setSymbol("km2")

            ->setScientificSymbol("km²")

            ->setUnits(1000000)
            ;
    }
}
