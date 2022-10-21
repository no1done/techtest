<?php

namespace Application\Model;

use Application\Enum\BankName as BankNameEnum;

/**
 * @class Application\Model\BankName
 */
class BankName {

    /** @var BankNameEnum bank_name */
    protected BankNameEnum $bank_name;

    /**
     * Getter
     * @return string
     */
    public function get(): string
    {
        return $this->bank_name->name;
    }

    /**
     * Setter
     * @param BankNameEnum $bank_name
     */
    public function set(BankNameEnum $bank_name): void
    {
        $this->bank_name = $bank_name;
    }
}