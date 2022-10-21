<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\SubId;

class SubIdTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new SubId();
        $this->assertInstanceOf(SubId::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new SubId();
        $model->set('foo');
        $this->assertEquals('foo', $model->get());
    }

}