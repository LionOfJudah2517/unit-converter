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

namespace UnitConverter\Unit\Length;

/**
 * Parsec data class.
 *
 * @version 1.0.0
 * @since 0.0.1
 * @author Jordan Brauer <jbrauer.inc@gmail.com>
 */
class Parsec extends LengthUnit
{
    protected function configure (): void
    {
        $this
            ->setName("parsec")

            ->setSymbol("pc")

            # Metric (SI) Units = 3.0857×1016 m
            # – OR – ~31 petametres
            # 3.08567758149E+16
            ->setUnits(30856775814913672.789139379577965)
            ;
    }
}
