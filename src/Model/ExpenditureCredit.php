<?php

namespace Application\Model;

/**
 * @class Application\Model\ExpenditureCredit
 */
class ExpenditureCredit {

    /** @var float $expenditure_credit */
    protected float $expenditure_credit;

    /**
     * Getter
     * @return float
     */
    public function get(): float
    {
        return $this->expenditure_credit;
    }

    /**
     * Setter
     * @param float $expenditure_credit
     */
    public function set(float $expenditure_credit): void
    {
        $this->expenditure_credit = $expenditure_credit;
    }
}