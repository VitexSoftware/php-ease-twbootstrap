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
 * @deprecated since version 1.0
 */
class GlyphIcon extends \Ease\Html\Span
{
    /**
     * Vloží ikonu.
     *
     * @see  http://getbootstrap.com/components/#glyphicons Přehled ikon
     *
     * @param string $code Kód ikony z přehledu
     */
    public function __construct($code)
    {
        parent::__construct(null, ['class' => 'glyphicon glyphicon-'.$code]);
    }
}
