<?php

namespace ApplicationTest\Model;

use PHPUnit\Framework\TestCase;
use Application\Model\ResidentialStatus;
use Application\Enum\ResidentialStatus as ResidentialStatusEnum;

class ResidentialStatusTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new ResidentialStatus();
        $this->assertInstanceOf(ResidentialStatus::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $model = new ResidentialStatus();
        $model->set(ResidentialStatusEnum::other);
        $this->assertEquals(ResidentialStatusEnum::other, $model->get());
    }

}