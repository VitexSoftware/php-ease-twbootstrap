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

class ButtonDropdown extends \Ease\Html\DivTag
{
    /**
     * Rozbalovací nabídka.
     */
    public \Ease\Html\UlTag $dropdown;
    public \Ease\Html\ButtonTag $button;

    /**
     * Tlačítko s rozbalovacím menu.
     *
     * @param string $label      popisek tlačítka
     * @param string $type       primary|info|success|warning|danger|inverse|link
     * @param string $size       lg = velký, sm = menší, xs = nejmenší
     * @param array  $items      položky menu
     * @param array  $properties Parametry tagu
     */
    public function __construct(
        $label = null,
        $type = 'default',
        $size = null,
        $items = null,
        $properties = []
    ) {
        parent::__construct(null, $properties);
        $this->setTagClass('btn-group');
        $btnClass = 'btn btn-'.$type.' ';

        if (!empty($size)) {
            $btnClass .= 'btn-'.$size;
        }

        $this->button = $this->addItem(new \Ease\Html\ButtonTag(
            [$label.' <span class="caret"></span>'],
            ['class' => $btnClass.' dropdown-toggle', 'type' => 'button', 'data-toggle' => 'dropdown'],
        ));
        $this->dropdown = $this->addItem(new \Ease\Html\UlTag(
            null,
            ['class' => 'dropdown-menu', 'role' => 'menu'],
        ));

        if (\count($items)) {
            foreach ($items as $item) {
                $this->addMenuItem($item);
            }
        }
    }

    /**
     * Vloží položku do menu tlačítka.
     *
     * @param type $pageItem
     *
     * @return \Ease\Html\LiTag
     */
    public function addMenuItem($pageItem)
    {
        return $this->dropdown->addItemSmart($pageItem);
    }

    /**
     * delící čára menu.
     *
     * @return \Ease\Html\LiTag
     */
    public static function divider()
    {
        return new \Ease\Html\LiTag(null, ['class' => 'divider']);
    }
}
