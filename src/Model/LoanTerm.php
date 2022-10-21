<?php

namespace Application\Model;

/**
 * @class Application\Model\LoanTerm
 */
class LoanTerm extends Validator {

    /** @var int $loan_term */
    protected int $loan_term;

    /** @var string $label */
    protected string $label = "Loan Term";

    /**
     * Getter
     * @return int
     */
    public function get(): int
    {
        return $this->loan_term;
    }

    /**
     * Setter
     * @param int $loan_term
     */
    public function set(int $loan_term): void
    {
        $this->validate($loan_term);
        $this->loan_term = $loan_term;
    }

    /**
     * Validator
     * @param int $val
     */
    protected function validate(int $val): void
    {
        $this->isWholeNumber($val);
        $this->isGreaterThan($val,0);
    }
}