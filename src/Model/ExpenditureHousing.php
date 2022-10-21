<?php

namespace Application\Model;

/**
 * @class Application\Model\ExpenditureHousing
 */
class ExpenditureHousing {

    /** @var float $expenditure_housing */
    protected float $expenditure_housing;

    /**
     * Getter
     * @return float
     */
    public function get(): float
    {
        return $this->expenditure_housing;
    }

    /**
     * Setter
     * @param float $expenditure_housing
     */
    public function set(float $expenditure_housing): void
    {
        // Validate
        $this->validate($expenditure_housing);

        $this->expenditure_housing = $expenditure_housing;
    }

    /**
     * Validator
     * @param float $val
     */
    protected function validate(float $val): void
    {
        // Do validation - throw exception if invalid
    }
}