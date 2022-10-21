<?php

namespace Application\Model;

/**
 * @class Application\Model\ExpenditureOther
 */
class ExpenditureOther {

    /** @var float $expenditure_other */
    protected float $expenditure_other;

    /**
     * Getter
     * @return float
     */
    public function get(): float
    {
        return $this->expenditure_other;
    }

    /**
     * Setter
     * @param float $expenditure_other
     */
    public function set(float $expenditure_other): void
    {
        // Validate
        $this->validate($expenditure_other);

        $this->expenditure_other = $expenditure_other;
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