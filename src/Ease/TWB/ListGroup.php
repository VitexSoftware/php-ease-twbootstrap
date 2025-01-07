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

class ListGroup extends \Ease\Html\UlTag
{
    /**
     * Vytvori ListGroup.
     *
     * @see  http://getbootstrap.com/components/#list-group ListGroup
     *
     * @param mixed                 $ulContents položky seznamu
     * @param array<string, string> $properties parametry tagu
     */
    public function __construct($ulContents = null, $properties = [])
    {
        parent::__construct($ulContents, $properties);
        $this->addTagClass('list-group');
    }

    /**
     * Every item id added in \Ease\Html\LiTag envelope.
     *
     * @param mixed  $pageItem   obsah vkládaný jako položka výčtu
     * @param string $properties Vlastnosti LI tagu
     *
     * @return mixed
     */
    public function &addItemSmart($pageItem, $properties = [])
    {
        $item = parent::addItemSmart($pageItem, $properties);
        $item->addTagClass('list-group-item');

        return $item;
    }
}
