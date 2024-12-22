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

class RadioButtonGroup extends \Ease\Container
{
    /**
     * Jméno.
     */
    public string $name = null;

    /**
     * Typ.
     */
    public bool $inline = false;

    /**
     * Položky k zobrazení.
     */
    public array $radios = [];

    /**
     * Předvolená hodnota.
     */
    public string $checked = null;

    /**
     * Zobrazí pole radiobuttonů.
     *
     * @param string $name
     * @param array  $radios  pole Hodnota=>Popisek
     * @param string $checked
     * @param bool   $inline
     */
    public function __construct($name, $radios, $checked = null, $inline = false)
    {
        $this->name = $name;
        $this->checked = $checked;
        $this->inline = $inline;
        $this->radios = $radios;
        parent::__construct();
    }

    /**
     * Seskládá pole radiobuttonů.
     */
    public function finalize(): void
    {
        $class = 'radio';

        if ($this->inline) {
            $class .= '-inline';
        }

        $pos = 1;

        foreach ($this->radios as $value => $caption) {
            if ($value === $this->checked) {
                $checked = 'checked';
            } else {
                $checked = null;
            }

            $tagProperties = ['id' => $this->name.$pos++, 'name' => $this->name,
                $checked, ];
            $this->addItem(new \Ease\Html\DivTag(new \Ease\Html\LabelTag(
                null,
                [new \Ease\Html\InputRadioTag(
                    $this->name,
                    $value,
                    $tagProperties,
                ),
                    $caption],
            ), ['class' => $class]));
        }
    }
}
