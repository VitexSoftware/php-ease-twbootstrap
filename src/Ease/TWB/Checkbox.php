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

class Checkbox extends \Ease\Html\DivTag
{
    /**
     * Odkaz na checkbox.
     */
    public \Ease\Html\CheckboxTag $checkbox;

    /**
     * Checkbox pro TwitterBootstrap.
     *
     * @param string                $name
     * @param int|string            $value
     * @param mixed                 $content
     * @param bool                  $checked
     * @param array<string, string> $properties
     */
    public function __construct(
        $name = null,
        $value = 'on',
        $content = null,
        $checked = false,
        $properties = [],
    ) {
        $label = new \Ease\Html\LabelTag($name);
        $this->checkbox = $label->addItem(new \Ease\Html\CheckboxTag(
            $name,
            $checked,
            $value,
            $properties,
        ));

        if ($content) {
            $label->addItem($content);
        }

        parent::__construct($label);
    }
}
