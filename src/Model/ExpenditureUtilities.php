<?php

namespace Application\Model;

/**
 * @class Application\Model\ExpenditureUtilities
 */
class ExpenditureUtilities {

    /** @var float $expenditure_utilities */
    protected float $expenditure_utilities;

    /**
     * Getter
     * @return float
     */
    public function get(): float
    {
        return $this->expenditure_utilities;
    }

    /**
     * Setter
     * @param float $expenditure_utilities
     */
    public function set(float $expenditure_utilities): void
    {
        // Validate
        $this->validate($expenditure_utilities);

        $this->expenditure_utilities = $expenditure_utilities;
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