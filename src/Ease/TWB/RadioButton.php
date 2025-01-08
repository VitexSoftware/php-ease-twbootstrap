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

class RadioButton extends \Ease\Html\DivTag
{
    /**
     *  RadioButton Twitter Bootstrapu.
     *
     * @param string                $name
     * @param int|string            $value
     * @param mixed                 $caption
     * @param array<string, string> $properties
     */
    public function __construct(
        $name = null,
        $value = null,
        $caption = null,
        $properties = []
    ) {
        if (isset($properties['id'])) {
            $for = $properties['id'];
        } else {
            $for = $name;
        }

        parent::__construct(
            new \Ease\Html\LabelTag(
                $for,
                [new \Ease\Html\InputRadioTag($name, $value, $properties), $caption],
            ),
        );
    }
}
