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

class Part extends \Ease\Part
{
    /**
     * Vložení náležitostí pro twitter bootstrap.
     */
    public function __construct()
    {
        parent::__construct();
        self::twBootstrapize();
    }

    /**
     * Opatří objekt vším potřebným pro funkci bootstrapu.
     */
    public static function twBootstrapize()
    {
        parent::jQueryze();
        \Ease\WebPage::singleton()->includeCSS(\Ease\WebPage::singleton()->bootstrapCSS);
        \Ease\WebPage::singleton()->includeCSS(\Ease\WebPage::singleton()->bootstrapThemeCSS);
        \Ease\WebPage::singleton()->includeJavaScript(\Ease\WebPage::singleton()->bootstrapJavaScript);

        return true;
    }

    /**
     * Vrací ikonu.
     *
     * @see  http://getbootstrap.com/components/#glyphicons Přehled ikon
     *
     * @param string $code       Kód ikony z přehledu
     * @param array  $properties Vlastnosti Tagu
     */
    public static function glyphIcon($code, $properties = [])
    {
        if (null === $properties) {
            $properties = ['class' => 'glyphicon glyphicon-'.$code];
        } else {
            if (isset($properties['class'])) {
                $properties['class'] = 'glyphicon glyphicon-'.$code.' '.$properties['class'];
            } else {
                $properties['class'] = 'glyphicon glyphicon-'.$code;
            }
        }

        return new \Ease\Html\Span(null, $properties);
    }
}
