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
 * Odznak bootstrapu.
 */
class Badge extends \Ease\Html\SpanTag
{
    /**
     * Návěstí bootstrapu.
     *
     * @see http://getbootstrap.com/components/#badges
     *
     * @param mixed                 $content
     * @param array<string, string> $properties
     */
    public function __construct($content = null, $properties = [])
    {
        parent::__construct($content, $properties);
        $this->addTagClass('badge');
    }
}
