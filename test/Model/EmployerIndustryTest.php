<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\EmployerIndustry;
use Application\Enum\EmployerIndustry as EmployerIndustryEnum;

class EmployerIndustryTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new EmployerIndustry();
        $this->assertInstanceOf(EmployerIndustry::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new EmployerIndustry();
        $model->set(EmployerIndustryEnum::civil_service);
        $this->assertEquals('civil_service', $model->get());
    }

    public function testTypeErrorIsThrownIfNonEnumPassedAsValue(): void
    {
        $this->expectException(\TypeError::class);
        $model = new EmployerIndustry();
        $model->set("civil_service");
    }

}