<?php

/*
 * This file is part of Laravel Binput.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Tests\Binput\Facades;

use GrahamCampbell\Binput\Binput;
use GrahamCampbell\Binput\Facades\Binput as Facade;
use GrahamCampbell\TestBenchCore\FacadeTrait;
use GrahamCampbell\Tests\Binput\AbstractTestCase;

/**
 * This is the binput facade test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class BinputTest extends AbstractTestCase
{
    use FacadeTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'binput';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return Facade::class;
    }

    /**
     * Get the facade root.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return Binput::class;
    }
}
