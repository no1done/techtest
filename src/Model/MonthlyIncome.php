<?php

namespace Application\Model;

/**
 * @class Application\Model\MonthlyIncome
 */
class MonthlyIncome extends Validator {

    /** @var float $monthly_income */
    protected float $monthly_income;

    /** @var string $label */
    protected string $label = "Monthly Income";

    /**
     * Getter
     * @return float
     */
    public function get(): float
    {
        return $this->monthly_income;
    }

    /**
     * Setter
     * @param float $monthly_income
     */
    public function set(float $monthly_income): void
    {
        $this->validate($monthly_income);
        $this->monthly_income = $monthly_income;
    }

    /**
     * Validator
     * @param float $val
     */
    protected function validate(float $val): void
    {
        $this->isGreaterThan($val, 0);
    }
}