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

class StatusMessages extends \Ease\Html\DivTag
{
    /**
     * Blok stavových zpráv.
     * Status message block.
     */
    public function __construct()
    {
        $properties['class'] = 'well';
        $properties['id'] = 'StatusMessages';
        $properties['title'] = _('Click to hide messages');
        $properties['style'] = 'padding-top: 40px; padding-bottom: 0px;';
        parent::__construct(null, null, $properties);
        \Ease\JQuery\Part::jQueryze();
        $this->addJavaScript(
            '$("#StatusMessages").click(function () { $("#StatusMessages").fadeTo("slow",0.25).slideUp("slow"); });',
            3,
            true,
        );
    }

    /**
     * Vypíše stavové zprávy.
     * Print status messafes.
     */
    public function draw(): void
    {
        $statusMessages = trim(\Ease\Shared::webPage()->getStatusMessagesAsHtml());

        if (\strlen($statusMessages)) {
            parent::addItem($statusMessages);
            parent::draw();
        } else {
            $this->suicide();
        }
    }
}
