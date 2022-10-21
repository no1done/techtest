<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\ConsentEmailSms;

class ConsentEmailSmsTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new ConsentEmailSms();
        $this->assertInstanceOf(ConsentEmailSms::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new ConsentEmailSms();
        $model->set(true);
        $this->assertEquals(true, $model->get());
    }

}