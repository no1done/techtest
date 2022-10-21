<?php

namespace Application\Model;

/**
 * @class Application\Model\LoanAmount
 */
class LoanAmount extends Validator {

    /** float loan_amount */
    protected float $loan_amount;

    /** @var string $label */
    protected string $label = "Loan Amount";

    /**
     * Getter
     * @return float
     */
    public function get(): float
    {
        return $this->loan_amount;
    }

    /**
     * Setter
     * @param float $loan_amount
     */
    public function set(float $loan_amount): void
    {
        // Validate
        $this->validate($loan_amount);

        $this->loan_amount = $loan_amount;
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