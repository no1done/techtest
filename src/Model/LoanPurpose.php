<?php

namespace Application\Model;

use Application\Enum\LoanPurpose as LoanPurposeEnum;

/**
 * @class Application\Model\LoanPurpose
 */
class LoanPurpose {

    /** @var LoanPurposeEnum $loan_purpose */
    protected LoanPurposeEnum $loan_purpose;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->loan_purpose->name;
    }

    /**
     * Setter
     * @param LoanPurposeEnum $loan_purpose
     */
    public function set(LoanPurposeEnum $loan_purpose): void
    {
        $this->loan_purpose = $loan_purpose;
    }
}