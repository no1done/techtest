<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\EmailAddress;

class EmailAddressTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new EmailAddress();
        $this->assertInstanceOf(EmailAddress::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new EmailAddress();
        $model->set('test@test.com');
        $this->assertEquals('test@test.com', $model->get());
    }

    public function testRuntimeExceptionIsThrownIfInvalidEmailAddress(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new EmailAddress();
        $model->set('test @ test . com');
    }

}