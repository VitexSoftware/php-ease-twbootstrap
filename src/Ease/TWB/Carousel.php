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

use Ease\Html\ImgTag;

/**
 * Carousel for Twitter Bootstrap.
 */
class Carousel extends \Ease\Html\DivTag
{
    /**
     * Carousel name.
     */
    public string $name = '';

    /**
     * Carousel's inner div.
     */
    public \Ease\Html\DivTag $inner;

    /**
     * Carousel's inner div.
     */
    public \Ease\Html\OlTag $indicators;

    /**
     * Which slide is active ?
     */
    public int $active = 0;

    /**
     * Twitter bootstrap Carousel.
     *
     * @url   http://getbootstrap.com/javascript/#carousel
     *
     * @param string $name
     * @param array  $properties ['data-ride'=>'carousel'] means autorun
     */
    public function __construct($name = null, $properties = [])
    {
        parent::__construct(null, $properties);
        $this->name = $this->setTagID($name);
        $this->setTagClass('carousel slide');
        $this->indicators = $this->addItem(new \Ease\Html\OlTag(
            null,
            ['class' => 'carousel-indicators'],
        ));
        $this->inner = $this->addItem(new \Ease\Html\DivTag(
            null,
            ['class' => 'carousel-inner', 'role' => 'listbox'],
        ));
    }

    /**
     * Carousel Slide.
     *
     * @param ImgTag|mixed $slide      body Image or something else
     * @param string       $capHeading
     * @param string       $caption
     * @param bool         $default    show slide by default
     */
    public function addSlide(
        $slide,
        $capHeading = '',
        $caption = '',
        $default = false
    ): void {
        $item = new \Ease\Html\DivTag($slide, ['class' => 'item']);

        if ($default) {
            $item->addTagClass('active');
        }

        if ($capHeading || $caption) {
            $cpt = $item->addItem(new \Ease\Html\DivTag(
                null,
                ['class' => 'carousel-caption'],
            ));

            if ($capHeading) {
                $cpt->addItem(new \Ease\Html\H4Tag($capHeading));
            }

            if ($caption) {
                $cpt->addItem(new \Ease\Html\PTag($caption));
            }
        }

        $to = $this->indicators->getItemsCount();
        $indicator = new \Ease\Html\LiTag(
            null,
            ['data-target' => '#'.$this->name, 'data-slide-to' => $to],
        );

        if ($default) {
            $indicator->addTagClass('active');
            $this->active = $to;
        }

        $this->indicators->addItem($indicator);
        $this->inner->addItem($item);
    }

    /**
     * Add Navigation buttons.
     */
    public function finalize(): void
    {
        Part::twBootstrapize();

        if (null === $this->active && $this->getItemsCount()) { // We need one slide active
            $this->indicators->getFirstPart()->setTagClass('active');
            $this->inner->getFirstPart()->addTagClass('active');
        }

        $this->inner->addItem(
            new \Ease\Html\ATag(
                '#'.$this->getTagID(),
                [
                    new \Ease\Html\SpanTag(
                        null,
                        ['class' => 'glyphicon glyphicon-chevron-left', 'aria-hidden' => 'true'],
                    ),
                    new \Ease\Html\SpanTag(_('Previous'), ['class' => 'sr-only']),
                ],
                ['class' => 'left carousel-control', 'data-slide' => 'prev', 'role' => 'button'],
            ),
        );
        $this->inner->addItem(
            new \Ease\Html\ATag(
                '#'.$this->getTagID(),
                [
                    new \Ease\Html\SpanTag(
                        null,
                        ['class' => 'glyphicon glyphicon-chevron-right', 'aria-hidden' => 'true'],
                    ),
                    new \Ease\Html\SpanTag(_('Next'), ['class' => 'sr-only']),
                ],
                ['class' => 'right carousel-control', 'data-slide' => 'next', 'role' => 'button'],
            ),
        );

        if ($this->getTagProperty('data-ride') !== 'carousel') {
            $this->addJavaScript(
                '$(\'#'.$this->name.'\').carousel();',
                null,
                true,
            );
        }
    }
}
