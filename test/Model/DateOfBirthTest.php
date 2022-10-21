<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\DateOfBirth;

class DateOfBirthTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new DateOfBirth();
        $this->assertInstanceOf(DateOfBirth::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new DateOfBirth();
        $model->set(new \DateTime("01-01-1990"));
        $this->assertInstanceOf(\DateTime::class, $model->get());
        $this->assertEquals('01-01-1990', $model->get()->format('d-m-Y'));
    }

    public function testRuntimeExceptionIsThrownIfAgeUnderEighteen(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new DateOfBirth();
        $model->set(new \DateTime("01-01-2020"));
    }

    public function testTypeExceptionThrownIfPassThroughNonDate(): void
    {
        $this->expectException(\TypeError::class);
        $model = new DateOfBirth();
        $model->set("01-01-1990");
    }
}