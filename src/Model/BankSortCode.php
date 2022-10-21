<?php

namespace Application\Model;

/**
 * @class Application\Model\BankSortCode
 */
class BankSortCode extends Validator {

    /** @var string $bank_sort_code */
    protected string $bank_sort_code;

    /** @var string $label */
    protected string $label = "Bank Sort Code";

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->bank_sort_code;
    }

    /**
     * Setter
     * @param string $bank_sort_code
     */
    public function set(string $bank_sort_code): void
    {
        // Validate
        $this->validate($bank_sort_code);

        $this->bank_sort_code = $bank_sort_code;
    }

    /**
     * Validator
     * @param string $val
     */
    protected function validate(string $val): void
    {
        $this->isValidBankingSortCode($val);
    }
}