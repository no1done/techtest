<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\EmploymentStatus;
use Application\Enum\EmploymentStatus as EmploymentStatusEnum;

class EmploymentStatusTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new EmploymentStatus();
        $this->assertInstanceOf(EmploymentStatus::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new EmploymentStatus();
        $model->set(EmploymentStatusEnum::full_time);
        $this->assertEquals('full_time', $model->get());
    }

    public function testTypeErrorThrownIfInvalidParameterPassed(): void
    {
        $this->expectException(\TypeError::class);
        $model = new EmploymentStatus();
        $model->set("full_time");
    }

}