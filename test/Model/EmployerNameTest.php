<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\EmployerName;

class EmployerNameTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new EmployerName();
        $this->assertInstanceOf(EmployerName::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new EmployerName();
        $model->set('foo');
        $this->assertEquals('foo', $model->get());
    }

}