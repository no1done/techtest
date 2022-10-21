<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\MiddleName;

class MiddleNameTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new MiddleName();
        $this->assertInstanceOf(MiddleName::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new MiddleName();
        $model->set('foo');
        $this->assertEquals('foo', $model->get());
    }

}