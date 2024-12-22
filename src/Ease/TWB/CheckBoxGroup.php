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

class CheckBoxGroup extends \Ease\Container
{
    /**
     * @param array $items
     */
    public $items = [];

    public function __construct($items)
    {
        $this->items = $items;
    }

    public function finalize(): void
    {
        foreach ($this->items as $name => $value) {
            $this->addItem(new Checkbox($name, $value, $value, $checked));
        }
    }
}
