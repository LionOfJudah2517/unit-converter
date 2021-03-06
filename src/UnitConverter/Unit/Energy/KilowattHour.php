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

namespace UnitConverter\Unit\Energy;

/**
 * Kilowatt hour unit data class.
 *
 * @version 1.0.0
 * @since 0.3.9
 * @author Andrew Boerema <1569403+andrewboerema@users.noreply.github.com>
 */
class KilowattHour extends EnergyUnit
{
    protected function configure (): void
    {
        $this
            ->setName("kilowatt hour")

            ->setSymbol("kW h")

            ->setScientificSymbol("kW · h")

            ->setUnits(3600005.4468)
            ;
    }
}
