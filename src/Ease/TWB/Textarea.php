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
 * Textarea pro Twitter Bootstap.
 *
 * @author vitex
 */
class Textarea extends \Ease\Html\TextareaTag
{
    /**
     * Textarea.
     *
     * @param string $name       jméno tagu
     * @param string $content    obsah textarey
     * @param array  $properties vlastnosti tagu
     */
    public function __construct($name, $content = '', $properties = [])
    {
        parent::__construct($name, $content, $properties);
        $this->addTagClass('form-control');
    }
}
