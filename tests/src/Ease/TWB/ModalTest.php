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
 * Generated by PHPUnit_SkeletonGenerator on 2016-01-17 at 23:59:43.
 */
class ModalTest extends \Test\Ease\Html\DivTagTest
{
    public string $rendered = '<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="ModalID" aria-hidden="true"></div>';

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp(): void
    {
        $this->object = new \Ease\TWB\Modal('modal', 'Modal');
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
        $mock->__construct('TestName', 'TestTitle');

        $mock->__construct('name', 'title', 'Content', ['id' => 'modal']);
    }

    /**
     * @covers \Ease\TWB\Modal::finalize
     *
     * @todo   Implement testFinalize().
     */
    public function testFinalize(): void
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.',
        );
    }
}
