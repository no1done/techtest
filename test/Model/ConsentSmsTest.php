<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\ConsentSms;

class ConsentSmsTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new ConsentSms();
        $this->assertInstanceOf(ConsentSms::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new ConsentSms();
        $model->set(true);
        $this->assertEquals(true, $model->get());
    }

}