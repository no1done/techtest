<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\LoanPurpose;
use Application\Enum\LoanPurpose as LoanPurposeEnum;

class LoanPurposeTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new LoanPurpose();
        $this->assertInstanceOf(LoanPurpose::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new LoanPurpose();
        $model->set(LoanPurposeEnum::other);
        $this->assertEquals('other', $model->get());
    }

    public function testTypeErrorIsThrownIfNonEnumSet(): void
    {
        $this->expectException(\TypeError::class);
        $model = new LoanPurpose();
        $model->set("other");
    }

}