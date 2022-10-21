<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\BankAccountNumber;

class BankAccountNumberTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new BankAccountNumber();
        $this->assertInstanceOf(BankAccountNumber::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new BankAccountNumber();
        $model->set('12345678');
        $this->assertEquals('12345678', $model->get());
    }

    public function testExceptionIsThrownWhenInvalidAccountLength(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new BankAccountNumber();
        $model->set('12345678910');
    }

    public function testExceptionIsThrownWhenInvalidTypeSet(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new BankAccountNumber();
        $model->set(123.56);
    }

    public function testExceptionIsThrownWhenAlphaNumericValueSet(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new BankAccountNumber();
        $model->set("12ab5678");
    }
}