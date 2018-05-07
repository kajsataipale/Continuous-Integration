<?php

/*
 * This file is part of Yrgo.
 *
 * (c) Yrgo, högre yrkesutbildning.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Yrgo\Tests\Weapons;

use InvalidArgumentException;
use PHPUnit\Framework\TestCase;
use Yrgo\Weapons\Laser;

/**
 * This is the laser weapon test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class LaserTest extends TestCase
{
    public function testGetName()
    {
        $laser = new Laser();

        $this->assertSame('laser', $laser->getName());
    }

    public function testGetColor()
    {
        $laser = new Laser();

        $this->assertNull($laser->getColor());
    }

    public function testSetColor()
    {
        $laser = new Laser();

        $laser->setColor('hotpink');

        $this->assertSame('hotpink', $laser->getColor());
    }

    public function testSetInvalidColor()
    {
        $this->expectException(InvalidArgumentException::class);
        $this->expectExceptionMessage('Invalid laser color [mintcream].');

        $laser = new Laser();

        $laser->setColor('mintcream');
    }
}
