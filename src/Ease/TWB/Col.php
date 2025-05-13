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

class Col extends \Ease\Html\DivTag
{
    /**
     * Bunka CSS tabulky bootstrapu.
     *
     * @see  http://getbootstrap.com/css/#grid
     *
     * @param int                   $size       Velikost políčka 1 - 12
     * @param mixed                 $content    Obsah políčka
     * @param string                $target     Typ zařízení xs|sm|md|lg
     * @param array<string, string> $properties Další vlastnosti tagu
     */
    public function __construct(
        $size,
        $content = null,
        $target = 'md',
        $properties = [],
    ) {
        if (\array_key_exists('class', $properties)) {
            $addClass = $properties['class'];
        } else {
            $addClass = '';
        }

        $properties['class'] = 'col-'.$target.'-'.$size;
        parent::__construct($content, $properties);

        if (\strlen($addClass)) {
            $this->addTagClass($addClass);
        }
    }
}
