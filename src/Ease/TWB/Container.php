<?php

declare(strict_types=1);

/**
 * This file is part of the EaseTWBootstrap3 package
 *
 * https://github.com/VitexSoftware/php-ease-twbootstrap
 *
 * (c) Vítězslav Dvořák <http://vitexsoftware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Ease\TWB;

class Container extends \Ease\Html\DivTag
{
    /**
     * Twitter Bootrstap Container.
     *
     * @param mixed $content
     */
    public function __construct($content = null)
    {
        parent::__construct($content, ['class' => 'container']);
    }
}
