<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\ExpenditureTransport;

class ExpenditureTransportTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new ExpenditureTransport();
        $this->assertInstanceOf(ExpenditureTransport::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new ExpenditureTransport();
        $model->set(100);
        $this->assertEquals(100, $model->get());
    }

}