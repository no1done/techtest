<?php

namespace ApplicationTest\Model;

use Application\Model\NextPayDate;
use PHPUnit\Framework\TestCase;
use Application\Model\FollowingPayDate;

class FollowingPayDateTest extends TestCase {

    public function testModelCanBeCreated(): void
    {
        $model = new FollowingPayDate();
        $this->assertInstanceOf(FollowingPayDate::class, $model);
    }

    public function testModelGetterAndSetterAccessible(): void
    {
        $nextPayDate = new NextPayDate();
        $nextPayDate->set(new \DateTime("02-01-2023"));

        $model = new FollowingPayDate();
        $model->setNextPayDate($nextPayDate);
        $model->set(new \DateTime("23-01-2023"));
        $this->assertInstanceOf(\DateTime::class, $model->get());
        $this->assertEquals('2023-01-23', $model->get()->format('Y-m-d'));
    }

    public function testRuntimeExceptionThrownIfNextPayDateNotSet(): void
    {
        $this->expectException(\RuntimeException::class);
        $model = new FollowingPayDate();
        $model->set(new \DateTime("23-01-2023"));
    }

    public function testRuntimeExceptionIsThrownIfPayDatesGreaterThan45Days(): void
    {
        $this->expectException(\RuntimeException::class);

        $nextPayDate = new NextPayDate();
        $nextPayDate->set(new \DateTime("02-01-2023"));

        $model = new FollowingPayDate();
        $model->setNextPayDate($nextPayDate);
        $model->set(new \DateTime("23-05-2023"));
    }

    public function testExceptionIsThrownIfDateIsInPastWithin45DayRange()
    {
        $this->expectException(\RuntimeException::class);

        $nextPayDate = new NextPayDate();
        $nextPayDate->set(new \DateTime("02-01-2021"));

        $model = new FollowingPayDate();
        $model->setNextPayDate($nextPayDate);
        $model->set(new \DateTime("23-01-2021"));
    }

}