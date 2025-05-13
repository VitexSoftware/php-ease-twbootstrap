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

class Label extends \Ease\Html\Span
{
    /**
     * Návěstí bootstrapu.
     *
     * @see http://getbootstrap.com/components/#labels
     *
     * @param string                $type       info|warning|error|success
     * @param mixed                 $content
     * @param array<string, string> $properties
     */
    public function __construct(
        $type = 'default',
        $content = null,
        $properties = [],
    ) {
        if (isset($properties['class'])) {
            $properties['class'] .= ' label label-'.$type;
        } else {
            $properties['class'] = ' label label-'.$type;
        }

        parent::__construct($content, $properties);
    }
}
