<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\ConsentCall;

class ConsentCallTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new ConsentCall();
        $this->assertInstanceOf(ConsentCall::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new ConsentCall();
        $model->set(true);
        $this->assertEquals(true, $model->get());
    }

}