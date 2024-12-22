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

namespace Test\Ease\TWB;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:42.
 */
class ButtonDropdownTest extends \Test\Ease\Html\DivTagTest
{
    public string $rendered = '<div class="btn-group"><button class="btn btn-default  dropdown-toggle" type="button" data-toggle="dropdown"> <span class="caret"></span></button><ul class="dropdown-menu" role="menu"></ul></div>';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new \Ease\TWB\ButtonDropdown();
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown(): void
    {
    }

    public function testConstructor(): void
    {
        $classname = \get_class($this->object);

        // Get mock, without the constructor being called
        $mock = $this->getMockBuilder($classname)
            ->disableOriginalConstructor()
            ->getMockForAbstractClass();
        $mock->__construct('Test');

        $mock->__construct(
            'Tag',
            'success',
            10,
            ['a.html' => 'A'],
            ['title' => 'dropdown'],
        );
    }

    /**
     * @covers \Ease\TWB\ButtonDropdown::addMenuItem
     *
     * @todo   Implement testAddMenuItem().
     */
    public function testAddMenuItem(): void
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.',
        );
    }

    /**
     * @covers \Ease\TWB\ButtonDropdown::divider
     *
     * @todo   Implement testDivider().
     */
    public function testDivider(): void
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.',
        );
    }
}
