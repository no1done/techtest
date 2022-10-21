<?php

namespace Application\Model;

/**
 * @class Application\Model\BankAccountNumber
 */
class BankAccountNumber extends Validator {

    /** @var string $bank_account_number */
    protected string $bank_account_number;

    /** @var string $label */
    protected string $label = "Bank Account Number";

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->bank_account_number;
    }

    /**
     * Setter
     * @param string $bank_account_number
     */
    public function set(string $bank_account_number): void
    {
        // Validate
        $this->validate($bank_account_number);

        $this->bank_account_number = $bank_account_number;
    }

    /**
     * Validator
     * @param string $val
     */
    protected function validate(string $val): void
    {
        $this->isStrLen($val, 8);
        $this->isNumeric($val);
    }
}