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

class Panel extends \Ease\Html\DivTag
{
    /**
     * Hlavička panelu.
     */
    public \Ease\Html\DivTag $heading;

    /**
     * Tělo panelu.
     */
    public \Ease\Html\DivTag $body;

    /**
     * Patička panelu.
     */
    public \Ease\Html\DivTag $footer;

    /**
     * Typ Panelu.
     *
     * @var string succes|wanring|info|danger
     */
    public string $type = 'default';

    /**
     * Obsah k přidání do patičky panelu.
     */
    public ?\Ease\Embedable $addToFooter;

    /**
     * Panel Twitter Bootstrapu.
     *
     * @param mixed|string $heading
     * @param string       $type    succes|wanring|info|danger
     * @param mixed        $body    tělo panelu
     * @param mixed        $footer  patička panelu. FALSE = nezobrazit vůbec
     */
    public function __construct(
        $heading = null,
        $type = 'default',
        $body = null,
        $footer = null
    ) {
        $this->type = $type;
        $this->addToFooter = $footer;
        parent::__construct(null, ['class' => 'panel panel-'.$this->type]);

        if (null !== $heading) {
            $this->heading = parent::addItem(new \Ease\Html\DivTag(
                $heading,
                ['class' => 'panel-heading'],
            ), 'head');
        }

        if ($body) {
            $this->getBody($body);
        }
    }

    /**
     * Ensure the body is initialized.
     *
     * @param mixed $initialContent
     *
     * @return \Ease\Html\DivTag body
     */
    public function getBody($initialContent = '')
    {
        if (isset($this->body) === false) {
            $this->body = parent::addItem(new \Ease\Html\DivTag(
                $initialContent,
                ['class' => 'panel-body']
            ), 'body');
        }

        return $this->body;
    }

    /**
     * Vloží další element do objektu.
     *
     * @param mixed  $pageItem     hodnota nebo EaseObjekt s metodou draw()
     * @param string $pageItemName Pod tímto jménem je objekt vkládán do stromu
     *
     * @return pointer Odkaz na vložený objekt
     */
    public function &addItem($pageItem, $pageItemName = null)
    {
        $added = $this->getBody()->addItem($pageItem, $pageItemName);

        return $added;
    }

    /**
     * Vloží obsah do patičky.
     */
    public function finalize(): void
    {
        if (!\count($this->body->pageParts)) {
            unset($this->pageParts['body']);
        }

        if ($this->addToFooter) {
            $this->footer()->addItem($this->addToFooter);
        }
    }

    /**
     * Vrací patičku panelu.
     *
     * @param mixed $content obsah pro vložení to patičky
     *
     * @return \Ease\Html\DivTag
     */
    public function footer($content = null)
    {
        if (isset($this->footer)) {
            if ($content) {
                $this->footer->addItem($content);
            }
        } else {
            $this->footer = parent::addItem(
                new \Ease\Html\DivTag(
                    $content,
                    ['class' => 'panel-footer panel-'.$this->type],
                ),
                'footer',
            );
        }

        return $this->footer;
    }
}
