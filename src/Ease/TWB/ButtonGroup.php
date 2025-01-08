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

/**
 * Description of ButtonGroup.
 *
 * @author vitex
 */
class ButtonGroup extends \Ease\Html\DivTag
{
    /**
     * Button Group.
     *
     * @param string $label aria-label
     */
    public function __construct($label = '')
    {
        $properties = ['role' => 'group',
            'class' => 'btn-group',
            'aria-label' => $label];
        parent::__construct(null, $properties);
    }

    /**
     * Add new button into Group.
     *
     * @param mixed                 $content    Button content
     * @param string                $type       default|info|success|warning|danger
     * @param array<string, string> $properties adittional properties
     *
     * @return \Ease\Html\ButtonTag Button inserted
     */
    public function addButton($content, $type = 'default', $properties = [])
    {
        if (isset($properties['class'])) {
            $properties['class'] = 'btn btn-'.$type.' '.$properties['class'];
        } else {
            $properties['class'] = 'btn btn-'.$type;
        }

        $button = new \Ease\Html\ButtonTag($content, $properties);

        return $this->addItem($button);
    }
}
