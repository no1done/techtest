<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\BankSortCode;

class BankSortCodeTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new BankSortCode();
        $this->assertInstanceOf(BankSortCode::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new BankSortCode();
        $model->set('12-34-56');
        $this->assertEquals('12-34-56', $model->get());
    }

    public function testRuntimeExceptionIsThrownIfBadFormat(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new BankSortCode();
        $model->set('123456');
    }

    public function testRuntimeExceptionIsThrownIfContainsAlpha(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new BankSortCode();
        $model->set('12-ab-56');
    }
}